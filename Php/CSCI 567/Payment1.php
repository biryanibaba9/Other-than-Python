<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product System</title>
</head>
<body>
<div id="page">
		
	<div id="banner">

<?php
//error_reporting(0);

include "blitzConn.php";
include"LocalhostConnection.php";

session_start();

if($_GET['OrderID'])
{
        $orderID = $_GET['OrderID'];
        $_SESSION['orderID'] = $orderID;
}
if($_GET['price'])
{
        $price = $_GET['price'];
        $_SESSION['price'] = $price;
}

/*if($_GET['OrderID'])
{
	$orderID = $_GET['OrderID'];
	$_SESSION['orderID'] = $orderID;	
}*/
/*if($_GET['grandTotal'])
{
	$grandTotal = $_POST['grandTotal'];
	$_SESSION['grandTotal'] = $grandTotal;
}
*/

/*if(isset($_POST['custom3']))
{
	$prod_id_array=unserialize($_POST['custom3']);
}
if(isset($_POST['cust_name'])&&isset($_POST['address'])&&isset($_POST['cust_email'])&&$_POST['cust_email']!=""&&$_POST['address']!=""&&$_POST['cust_name']!="")
{
	$var=0;
	$name=$_POST['cust_name'];
	$email=$_POST['cust_email'];
	$address=$_POST['address'];
	$itemsPrice=$_SESSION['cartTotal'];
	$totalPrice=$_SESSION['grandTotal'];
	$ship=$totalPrice-$itemsPrice;
	$status='open';

	//echo "contents in array".$prod_id_array;
	$sql_temp3="INSERT INTO Orders(customerName,email,customerAddress,itemsPrice,shippingHandling,totalPrice,status) VALUES('$name','$email','$address',$itemsPrice,$ship,$totalPrice,'$status')";
	$res=$conn2->query($sql_temp3);
	$sql_temp="select max(orderId) from Orders";
	$res=$conn2->query($sql_temp);
	foreach($res as $row)
		$order=$row[0];
	$sql_temp2="select * from TempOrder";
	$res_temp2=$conn2->query($sql_temp2);
	foreach($res_temp2 as $row_temp2)
	{
		$pid=$row_temp2[0];
		$sql="INSERT INTO OrderItems (orderId,partNumber,description,quantity,price,weight) VALUES($order,$pid,'$row_temp2[1]','$row_temp2[2]','$row_temp2[3]','$row_temp2[4]')";
		$res=$conn2->query($sql);	
	
	}
	$sql="TRUNCATE TABLE TempOrder";
	$res=$conn2->query($sql);

}*/




//echo 'Order Number is :'.$orderID;
//echo 'Price:'.$price;
//***********************PAYMENT FORM********************************************
	echo '<h2> <center><b> Card Details </b></center></h2>';
	echo '<form id = "cardDetails" method = "post">';
	echo '<table cellpadding = "10" align = "center" width = "40%">';
	echo '<tr>';
	echo '<td> Name on Card: </td>';
	echo '<td> <input type = "text" name = "Name" placeholder = "Name on Card" size = "30" required/> </td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Card Number:</td>';
	echo '<td><input type = "text" name = "cardNumber" placeholder = "Card Number" size = "30" required/></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Expiry Date: </td>';
	echo '<td> <input type = "text" name = "expiry" placeholder = "Ex. 12/2016" size = "15" required/></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td> Total Amount <br> (Inclusive of taxes and shipping charges): </td>';
	echo '<td> <input type = "text" name = "amount" value = "$'.$_SESSION['price'].'" size = "15" disabled/> </td>';
	echo '</tr>';
	echo '<tr/>';
	echo '<tr/>';
	echo '<tr/>';
	echo '<tr/>';
	echo '<tr/>';	
	echo '<tr>';
	echo '<td colspan = "2" align = "center"><button type = "submit" name = "submitCardDetails" align = "center">Validate Payment</button></td>';
	echo '</tr>';
	echo '</table>';
	echo '</form>';
//******************************************************************************************************************
if(isset($_POST['submitCardDetails']))
{
	//*********************************Card Authorization***********************************************************
	$fp = fsockopen( "udp://blitz.cs.niu.edu", 4445, $errno, $errstr );
	if (!$fp) die("$errstr ($errno)<br>");
	$message = ''.$_POST['cardNumber'].':'.$_POST['expiry'].':'.$_SESSION['grandTotal'].':'.$_POST['Name'].'';
	echo "Sending: $message<br>";
	fwrite( $fp, $message ) or die("write failed<br>");
	$response = fread($fp, 1024);


	//*********************************verification***********************************************************
	//if($repsonse != "")
	//{	
		echo "".$response."<br>";
		echo '<br>';
		echo "Your Order is sucesfully placed.";
		echo '<br>';
		echo 'Thank you!    Shop with us Again!!';
		session_destroy();
	//}
	
	fclose($fp);	
}
?>
</div>
</body>
</html>
