<?php 
session_start(); 
define('APP','566ae5ca-8684-4778-ae6c-4d163ed28ff1'); //Clée appli
require_once('config/config.php');
if(DEBUGGABLE){ error_reporting(E_ALL); }else{ error_reporting(0); }
if(!isset($_GET['p']) || empty($_GET['p']) || $_GET['p'] == '' ){  
    $uri = DEFAULT_CONTROLLER.'/'.DEFAULT_ACTION;
}else{
 $uri = $_GET['p']; 
}
function __autoload($class_name){
	$dirs = array(
            ROOT.'controllers/',
            ROOT.'models/',
            ROOT.'core/',
            ROOT.'daos/'
        );
    foreach($dirs as $dir){
        if(file_exists($dir.$class_name . '.php')){
            require_once($dir.$class_name . '.php'); 
            return true;
        }            
    }
    return false;
}
require_once('config/urls.php');
?>