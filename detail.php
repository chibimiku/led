<?php 

define ('IN_LED', true);

require ('header.inc.php');
require ('data/prolist.inc.php');

if(!isset($_GET['productid'])){
	exit('error_productid_illegal');
}

$productid = intval($_GET['productid']);

if(!$_GET['productid']){
	exit('error_productid_illegal');
}

?>

<!-- Begin content-->
	<section id="content" class="clearfix">
		<div id="product" class="l2702-series-led-street-light">
			<div class="row clearfix">
				<!-- Begin breadcrumb -->
				<div class="span12">
					<div class="breadcrumb clearfix">
						<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://www.ccrled.com" title="CCR LED" itemprop="url">
						<span itemprop="title">Home</span></a></span>
						<span class="arrow-space">&#62;</span>
						<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
							<a href="/collections/frontpage" title="Frontpage">Frontpage</a>
						</span>
						<span class="arrow-space">&#62;</span>
							<strong>100W LED Street Light L2702</strong>
					</div>
				</div>
				<!-- End breadcrumb -->
				<!-- Begin product photos -->
				<div class="span6">
					<!-- Begin featured image -->
					<div class="image featured">
						<a href="//cdn.shopify.com/s/files/1/0986/0548/products/0902_CCR-3_1024x1024.png?v=1445614990" class="zoom" id="placeholder">
							<img src="//cdn.shopify.com/s/files/1/0986/0548/products/0902_CCR-3_1024x1024.png?v=1445614990" alt="100W LED Street Light L2702" />
						</a>
					</div>
					<!-- End product image -->
					<!-- Begin thumbnails -->
					<div class="thumbs clearfix" style="margin-left:-15px;">
						<div class="image span2">
							<a href="//cdn.shopify.com/s/files/1/0986/0548/products/0902_CCR-3_1024x1024.png?v=1445614990" data-original-image="//cdn.shopify.com/s/files/1/0986/0548/products/0902_CCR-3_1024x1024.png?v=1445614990">
								<img src="//cdn.shopify.com/s/files/1/0986/0548/products/0902_CCR-3_medium.png?v=1445614990" alt="100W LED Street Light L2702" />
							</a>
						</div>
						<div class="image span2">
							<a href="//cdn.shopify.com/s/files/1/0986/0548/products/0902_CCR-2_1024x1024.png?v=1445614990" data-original-image="//cdn.shopify.com/s/files/1/0986/0548/products/0902_CCR-2_1024x1024.png?v=1445614990">
								<img src="//cdn.shopify.com/s/files/1/0986/0548/products/0902_CCR-2_medium.png?v=1445614990" alt="100W LED Street Light L2702" />
							</a>
						</div>
						<div class="image span2 last-in-row">
							<a href="//cdn.shopify.com/s/files/1/0986/0548/products/0902_CCR-1_1024x1024.png?v=1445614990" data-original-image="//cdn.shopify.com/s/files/1/0986/0548/products/0902_CCR-1_1024x1024.png?v=1445614990">
								<img src="//cdn.shopify.com/s/files/1/0986/0548/products/0902_CCR-1_medium.png?v=1445614990" alt="100W LED Street Light L2702" />
							</a>
						</div>
					</div>
				<!-- End thumbnails -->
					<style>
					  .thumbs .image { margin: 15px 0 }
					  .thumbs .image { padding: 0 15px }
					  .thumbs .last-in-row { padding-right: 0 }
					</style>
				</div>
				<!-- End product photos -->
				<!-- Begin description -->
				<div class="span6">
					<h1 class="title">100W LED Street Light L2702</h1>
					<div class="purchase">
						<h2 class="price" id="price-preview">$310.00</h2>
					</div>
					<form id="add-item-form" action="/cart/add" method="post" class="variants clearfix">
					<!-- Begin product options -->
						<div class="product-options no-options ">
							<div class="select clearfix" style="display:none">
								<select id="product-select" name="id">
								<option value="9465756163" selected="selected"  data-sku="">Default Title - $310.00</option>
								</select>
							</div>
							<div class="purchase-section">
								<div class="purchase">
									<input type="submit" id="add-to-cart" class="btn addtocart" name="add" value="Add to Cart" />
									<div id="cart-animation" style="display:none">1</div>
								</div>
							</div>
						</div>
					<!-- End product options -->
					</form>
					<div class="description">
						<p></p><p></p>
						<p style="text-align: left;"><img alt="" src="//cdn.shopify.com/s/files/1/0986/0548/files/123.png?2911916658576907851" style="float: none; margin-left: px;"></p>
					</div>
					<!-- Begin social buttons -->
					<!-- End social buttons -->
				</div>
				<!-- End description -->
				<div class="span12"><div id="shopify-product-reviews" data-id="3264249155"></div></div>
			</div>
			<!-- Begin related product -->
		<div class="row products">
			<h3 class="collection-title span12 clearfix">Related Products</h3>
<?php
	for ($i=0;$i<3;++$i){
?>
			<div class="product span4">
				<div class="image">
					<a href="/collections/frontpage/products/1000w-stadium-lights">          
						<img src="//cdn.shopify.com/s/files/1/0986/0548/products/led_stadium_lights_df-37_large.jpg?v=1452789498" alt="1000W Stadium Lights" />
					</a>
				</div>
				<div class="details">
					<a href="/collections/frontpage/products/1000w-stadium-lights" class="clearfix">
						<h4 class="title">1000W Stadium Lights</h4>
						<span class="price">
							$1,100.00
						</span>
						<span class="shopify-product-reviews-badge" data-id="4366170886"></span>
					</a>
				</div>
			</div>
<?php
	}
?>
			<div style="clear:both;"></div>
		</div>
	</div>
	<div style="display:none" id="preloading">
		<img src="//cdn.shopify.com/s/files/1/0986/0548/products/0902_CCR-2_1024x1024.png?v=1445614990" alt="" />
		<img src="//cdn.shopify.com/s/files/1/0986/0548/products/0902_CCR-1_1024x1024.png?v=1445614990" alt="" />
	</div>

  <script>
  var selectCallback = function(variant, selector) {
    if (variant && variant.featured_image) {
      var newImage = variant.featured_image; // New image object.
      var mainImageDomEl = jQuery('.featured img')[0]; // DOM element of main image we need to swap.
      Shopify.Image.switchImage(newImage, mainImageDomEl, switchImage); // Define switchImage (the callback) in your theme's JavaScript file.
    }
    if (variant && variant.available) {
      jQuery('#add-to-cart').removeAttr('disabled').removeClass('disabled'); // remove unavailable class from add-to-cart button, and re-enable button
      if(variant.price < variant.compare_at_price){
        jQuery('#price-preview').html(Shopify.formatMoney(variant.price, "${{amount}}") + " <del>" + Shopify.formatMoney(variant.compare_at_price, "${{amount}}") + "</del>");
      } else {
        jQuery('#price-preview').html(Shopify.formatMoney(variant.price, "${{amount}}"));
      }
    } else {
      jQuery('#add-to-cart').addClass('disabled').attr('disabled', 'disabled'); // set add-to-cart button to unavailable class and disable button
      var message = variant ? "Sold Out" : "Unavailable";
      jQuery('#price-preview').html(message);
    }
  };

  jQuery(document).ready(function($){
    new Shopify.OptionSelectors("product-select", { product: {"id":3264249155,"title":"100W LED Street Light L2702","handle":"l2702-series-led-street-light","description":"\u003cp\u003e \u003c\/p\u003e\n\u003cp\u003e \u003c\/p\u003e\n\u003cp style=\"text-align: left;\"\u003e\u003cimg alt=\"\" src=\"\/\/cdn.shopify.com\/s\/files\/1\/0986\/0548\/files\/123.png?2911916658576907851\" style=\"float: none; margin-left: px;\"\u003e\u003c\/p\u003e","published_at":"2015-10-23T11:30:00-04:00","created_at":"2015-10-23T11:34:56-04:00","vendor":"CCR LED","type":"","tags":["100W","L2702","led","Street Light"],"price":31000,"price_min":31000,"price_max":31000,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":9465756163,"title":"Default Title","option1":"Default Title","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"100W LED Street Light L2702","public_title":null,"options":["Default Title"],"price":31000,"weight":2390,"compare_at_price":null,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/0986\/0548\/products\/0902_CCR-3.png?v=1445614990","\/\/cdn.shopify.com\/s\/files\/1\/0986\/0548\/products\/0902_CCR-2.png?v=1445614990","\/\/cdn.shopify.com\/s\/files\/1\/0986\/0548\/products\/0902_CCR-1.png?v=1445614990"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/0986\/0548\/products\/0902_CCR-3.png?v=1445614990","options":["Title"],"content":"\u003cp\u003e \u003c\/p\u003e\n\u003cp\u003e \u003c\/p\u003e\n\u003cp style=\"text-align: left;\"\u003e\u003cimg alt=\"\" src=\"\/\/cdn.shopify.com\/s\/files\/1\/0986\/0548\/files\/123.png?2911916658576907851\" style=\"float: none; margin-left: px;\"\u003e\u003c\/p\u003e"}, onVariantSelected: selectCallback, enableHistoryState: true });

    // Add label if only one product option and it isn't 'Title'.
    

  });
  </script>
</section>
<!-- End content-->

<?php

require ('footer.inc.php');

?>