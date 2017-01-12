<?php 

if(!defined('IN_LED')){
	exit('Access Deined');
}

//load lib...
require 'lib/meekrodb.2.3.class.php';

//load configure...
require 'conf/config.inc.php';
require 'common.inc.php';

//load nav data
require 'data/nav.inc.php';
if(!isset($modname)){
	$modname = 'home'; //set for default nav.
}

//common header here.
echo '<!DOCTYPE HTML><head>';
echo '<meta charset="utf-8" />';
echo tpl_getmeta('description', $conf['description']);
echo tpl_getmeta('viewport', 'width=device-width, initial-scale=1.0');
echo tpl_getcss('static/additional-checkout-buttons.css');
echo tpl_getcss('static/font-awesome.min.css');
echo tpl_getcss('static/fontface.css');
echo tpl_getcss('static/social-buttons.scss.css');
echo tpl_getcss('static/styles.scss.css');
echo '</head><body>';

//common header display here.
?>
<!-- Begin toolbar -->
<div class="toolbar-wrapper wrapper"><div class="toolbar span12 clearfix">
	<ul class="unstyled">
		<li class="search-field fl">
			<form class="search" action="/search">
				<input type="image" src="static/images/icon-search.png" alt="Go" id="go">
				<input type="text" name="q" class="search_box" placeholder="Search" value=""  />
			</form>
		</li>
		<li id="cart-target" class="toolbar-cart ">
			<a href="/cart" class="cart" title="Shopping Cart">
				<span class="icon-cart"></span>
				<span id="cart-count">0</span>
					Cart
			</a>
		</li>
		<li class="toolbar-customer">
			<a href="/account/login" id="customer_login_link">Log in</a>
			<span class="or">or</span>
			<a href="/account/register" id="customer_register_link">Create an account</a>
		</li>
		<li id="menu-toggle" class="menu-icon fl">
			<i class="fa fa-bars"></i>Menu
		</li>
	</ul>
</div></div>
<!-- End toolbar -->

<!-- Begin Mobile Nav -->
<div class="row mobile-nav-wrapper">
	<nav class="mobile clearfix">
		<div class="flyout">
			<ul class="clearfix">
				<li><a href="/" class=" navlink"><span>Home</span></a></li>
				<li><a href="list.php" class=" navlink"><span>Catalog</span></a></li>
				<li><a href="blog.php" class=" navlink"><span>Blog</span></a></li>
				<li><a href="about.php" class=" current navlink"><span>About Us</span></a></li>
				<li class="customer-links"><a href="/account/login" id="customer_login_link">Log in</a></li>
				<li class="customer-links"><a href="/account/register" id="customer_register_link">Create an account</a></li>
				<li class="search-field">
				  <form class="search" action="/search" id="search">
					<input type="image" src="static/images/icon-search.png" alt="Go" id="go" class="go" />
					<input type="text" name="q" class="search_box" placeholder="Search" value="" />
				  </form>
				</li>
			</ul>
		</div>
	</nav>
</div>
<!-- End Mobile Nav -->
<!-- Begin wrapper -->
<div id="transparency" class="wrapper clearfix">
	<div class="row p0">
	<!-- Begin navigation -->
		<div class="span12 clearfix">
			<div class="logo">
				<h1><a href="/"><img src="static/images/logo.png" alt="CCR LED" /></a></h1>
			</div>
        </div>
        <section id="nav" class="row p30">
			<div class="span12">
				<nav class="main">
					<ul class="horizontal unstyled clearfix">
						<?php echo tpl_getnavli($navlist, $modname);?>
					</ul>
				</nav> <!-- /.main -->
			</div>
		</section>
<!-- End navigation -->
<!-- div should be closed in footer-->
<?php

//Nav end.

?>