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
    <link rel="stylesheet" href="css/forget.css"> 
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
              
              <?php
              include('config.php');
              session_start();
              if(isset($_POST['change']))
              {
                  $name=$_POST['Username'];
                  $email=$_POST['Email_Id'];
                  $pwd=$_POST['password'];
                  $query="select * from signup where Username='$name' AND Email_Id='$email'";
              
                  $result=mysqli_query($conn,$query);
                  $num=mysqli_fetch_array($result);
                  if($num>0)
                  {
                      mysqli_query($conn,"update signup set password='$pwd' where Email_Id='$email' AND Username='$name'");
                      $_SESSION['Email_Id']=$email;
                      header('location:Login.php');
                  }
                  else{
                      echo"<script>alert('something wrong try again');</script>";
                  }
              }
              ?>
              
              <div class="forget_pass">
              <form method="POST" action="">
              
              <b>Username</b>
              <input type="text" name='Username' class="uname pass"><p>
            </br>
              <b>Email</b>
              <input type="email" name='Email_Id' class="email pass"><p>
              </br>
              <b>New Password</b>
              <input type="password" name="password" class="newpass pass"><p>
              </br>
              <input type="submit" name="change" value="Reset" class="reset">
              </form>
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
