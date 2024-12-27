<?php
include("dbcon.php");

if (isset($_POST['submit']))
{
    $userid=$_POST['userid'];
    $username =  $_POST['username'];
    $mobno=  $_POST['mobno'];
    $message=  $_POST['message'];


        $sql= "INSERT INTO contact(`username`,`mobno`,`message`) VALUES ('$username', '$mobno','$message')";
            $lastid=$id;
         if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Message send..!!");
                    window.location="contact.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Registration Failed");
            </script>';
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmeticProduct</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../css/contact.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/login.css">

</head>
<body>
    <div class="background fs-4 shadow">
        <nav class="navbar navbar-expand-lg nav">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../imges/logo.avif" class="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link  nav-content" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Sign up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About us</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link disabled " href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="feedback.php">FeedBack
                            </a>
                        </li>
                    </ul>
              <div class="btn-group dropstart bg-light">
                <img src="../imges/add-to-cart.png" class="img" id="imgdark" onclick="darkMmode()">
              </div>
            </div>
          </div>
        </nav>
      </div>
      <h1 class="contact-head">Contact Us</h1>
      <div class="form-body">
        <div class="left-body">
            <h3 class="info-head">Contact Information</h3>
            <form>
                <h1 class="text">Email:</h1>
               <p class="info">newu@gmail.com</p>
                <h1 class="text">Mobile No:</h1>
              <p class="info"> +91 9020823177</p>
                <h1 class="text">Address</h1>
                <p class="info">Ahmednagar</p>
            </form>

        </div>
    <div class="login">
        <div class="right1-body">
            <h3 class="right-head1">Contact Us</h3>

            <form action=""method="POST">
                <p class="text">User Name:</p> 
                <input type="text"class="input"name="username">
                <p class="text">Mobile No:</p> 
                <input type="text"class="input"name="mobno">
                <p class="text">Message</p> 
                <input type="text"class="input"name="message">
                <input type="submit" name="submit"value="Send" class="btn">
            </form>

        </div>
    </div>

    </div>
    <footer class="footer">
        <div class="footer-body">
            <div class="footer-container">
                <div class="footer-container2">
                    <div style="display:flex">
                        <img src="../icon/location.png" style="width: 35px; height: auto;">
                        <h3 class="footer-head h4 " style="color:#ff1a75;"> Address</h3>
                    </div><br />
                    <p class="h5 footer-contact">
                        Newu Cosmetic ,Ahmednagar City</p>
                    <p class="h5 footer-contact ">Ahmednagar , Maharashtra 414006</p>
                    <p class="h5 footer-contact ">India</p>
                    <div style="display:flex;">
                        <img src="../icon/telephone.png" style="width: 25px; height: 25px; margin-top:5px">
                        <h3 class="footer-head h4" style="color:#ff1a75;"> More Enquiry</h3>
                    </div>
                    <a href="tel:9970059488" class="h5 footer-contact-us ">Phone: 0124 462 8747</a><br />

                    <div style="display:flex; margin-top:6px">
                        <img src="../icon/send.png" style="width: 25px; height: 25px;">
                        <h3 class="footer-head h4 " style="color:#ff1a75;"> Send Mail</h3>
                    </div>
                    <a href="mail to:tejaswiberad2004@gmail.com" class="h5 footer-contact-us ">Email:
                        newu@gmail.com</a>
                </div>

                <div>
                    <h3 class="footer-head h4 " style="color:#ff1a75;">Quick Links</h3>
                    <div style="display: block; align-items: center;">
                        <div><a href="about.php" class="h5 footer-quick-links ">About Us</a></div>
                        <div><a href="login.php" class="h5 footer-quick-links ">Login</a></div>
                        <div><a href="contact.php" class="h5 footer-quick-links">Contact</a></div>
                        <div><a href="signup.php" class="h5 footer-quick-links ">Signup</a></div>
                    </div>
                </div>



                <div>
                    <h3 class="footer-head h4 " style="color:#ff1a75;">Follow Us</h3>
                    <div style="display: flex; flex-direction: column;">
                        <div class="footer-icon-container"><a href="#"
                                style="text-decoration: none; color: rgb(125, 124, 124);"><img
                                    src="../icon/facebook.png" alt="Facebook" class="h5 footer-icon ">Facebook</a></div>
                        <div class="footer-icon-container"><a href="#"
                                style="text-decoration: none; color: rgb(125, 124, 124);"><img src="../icon/twitter.png"
                                    alt="Twitter" class="h5 footer-icon ">Twitter</a></div>
                        <div class="footer-icon-container"><a href="#"
                                style="text-decoration: none; color: rgb(125, 124, 124);"><img
                                    src="../icon/instagram.png" alt="Instagram" class="h5 footer-icon">Instagram</a>
                        </div>
                    </div>
                    <br />
                    <div>
                        <h3 class="footer-head h4 " style="color:#ff1a75;">Payment Partner</h3>
                        <div style="display: flex; justify-content: space-between;">
                            <div class="footer-icon-container"><img src="../icon/visa.png" class="footer-icon"></div>
                            <div class="footer-icon-container"><img src="../icon/stripe.png" class="footer-icon"></div>
                            <div class="footer-icon-container"><img src="../icon/paypal.png" class="footer-icon"></div>
                            <div class="footer-icon-container"><img src="../icon/skrill.png" class="footer-icon"></div>
                        </div>
                    </div>
                </div>
            </div>


    </footer>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      </script>
    <script src="./js/index.js"></script>
</body>
</html>