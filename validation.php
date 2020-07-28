<?php
   session_start();
   $username= $_POST['Username'];
   $password= $_POST['Password'];
   if(!empty($username)||!empty($password)){
        $host="localhost";
        $dbUsername="root";
        $dbPassword="";
        $dbname="loginsystem";
        $conn=new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
        }
        else{
            $qy="select * from Student where username='$username' and password='$password'";
            $result=mysqli_query($conn, $qy);
            $num=mysqli_num_rows($result);
            $qy1="select * from Teacher where username='$username' and password='$password'";
            $result1=mysqli_query($conn, $qy1);
            $num1=mysqli_num_rows($result1);
            if($num==1 or $num1==1){
                $_SESSION['username']=$username;
                header('location:home.php');
            }
            else{
             header('location:login.html');
            }
            //$stmt->close();
           //$conn->close();      
        }
   }
   else{
     echo"All field are required";
     die();
   }
   //session_destroy();
?>