<?php
	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_product")
	{
		save_product();
		exit;
	}
	if($_REQUEST[act]=="delete_product")
	{
		delete_product();
		exit;
	}
	
	###Code for save product#####
	function save_product()
	{
		global $con;
		$R=$_REQUEST;
		
		if($R[product_id])
		{
			$statement = "UPDATE `product` SET";
			$cond = "WHERE `product_id` = '$R[product_id]'";
			$msg = "Data Updated Successfully.";
		}
		else
		{
			$statement = "INSERT INTO `product` SET";
			$cond = "";
			$msg="Data saved successfully.";
		}
		
		$SQL=   $statement." 
				`product_code` = '$R[product_code]', 
				`product_stock` = '$R[product_stock]', 
				`product_type_id` = '$R[product_type_id]', 
				`product_title` = '$R[product_title]', 
				`product_price_per_item` = '$R[product_price_per_item]', 
				`product_description` = '$R[product_description]'
				". 
				 $cond;
		$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
		header("Location:../product-report.php?msg=$msg");
	}
#########Function for delete product##########3
function delete_product()
{	
	global $con;
	/////////Delete the record//////////
	$SQL="DELETE FROM product WHERE product_id = $_REQUEST[product_id]";
	mysqli_query($con,$SQL) or die(mysqli_error($con));
	header("Location:../product-report.php?msg=Deleted Successfully.");
}
?>