<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM `product`,`type` WHERE product_type_id = type_id";
	if($_REQUEST['product_code']) {
		$SQL="SELECT * FROM `product`,`type` WHERE product_type_id = type_id AND product_title LIKE '%$_REQUEST[product_code]%'";
	}
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>
<script>
function delete_product(product_id)
{
	if(confirm("Do you want to delete the product?"))
	{
		this.document.frm_product.product_id.value=product_id;
		this.document.frm_product.act.value="delete_product";
		this.document.action = "lib/product.php";
		this.document.frm_product.submit();
	}
}
</script>
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1" style="width:100%">
		<div class="contact">
			<h4 class="heading colr">Grocery Report</h4>
			<?php
			if($_REQUEST['msg']) { 
			?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
			<?php
			}
			?>
			
			<form name="frm_product" action="#" method="post">
				<ul class="forms">
					<li class="txt">Search Item</li>
					<li class="inputfield"><input name="product_code" type="text" class="bar" value="<?=$_REQUEST[product_code]?>"/></li>
				</ul>
				<div class="static">
					<table style="width:100%">
					  <tbody>
					  <tr class="tablehead bold">
						<td scope="col">Code</td>
						<td scope="col">Name</td>
						<td scope="col">Type</td>
						<td scope="col">Unit</td>
						<td scope="col">Action</td>
					  </tr>
					<?php 
					$sr_no=1;
					while($data = mysqli_fetch_assoc($rs))
					{
					?>
					  <tr>
						<td><?=$data[product_code]?></td>
						<td><?=$data[product_title]?></td>
						<td><?=$data[type_name]?></td>
						<td><?=$data[product_price_per_item]?></td>
						<td style="text-align:center">
							<a href="product.php?product_id=<?php echo $data[product_id] ?>">Edit</a> | <a href="Javascript:delete_product(<?=$data[product_id]?>)">Delete</a> </td>
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
