<?php

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$con=mysqli_connect("localhost","root","123")or die("couldnt connect");
mysqli_select_db($con,"login");
$sql = "SELECT name FROM details WHERE name = '$name'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count >= 1) {
    header("location: signuperror.php");
}
else{
$query=mysqli_query($con,"insert into details values('$name','$email','$pass')");
header("location: login.html");
}
?>