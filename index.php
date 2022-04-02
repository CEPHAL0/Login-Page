<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet" />
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
        background: rgba(0, 0, 0, 0.3);
    }

    .form-container {
        margin: auto;
    }

    .buttons {
        display: flex;
        justify-content: center;
    }

    .login {
        padding: 15px 40px;
        border: 2px solid black;
        margin-right: 15px;
        border-radius: 20px;
    }

    .login:hover,
    .signup:hover {
        background-color: none;
        color: white;
        transition: 0.3s ease-in;
        cursor: pointer;
        padding: 15px 50px;
        border: none;
    }

    .login:hover {
        border: 2px solid rgba(58, 58, 59, 0.593);
        background-color: rgba(58, 58, 59, 0.593);
    }

    .signup:hover {
        background-color: transparent;
        color: black;
        border: 2px solid black;
    }

    .signup {
        padding: 15px 40px;
        border-radius: 20px;
        background-color: black;
        color: white;
        border: 2px solid black;
        margin-left: 15px;
    }

    a {
        text-decoration: none;
        color: black;
    }

    .description {
        padding: 30px;
        font-size: x-large;
    }

    .form {
        background-color: white;
        width: 40px;
    }
    </style>
</head>

<body>
    <section class="container">
        <div class="form-container">
            <div class="description">
                Join our community to step into a vast plethora of Tech Geeks
            </div>
            <div class="buttons">
                <a href="./login.php" target="blank">
                    <div class="login">Login</div>
                </a>
                <a href="./signup.php" target="blank">
                    <div class="signup">Signup</div>
                </a>
            </div>
            <div class="form">
                <form action="./action.php"></form>
            </div>
        </div>
    </section>
</body>

</html>