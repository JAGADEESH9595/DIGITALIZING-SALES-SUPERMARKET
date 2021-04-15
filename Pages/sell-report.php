<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM `order`";
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1" style="width:100%">
		<div class="contact">
			<h4 class="heading colr">Purchase Report</h4>
			<?php
			if($_REQUEST['msg']) { 
			?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
			<?php
			}
			?>
			<form name="frm_product" action="lib/product.php" method="post">
				<div class="static">
					<table style="width:100%">
					  <tbody>
					  <tr class="tablehead bold">
						<td scope="col">Customer Name</td>
						<td scope="col">Mobile</td>
						<td scope="col">Total Amount</td>
						<td scope="col">Date</td>
						<td scope="col">Status</td>
						<td scope="col">Action</td>
					  </tr>
					<?php 
					$sr_no=1;
					while($data = mysqli_fetch_assoc($rs))
					{
					?>
					  <tr>
						<td><?=$data[order_customer_name]?></td>
						<td><?=$data[order_customer_mobile]?></td>
						<td>Rs. <?=$data[order_total]?>/-</td>
						<td><?=$data[order_date]?></td>
						<td><?=$data[order_status]?></td>
						
						<td style="text-align:center">
							<a href="sell-print.php?order_id=<?php echo $data[order_id] ?>">View Details</a></td>
						</td>
					  </tr>
					<?php } ?>
					</tbody>
					</table>
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="product_id" />
			</form>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
