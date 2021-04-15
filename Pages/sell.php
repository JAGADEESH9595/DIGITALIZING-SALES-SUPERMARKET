<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM `product`,`type`,`sell` WHERE product_id = sell_product_id AND product_type_id = type_id AND sell_order_id = ".$_SESSION['order_id'];
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));

	// Get the order detail //
	$SQL="SELECT * FROM `order` WHERE order_id = ".$_SESSION['order_id'];
	$order_rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
	$order_data=mysqli_fetch_assoc($order_rs);
?>
<script>
	window.onload = function() {
		document.getElementById("barcode").focus();
	};
	function update_quantity(quantity, sell_id, price) {
		location.href="lib/sell.php?act=update_quantity&quantity="+quantity.value+"&sell_id="+sell_id+"&price="+price;
	}
	function delete_product(sell_id)
	{
		if(confirm("Do you want to delete the product?"))
		{
			this.document.frm_sell.sell_id.value=sell_id;
			this.document.frm_sell.act.value="delete_sell";
			this.document.frm_sell.submit();
		}
	}
</script>
		<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1" style="width:100%">
		<div class="contact">
			<h4 class="heading colr">Item Billing - Customer Details</h4>
			<form name="frm_barcode" action="lib/sell.php" method="post">
			<div style="text-align:center">
				<ul class="forms">
					<li class="txt">Bill No</li>
					<li class="inputfield"><input readonly name="order_customer_name" type="text" class="bar" required value="<?=$order_data[order_id]?>"/></li>
				</ul>
				<ul class="forms">
					<li class="txt">Bill Date</li>
					<li class="inputfield"><input readonly name="order_customer_mobile" type="text" class="bar" required value="<?=$order_data[order_date]?>"/></li>
				</ul>
				<ul class="forms">
					<li class="txt">Customer Name</li>
					<li class="inputfield"><input readonly name="order_customer_name" type="text" class="bar" required value="<?=$order_data[order_customer_name]?>"/></li>
				</ul>
				<ul class="forms">
					<li class="txt">Customer Mobile</li>
					<li class="inputfield"><input readonly name="order_customer_mobile" type="text" class="bar" required value="<?=$order_data[order_customer_mobile]?>"/></li>
				</ul>
			</div>
			</form>
			<?php if($_SESSION['order_id']) { ?>
			<div style="clear:both; height:30px;"></div>
			<h4 class="heading colr">Billing Items</h4>
			<form name="frm_barcode" action="lib/sell.php" method="post">
				<ul class="forms">
					<li class="inputfield" style="width: 155px; font-size: 15px; font-weight: bold; margin-top: 5px; color:#01427e !important">Select Food Item : </li>
					<li class="inputfield">
					<select name="product_code" id="product_code" class="bar" required/>
						<?php echo get_new_optionlist("product","product_code","product_title",$data[product_code]); ?>
					</select>
					</li>
					<li class="textfield"><input type="submit" value="Add" class="simplebtn"></li>
				</ul>
				<input type="hidden" name="act" value="save_sell"/>
				<input type="hidden" name="order_id" value="2"/>
				
			</form>
			<?php
			if($_REQUEST['msg']) { 
			?>
				<div class="msg" style="clear:both"><?=$_REQUEST['msg']?></div>
			<?php
			}
			?>
			<form name="frm_sell" action="lib/sell.php" method="post">
				<div class="static">
					<table style="width:100%">
					  <tbody>
					  <tr class="tablehead bold">
					  	<td scope="col">Item Code</td>
						<td scope="col">Name</td>
						<td scope="col">Type</td>
						<td scope="col">Price</td>
						<td scope="col">Qunantity</td>
						<td scope="col">Cost</td>	
						<td scope="col">Delete</td>
					  </tr>
					<?php 
					$sr_no=1;
					$total_cost = 0;
					while($data = mysqli_fetch_assoc($rs))
					{
						$total_cost += $data[sell_total_cost];
					?>
					  <tr>
					  	<td><?=$data[sell_id]?></td>
						<td><?=$data[product_title]?></td>
						<td><?=$data[type_name]?></td>
						<td><?=$data[product_price_per_item]?></td>
						<td style="text-align:center;">
							<select name="quantity" onChange="update_quantity(this,<?=$data['sell_id']?>, <?=$data[product_price_per_item]?>)">
								<?php for($i=1;$i<=100;$i++) 
								{ 
									if($i == $data[sell_units]) $selected = "selected";
									else $selected = "";
								?>
								<option value="<?=$i?>" <?=$selected?>><?=$i?> Items</option>
								<?php } ?>
							</select>
						</td>
						<td><?=$data[sell_total_cost]?></td>
						<td style="text-align:center">
							<a href="Javascript:delete_product(<?=$data[sell_id]?>)">
							<img src="images/delete.png" style="height:20px">
							</a> </td>
						</td>
					  </tr>
					<?php } ?>
					<tr>
						<td colspan="5" style="text-align:right; font-size:16px; color:green; font-weight:bold">Total Cost : </td>
						<td colspan="2" style="text-align:left; font-size:16px; color:green; font-weight:bold"><?=round($total_cost)?>.00/-</td>
					</tr>
					<tr>
						<td colspan="7" style="text-align:right; font-size:16px; color:green; font-weight:bold"><input type="submit" value="Save and Print" class="simplebtn"></td>
					</tr>
					</tbody>
					</table>
				</div>
				<input type="hidden" name="act" value="update_order"/>
				<input type="hidden" name="total_cost" value="<?=$total_cost?>">
				<input type="hidden" name="sell_id" />
			</form>
			<?php } ?>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
