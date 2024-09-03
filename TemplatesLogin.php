<!doctype html>
<html lang="ar" dir="lrt">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

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
                    <img src="image/photo.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3"><b>Student Login</b></h1>
                    <h4>Sign into your account</h4>
                    <form action="templates.php" onsubmit="return validateForm(event)">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" id="email" placeholder="Email-Address"
                                    class="form-control my-3 p-4">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" id="password" placeholder="********"
                                    class="form-control my-3 p-4">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn btn-warning text-white btn-lg">Login</button>
                                <!-- <button class="btn btn-warning text-white btn-lg"><a class="dropdown-item" href="templates.php">Login</a></button> -->
                                <!-- <a href="templates.php" class="btn btn-warning text-white btn-lg">Login</a> -->
                            </div>
                        </div>
                        <a href="changePassword.php">Forgot Password</a>
                        <p>Don't have an account ? <a href="signup.php">Register here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

    <script>
        function validateForm(event) {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email.trim() === "" || password.trim() === "") {
                alert("Please fill in all fields");
                event.preventDefault(); // Prevent form submission
                return false;
            }

            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address");
                event.preventDefault(); // Prevent form submission
                return false;
            }

            return true;
        }
    </script>
</body>

</html>