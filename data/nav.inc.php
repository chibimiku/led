<?php 

if(!defined('IN_LED')){
	exit('Access Deined');
}

$navlist = array(
	'home' => array('link' => '/', 'content' => 'Home'),
	'list' => array('link' => 'list.php', 'content' => 'Catalog'),
	'blog' => array('link' => 'blog.php', 'content' => 'Blog'),
	'about' => array('link' => 'about.php', 'content' => 'About Us'),
	
);

?>