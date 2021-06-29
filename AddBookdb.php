<?php
header('location:AddBook.php');
$Book_Name=$_POST['Book_Name'];
$Author=$_POST['Author'];
$Barcode=$_POST['Barcode'];
$Stock=$_POST['Stock'];
$Select_Type=$_POST['Select_Type'];
$Price=$_POST['Price'];
$Description=$_POST['Description'];

//Database Connection
$conn=new mysqli('localhost','root','','shop_management');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into add_book(Book_Name,Author,Barcode,Stock,Select_Type,Price,Description) 
    values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssisis", $Book_Name, $Author, $Barcode, $Stock, $Select_Type, $Price, $Description);
    $stmt->execute();
    //echo $execval;
    echo "Book Saved Successfully...";
    $stmt->close();
    $conn->close();
}
?>





