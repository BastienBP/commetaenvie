<?php  if(APP != '566ae5ca-8684-4778-ae6c-4d163ed28ff1'){ exit; } ?>
<?php 
/*
@@@@@@@@@@@@@@@@@@@@@@@ DIRECTORIES @@@@@@@@@@@@@@@@@@@@@@@@ 
*/
define('WEBROOT',  str_replace('index.php','',$_SERVER['SCRIPT_NAME'])); //Recupère le chemin web
define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
/*
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
*/


/*
@@@@@@@@@@@@@@@@@@@@@@@@@ DATABASE @@@@@@@@@@@@@@@@@@@@@@@@@ 
*/
define('DB_NAME','forumsw'); # Nom BDD
define('DB_LOGIN','root'); # Login BDD
define('DB_PASSWORD',''); # mot de passe BDD
define('DB_ADDRESS','localhost'); # Adresse
define('DB_CHARSET','utf8'); # charset
/*
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
*/



/*
@@@@@@@@@@@@@@@@@@@@@@@@@ SITE CONF @@@@@@@@@@@@@@@@@@@@@@@@@ 
*/
define('DEBUGGABLE',true);
define('CHARSET','utf8');
define('TITLE','Forum');
define('DEFAULT_CONTROLLER','categorie');
define('DEFAULT_ACTION','read');
define('DEFAULT_LAYOUT','default');
/*
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 
*/




?>