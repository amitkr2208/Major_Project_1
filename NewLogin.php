<?php
include('./databases/config.php');
session_start();
$message = "";

if (isset($_POST["submit"])) {
    // $con = mysqli_connect('127.0.0.1:3306', 'root', '', 'admin') or die('Unable To connect');
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '" . $_POST["password"] . "'");
    $row = mysqli_fetch_array($result);
   
    if (is_array($row)) {
        // $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
        header("Location:index.php"); // Moved this here to redirect after successful login.
    } else {
        $message = "Invalid Username or Password!";
    }
}

?>






<!doctype html>
<html lang="ar" dir="lrt">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

        <link rel = "icon" href = "./Image/cv.png" type = "image/x-icon">


    <title>Login Form</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: skyblue;
        }

        .row {
            background-color: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
        }

        .img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        .btn1 {
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn1:hover {
            background-color: white;
            border: 1px solid;
            color: black;
        }

        .img-fluid {
            height: 100%;
            width: 100%;
            box-sizing: border-box;
            border-radius: 5%;

        }
    </style>
</head>

<body>
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="image/cv_PNG30.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3"><b>Student Login</b></h1>
                    <h4>Sign into your account</h4>
                    <form action="  " method="POST">
                    

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" placeholder="username" name="username" class="form-control my-3 p-4" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="********" name="password" class="form-control my-3 p-4" required>
                            </div>
                        </div>
 

                        <div class="message text-danger"><?php if ($message != "") {
                         echo $message;
                         } ?></div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="submit" name="submit" class="btn btn-warning text-white btn-lg" value="login">
                            </div>
                        </div>
                       

                    </form>

                    <a href="changePassword.php">Forgot Password</a>
                        <p>Don't have an account ? <a href="sign.php">Register here</a></p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>