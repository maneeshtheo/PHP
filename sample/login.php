<?php

$con=mysqli_connect("localhost","root","123")or die("couldnt connect");
mysqli_select_db($con,"login");
$myusername = mysqli_real_escape_string($con,$_POST['name']);
$mypassword = mysqli_real_escape_string($con,$_POST['password']);
if($myusername==null || $mypassword==null)
{
   header( "location: signuperror.html");
}
else{
$sql = "SELECT name FROM details WHERE name = '$myusername' and pass = '$mypassword'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count == 1) {
   //session_register("myusername");
   $_SESSION['login_staff'] = $myusername;

   header("location: welcome.html");
}else 
{
   header( "location: error.html");
}
}
?>
