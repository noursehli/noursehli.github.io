<?php
$ROOT = __DIR__;
$DS = DIRECTORY_SEPARATOR;
$controleur_default = "User" ;
if(!isset($_REQUEST['controller']))
$controller=$controleur_default;
else 
$controller = $_REQUEST['controller'];
switch ($controller) {
case "User" :
require("{$ROOT}{$DS}Controller{$DS}controllerUser.php");
break;
case "Authentification" : 
require ("{$ROOT}{$DS}Controller{$DS}controllerAuthentification.php");
break;
}
?>