<?php
session_start();
if(!isset($_SESSION['Username'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Management</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="animate__animated animate__pulse animate__infinite">
                <a class="navbar-brand" href="#"><u>Book Shop</u></a>
                </div>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="Active"><a href="index.php"><b>Home</b></a></li>
                    <li><a href="AddBook.php"><b>Add Book</b></a></li>
                    <li><a href="sell.php"><b>Add Sell</b></a></li>
                    <li><a href="BookDetails.php"><b>Book Report</b></a></li>
                    <li><a href="SellReport.php"><b>Sell Report</b></a></li>
                    <li><a href="logout.php"><b>Logout</b></a></li>
                </ul>
              </div>
            </div>
          </nav>
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <div class="banner" style="background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(img/image1.jpg)"></div>
              </div>
            </div>
          </div>
    </header>
</body>
</html>
