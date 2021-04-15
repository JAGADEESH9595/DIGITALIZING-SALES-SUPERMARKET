<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[order_id])
	{
		$SQL="SELECT * FROM `order`,`sell`,`product` WHERE sell_product_id = product_id AND sell_order_id = $_REQUEST[order_id] AND order_id = sell_order_id";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$SQL="SELECT * FROM `order`,`sell`,`product` WHERE sell_product_id = product_id AND sell_order_id = $_REQUEST[order_id] AND order_id = sell_order_id";
		$rs1=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data1=mysqli_fetch_assoc($rs1);
	}
?> 
<style>
table {
	margin-bottom:0px;
}
#comments input, #comments textarea {
	padding:5px;
}
.bar {
    height: 24px;
    background-image: url(images/inputbar.gif);
    background-repeat: repeat-x;
    background-position: bottom;
    background-color: #fff;
    border: #cccccc solid 1px;
    padding: 0px 5px;
}
</style>
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact">
				<h4 class="heading colr">Item Sell Receipt</h4>
				<?php
				if($_REQUEST['msg']) { 
				?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php
				}
				?>
				<form action="lib/sell.php" enctype="multipart/form-data" method="post" name="frm_sell">
					<ul class="forms">
						<li class="txt">Customer Name</li>
						<li class="inputfield"><input name="order_customer_name" type="text" class="bar" required value="<?=$data1[order_customer_name]?>" readonly/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Customer Mobile</li>
						<li class="inputfield"><input name="order_customer_mobile" type="text" class="bar" required value="<?=$data1[order_customer_mobile]?>" readonly/></li>
					</ul>
					<div class="input_fields_wrap static">
				<table style="width:70%">
				<tbody>
					<tr class="tablehead bold">
						<td>Food</td>
						<td>Quantity</td>
						<td>Unit Price</td>
						<td>Total</td>
					</tr>
					<?php while($data = mysqli_fetch_assoc($rs)) { ?>
					<tr>
						<td><?=$data['product_title']?></td>
						<td><?=$data['sell_units']?> Items</td>
						<td><?=$data['sell_price_per_unit']?></td>
						<td><?=$data['sell_total_cost']?></td>
					</tr>
					<?php } ?>
				</tbody>
				</table>
          </div>
		  <div style="float:right; margin-top:10px; margin-right:20px; font-size:16px; font-weight:bold; color:red"><b>Total Cost: </b>Rs. <?=$data1['order_total']?>/-</div>
          <div class="block clear"></div>
					<ul class="forms" style="float:right; margin-top:20px;">
						<li class="txt">&nbsp;</li>
						<li class="textfield"><input type="button" value="Print" class="simplebtn" onclick="window.print()"></li>
					</ul>
					<input type="hidden" name="act" value="save_sell">
					<input type="hidden" name="sell_id" value="<?=$data[sell_id]?>">
				</form>
			</div>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
