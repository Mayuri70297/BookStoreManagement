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
    <link rel="stylesheet" href="css/AddBook1.css">
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
                    <li><a href="AddBook.php"><b>Add Book</b></a></li>
                    <li><a href="BookDetails.php"><b>Book Report</b></a></li>
                    <li><a href="AddSell.php"><b>Add Sell</b></a></li>
                    <li><a href="SellReport.php"><b>Sell Report</b></a></li>
                    <li><a href="logout.php"><b>Logout</b></a></li>
                </ul>
            </div>
            <div class="animate__animated animate__backInDown animate__delay-1s">
                <img src="img/2.png" height="45%" width="45%"> 
            </div>
            <form action="AddBookdb.php" method="POST" class="animate__animated animate__backInUp animate__delay-0s">
                <div class="wrapper">
                    <div class="title">Add Book</div>
                        <div class="form">
                            <div class="inputfield">
                                <label>Book Name</label>
                                    <input type="text" class="input" name="Book_Name">
                            </div>  
                            <div class="inputfield">
                                <label>Author</label>
                                    <input type="text" class="input" name="Author">
                            </div> 
                            <div class="inputfield">
                                <label>Barcode</label>
                                    <input type="text" class="input" name="Barcode">
                            </div>  
                            <div class="inputfield">
                                <label>Stock</label>
                                    <input type="text" class="input" name="Stock">
                            </div>  
                            <div class="inputfield">
                                <label>Select Type</label>
                                <div class="custom_select">
                                    <select name="Select_Type">
                                        <option> Please Select</option>
                                        <option>Education</option>
                                        <option>Fiction</option>
                                        <option>Non-Fiction</option>
                                    </select>
                                </div>
                            </div> 
                            <div class="inputfield">
                                <label>Price Per Item</label>
                                     <input type="text" class="input" name="Price">
                            </div> 
                            <div class="inputfield">
                                <label>Description</label>
                                    <textarea class="textarea" name="Description"></textarea>
                            </div> 
                            <div class="inputfield">
                                <input type="submit" value="Add Book" class="btn">
                            </div>
                        </div>
                    </div>	 
                </div>
            </form>
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


