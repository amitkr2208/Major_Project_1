<?php
session_start();
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel = "icon" href = "./Image/cv.png" type = "image/x-icon">

    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/popup.css">

    <style>
        .popup {
            display: none;
            position: fixed;
            top: 22%;
            right: -8%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            z-index: 9999;
        }

        .close_acc {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .popup-content a {
            display: block;
            margin-bottom: 10px;
            color: #007bff;
            text-decoration: none;
        }
    </style>



</head>
<body>
    <section>
    <header >
        <nav class="navbar navbar-expand-lg navbar-light main-nav" id="navbar">
            <div class="container-fluid">
                <!-- <img src="./Image/n_logo_sistec.png" alt="" width="200" height="80"> -->
                <a class="navbar-brand fs-2 text-white nav_hove" href="index.php">RESUME BUILDER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mx-3" id="navbarSupportedContent" style="font-size: 21px;" >
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                        <li class="nav-item">
                            <a class="nav-link active text-white nav_hover" aria-current="page" href="#">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link active text-white nav_hover" aria-current="page" href="#">Create Resume</a>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link active text-white nav_hover" aria-current="page" href="#">Edit Resume</a>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link active text-white nav_hover" aria-current="page" href="#">About</a>
                        </li> -->

                        <li class="nav-item dropdown" id="templates">
                            <!-- <a class="nav-link dropdown-toggle text-white nav_hover" href="templates.php" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Templates</a>-->

                            <?php
                                    if(isset($_SESSION["username"])) {
                                        ?>
                                              <a class="nav-link dropdown-toggle text-white nav_hover" href="templates.php">Templates</a>
                                        <?php
                                    } else {
                                        echo ' <a class="nav-link dropdown-toggle text-white nav_hover" href="NewLogin.php">Templates</a>';
                                    }
                                ?>    

                           

                            
                        </li>
                        <!-- <li class="nav-item dropdown" id="templates" >
                            <a class="nav-link dropdown-toggle text-white nav_hover" href="Student_Login1.php">Login</a>
                        </li> -->
                        <!-- <span class="btn btn-warning text-white btn-lg"><a class="dropdown-item" href="Student_Login.php">Login2</a></span> -->


                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white nav_hover" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Templates</a>                        
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="http://localhost/resume/">Resume-1</a></li>
                                <li><a class="dropdown-item" href="http://localhost/resumemaker-php-master/">Resume-2</a></li>
                                <li><a class="dropdown-item" href="http://localhost/sharmila_mewada/">Resume-3</a></li>
                                <li><a class="dropdown-item" href="http://localhost/resume/">Resume-4</a></li>
                            </ul>
                        </li> -->

                        <!-- <li class="nav-item bodypopup">
                            <a class="nav-link active text-white nav_hover" aria-current="page">Account Settings</a>
                        </li> -->






                        <button id="openPopup" class="popupbtn mx-2"><i class="bi bi-person-circle"></i></button>

                        <div class="popup popupmsg" id="popup">
                            <span class="close_acc" id="closePopup">&times;</span>
                            <div class="popup-content">
                                <?php
                                    if(isset($_SESSION["username"])) {
                                        ?>
                                        Welcome <?php echo $_SESSION["username"]; ?>.<br/><br/><br/><br/><a href="logout.php" title="Logout">Logout</a>.
                                        <?php
                                    } else {
                                        echo '<a href="NewLogin.php" title="Logout">Login</a>';
                                    }
                                ?>                             
                            </div>
                        </div>

                        <!-- </form> -->
                </div>
            </div>
        </nav>

        <!-- <h1 class="headcenter fs-1">Resume Builder Application System</h1> -->

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Image/vicky.jpeg" class="img-fluid d-block w-100" alt="...">
                </div>
                <!-- <div class="carousel-item">
                    <img src="Image/img2.jpg" class="img-fluid d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="Image/img3.jpg" class="img-fluid d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="Image/img4.jpg" class="img-fluid d-block w-100" alt="...">
                </div> -->
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
            </div>
    </header>
    <div class="container text-center headerset text-black headerset">
        <h2>Welcome To Our Resume Builder</h2>
        <h3>NICE TO MEET YOU</h3>

    </div>
</section>
<section>
    <!-- <footer>
		<p>&copy; 2023 Resume Template. All Rights Reserved.</p>
	</footer> -->
</section>


<!----------------------  FOOTER  ------------------>
<div class="container_2">
    <div class="box_2">
        <div class="icon_2">01</div>
        <div class="content_2">
            <h3>Service Name</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sequi facere dolores, molestiae exercitationem et labore tenetur laboriosam soluta obcaecati. 
            </p>
            <a href="#" class="at"> Read More</a>
           
        </div>
    </div>
<div class="box_2">
    <div class="icon_2">02</div>
    <div class="content_2">
        <h3>Service Name</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sequi facere dolores, molestiae exercitationem et labore tenetur laboriosam soluta obcaecati.  
        </p>
        <a href="#" class="at"> Read More</a>
       
    </div>
</div>
<div class="box_2">
<div class="icon_2">03</div>
<div class="content_2">
    <h3>Service Name</h3>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sequi facere dolores, molestiae exercitationem et labore tenetur laboriosam soluta obcaecati. 
    </p>
    <a href="#" class="at"> Read More</a>
   
  </div>
</div>
</div>



<footer class="footer" style="bottom: auto;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>About Us</h2>
                <p>Our mission is to help you create professional resumes with ease. We strive to provide the best tools and resources for your career success.</p>
            </div>
            <div class="col-md-4">
                <h2>Useful Links</h2>
                <ul>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Follow Us</h2>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>




<!-- 


    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-2">
                    <a href="Index.php"><img src="Image/resume.png"></a>
                    <p>Our purpose is to provide you a better Resume</p>
                </div> 
                <div class="footer-col-3">
                    <h2>Useful Links</h2>
                    <ul>
                        <li>For Logo</li>
                        <li>For Background</li>
                        <li>For Pictures</li>
                    </ul>
                </div>
                < ----------------Social-menu-------- -->
                <!-- <div class="social-menu">
                    <h1>Follow Us</h1>
                    <ul>
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                  </div>
            </div>
            <hr>
        </div>
    </div>  -->
<!----------------------  FOOTER  ------------------>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>




        <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var openPopupButton = document.getElementById('openPopup');
            var closePopupButton = document.getElementById('closePopup');
            var popup = document.getElementById('popup');

            openPopupButton.addEventListener('click', function() {
                popup.style.display = 'block';
            });

            closePopupButton.addEventListener('click', function() {
                popup.style.display = 'none';
            });
        });
    </script> -->


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