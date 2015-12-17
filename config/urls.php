<?php 
if(APP != '566ae5ca-8684-4778-ae6c-4d163ed28ff1'){ exit; } 

$urls = [
	'#^admin/login$#' => 'AdminController/login',
	'#^admin/home$#' => 'AdminController/home',

	'#^user/read$#' => 'UserController/read',
	'#^user/add$#' => 'UserController/add',

	
	'#^categorie/read$#' => 'CategorieController/read',
	'#^categorie/details/[0-9]+$#' => 'CategorieController/details',
	'#^categorie/add$#' => 'CategorieController/add',

	'#^topic/details/[0-9]+$#' => 'TopicController/details',
];

UrlCore::load_url($urls,$uri);
?>