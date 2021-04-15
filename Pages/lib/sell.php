<?php
	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_sell")
	{
		save_sell();
		exit;
	}
	if($_REQUEST[act]=="save_order")
	{
		save_order();
		exit;
	}
	if($_REQUEST[act]=="update_quantity")
	{
		update_quantity();
		exit;
	}
	if($_REQUEST[act]=="delete_sell")
	{
		delete_sell();
		exit;
	}
	if($_REQUEST[act]=="update_order")
	{
		update_order();
		exit;
	}
	
	###Code for save sell#####
	function save_sell()
	{
		global $con;
		$R=$_REQUEST;

		// Get the details of the product ///
		$SQL = "SELECT * FROM product WHERE product_code = '$R[product_code]'";
		$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data = mysqli_fetch_assoc($rs);
			
		$statement = "INSERT INTO `sell` SET";
		$cond = "";
		$SQL=   $statement." 
				`sell_order_id` = '".$_SESSION['order_id']."',
				`sell_product_id` = '".$data[product_id]."', 
				`sell_units` = '1', 
				`sell_price_per_unit` = '".$data['product_price_per_item']."', 
				`sell_total_cost` = '".$data['product_price_per_item']."'"; 
		mysqli_query($con,$SQL) or die(mysqli_error($con));

		$msg="Item Added Successfully !!!";
		header("Location:../sell.php?msg=$msg");
	}

	function save_order() {
		global $con;
		$R=$_REQUEST;
		$date = date('l jS \of F Y h:i:s A');
		/// Create order ///////////
		$statement = "INSERT INTO `order` SET";
		$cond = "";
		$SQL=   $statement." 
				`order_customer_name` = '$R[order_customer_name]',
				`order_customer_mobile` = '".$R['order_customer_mobile']."', 
				`order_date` = '$date',
				`order_total` = '0', 
				`order_status` = 'In Progress'"; 
		mysqli_query($con,$SQL) or die(mysqli_error($con));
		$orderID = mysqli_insert_id($con);
		$_SESSION['order_id'] = $orderID;
		header("Location:../sell.php");
	}

	function update_quantity() {
		global $con;
		$R=$_REQUEST;
		$total = $R[quantity]*$R[price];
		/// Create order ///////////
		$statement = "UPDATE `sell` SET";
		$cond = "";
		$SQL=   $statement." 
				`sell_units` = '$R[quantity]',
				`sell_total_cost` = '$total' 
				WHERE sell_id = $R[sell_id]
				"; 
		mysqli_query($con,$SQL) or die(mysqli_error($con));
		header("Location:../sell.php");
	}

	function update_order() {
		global $con;
		$R=$_REQUEST;

		// Update Stock ///
		$SQL = "SELECT * FROM `sell` WHERE sell_order_id = ".$_SESSION[order_id];
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		while($data=mysqli_fetch_assoc($rs)) {
			$SQL = "UPDATE product set product_stock = (product_stock - $data[sell_units]) WHERE product_id = $data[sell_product_id]";
			mysqli_query($con,$SQL) or die(mysqli_error($con));
		}

		/// Create order ///////////
		$statement = "UPDATE `order` SET";
		$cond = "";
		$SQL=   $statement." 
				`order_status` = 'Paid',
				`order_total` = '$R[total_cost]' 
				WHERE order_id = $_SESSION[order_id]
				"; 
		$order_id =  $_SESSION[order_id];
		$_SESSION[order_id] = 0;
		mysqli_query($con,$SQL) or die(mysqli_error($con));
		header("Location:../sell-print.php?order_id=$order_id");
	}
	#########Function for delete sell##########3
	function delete_sell()
	{	
		global $con;
		/////////Delete the record//////////
		$SQL="DELETE FROM sell WHERE sell_id = $_REQUEST[sell_id]";
		mysqli_query($con,$SQL) or die(mysqli_error($con));
		header("Location:../sell.php?msg=Item deleted successfully !!!");
	}
?>