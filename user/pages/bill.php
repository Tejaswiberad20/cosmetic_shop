<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bill</title>
    <style>
        h1{
            text-align: center;
        }
        .clock{
            display: block;
            margin-left: 30%;
            background-color:#f6f6ee;
            padding: 10px 20px;
            height: 400px;
            width: 500px;
            box-shadow: 0 0 4px 1px #000;
        }
        .table{
            margin: 20px;
        }
        .btn{
            display: block;
            padding: 10px 20px;
            margin: 20px auto;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 20px;
            border-bottom-color: white;
        }
        .th{
            margin: 40px;
            padding: 20px;

        }   
        .cust{
            margin-top: 20px;
            text-align: left;
            font-size: 16px;
            font-weight: bold;
        }
        .user-info{
            font-size: 26px;
         
        }
        .price{
                margin-top: 20px;
                height: 50px;
                width: 50px;
                border: 1px solid #000;
        }    
		.total{
		text-align:center;

        </style>
        
</head>
<body>
     <h1>Bill</h1>
     <div id="rpt">
    <div class="clock">
        <p id="date"></p>
            <?php
            $datevar=date("d/m/y");
            echo date("M,d,Y ")."<br>";
            ?>
<div class="cust">
             <?php 
include("dbcon.php");
$sql = "SELECT * FROM register ORDER BY id DESC LIMIT 1";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
       
        $name = $row['username'];
        $mobileno = $row['mobno'];
        $address = $row['address'];
        echo "Customer  Name: &nbsp;" .$name ."<br>";
        echo "Customer  Mobile No: &nbsp;" .$mobileno."<br>";
        echo "Customer  Address:   &nbsp;".$address."<br>";
     

            

    }
}
?>
</div><hr>
            <table class="table">
            <tr>
            <th class="th">Product name</th>
            <th class="th">Quantity</th>
            <th class="th">Price</th>
			      

        </tr>
        <tr>
           
        <?php 
include("dbcon.php");
$sql = "SELECT * FROM productorder ORDER BY id DESC LIMIT 1";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $username = $row['username'];
        $productname = $row['productname'];
        $qauntity = $row['qauntity'];
        $price = $row['price'];
        $totprice = $row['totprice'];
        echo "<tr>";
        echo "<td style= 'text-align:center';>".$productname."</td>";
        echo "<td style= 'text-align:center';>".$qauntity."</td>";
        echo "<td style= 'text-align:center';>".$price."</td>";

        echo "</tr>";
    }
}
echo "<td>"."</td>";echo "<td>"."</td>";
   echo "<th>" ."</th>";
echo "<tr>";echo "<th ></th>";
echo "<th >Total</th>";

    echo "<th >" .$totprice ."</th>";
echo "</tr>";
?>


    </table>
    </div>
            <input type="submit"name="submit"value="Print Bill" class="btn" onClick="myFunction()">

</div>
</body>
</html>

<script type="text/javascript">
function myFunction() {
    var divToPrint = document.getElementById('rpt');
    var popupWin = window.open('', '_blank');
    popupWin.document.open();
    popupWin.document.write('<html><body onload="window.print()"><center><br><div style="color: #FFFFFF;font-family:Apple Chancery, cursive;text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #FF2D95 0px 0px 20px, #FF2D95 0px 0px 30px, #FF2D95 0px 0px 40px, #FF2D95 0px 0px 50px, #FF2D95 0px 0px 75px;font-style:italic;color: #FFFFFF;"><h1 align="center"><u>Bill</u></h1></div><h3><u>Bill</u></h3>' + divToPrint.innerHTML + '</center></body></html>');
    popupWin.document.close();
}
</script>

