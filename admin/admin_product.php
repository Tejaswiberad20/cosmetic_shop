
<?php
// Include the database connection file


include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM product ORDER BY id DESC";
 $query= $con->query($sql)
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
  <link rel="stylesheet" href="./css/style.css">

<style>
.nav-link{
    margin-left: 50px;
}
.flex{
  display:flex;
}
.opretion{
    display: block;
    padding:5px 10px;
    background-color: #fff;
    height: 80px;
    width: 200px;
    margin:20px;
    border-radius:5px;
    margin-top:10px;
    border:1px solid  #ff1a75;
    box-shadow:0 0 10px 0px  #ff1a75;
}
.opretion:hover{
    box-shadow:0 0 20px 0px  #ff1a75;
    border:none;


}
.img{
    display: block;
  margin: 0px auto;
    height: 50px;
}
.h2{
    text-align:center;
    font-size:20px;
    text-decoration:none;
}
.btn{
  margin:5px;
  margin-top:20px;
  box-shadow:0 0 5px 0px #ff1a75; 
  padding:10px 20px;
  display: inline;
  border-radius:10px;
  text-align:center;
  background-color:#ff3385;
  color:#fff;
}
.btn2{
  margin:5px;
  padding:10px 20px;
  display: inline;
  border-radius:10px;
  text-align:center;
  background-color:#000;
  color:#fff;
}
.link{
  text-decoration:none;
}
.table{}
 

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
  <div class="flex">
    <div class="opretion s1">
        <img src="./img/add-product.png"class="img">
        <a href="addproduct.php"class="h2"><p class="h2">Add Product</p></a>
</div>
</div>
<table class="table">
		<tr>
	<td><strong>Sr. No.</strong></td>
  <td><strong>Image</strong></td>

			<td><strong>Product name</strong></td>
      <td><strong>Discription</strong></td>

			<td><strong>Price</strong></td>
			<td><strong>Category</strong></td>
      <td><strong>Update</strong></td>

			<td><strong>Delete</strong></td>
		</tr>
    <tr>
    <?php

$query="SELECT * FROM `product` ORDER BY id DESC ";
$query_run=mysqli_query($con,$query);
$i=0;
while($row=mysqli_fetch_array($query_run)){
  ?>
  <tr>
 
 <?php echo" <td >".++$i."</td>";?>


     <td><?php echo '<img src="images/'.($row['productimg']).' " 
      style="width:100px; height:100px;">'; ?></td>
        

     <td> <?php echo $row['productname'];  ?></td>
     <td> <?php echo $row['productdesc'];  ?></td>
     <td> <?php echo $row['price'];  ?></td>
     <td> <?php echo $row['productcategory'];  ?></td>
     <?php
      
      echo "<td><a href=\"updateproduct.php?id=$row[id]\" class=link><p class=btn>Edit</p></a></td>";

      echo "<td ><a href=\"deleteproduct.php?id=$row[id]\" onClick=\"return confirm('Are you sure ,you want to delete?')\"class=link><p class=btn2>Delete</p></a></td>";
        
        echo "</tr>";	


?>
		
  

  <?php
}?>

    </tr>
</table>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
  <script src="./js/index.js"></script>
</body>

</html>