<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[product_id])
	{
		$SQL="SELECT * FROM product WHERE product_id = $_REQUEST[product_id]";
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
				<h4 class="heading colr"><?=$heading?> Add Item Form</h4>
				<?php
				if($_REQUEST['msg']) { 
				?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php
				}
				?>
				<form action="lib/product.php" enctype="multipart/form-data" method="post" name="frm_product">
					<ul class="forms">
						<li class="txt">Barcode</li>
						<li class="inputfield"><input name="product_code" type="text" class="bar" required value="<?=$data[product_code]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Stock</li>
						<li class="inputfield"><input name="product_stock" type="text" class="bar" required value="<?=$data[product_stock]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Food Name</li>
						<li class="inputfield"><input name="product_title" type="text" class="bar" required value="<?=$data[product_title]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Select Type</li>
						<li class="inputfield">
							<select name="product_type_id" class="bar" required/>
								<?php echo get_new_optionlist("type","type_id","type_name",$data[product_type_id]); ?>
							</select>
						</li>
					</ul>
					
					<ul class="forms">
						<li class="txt">Price Per Item</li>
						<li class="inputfield"><input name="product_price_per_item" id="product_email" type="text" class="bar" required value="<?=$data[product_price_per_item]?>" onchange="validateEmail(this)" /></li>
					</ul>
					<ul class="forms">
						<li class="txt">Description</li>
						<li class="textfield"><textarea name="product_description" cols="" rows="6" required><?=$data[product_description]?></textarea></li>
					</ul>
					<div class="clear"></div>
					<ul class="forms">
						<li class="txt">&nbsp;</li>
						<li class="textfield"><input type="submit" value="Submit" class="simplebtn"></li>
						<li class="textfield"><input type="reset" value="Reset" class="resetbtn"></li>
					</ul>
					<input type="hidden" name="act" value="save_product">
					<input type="hidden" name="product_id" value="<?=$data[product_id]?>">
				</form>
			</div>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
