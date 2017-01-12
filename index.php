<?php 

define ('IN_LED', true);

require ('header.inc.php');

foreach($prolist as $pro){
	//image block
	echo '<div class="product span4"><div class="image"><a href="'.$pro['proid'].'"><img src="'.$pro['image'].'" /></a></div>';
	//detail block
	echo '<div class="details"><a class="clearfix" href="'.$pro['proid'].'"></a><h4 class="title">'.$pro['title'].'</h4><span class="price">$'.$pro['price'].'</span><span class="shopify-product-reviews-badge" data-id="'.$pro['proid'].'"></span></div>';
}

require ('footer.inc.php');

?>