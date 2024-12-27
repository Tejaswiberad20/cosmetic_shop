<?php
include("dbcon.php");

// Get id from URL parameter and sanitize it
$id = intval($_GET['id']);

// Select data associated with this particular id
$sql = "SELECT * FROM product WHERE id = $id";
$query = $con->query($sql);

// Fetch the next row of a result set as an associative array
$resultData = $query->fetch_assoc();
if (!$resultData) {
    die("Product not found");
}

$productname = $resultData['productname'];
$price = $resultData['price'];
$productimg = $resultData['productimg'];
$qauntity = $resultData['qauntity'];
$productdesc = $resultData['productdesc'];
$productcategory = $resultData['productcategory'];

if (isset($_POST['submit'])) {
    // Escape special characters in a string for use in an SQL statement
    $productname = $con->real_escape_string($_POST['productname']);
    $price = $con->real_escape_string($_POST['price']);
    $productdesc = $con->real_escape_string($_POST['productdesc']);
    $productcategory = $con->real_escape_string($_POST['productcategory']);

    // Handle file upload
    if (isset($_FILES['productimg']) && $_FILES['productimg']['name'] != "") {
        $targetDir = "images/";
        $productimg = basename($_FILES['productimg']['name']);
        $targetFilePath = $targetDir . $productimg;

        // Move uploaded file to target directory
        if (move_uploaded_file($_FILES['productimg']['tmp_name'], $targetFilePath)) {
            // File uploaded successfully
        } else {
            echo '<script>alert("Error uploading image.");</script>';
            $productimg = $resultData['productimg']; // Keep the old image
        }
    } else {
        $productimg = $resultData['productimg']; // Keep the old image if no new file
    }

    // Update query
    $sql = "UPDATE product SET productname = '$productname', price = '$price', productimg = '$productimg', productdesc = '$productdesc', productcategory = '$productcategory' WHERE id = $id";

    if ($con->query($sql)) {
        echo '<script>alert("Product Updated!"); window.location="admin_product.php";</script>';
    } else {
        echo '<script>alert("Record Not Updated"); window.location="updateuser.php?id=' . $id . '";</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body {
            background: url('./img/newbg.jpg');
            background-size: cover;
        }
        .addproduct1 {
            display: block;
            margin: 50px auto;
            height: 500px;
            width: 400px;
            box-shadow: 0 0 5px 0px #ff1a75; 
            padding: 10px 20px;
            border-radius: 10px;
            text-align: center;
            background-color: #ffe6f0;
        }
        .input {
            width: 300px;
        }
        .btn {
            display: block;
            margin: 50px auto;
            box-shadow: 0 0 5px 0px #ff1a75; 
            padding: 10px 20px;
            border-radius: 10px;
            text-align: center;
            background-color: #ff3385;
            color: #fff;
        }
        .text {
            text-align: start;
        }
    </style>
</head>
<body>
    <div class="background fs-4 shadow">
        <nav class="navbar navbar-expand-lg nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="./img/logo (1).avif" class="logo-img"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="admin_product.php">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="user.php">User</a></li>
                        <li class="nav-item"><a class="nav-link" href="orderrpt.php">Order</a></li>
                        <li class="nav-item"><a class="nav-link" href="report.php">Reports</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <h1 style="text-align:center;color:#ff3385;margin-top:20px;">Update Product</h1>
    <form method="POST" enctype="multipart/form-data" class="addproduct1">
        <h2 class="text">Product Name:</h2>
        <input type="text" name="productname" class="input" value="<?php echo htmlspecialchars($productname); ?>">
        <h2 class="text">Price:</h2>
        <input type="text" name="price" class="input" value="<?php echo htmlspecialchars($price); ?>">
        <h2 class="text">Choose Category:</h2>
        <input type="text" name="productcategory" class="input" value="<?php echo htmlspecialchars($productcategory); ?>">
        <h2 class="text">Product Image:</h2>
        <input type="file" class="form-control" name="productimg" accept=".jpg, .jpeg, .png">
        <h2 class="text">Description:</h2>
        <input type="text" name="productdesc" class="input" value="<?php echo htmlspecialchars($productdesc); ?>">
        <input type="submit" name="submit" class="btn" value="Update">
    </form>
    <footer class="footer">
        <!-- Footer content -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
