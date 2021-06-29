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
    <link rel="stylesheet" href="css/AboutUs.css">
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
                    <li><a href="AboutUs.php" target="_self"><b>About Us</b></a></li>
                    <li><a href="Login.php" target="_self"><b>Login</b></a></li>
                    <li><a href="ContactUs.php" target="_self"><b>Contact Us</b></a></li>
                </ul>
              </div>

                <div id="aboutus">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-7">
                        <div class="animate__animated animate__backInLeft animate__delay-0s">
                          <h2 class="head">About Us</h2>
                          <p class="para">
                          Built up in ......... book shop name is .......... This place has all the features of a 
                          perfect book shop. The ....... shp features a broad yet taken into consideration range of 
                          modern fiction as well as non fiction books along with text, book, newspaper, dictionary, novel, auto
                          biography, general knowledge etc. This shop management system is web based application for product 
                          purchasing and sale. In this book shop monthly revenue, return profit, sale, purchase revenue, return
                          profit, sale, purchase and sale quantity calculated.
                          </p>
                        </div>
                      </div>
                        <div class="col-sm-5"> 
                          <div class="img-wrap">
                            <img src="img/about.jpg" class="animate__animated animate__backInRight animate__delay-0s">
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
          </nav>

          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <div class="banner" style="background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.8)), url(img/image.jpg)"></div>
              </div>
            </div>
          </div>
    </header>
</body>
</html>
