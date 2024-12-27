

<?php
// Include the database connection file


include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM register ORDER BY id DESC limit 1   ";
$query = $con->query($sql);
$resultData = $query->fetch_assoc();

if ($resultData) {
    $username = $resultData['username'];
    $mobno = $resultData['mobno'];
    $address = $resultData['address'];


} else {
    echo "";
    exit;
}?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmeticProduct</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/product_order.css">
    <style>
        .same{
            border:none;
            width: ;
        }
  
        .box{
    display: block;
    margin: 50px auto;
    border: 1px solid #f15398;
    box-shadow:0 0 10px 0px #f15398;

    border-radius:10px;
    height: 620px;
    width: 700px;
}
.Pimg{
    height: 300px;
    border-radius:10px;
    margin:10px;

    width: 300px;
}
.ordetails{
    display:flex;
}
.h1{
    margin-top:10px;
}
.input{
    width: 300px;
}
.form{
    margin-left:20px;
}
.text{
    color:#000;
    font-size:20px;
}
.btn{
    background-color:#f15398;
    margin-top:20px;
    color:#fff;
    border:solid 1px #fff;
    width:150px;
    box-shadow:0 0 5px 1px #f15398;
}
.btn:hover{
    box-shadow:0 0 10px 1px #f15398;
    border:none;
    background-color:#f15398;
    color:#fff;

}
    </style>
</head>

<body>
    <div class="background fs-4 shadow">
        <nav class="navbar navbar-expand-lg nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../imges/logo.avif" alt="Logo" class="logo-img"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link nav-content" aria-current="page" href="../index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link disabled" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="signup.php">Sign up</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="feedback.php">FeedBack</a></li>
                    </ul>
                    <div class="btn-group dropstart bg-light">
                        <img src="../imges/add-to-cart.png" alt="Add to Cart" class="img" id="imgdark" onclick="darkMmode()">
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <?php
    include("dbcon.php");
    $id = $_GET['id'];

    $sql = "SELECT * FROM product WHERE id = $id";
    $query = $con->query($sql);
    $resultData = $query->fetch_assoc();

    if ($resultData) {
        $price = $resultData['price'];
        $productname = $resultData['productname'];
        $productimg = $resultData['productimg'];
        $productdesc = $resultData['productdesc'];
    } else {
        echo "<p>Product not found.</p>";
        exit;
    }
    ?>

    <div class="box">
        <div class="ordetails">
    <img src="../imges/<?php echo $productimg; ?>" alt="<?php echo $productname; ?>" class="Pimg">
    <form action="" method="POST"class="form">
    <h3 class=" h1 text">User Name</h3>
    <input type="text"name="username"value="<?php echo $username; ?>"class="input"> 
    <h3 class=" text">Mobile NO</h3>
    <input type="text"name="mobno"value="<?php echo $mobno; ?>"class="input"> 
    <h3 class=" text">Address</h3>
    <input type="text"name="address"value="<?php echo $address; ?>"class="input"> 
        <h3 class="text">Product Name</h3>
                <input type="text"name="productname"value="<?php echo $productname; ?>"class="input">
                <ul type="circle" class="info">
                    <li><?php echo $productdesc; ?></li>
                </ul>
                <h3 class="text">Price</h3>
                <input type="text"name="price"value="<?php echo $price; ?>"class="input"id="price">
                <h3 class="text">Quantity</h3>
                <input type="number"name="qauntity"class="input"id="quantity"onchange="cal_amount()" >
                <h3 class="text">Total Price</h3>
                <input type="text"name="totprice"class="input"id="totprice" >
                <a href="payment.php"class="link"><input type="submit"name="submit"class="btn"></a></form>

</div>

    </div>
    <script type="text/javascript">
function cal_amount() {
    let quantity = parseInt(document.getElementById("quantity").value);
    let price = parseInt(document.getElementById("price").value);

    if (!isNaN(quantity) && !isNaN(price)) {
        let r = price * quantity;
        document.getElementById("totprice").value = r.toString();
    } else {
        // Handle error if input values are not valid numbers
        document.getElementById("totprice").value = "Invalid input";
    }
}
</script>





    <footer class="footer">
        <div class="footer-body">
            <div class="footer-container">
                <div class="footer-container2">
                    <div style="display:flex">
                        <img src="../icon/location.png" alt="Location" style="width: 35px; height: auto;">
                        <h3 class="footer-head h4" style="color:#ff1a75;">Address</h3>
                    </div><br />
                    <p class="h5 footer-contact">Newu Cosmetic, Ahmednagar City</p>
                    <p class="h5 footer-contact">Ahmednagar, Maharashtra 414006</p>
                    <p class="h5 footer-contact">India</p>
                    <div style="display:flex;">
                        <img src="../icon/telephone.png" alt="Phone" style="width: 25px; height: 25px; margin-top:5px">
                        <h3 class="footer-head h4" style="color:#ff1a75;">More Enquiry</h3>
                    </div>
                    <a href="tel:9970059488" class="h5 footer-contact-us">Phone: 0124 462 8747</a><br />

                    <div style="display:flex; margin-top:6px">
                        <img src="../icon/send.png" alt="Email" style="width: 25px; height: 25px;">
                        <h3 class="footer-head h4" style="color:#ff1a75;">Send Mail</h3>
                    </div>
                    <a href="mailto:tejaswiberad2004@gmail.com" class="h5 footer-contact-us">Email: newu@gmail.com</a>
                </div>

                <div>
                    <h3 class="footer-head h4" style="color:#ff1a75;">Quick Links</h3>
                    <div style="display: block; align-items: center;">
                        <div><a href="about.php" class="h5 footer-quick-links">About Us</a></div>
                        <div><a href="login.php" class="h5 footer-quick-links">Login</a></div>
                        <div><a href="contact.php" class="h5 footer-quick-links">Contact</a></div>
                        <div><a href="signup.php" class="h5 footer-quick-links">Signup</a></div>
                    </div>
                </div>

                <div>
                    <h3 class="footer-head h4" style="color:#ff1a75;">Follow Us</h3>
                    <div style="display: flex; flex-direction: column;">
                        <div class="footer-icon-container"><a href="#" style="text-decoration: none; color: rgb(125, 124, 124);"><img src="../icon/facebook.png" alt="Facebook" class="h5 footer-icon">Facebook</a></div>
                        <div class="footer-icon-container"><a href="#" style="text-decoration: none; color: rgb(125, 124, 124);"><img src="../icon/twitter.png" alt="Twitter" class="h5 footer-icon">Twitter</a></div>
                        <div class="footer-icon-container"><a href="#" style="text-decoration: none; color: rgb(125, 124, 124);"><img src="../icon/instagram.png" alt="Instagram" class="h5 footer-icon">Instagram</a></div>
                    </div>
                    <br />
                    <div>
                        <h3 class="footer-head h4" style="color:#ff1a75;">Payment Partner</h3>
                        <div style="display: flex; justify-content: space-between;">
                            <div class="footer-icon-container"><img src="../icon/visa.png" class="footer-icon" alt="Visa"></div>
                            <div class="footer-icon-container"><img src="../icon/stripe.png" class="footer-icon" alt="Stripe"></div>
                            <div class="footer-icon-container"><img src="../icon/paypal.png" class="footer-icon" alt="PayPal"></div>
                            <div class="footer-icon-container"><img src="../icon/skrill.png" class="footer-icon" alt="Skrill"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</html>
<?php
include("dbcon.php");

if (isset($_POST['submit']))
{
    $id=$_POST['id'];
    $username=$_POST["username"];
    $mobno=$_POST["mobno"];
    $address=$_POST["address"];
    $productname=$_POST["productname"];
    $totprice=$_POST["totprice"];
       $qauntity=$_POST["qauntity"];
       $price=$_POST["price"];

       







      $sql = "INSERT INTO productorder(`username`,`mobno`,`address`,`productname`, `totprice`,`qauntity`,`price`) VALUES ('$username','$mobno','$address','$productname', '$totprice','$qauntity','$price')";

      if($con->query($sql))

        {
            echo    '<script type="text/javascript">
                    alert ("Order Successful !!");
                    window.location="payment.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Registration Failed");
            </script>';
        }
}

