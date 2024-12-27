
<?php
include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM  productorder  ORDER BY id DESC";

 $query= $con->query($sql)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <style>
.head{
  margin-top: 10px;
  text-align: center;
  color: #ff1a75;
}
.btn{
  display: block;
  margin: 10px auto;
  padding: 10px 20px;
  background-color: #ff1a75;
  box-shadow: 0 0 10px 0px burlywood;
  border: none;
  color: #fff;
  border-radius: 10px;
}
.btn:hover{
  display: block;
  margin: 10px auto;
  padding: 10px 20px;
  background-color: #ff1a75;
  box-shadow: 0 0 10px 0px burlywood;
  border: none;
  color: #fff;
  border-radius: 10px;}
  </style>


</head>
<body>
<div class="background fs-4 shadow">
    <nav class="navbar navbar-expand-lg nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./img/logo (1).avif" class="logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link nav-content" aria-current="page" href="admin_product.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user.php">User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="orderrpt.php">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="report.php">Reports</a>
            </li>
          </ul>
          <div class="btn-group dropstart bg-light">
          </div>
        </div>
      </div>
    </nav>
</div>
<body>
<?php
// Include the database connection file


include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM productorder ORDER BY id DESC limit 10    ";
 $query= $con->query($sql)
?>
  <h1 class="head">Order Report</h1>
  <div id="rpt">
  <table width='50%' border=1 class="table">
    <tr bgcolor='#DDDDDD' align="center">
      <td><strong>Sr. No.</strong></td>
      <td><strong>UserName</strong></td>
      <td><strong>Mobile</strong></td>
      <td><strong>Address</strong></td>

      <td><strong>ProductName</strong></td>
      <td><strong>Price</strong></td>
      <td><strong>Quantity</strong></td>

      <td><strong>TotalPrice</strong></td>


      
    </tr>
    <?php
    // Fetch the next row of a result set as an associative array
    $i=0;
    while ($res = $query->fetch_assoc()) {
      echo "<tr align='center'>";
      echo" <td >".++$i."</td>";
      echo "<td>".$res['username']."</td>";
      echo "<td>".$res['mobno']."</td>";
      echo "<td>".$res['address']."</td>";

      echo "<td>".$res['productname']."</td>";
      echo "<td>".$res['price']."</td>";
      echo "<td>".$res['qauntity']."</td>";

      echo "<td>".$res['totprice']."</td>";

      echo "</tr>"; 
    }
    ?>
    
  </table>
</div>
<button type="button" class="btn" onClick="myFunction()">Print Report</button>

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
  <script src="./js/index.js"></script>
</body>

</html>
<script type="text/javascript">
function myFunction() {
    var divToPrint = document.getElementById('rpt');
    var popupWin = window.open('', '_blank');
    popupWin.document.open();
    popupWin.document.write('<html><body onload="window.print()"><center><br><div style="color: #FFFFFF;font-family:Apple Chancery, cursive;text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #FF2D95 0px 0px 20px, #FF2D95 0px 0px 30px, #FF2D95 0px 0px 40px, #FF2D95 0px 0px 50px, #FF2D95 0px 0px 75px;font-style:italic;color: #FFFFFF;"><h1 align="center"><u>Order Report</u></h1></div><h3><u>Order Report</u></h3>' + divToPrint.innerHTML + '</center></body></html>');
    popupWin.document.close();
}
</script>
