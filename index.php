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
                <a class="navbar-brand" href="#">Book Shop</a>
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
            </div>
          </nav>

          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <div class="banner" style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(img/image1.jpg)"></div>
                <div class="carousel-caption">
                    <h2 class="animate__animated animate__bounceInRight animate__delay-1s">Books are a uniquely <span>Portable magic</span></h2>
                    <h3 class="animate__animated animate__bounceInLeft animate__delay-2s">A book is a dream you hold in your hand</h3>
                    <p class="animate__animated animate__bounceInRight animate__delay-3s"><a href="book.php"><b>Book Details</b></a></p>
                </div>
              </div>
              <div class="item">
                <div class="banner" style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(img/image2.jpg)"></div>
                <div class="carousel-caption">
                    <h2 class="animate__animated animate__backInRight animate__delay-1s">I read for <span>Pleasure</span></h2>
                    <h3 class="animate__animated animate__zoomInUp animate__delay-2s">And that is the Moment I Learn Mostss</h3>
                    <p class="animate__animated animate__backInRight animate__delay-3s"><a href="book.php"><b>Book Details</b></a></p>
                </div>
              </div>
              <div class="item">
                <div class="banner" style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(img/image3.jpg)"></div>
                <div class="carousel-caption">
                    <h2 class="animate__animated animate__lightSpeedInRight animate__delay-1s">Books are <span>Mirrors</span></h2>
                    <h3 class="animate__animated animate__lightSpeedInLeft animate__delay-2s">You only see in them what you already have inside you</h3>
                    <p class="animate__animated animate__lightSpeedInRight animate__delay-3s"><a href="book.php"><b>Book Details</b></a></p>
                </div>
              </div>
              <div class="item">
                <div class="banner" style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(img/image5.jpg)"></div>
                <div class="carousel-caption">
                    <h2 class="animate__animated animate__zoomIn animate__delay-1s">Reading Books are <span>Perfect Entertainment</span></h2>
                    <h3 class="animate__animated animate__zoomInRight animate__delay-2s">no commercials, no batteries, hour of enjoyment</h3>
                    <p class="animate__animated animate__zoomInLeft animate__delay-3s"><a href="book.php"><b>Book Details</b></a></p>
                </div>
              </div>
            </div>
          
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </header>
</body>
</html>
