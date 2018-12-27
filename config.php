<?php ob_start();

session_start();
// session destory is used for debugging purposes only 
 // session_destroy();


defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR) ;

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front") ;

?>