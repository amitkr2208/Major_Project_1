<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Change_password.css">
    <link rel = "icon" href = "./Image/cv.png" type = "image/x-icon">

    <script type="text/javascript" src="Js/changePassword.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="mainDiv">
        <div class="cardStyle">

        <h2 class="formTitle">
              Forget Password
            </h2>
        <form action="forget_password.php" method="POST">
            

          <div class="inputDiv">
            <label class="inputLabel" for="password">Username</label>
            <input type="text" id="password" name="username" required>
          </div>

          <div class="inputDiv">
            <label class="inputLabel" for="password">New Password</label>
            <input type="password" id="password" name="password" required>
          </div>

          <div class="inputDiv">
            <label class="inputLabel" for="confirmPassword"00000000000
            >Confirm Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
          </div>
          <div class="buttonWrapper">
            <!-- <a href="Student_Login.php"><button type="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary"></a> -->
            <button type="submit" class="btn btn-warning text-white btn-lg" name="forget">change Password</button>
            <!-- </button> -->
          </div>
            
        </form>
        </div>
      </div>
</body>
</html>
