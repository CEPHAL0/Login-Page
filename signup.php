<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $showAlert = false;
    $showError = false;
    include "./partials/_dbconnect.php";
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists = false;
    if (($password == $cpassword) && $exists == false) {
        $sql = "INSERT INTO `newuser` ( `firstname`, `lastname`, `email`, `phonenumber`, `password`) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$password')";
        $result  = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
        } else {
            $showError = "Passwords do not match";
        }
    }
}
?>

<?php
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- <link rel="stylesheet" href="stylesignup.css" /> -->
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

    *:focus {
        outline: none !important
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
        padding: 0px 30px;
    }

    .firstname,
    .lastname {
        display: flex;
        flex-direction: column;
    }

    .firstname {
        margin-right: 15px;
    }

    .email {
        padding: 5px 30px;
        display: flex;
        flex-direction: column;
    }

    .phoneno {
        padding: 5px 30px;
        display: flex;
        flex-direction: column;
    }

    .password {
        padding: 5px 30px;
        display: flex;
        flex-direction: column;
    }

    /* Disabling scroll wheel for numbers */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
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

    input[type=text]:focus {
        border: 2px solid rgb(159, 159, 250);
    }

    input[type=number]:focus {
        border: 2px solid rgb(159, 159, 250);
    }

    .tos {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
    }

    .tos input {
        /* margin: auto; */
        padding: 0px;
        height: 20px;
        display: flex;
        margin-top: 0px !important;
        width: 20px;
        margin-right: 5px;

    }

    .tos label {
        /* margin: auto; */
        padding: 0px !important;
        font-size: small;
    }


    .button {
        display: flex;
        justify-content: center;
        padding: 5px;
        margin-bottom: 9px;
    }

    .button button {
        background-color: rgb(87, 143, 75);
        padding: 10px 20px;
        color: white;
        border-radius: 10px;
        cursor: pointer;
        border: none;
    }

    .alertcontainer {
        padding: 10px 50px;
    }
    </style>
</head>

<body>


    <?php

    if ($showAlert) {
        echo '<div class="alertcontainer"> <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account has been successfully created.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>';
    }
    // if ($showError) {
    else if (!$showAlert) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong>' . $showError . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>';
    }

    ?>

    <section class="container">

        <div class="form-container">
            <div class="description">Join now and access millions of content</div>
            <div class="form">
                <form name="signup" method="POST" action="./signup.php">
                    <div class="username">
                        <div class="firstname">
                            <label for="firstname">First name: </label>
                            <input type="text" placeholder="First Name" name="firstname" maxlength="20" />

                        </div>
                        <div class="lastname">
                            <label for="lastname">Last name: </label>
                            <input type="text" placeholder="Last Name" name="lastname" maxlength="20" />

                        </div>
                    </div>
                    <div class="email">
                        <label for="email">Email: </label>
                        <input type="email" class="varEmail" placeholder="Enter your email" name="email"
                            maxlength="40" />

                    </div>
                    <div class="phoneno">
                        <label for="phoneno">Phone Number: </label>
                        <input type="number" placeholder="Enter your Phone Number" class="noscroll varPhone"
                            minlength="10" maxlength="10" name="phonenumber" />

                    </div>
                    <div class="password">
                        <label for="password">Password: </label>
                        <input type="password" class="varPassword" placeholder="Enter your Password" minlength="8"
                            maxlength="20" name="password" />

                    </div>
                    <div class="password">
                        <label for="password">Password: </label>
                        <input type="password" class="varConfirm" placeholder="Confirm your Password"
                            name="cpassword" />
                    </div>
                    <div class="tos">
                        <input type="checkbox" class="varCheckbox" id="checkbox" />
                        <label for="checkbox">Agree to our <a href="#">Terms and Privacy policy</a></label>
                    </div>
                    <div class="button">
                        <button type="submit">Register</button>
                    </div>
                </form>

            </div>

        </div>

    </section>

    <!-- BOOTSTRAP SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>