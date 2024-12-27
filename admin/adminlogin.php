<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmeticProduct</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <style>
        
.text{
    font-size: 20px;
    text-align: start;
}
.input{
    width: 280px;
    height: 35px;
    background-color: #ee96bc;
    border-radius: 5px;
    border:1px solid #2e2d2d;
}
.btn{
    padding: 10px 20px;
    background-color: #f15398;
    border-radius: 10px;
    border:1px solid #e40465;
    box-shadow:0 0 10px 0px #e40465;
    color: #fff;
    width: 100px;
    display: block;
    margin: 10px auto;
}

.login{
    background-color: #fff;
    display:block;
    border-radius: 5px;
    margin: 50px auto;
    width: 350px;
    border:0px solid #e40465;
    box-shadow:0 0  5px 0px  #e40465;
    padding: 10px;
}

.account{
    text-align: center;
    font-size: 20px;
}
.account1{
    text-align: center;
    font-size: 25px;
}
.link{
    text-decoration:none;
}
        </style>


</head>

<body>
    <div class="background fs-4 shadow">
        <nav class="navbar navbar-expand-lg nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="./img/logo (1).avif" class="logo-img">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link disabled" href="about.php">About us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Brands
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Adidas</a></li>
                                <li><a class="dropdown-item" href="#">Reebok</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Metro</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <div class="btn-group dropstart bg-light">
                        <img src="./img/add-to-cart.png" class="img" id="imgdark" onclick="darkMmode()">
                    </div>
                </div>
            </div>
        </nav>
    </div>
   
    <div class="login ">
            <form>
                <p class="text">User Name:</p> 
                <input type="text"class="input">
                <p class="text">Password:</p> 
                <input type="password"class="input">
                <a href="admindashbord.php"class="link"><button type="button" class="btn">Login</button></a>
            </form>

    </div>

    </div>
    <footer class="footer">
        <div class="footer-body">
            <div class="footer-container">
                <div class="footer-container2">
                    <div style="display:flex">
                        <img src="./img/location.png" style="width: 35px; height: auto;">
                        <h3 class="footer-head h4 " style="color:#ff1a75;"> Address</h3>
                    </div><br />
                    <p class="h5 footer-contact">
                        Newu Cosmetic ,Ahmednagar City</p>
                    <p class="h5 footer-contact ">Ahmednagar , Maharashtra 414006</p>
                    <p class="h5 footer-contact ">India</p>
                    <div style="display:flex;">
                        <img src="./img/telephone.png" style="width: 25px; height: 25px; margin-top:5px">
                        <h3 class="footer-head h4" style="color:#ff1a75;"> More Enquiry</h3>
                    </div>
                    <a href="tel:9970059488" class="h5 footer-contact-us ">Phone: 0124 462 8747</a><br />

                    <div style="display:flex; margin-top:6px">
                        <img src="./img/send.png" style="width: 25px; height: 25px;">
                        <h3 class="footer-head h4 " style="color:#ff1a75;"> Send Mail</h3>
                    </div>
                    <a href="mail to:tejaswiberad2004@gmail.com" class="h5 footer-contact-us ">Email:
                        customer.service@choicefootwear .com</a>
                </div>

                <div>
                    <h3 class="footer-head h4 " style="color:#ff1a75;">Quick Links</h3>
                    <div style="display: block; align-items: center;">
                        <div><a href="#" class="h5 footer-quick-links ">About Us</a></div>
                        <div><a href="#" class="h5 footer-quick-links ">Login</a></div>
                        <div><a href="#" class="h5 footer-quick-links">Contact</a></div>
                        <div><a href="#" class="h5 footer-quick-links ">Sigup</a></div>
                    </div>
                </div>



                <div>
                    <h3 class="footer-head h4 " style="color:#ff1a75;">Follow Us</h3>
                    <div style="display: flex; flex-direction: column;">
                        <div class="footer-icon-container"><a href="#"
                                style="text-decoration: none; color: rgb(125, 124, 124);"><img
                                    src="./img/facebook.png" alt="Facebook" class="h5 footer-icon ">Facebook</a></div>
                        <div class="footer-icon-container"><a href="#"
                                style="text-decoration: none; color: rgb(125, 124, 124);"><img src="./img/twitter.png"
                                    alt="Twitter" class="h5 footer-icon ">Twitter</a></div>
                        <div class="footer-icon-container"><a href="#"
                                style="text-decoration: none; color: rgb(125, 124, 124);"><img
                                    src="./img/instagram.png" alt="Instagram" class="h5 footer-icon">Instagram</a>
                        </div>
                    </div>
                    <br />
                    <div>
                        <h3 class="footer-head h4 " style="color:#ff1a75;">Payment Partner</h3>
                        <div style="display: flex; justify-content: space-between;">
                            <div class="footer-icon-container"><img src="./img/visa.png" class="footer-icon"></div>
                            <div class="footer-icon-container"><img src="./img/stripe.png" class="footer-icon"></div>
                            <div class="footer-icon-container"><img src="./img/paypal.png" class="footer-icon"></div>
                            <div class="footer-icon-container"><img src="./img/skrill.png" class="footer-icon"></div>
                        </div>
                    </div>
                </div>
            </div>


    </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    <script src="../js/login.js"></script>
</body>

</html>