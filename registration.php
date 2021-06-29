<?php
header('location:Login.php');
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
$Email_Id=$_POST['Email_Id'];
$Password=$_POST['Password'];
$Mobile_No=$_POST['Mobile_No'];
$q="select * from signup where Username='$Username' && Email_Id='$Email_Id' && Password='$Password' && Mobile_No='$Mobile_No' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
    echo "dupliate data";
}
else{
    $qy="insert into signup(Username,Email_Id,Password,Mobile_No)values('$Username','$Email_Id','$Password','$Mobile_No')";
    mysqli_query($con, $qy);
}
?>