<?php 

if(!defined('IN_LED')){
	exit('Access Deined');
}

//load lib...
require 'lib/meekrodb.2.3.class.php';

//load configure...
require 'conf/config.inc.php';
require 'common.inc.php';


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

?>