<!doctype html>
<html lang="ar" dir="lrt">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel = "icon" href = "./Image/cv.png" type = "image/x-icon">



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

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body
        {
            background-size:contain; 
            background-repeat: no-repeat;
            background-position: 500px;
            background-color: skyblue;
        }
        .con{
            width: 30vw;
            height: 85vh;
            margin-top: 30px;
            margin-left: 70px;
            border: 0.001px solid gray;
            background-color: white;
            padding: 30px;
            padding-top: 20px;
            border-radius: 5%;
            box-shadow: 0 2px 4px 6px rgb(65, 148, 110);
        }
        .con h1{
            color: rgb(12, 137, 96);
            text-align: center;
        }
        .con p{
            color: rgb(12, 137, 96);
            text-align: center;
            font-size: 17px;
        }
        .con p a{
            text-decoration: none;
            color: blue;
        }
        .con p a:hover{
            color: rgb(12, 137, 96);
        }
       
        .input input{
            width: 300px;
            height: 30px;
            font-size: 17px;
            padding: 5px;
            outline: none;
            border: 1px solid gray;
            background-color: #f8f6f6;
            border-top: none;
            border-right: none;
           
            color: #000000;
            
        }
        span{
             display: block;
             padding-bottom: 5px;
             margin-left: 1px;
        }
        .btn{
            padding: 5px;
            font-size: 17px;
            color:black;
            text-align: center;
            margin-right: 35px;
        }
        .btn button{
            width: 300px;
            height: 30px;
            background-color: black;
            color: #ffffff;
            border: 0.1px solid gray;
        }
        .p{
            margin-left: 40px;
            color: rgb(12, 137, 96);
        }
        .logo{
            margin-left: 110px;
            margin-top: 5px;
            display: flex;
        }
        .logo .fa{
            width: 50px;
            height: 50px;
            color: rgb(56, 56, 206);
            cursor: pointer;
            padding: 5px;
        }
        .logo .fa:hover{
            color: rgb(12, 137, 96);
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
                <form action="register_process.php" method="POST">
                        <div class="con">
                            <h1>Register</h1>
                            <p>Already a member?<a href="NewLogin.php">Log in</a></p>
                            <div class="input">
                                <span>Username</span>
                                <input type="text" name="username" required>
                            </div>
                            <div class="input">
                                <span>Password</span>
                                <input type="password" name="password" required>
                            </div>
                            <div class="input">
                                <span>Confirm Password</span>
                                <input type="password" name="c_password" required>
                            </div>
                            <div class="btn">
                                <button type="submit "name="register">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>