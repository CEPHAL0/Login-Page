<?php
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = false;
    $showError = false;
    include "./partials/_dbconnect.php";
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "Select * from newuser where email='$email'AND password ='$password'";
    $result  = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("location: welcome.php");
    } else {
        $showError = "Invalid Credentials";
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- <link rel="stylesheet" href="stylelogin.css" /> -->
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: 'Noto Sans',
            sans-serif;
    }

    .container {
        height: 100vh;
        width: 100vw;
        display: flex;
    }

    body {
        background-image: url(./images/istockphoto-1188904994-170667a.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }

    .container {
        background: rgba(0, 0, 0, 0.034);
    }

    .form-container {
        margin: auto;
    }

    /* FORM STYLING */
    .description {
        padding: 40px 30px;
        font-size: 20px;
        color: rgb(25, 47, 54)
    }

    .form-container {
        background-color: rgba(159, 162, 163, 0.295);
        border-radius: 30px;
    }

    .username {
        display: flex;
        flex-direction: column;
        padding: 0px 30px;
    }

    input {
        margin-top: 10px;
        height: 40px;
        border-radius: 15px;
        padding: 20px;
    }

    input {
        border: 2px solid gray;
    }

    input[type=password]:focus {
        border: 2px solid rgb(159, 159, 250);
    }

    input[type=email]:focus {
        border: 2px solid rgb(159, 159, 250);
    }

    *:focus {
        outline: none !important
    }

    .password {
        display: flex;
        flex-direction: column;
        padding: 30px;
    }

    .buttonsubmit {
        display: flex;
        justify-content: center;
        padding: 5px;
        margin-bottom: 9px;
    }

    .buttonsubmit button {
        background-color: rgb(212, 63, 63);
        padding: 10px 20px;
        color: white;
        border-radius: 10px;
        cursor: pointer;
        border: none
    }
    </style>
</head>

<body>
    <?php
    if ($login) {
        echo '<div class="alertcontainer"> <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You are logged in.
        </div>
    </div>';
    } else if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error! </strong>' . $showError . '
        </div>
    </div>';
    }
    ?>
    <section class="container">

        <div class="form-container">
            <div class="description">Login using your email</div>
            <div class="form">
                <form action="./login.php" method="post">
                    <div class=" username">Email: <input type="email" placeholder="Enter email or mobile no."
                            name="email" />
                    </div>
                    <div class="password">Password: <input type="password" placeholder="Enter your Password"
                            name="password" minlength="8" maxlength="20" /></div>
                    <div class="buttonsubmit"><button type="submit">Login</button></div>
                </form>
            </div>
        </div>


    </section>
    <script></script>
</body>

</html>