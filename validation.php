<?php
session_start();
$con=mysqli_connect('localhost','root','','shop_management');
if($con){
    echo "connetion successful";
}
else{
    echo "no connection";
}
mysqli_select_db($con, 'shop_management');
$Username=$_POST['Username'];
$error="Incorrect Username or Password";
//$Email_Id=$_POST['Email_Id'];
$Password=$_POST['Password'];
//$Mobile_No=$_POST['Mobile_No'];
$q="select * from signup where Username='$Username' && Password='$Password' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['Username']=$Username;
    /*$_SESSION['success'] = "You are now logged in";*/
    header('location:AddBook.php');
}
else{
    header('location:login.php');
    $_SESSION["error"]=$error;
}
?>