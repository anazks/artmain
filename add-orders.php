<?php
session_start();
include('conn.php');

if (!isset($_SESSION['email']) || !isset($_SESSION['name'])) {
	$_SESSION['msg'] = "You must Log In First to Place an order";
	header('location: login.php');
	exit();
}

if (!isset($_REQUEST['AWID'])) {
	$_SESSION['msg'] = "Invalid Try again later!";
	header('location: orders.php');
	exit();
}


$AWID = $_REQUEST['AWID'];

$cust_name = $_SESSION['name'];

$user_id = $_SESSION['user_id'];

$OID = "RSTGF" . strval(mt_rand(10000, 99999));
$sql = "INSERT INTO orders(order_id,user_id,food_id, user_name, timestamp) VALUES(?,?,?,?,?)";

$query  = $pdoconn->prepare($sql);

if ($query->execute([$order_id, $user_id, $food_id, $user_name, $timest])) {

	$_SESSION['msg'] = 'Order Placed! Your Order ID is : '.$order_id;  

	header('location: art.php');
	
} else {

	$_SESSION['msg'] = 'There were some problem in the server! Please try again after some time!';

	header('location: art.php');

}?>