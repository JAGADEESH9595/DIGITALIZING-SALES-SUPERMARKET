<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
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
	<div id="content_sec">
		<div class="col1" style="width:100%">
		<div class="contact">
			<h4 class="heading colr">Item Billing - Customer Details</h4>
			<form name="frm_barcode" action="lib/sell.php" method="post">
			<div style="text-align:center">
				<ul class="forms">
					<li class="txt">Customer Name</li>
					<li class="inputfield"><input name="order_customer_name" type="text" class="bar" required value="<?=$data[order_customer_name]?>"/></li>
				</ul>
				<ul class="forms">
					<li class="txt">Customer Mobile</li>
					<li class="inputfield"><input name="order_customer_mobile" type="text" class="bar" required value="<?=$data[order_customer_mobile]?>"/></li>
				</ul>
				<div style="clear:both; text-align:left; margin-left:110px;"><input type="submit" value="Continue to Billing" class="simplebtn"></div>
			</div>
			<input type="hidden" name="act" value="save_order"/>
			</form>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
