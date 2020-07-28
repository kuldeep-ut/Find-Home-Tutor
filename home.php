<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.html');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>
<body style="background-color: skyblue;">
    <header class="header">
    <nav class="navbar navbar-style" style="background-color: palegreen;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="home.php"><img src="logo.png" class="logo"> </a>
            </div>
            <div class="collapse navbar-collapse" id="micon">
            <ul class="nav navbar-nav navbar-right  ">
                <li><a href="home.php"> Home</a></li>
                <li><a href="find_teacher.php"  class="active"> Find</a></li>
                <li><a href="how it works.php"> How it work</a></li>
                <li><a href="Logout.php" style="color:red;">  Log me out</a></li>
            </ul>
            </div>
        </div>


    </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>We help Students and Teachers both</h1>
                <p style="font-size: 52px; color:darkorange;">Find Home tutor near by your location</p>
                <p style="font-size: 52px; color:darkorange;">Find Your Teacher</p>
                <a href="find_teacher.php" class="btn btn-first" style="font-size: 30px; color:black; background-color:red;"><u>click here</u></a>
                <p style="font-size: 52px; color:darkorange;">contact us?</p>
                <a href="cont.php" class="btn btn-first" style="font-size: 30px; color:black; background-color:red;"><u>click here to contact</u></a>
            </div>
             <div class="col-sm-6">
                <img src="im.jpg" class="img-responsive">
                 <p style="font-size: 52px; color:darkorange;">Do you want help other student ? Lets find each other by Location</p>
            </div>
        </div>
    </div>
    </header>



</body>
</html>