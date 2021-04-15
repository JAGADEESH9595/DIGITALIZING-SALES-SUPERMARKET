<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[car_id])
	{
		$SQL="SELECT * FROM car WHERE car_id = $_REQUEST[car_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?> 
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact">
					<h4 class="heading colr">Digitalizing Sales Supermarket Management System</h4>
					<ul class="login-home">
						<li><a href="product.php">Add Grocery</a></li>
						<li><a href="sell_start.php">Billing</a></li>
						<li><a href="product-report.php">Grocery Report</a></li>
						<li><a href="sell-report.php">Purchase Report</a></li>
						<li><a href="../AddCart/index.php">Orders</a></li>
						<li><a href="../EmpReg/registration.php">Add Employee</a></li>
						<li><a href="../Sells Request/index.php">Grocery Request</a></li>						
						<li><a href="change-password.php">Change Password</a></li>
						<li><a href="./lib/login.php?act=logout">Logout</a></li>
					</ul>
			</div>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
