<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.html');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>How it works</title>
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
                <li><a href="how it works.php"  class="active"> How it Work</a></li>
                <li><a href="cont.php"> contact</a></li>
                <li><a href="logout.php" style="color:red;">log me out</a></li>
            </ul>
            </div>
        </div>


    </nav>
    <h1  style="text-align:center; color:green">How it works?</h1>
    <!-- <div class="vl"></div> -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1 style="margin-left:25%;">Student</h1>
                <ul>
                     <li style="font-size: 25px;">Create your account, just we need some basic details.</li>
                     <li style="font-size: 25px;">Go to find section and enter some details of your requirment.</li>
                     <li style="font-size: 25px;">If any teacher is avilable in your city then the contact number and email id of matching teacher will shown to you.</li>
                     <li style="font-size: 25px;">You can contact them and ask there query for example- fees, time etc.</li>
                     <li style="font-size: 25px;">You can review your teacher that what was your experience with him either
                     he was good or not.</li>
                     <li style="font-size: 25px;">Feel free to contact as any time.</li>
                </ul>
            </div>
             <div class="col-sm-6">
                <h1 style="margin-left:25%;">Teacher</h1>
                <ul style="margin-left: 10px;">
                    <li style="font-size: 25px;">Create your account, just we need some basic details like what subject can you teach and your current city like that.</li>
                    <li style="font-size: 25px;">If any student is interested in you he will contact you.</li>
                    <li style="font-size: 25px;">Disscuss the details of fees and other stuff from the student as soon as he contact you.</li>
                    <li style="font-size: 25px;">For any further query please contact us.</li>
                </ul>
            </div>
        </div>
    </div>
    </header>



</body>
</html>