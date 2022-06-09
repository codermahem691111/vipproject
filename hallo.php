<?php
$con = mysqli_connect("localhost","root","","hallovip");

if(isset($_POST['submit'])){
 $name=$_POST['mail'];
 $pass =md5($_POST['password']);
}
$insert=" INSERT INTO `signup`(`mail`, `password`) VALUES ('$name','$pass')";
$run_insert = mysqli_query($con,$insert);
if($run_insert){
  echo"<script>alert('Success')</script>;";
  header('location:index.html');
}else{
  echo"<script>alert('You are fail')</script>;";
}
?>
