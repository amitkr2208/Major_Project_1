<?php
session_start();
?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/templates.css">
    <link rel = "icon" href = "./Image/cv.png" type = "image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <title>Templates!</title>

   



</head>
    <body>
        <header style="position: sticky;">
        <?php
            include 'header.php';
        ?>
        </header>


<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-3 g-4 m-5">
    <div class="col">
        <div class="card h-100">      
        <a href="http://localhost/resume/">
            <img src="./Image/1.png" class="card-img-top" alt="Not available" />
        </a>
        </div>
    </div>
    <!--<div class="col">
        <div class="card h-100">      
        <a href="http://localhost/resumemaker-php-master/">
            <img src="./Image/Resume 2.png" class="card-img-top" alt="Not available" />
        </a>
        </div>
    </div>  -->
    <!-- <div class="col">
        <div class="card h-100" style="z-index: -1;">      
        <a href="index.php">
            <img src="./Image/Resume-3.jpg" class="card-img-top" alt="Not available" />
        </a>
        </div>
    </div> --> 

    <div class="col">
        <div class="card h-100"  >      
        <a href="http://localhost/amit_kumar/">
            <img src="./Image/Amit2.png" class="card-img-top" alt="Not available" />
        </a>
        </div>
    </div>
    </div>

</div>







    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script>
        document.getElementById('openPopup').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'block';
        });

        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
        });
    </script>
  </body>
</html>




