<?php

	$output = "";
	// $i = 3;
	foreach ($productList as $key => $product){
		// if ($i % 3 == 0){
		// 	$output = $output . "";
		// }
		$output = $output . "\n<div class='product-block col-md-4 col-sm-6 center' id='productBlock'>\n"
			."Part Number: " . $product->partnumber . "<br />\n"
			."<img class='product-image' src='img/products/" . $product->image . "' /><br />\n"
			."Description: " . $product->description . "<br />\n"
			."Stock Quantity: " . $product->stock . "<br />\n"
			."Cost Price: " . $product->costprice . "<br />\n"
			."Sale Price: " . $product->saleprice . "<br />\n"
			."VAT Rate: " . $product->vatrate . "<br />\n"
			."<a class='view-button btn btn-sm btn-default' href='product.php?partnumber=" . $product->partnumber . "'>View</a>\n"
			."<a class='edit-button btn btn-sm btn-default' href='edit.php?partnumber=" . $product->partnumber . "'>Edit</a>\n"
			.'<form action="confirm.php" method="post" onsubmit="return confirm(' . "'" . 'Are you sure you want to delete this product?' . "'" . ')";>' . "\n"
			.'<input type="submit" class="btn btn-sm btn-default" value="Delete">' . "\n"
			.'<input type="text" value="' . $product->partnumber . '" name="partnumber" style="display:none;">' . "\n"
			.'<input type="text" value="delete" name="action" style="display:none;">' . "\n"
			.'</form>' . "\n"
			."</div>\n";

		// if ($i % 3 == 2){
		// 	$output = $output . "</div>\n";
		// } elseif($key == count($productList) -1){
		// 	$output = $output . "</div>\n";
		// }
		// $i++;


	}
	echo '<div class="container all-products-table" id="productsTable"><div class="row">' . "\n" . $output . "</div>\n</div>\n";

?>