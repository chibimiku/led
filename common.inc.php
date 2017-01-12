<?php 

//utf-8

if(!defined('IN_LED')){
	exit('Access Deined');
}

function tpl_getmeta($k, $v){
	return '<meta name="'.$k.'" content="'.$v.'" />';
}

function tpl_getlink($k, $v){
	return '<link rel="'.$k.'" href="'.$v.'" />';
}

function tpl_getcss($url){
	return tpl_getlink('stylesheet', $url);
}

function tpl_getlinklist($linklist){
	$returnstr = '';
	foreach($linklist as $link){
		$returnstr = $returnstr.'<a href="'.$link['href'].'">'.$link['content'].'</a>';
	}
	return $returnstr;
}

?>