<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CosmeticProduct</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
body{
  background:url('./img/background.avif');
  background-repeat:no-repeat;
  background-size:cover;
  font-family: "Bree Serif", serif;
  text-decoration:none;
    font-weight: 400;
    font-style: normal;
}
.navbar{
    background-color: #f15398;
    text-decoration:none;
    position: relative;
    width: 250px;
    border:solid 1px #fff;
    height: 600px;
}
.navlink{
    margin:20px;
    color: #000;
    height: 50px;
    background-color: #fff;
    width: 150px;
    text-decoration:none;
    padding:10px 20px;
    border-radius:5px;
    text-align:center;
    font-size:20px;
    border:1px solid #ff1a75;
}
.navlink:hover{
    height: 50px;
    width: 150px;
    box-shadow:0 0 10px 0px #fff;
    background-color:#fff;
    color:#ff1a75;
    padding:10px 20px;
    border-radius:10px;
}
.head{
    font-family: "Bree Serif", serif;
    font-weight: 400;
    font-style: normal;
    position:absolute;
    top:100px;
    left:300px;
}
.head1{
  position:absolute;
    top:0px;
    left:200px;
    width: 1200px;
    height: 600px
}
.welcome{
  position: relative;
}
.weltext{
  position:absolute;
  top:10px;
  left:20px;
}
.textdeco{
  text-decoration:none;
}
span{
  text-decoration:none;
}
</style>
</head>

<body>
<div class="navbar">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <a href="admin_product.php"class="textdeco"> <li class="navlink">Product</li></a>
       <a href="user.php"class="textdeco"><li class="navlink"><span>User<span></li></a>
       <a href="orderrpt.php"class="textdeco"><li class="navlink">Order</li></a>
       <a href="report.php"class="textdeco"><li class="navlink">Reports</li></a>

    </ul>
  </div>
  <h1 class="head">WelCome...</h1>
  <div class="welcome">

</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
  <script src="./js/index.js"></script>
</body>

</html>