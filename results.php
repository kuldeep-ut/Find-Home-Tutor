<!DOCTYPE html>
<html>
<head>
    <title>Results</title>
    <style type="text/css">
        table{
            border-collapse: collapse;
            width:100%;
            color:darkorange;
            font-size: 25px;
            text-align: left;
        }
        th{
            background-color: green;
            color:white;

        }
    </style>
</head>
<body style="background-color: skyblue;">
    <table>
       <tr>
           <th>Username</th>
           <th>Email</th>
           <th>Mobile No</th>
           <th>Subject</th>
           <th>City</th>
       </tr>
       <?php
       $host="localhost";
       $dbUsername="root";
       $dbPassword="";
       $dbname="loginsystem";
       $conn=new mysqli($host, $dbUsername, $dbPassword, $dbname);
       $city= $_POST['City'];
       $subject= $_POST['Subject'];
       if(mysqli_connect_error()){
            die("connecton_failed:".$conn->connect_error);
        }
        else{
            $sql="SELECT Username,Email, Mobile, Subject, City from teacher where city='$city' and subject='$subject'";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                echo"<h1>please contact these teachers</h1>";
                while($row=$result->fetch_assoc()){
                    echo "<tr><td>".$row["Username"]."</td><td>".$row["Email"]."</td><td>".$row["Mobile"]."</td><td>".$row["Subject"]."</td><td>".$row["City"]."</td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "<script>alert('No data found')</script>";
                 header('loaction:find_teacher.php');
            }
          }  
        ?>
    </table>
</body>
</html>