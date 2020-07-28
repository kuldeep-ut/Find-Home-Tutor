<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Find Your Teacher</title>
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
                <li><a href="how it works.php" > How it works</a></li>
                <li><a href="cont.php"> Contact Us</a></li>
                 <li><a href="Logout.php" style="color:red;"> log me out</a></li>
            </ul>
            </div>
        </div>
    </nav>
    <h1  style="text-align:center;">Hello User</h1>
    <h1  style="text-align:center;">We are happy to help you! </h1>
    <h1  style="text-align:center;">Need a teacher for Home Tution?</h1>
    <h1  style="text-align:center;">Search</h1>
     <form action="results.php" method="POST" style="text-align:center;"><h1 style="text-align:center;margin:0px 0px 10px;">Search here</h1>
           <input type="text" name="City" placeholder="Enter City" style="text-align:center;margin:0px 0px 10px;"><br>
           <input type="text" name="Subject" placeholder="Enter Subject" style="text-align:center; margin:0px 0px 10px;"><br>
           <input type="submit" name="" value="Find" style="text-align:center; background-color:lawngreen; "><br>
          
        </form>
    </header>
</body>
</html>