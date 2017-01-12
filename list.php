<?php 

define ('IN_LED', true);

require ('header.inc.php');
require ('data/prolist.inc.php');

?>      

<!-- Begin content-->
<section id="content" class="clearfix">
	<div id="collection">
		<!-- Begin collection info -->
		<div class="row">
			<div class="span12">
				<!-- Begin breadcrumb -->
				<div class="breadcrumb clearfix">
					<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://www.ccrled.com" title="CCR LED" itemprop="url"><span itemprop="title">Home</span></a></span>
					<span class="arrow-space">&#62;</span>
					<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="" title="Products" itemprop="url"><span itemprop="title">Products</span></a></span>
					<span class="arrow-space">&#62;</span> <strong>Page 2 of 4</strong>
				</div>
				<!-- End breadcrumb -->
				<!-- Begin sort collection -->
				<div class="clearfix">
				<h1 class="collection-title">Products</h1>
				<div class="browse-tags">
					<label>Browse:</label>
					<select id="collection_tags" class="coll-filter">
						<option value="">All items</option>
							<option value="1000w">1000w</option>
							<option value="100w">100W</option>
							<option value="120v">120V</option>
					</select>        
				</div>
				<div class="browse-tags">
					<label>Sort by:</label>
					<select class="sort-by">
					  <option value="manual">Featured</option>
					  <option value="price-ascending">Price, low to high</option>
					  <option value="price-descending">Price, high to low</option>
					  <option value="title-ascending">Alphabetically, A-Z</option>
					  <option value="title-descending">Alphabetically, Z-A</option>
					  <option value="created-ascending">Date, old to new</option>
					  <option value="created-descending">Date, new to old</option>
					  <option value="best-selling">Best Selling</option>
					</select>           
				  </div>        
				
			  </div>
		<!-- End sort collection -->
		<!-- Begin collection description -->
		<!-- End collection description -->
			</div>
		</div>
		<!-- End collection info -->
		<div class="row products">
			<div class="product span4">
				<div class="image">
					<a href="/collections/all/products/50w-wall-pack-series">          
						<img src="//cdn.shopify.com/s/files/1/0986/0548/products/50w_wallpack_large.png?v=1444919405" alt="50W Wall Pack Series" />
					</a>
				</div>
				<div class="details">
					<a href="/collections/all/products/50w-wall-pack-series" class="clearfix">
						<h4 class="title">50W Wall Pack Series</h4>
						<span class="price">$165.00</span>
						<span class="shopify-product-reviews-badge" data-id="3126990979"></span>
					</a>
				</div>
			</div>

  

  <div class="image">
    <a href="/collections/all/products/copy-of-80w-led-tri-proof">          
      <img src="//cdn.shopify.com/s/files/1/0986/0548/products/cb3344bfd40515c1764547bdfcac6299_2dbdfdd2-1bf0-46c5-a0d4-45523525d550_large.png?v=1478810798" alt="60W LED Tri-Proof" />
    </a>
  </div>

  <div class="details">
    <a href="/collections/all/products/copy-of-80w-led-tri-proof" class="clearfix">
      <h4 class="title">60W LED Tri-Proof</h4>

      <span class="price">
      
      
        
        $100.00
      
      </span>
      <span class="shopify-product-reviews-badge" data-id="8885487564"></span>
    </a>
  </div>
</div>
			<div style="clear:both;"></div>
	</div>
<div class="row">
	<div>
		<ul class="pagination clearfix">
			<li><a href="/collections/all?page=1" class="prev">Previous</a></li>
			<li>Page 1 of 4</li>
			<li><a href="/collections/all?page=3" class="next">Next</a></li>
		</ul>
	</div>
</div>

<script>
  Shopify.queryParams = {};
  if (location.search.length) {
    for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
      aKeyValue = aCouples[i].split('=');
      if (aKeyValue.length > 1) {
        Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
      }
    }
  }
  var collFilters = jQuery('.coll-filter');
  collFilters.change(function() {
      var newTags = [];
      var newURL = '';
      delete Shopify.queryParams.page;
      collFilters.each(function() { 
        if (jQuery(this).val()) {
          newTags.push(jQuery(this).val());
        }
      });
      
      newURL = '/collections/' + 'all';
      if (newTags.length) {
        newURL += '/' + newTags.join('+');
      }
      var search = jQuery.param(Shopify.queryParams);
      if (search.length) {
        newURL += '?' + search;
      }
      location.href = newURL;    
            
  });
  jQuery('.sort-by')
    .val('title-ascending')
    .bind('change', function() {
      Shopify.queryParams.sort_by = jQuery(this).val();
      location.search = jQuery.param(Shopify.queryParams).replace(/\+/g, '%20');
    });
</script>
</section>
<!-- End content-->
	  
<?php
require ('footer.inc.php');
?>