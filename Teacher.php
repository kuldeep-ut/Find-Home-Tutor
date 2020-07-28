<?php
   session_start();
   $username= $_POST['Username'];
   $sex=$_POST['Sex'];
   $subject=$_POST['Specialized_Subject'];
   $city= $_POST['City'];
   $password= $_POST['Password'];
   $mobile= $_POST['MobileNo'];
   $email= $_POST['Email'];
   if(!empty($username)||!empty($password)||!empty($email)){
        $host="localhost";
        $dbUsername="root";
        $dbPassword="";
        $dbname="loginsystem";
        $conn=new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
        }
        else{
            $qy="select * from Teacher where Username='$username'";
            $result=mysqli_query($conn, $qy);
            $num=mysqli_num_rows($result);
            $qyemail="select * from Teacher where Email='$email'";
            $result1=mysqli_query($conn, $qyemail);
            $num1=mysqli_num_rows($result1);
            $qy2="select * from Student where Username='$username'";
            $result2=mysqli_query($conn, $qy2);
            $num2=mysqli_num_rows($result2);
            $qyemail2="select * from Student where Email='$email'";
            $result3=mysqli_query($conn, $qyemail2);
            $num3=mysqli_num_rows($result3);
            if($num==1 or $num2==1 ){
                echo "<script>alert('Someone has already Registered with this Username')</script>";
            }
            else if($num1==1 or $num3==1){
               echo "<script>alert('Someone has already Registered with this Email')</script>";
            }
            else{
            $stmt=$conn->prepare("insert into Teacher(username, subject, mobile, password,city, email, sex) values(?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssss",$username, $subject,$mobile, $password,$city,$email,$sex);
            $stmt->execute();
            echo "<script>alert('SUccessfully Registered')</script>";
            }
            //$stmt->close();
           // $conn->close();      
        }
   }
   else{
     echo"All field are required";
     die();
   }
   //session_destroy();
?>