<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.html');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>
<body style="background-color: skyblue;">
    <header class="header">
    <nav class="navbar navbar-style">
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
                <li><a href="find_teacher.php"> Find</a></li>
                <li><a href="how it works.php"  class="active"> How it Work</a></li>
                <li><a href="Logout.php" style="color:red;">  Log me out</a></li>
            </ul>
            </div>
        </div>

    </nav>
        <h1  style="text-align:center;">Contact Us</h1>
        <h1  style="text-align:center;">Write us on our email id</h1>
        <h1  style="text-align:center; color:blue">kuldeepnarayan50@gmail.com</h1>
        <h1  style="text-align:center;">or</h1>
        <h1  style="text-align:center;">Call us on</h1>
        <h1  style="text-align:center; color:green">+918887735158</h1>
    </header>



</body>
</html>