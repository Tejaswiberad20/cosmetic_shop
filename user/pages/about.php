<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmeticProduct</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/about.css">
    <style>
.best-product{
    display: flex;
margin: 5px;
    
 }
  
.best-img{
    height: 300px;
    box-shadow: 0 0 5px 0px #ff1a75;
    border-radius: 5px;
    width: 300px;
     margin: 20px;

  }
  .best-img:hover{
        box-shadow: 0 0 10px 0px  #ff1a75;

  }
  .head1 {
    font-family: "Bree Serif", serif;
    font-weight: 400;
    font-style: normal;
    color: #f15398;
    margin-top: 20px;
    text-align: center;
}

    </style>


</head>

<body>
    <div class="background fs-4 shadow">
        <nav class="navbar navbar-expand-lg nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../imges/logo.avif" class="logo-img">
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
                      
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact</a>
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
    <h1 class="head">
        <p class="head-">About</p>
    </h1>
    <div class="aboutshop">
        <p class="about-text">
            <span class="about-head">
                It’s all in the name - it’s ‘New’ and it’s ‘About U’</span><br>
            NewU is the one stop beauty destination that gives you access to shop a comprehensive range of makeup, skin
            care, hair care, fragrances, personal grooming products from renowned and distinguished brands. We strive to
            make your shopping experience a pleasant one by offering exclusive and exciting deals.
            NewU is operated by H & B Stores Limited which is a 100% subsidiary of Ahmednagar India Ltd. 
        </p>
        <img src="./../imges/about-img.jpg" class="about-img">
    </div>
    <h1 class="head1 h">Our Best Product</h1>
    <div class="best-product">
        <img src="../imges/b1.webp"class="best-img">
        <img src="../imges/b2.webp"class="best-img">
         <img src="../imges/b2.webp"class="best-img">
        <img src="../imges/b3.webp"class="best-img">
    </div>
        <div class="best-product">
        <img src="../imges/b4.webp"class="best-img">
        <img src="../imges/b2.webp"class="best-img">
        <img src="../imges/b5.webp"class="best-img">
        <img src="../imges/b6.webp"class="best-img">
    </div>
    
    <div class="flex">
        <div class="row">
            <div class="col btn-outline-dark mx-5 p-3  rounded  my-4 buot d-flex">
                <img src="../imges/genuines.avif" class="icon mx-4 bg-light">
                <p class="text fs-5 my-4"><span>Genuine Product
                    </span><br> Directly From Brands</p>
            </div>
            <div class=" col btn-outline-dark mx-5 p-3  rounded  my-4 buot d-flex">
                <img src="../imges/shipping.png" class="icon mx-4 bg-light">
                <p class="text fs-5  my-4"><span id="rank">FREE SHIPPING
                    </span><br> ₹499 and Above </p>
            </div>
            <div class=" col btn-outline-dark mx-5 p-3  rounded  my-4 buot d-flex">
                <img src="../imges/safe.png" class="icon mx-4 bg-light">
                <p class="text fs-5  my-4"><span id="rank">SAFE AND SECURE
                    </span><br>Safe Payment</p>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <h1 class="text-center fs-1  fw-bold  text-black my-5 ">User Reviews</h1>


        <div class="row review">
            <div class="col-review">
                <div class="d-flex">
                    <img src="../imges/face.avif" class="icon1">
                    <p class="username">tejaswi berad</p><br>
                    <img src="../imges/rating.png" class="rating-img p-0 m-0 d-block">
                </div>
                <p class="my-3">
                    I thought we got a great price with TravelOnline and on top of that the booking process was so easy.
                </p>
                <b>R.Patil</b>
            </div>
            <div class=" col-review">
                <div class="d-flex">
                    <img src="../imges/face.jpeg" class="icon1">
                    <p class="username">A.Deshmukh</p><br>

                    <img src="../imges/rating.png" class="rating-img  p-0 m-0 d-block">
                </div>
                <p class="my-3">It was very easy to book our holiday. Lisa was helpful when we needed to change some
                    details.</p>
                <b>--A.Deshmukh</b>
            </div>
            <div class="col-review">
                <div class="d-flex">
                    <img src="../imges/lakme.jpg"
                        class="icon1">
                        <p class="username">S.shrma</p><br>

                    <img src="../imges/rating.png" class="rating-img  p-0 m-0 d-block">
                </div>
                <p class="my-3">Nicole provided really good service and her again for future holidays. It was nice
                    person to ask questions to</p>
                <b>--S.shrma</b>

            </div>
        </div>
    </div>

    </div>
    <hr>














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
    <script src="../js/login.js"></script>
</body>

</html>