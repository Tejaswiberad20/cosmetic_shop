
<?php
include("dbcon.php");

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM register  ORDER BY id DESC";
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
  box-shadow:0 0 5px 0px #ff1a75; 
  padding:5px 10px;
  border-radius:10px;
  text-align:center;
  background-color:#ff3385;
  color:#fff;
}
.btn2{
  background-color:#000;
  box-shadow:0 0 5px 0px #000; 


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
        <img src="./img/add-user.png"class="img">
        <a href="adduser.php"class="h2"><p class="h2">Add User</p></a>
</div>
</div>
<table class="table">
		<tr>
	<td><strong>Sr. No.</strong></td>
			<td><strong>UserName</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Password</strong></td>
			<td><strong>Mobile No</strong></td>
			<td><strong>Address</strong></td>
			<td><strong>Pincode</strong></td>
      <td><strong>opretion</strong></td>

		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		$i=0;
		while ($res = $query->fetch_assoc()) {
			echo "<tr>";
      echo" <td >".++$i."</td>";
      echo "<td>".$res['username']."</td>";
          echo "<td>".$res['email']."</td>";
          echo "<td>".$res['password']."</td>";
          echo "<td>".$res['mobno']."</td>";
          echo "<td>".$res['address']."</td>";
          echo "<td>".$res['pincode']."</td>";

			echo "<td><a href=\"updateuser.php?id=$res[id]\"class=btn>Edit</a>  
			<a href=\"deleteuser.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"class=  btn btn2>Delete</a></td>";
		}
		?>
	</table>
</table>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
  <script src="./js/index.js"></script>
</body>

</html>