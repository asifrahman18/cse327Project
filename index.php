<?php
session_start();
include('connect.php');

$_SESSION['userID'] = NULL;
$_SESSION['password'] = NULL;
$_SESSION['teacherID'] = NULL;
$_SESSION['teacherpass'] = NULL;
$_SESSION['adminID'] = NULL;
$_SESSION['adminpass'] = NULL;
$_SESSION['tname'] = NULL;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- font awesome cdn -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />

    <!-- custom css file link up -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <title>জীবন যুদ্ধ | Home</title>
</head>

<body>
    <!-- header section code start from here -->
    <header>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="display_pdf.php">জীবন যুদ্ধ</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="registration.php">Sign Up</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="banner-text">
                        <h1>WELCOME</h1>
                        <h1>TO</h1>
                        <h5>জীবন যুদ্ধ</h5>
                    </div>
                    <div class="icon">
                        <!-- <a href=""><i class="fa fa-arrow-down"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header section code end from here -->

    <!--  about me section code start from here -->
    <div class="about-me">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="info">
                        <h2 class="title">ABOUT US</h2>
                        <p class="desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <div class="social-media">
                            <ul>
                                <li>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-btn">
                            <button>Contact Us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  about me section code end from here -->

    <?php

    $sql = "select * FROM student WHERE 1";
        
    $result = mysqli_query($conn , $sql);
    $count = mysqli_num_rows($result);

    $stu = $count;


    $sql2 = "select * FROM teacher WHERE 1";
        
    $result2 = mysqli_query($conn , $sql2);
    $count2 = mysqli_num_rows($result2);

    $teach = $count2;



    $sql3 = "select * FROM course WHERE 1";
        
    $result3 = mysqli_query($conn , $sql3);
    $count3 = mysqli_num_rows($result3);

    $cor = $count3;


?>
    <div class="service-count">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="count-info">
                        <h1 class="counter"><?php echo $stu ?></h1>
                        <div class="line"></div>
                        <p>STUDENT ENROLLED</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="count-info">
                        <h1 class="counter"><?php echo $teach ?></h1>
                        <div class="line"></div>
                        <p>TEACHER ENROLLED</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="count-info">
                        <h1 class="counter"><?php echo $cor ?></h1>
                        <div class="line"></div>
                        <p>COURSES</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="count-info">
                        <h1 class="counter">4</h1>
                        <div class="line"></div>
                        <p>CATEGORIES</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>