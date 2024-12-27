<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CosmeticProduct</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="./user/css/index.css">
  <link rel="stylesheet" href="./user/css/style.css">

</head>

<body>
  <div class="background fs-4 shadow">
    <nav class="navbar navbar-expand-lg nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./user/imges/logo.avif" class="logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link disabled nav-content" aria-current="page" href="../index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./user/pages/login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./user/pages/signup.php">Sign up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./user/pages/about.php">About us</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="./user/pages/contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./user/pages/feedback.php">FeedBack</a>
            </li>
          </ul>
          <div class="btn-group dropstart bg-light">
            <img src="./user/imges/add-to-cart.png" class="img" id="imgdark" onclick="darkMmode()">
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div class="background-head">
    <h1 class="head"> CLICK AND
      CONQUER!</h1>
    <p class="text">Lipstick is really magical. It holds more than a waxy bit of color - it holds the promise of a
      brilliant smile, a brilliant day, both literally and figuratively.</p>
      <a href="./pages/face.php"><button type="button" class="head-btn">Shop Now</button></a>
      </div>
  <h1 class="head1 h">Best sellers.. </h1>
  <div class="product">
    <div class="row row-cols-1 row-cols-md-4 g-4 mx-4  ">
      <div class="col my-3 ">
        <div class="card pro-content">
          <img src="./user/imges/lakme.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="h2">NailPaint Remover</h2>
            <img src="./user/imges/like.png" class="like-img" id="s1" onclick="like()">
          </div>

        </div>
      </div>
      <div class="col my-3 ">
        <div class="card  pro-content">
          <img src="./user/imges/Nail_Paint.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="h2">Nail Paint</h2>
            <img src="./user/imges/like.png" class="like-img" id="s1" onclick="like()">

          </div>
        </div>
      </div>

      <div class="col my-3">
        <div class="card pro-content">
          <img src="./user/imges/mask.webp" class="card-img-top" alt="...">
          <div class="card-body">

            <h2 class="h2">Sheet Masks</h2>
            <img src="./user/imges/like.png" class="like-img" id="s1" onclick="like()">

          </div>
        </div>
      </div>
      <div class="col my-3">
        <div class="card  pro-content">
          <img src="./user/imges/eyeliner.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="h2">Eyeliner</h2>
            <img src="./user/imges/like.png" class="like-img" id="s1" onclick="like()">
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <h1 class="cate-head">Shop By Category</h1>
  <div class="Category-card">
    <div class="catimg">
      <a href="./user/pages/face.php"><img src="./user/imges/face0.jpg" class="Category-img"></a>
      <h3 class="Category">Face</h3>
    </div>

    <div class="catimg">
    <a href="./user/pages/lip.php"> <img src="./user/imges/lips.jpg" class="Category-img"></a>
      <h3 class="Category">Lips</h3>
    </div>
    <div class="catimg">
    <a href="./user/pages/eye.php"><img src="./user/imges/eye0.jpg" class="Category-img"></a>
      <h3 class="Category">Eye</h3>
    </div>
    <div class="catimg">
    <a href="./user/pages/nails.php"><img src="./user/imges/nail0.webp" class="Category-img"></a>
      <h3 class="Category">Nails</h3>
    </div>

  </div>











  <footer class="footer">
        <div class="footer-body">
            <div class="footer-container">
                <div class="footer-container2">
                    <div style="display:flex">
                        <img src="./user/icon/location.png" style="width: 35px; height: auto;">
                        <h3 class="footer-head h4 " style="color:#ff1a75;"> Address</h3>
                    </div><br />
                    <p class="h5 footer-contact">
                        Newu Cosmetic ,Ahmednagar City</p>
                    <p class="h5 footer-contact ">Ahmednagar , Maharashtra 414006</p>
                    <p class="h5 footer-contact ">India</p>
                    <div style="display:flex;">
                        <img src="./user/icon/telephone.png" style="width: 25px; height: 25px; margin-top:5px">
                        <h3 class="footer-head h4" style="color:#ff1a75;"> More Enquiry</h3>
                    </div>
                    <a href="tel:9970059488" class="h5 footer-contact-us ">Phone: 0124 462 8747</a><br />

                    <div style="display:flex; margin-top:6px">
                        <img src="./user/icon/send.png" style="width: 25px; height: 25px;">
                        <h3 class="footer-head h4 " style="color:#ff1a75;"> Send Mail</h3>
                    </div>
                    <a href="mail to:tejaswiberad2004@gmail.com" class="h5 footer-contact-us ">Email:
                        newu@gmail.com</a>
                </div>

                <div>
                    <h3 class="footer-head h4 " style="color:#ff1a75;">Quick Links</h3>
                    <div style="display: block; align-items: center;">
                        <div><a href="./user/icon/pages/about.php" class="h5 footer-quick-links ">About Us</a></div>
                        <div><a href="./user/icon/pages/login.php" class="h5 footer-quick-links ">Login</a></div>
                        <div><a href="./user/icon/pages/contact.php" class="h5 footer-quick-links">Contact</a></div>
                        <div><a href="./user/icon/pages/signup.php" class="h5 footer-quick-links ">Signup</a></div>
                    </div>
                </div>



                <div>
                    <h3 class="footer-head h4 " style="color:#ff1a75;">Follow Us</h3>
                    <div style="display: flex; flex-direction: column;">
                        <div class="footer-icon-container"><a href="#"
                                style="text-decoration: none; color: rgb(125, 124, 124);"><img
                                    src="./user/icon/facebook.png" alt="Facebook" class="h5 footer-icon ">Facebook</a></div>
                        <div class="footer-icon-container"><a href="#"
                                style="text-decoration: none; color: rgb(125, 124, 124);"><img src="./user/icon/twitter.png"
                                    alt="Twitter" class="h5 footer-icon ">Twitter</a></div>
                        <div class="footer-icon-container"><a href="#"
                                style="text-decoration: none; color: rgb(125, 124, 124);"><img
                                    src="./user/icon/instagram.png" alt="Instagram" class="h5 footer-icon">Instagram</a>
                        </div>
                    </div>
                    <br />
                    <div>
                        <h3 class="footer-head h4 " style="color:#ff1a75;">Payment Partner</h3>
                        <div style="display: flex; justify-content: space-between;">
                            <div class="footer-icon-container"><img src="./user/icon/visa.png" class="footer-icon"></div>
                            <div class="footer-icon-container"><img src="./user/icon/stripe.png" class="footer-icon"></div>
                            <div class="footer-icon-container"><img src="./user/icon/paypal.png" class="footer-icon"></div>
                            <div class="footer-icon-container"><img src="./user/icon/skrill.png" class="footer-icon"></div>
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