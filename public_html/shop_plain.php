 <?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();

?>
<HTML>
<HEAD>
<TITLE>Agarwal Traders</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>


<div id="product-grid">
	<div class="txt-heading">Agarwal Traders / IP Cameras</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>" height="75" width="100"></div>
			<div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
			<div class="product-price"><?php echo "Rs. ".$product_array[$key]["price"]; ?></div>
			<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
			</form>
		</div>
	<?php
			}
	}
	?>
</div>
</BODY>
</HTML>