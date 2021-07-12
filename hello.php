<?php
 include ('connection.php');
//if(isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["msg"])){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
       $name=$_POST["name"];
       $password=$_POST["password"];
       $email=$_POST["email"];
       $phone=$_POST["phone"];
       //$msg=$_POST["msg"];
       $qry1="INSERT INTO projdataa(`name`, `password`, `email`, `phone`) VALUES ('$name','$password','$email','$phone')";
       $res1=mysqli_query($conn,$qry1);
    }
    // else{
       
    //     echo "failed";
    // }
    mysqli_close($conn);
?>
<html>
<head>
	<!-- <meta charset="utf-8"> -->
	<title>login</title><br>
  <link rel="stylesheet" href="style.css">
</head>
<body>
     <form id="one" method="POST" action="">
         <div style = "border : 5px solid; border-radius: 30px; width : 60%; height : 60%; margin-left : 330px;">
    <center> <label style="color : red; font-size : 32px; text-decoration : underline;"><b>Registration form</b></label><br><br>
     <p><b>Username:</b> &ensp;<input type="text"  id="userid" name="name" required></p><br>
     <p><b>password:</b> &ensp;<input type="password" id="pass" name="password" required></p><br>
     <p><b>Email id:</b> &ensp;<input type="email"  id="mailid" name="email"></p><br>
     <p><b>phone no:</b> &ensp;<input type="tel" id="phone" name="phone" pattern="[0-9]{10}"  required><br><br><br>
     <input style = "background-color: cyan; border : 1px solid #000; border-radius : 30px;" type="submit" value="Submit" id="submit"/></center>
    </form>
</body>
</html>