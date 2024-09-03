<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-cdNFOBpArh5GZFJSd6Wd8awZi2oOiINnXtBE5XQHyfTJR98tM8pEBo5+5AXt3Oti"
        crossorigin="anonymous">
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
                    <form onsubmit="return validateForm()">
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
        function validateForm() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (email == "" || password == "") {
                alert("Please fill in all fields");
                return false;
            }

            return true;
        }
    </script>
</body>

</html>
