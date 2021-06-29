<?php
header('location:AddSell.php');
//Database Connection
$conn=new mysqli('localhost','root','','shop_management');
  $Order_Date=$_POST['Order_Date'];
  $Customer_Name=$_POST['Customer_Name'];
  $Ph_Number=$_POST['Ph_Number'];
  $Address=$_POST['Address'];
  $Total_Price=$_POST['Total_Price'];
  $Total_Quantity=$_POST['Total_Quantity'];

$res=mysqli_query($conn,"INSERT into customer values('', '$Order_Date','$Customer_Name','$Ph_Number','$Address','$Total_Price','$Total_Quantity')");
if($res){
  echo "Customer Data saved successfully";
}
else{
  echo "Something went wrong!";
}
               
?>


