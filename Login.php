<?php
session_start();
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
    <link rel="stylesheet" href="css/Login.css">  
</head>
<body>
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
             <div>
                <div class="form-box">
                  <div><img src="img/avatar.jpg" class="avatar"></div>
                  <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>
                  </div>

                  <form id="login" class="input-group" action="validation.php" method="POST">
                      <input type="text" name="Username" class="input-field" placeholder="Username" required>
                      <input type="password" name="Password" class="input-field" placeholder="Password" required>
                       </br></br>
                      <button type="submit" class="submit-btn">Login</button></br>
                      <div class="incorrectUserPass">
                      <?php
                            if(isset($_SESSION["error"])){
                              $error=$_SESSION["error"];
                              echo "<span>$error</span>";
                            }
                        ?>
                        </div>
                        <br>
                        <a href="forget.php" id="forgetpass">Forget Password</a>
                  </form>

                  <form onsubmit="return validate()" name="reg" id="signup" class="input-group" action="registration.php" method="POST"> 
                    <input id="uname" type="text" name="Username" class="input-field" placeholder="Username" value="" required> 
                    <input type="email" name="Email_Id" class="input-field" placeholder="Email Id" value="" required>
                    <input id="pass" type="password" name="Password" class="input-field" placeholder="Password" value="" required>
                    <input id="mbno" type="number" name="Mobile_No" class="input-field" placeholder="Mobile Number" value="" required>
                    <button type="submit" class="submit-btn" name="reg_user">Sign Up</button>
                  </form>
                </div>
              </div>
            </div>
          </nav>

          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <div class="bannerimg" style="background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(img/image1.jpg)"></div>
              </div>
            </div>
          </div>
    <script>
      var x=document.getElementById("login");
      var y=document.getElementById("signup");
      var z=document.getElementById("btn");

      function signup(){
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left="110px";
      }
      function login(){
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0px";
      }
      function validate(){
        var user=document.reg.Username.value;
        var str=user.slice(0,1);
        var email=document.reg.Email_Id.value;
        var pass=document.reg.Password.value;
        var mno=document.getElementById("mbno").value;
       
       
        if(user.trim()=="" || pass.trim()=="" || email.trim()=="" || mno.trim()=="")
            {
                alert("Please fill the information");
                return false;
            }
            else if(user.slice(0,1)=="_" || user.slice(0,1)=="@" || str.match(/[0-9]/g)!=null)
            {
                alert("Username should not start with _ , @ and number");
                return false;
            }
            else if(pass.trim().length<6)
            {
                alert("Password is too short please check your password");
                return false;
            }
            else if(pass.trim().length<6 || pass.trim().length>12)
            {
                alert("Password must be 6 to 12 characters");
                return false;
            }
            else if(email.indexOf('@')<=0){
                alert("Inalid @ position please check your email");
                return false;
            }
            else if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
                alert("Invalid . position");
                return false;
            }
            else if(isNaN(mno)){
                alert("Enter only numeric value");
                return false;
            }
            else if(mno.length<10 || mno.length>10){
                alert("Mobile Number must be 10 digits");
                return false;
            }
            else if((mno.charAt(0)!=9) && (mno.charAt(0)!=8) && (mno.charAt(0)!=7)){
                alert("Mobile Number must be start with 9, 8, 7");
                return false;
            }
            else
            {
                return true;
            }
        }
    </script>
</body>
</html>
<?php
  unset($_SESSION["error"]);
  ?>