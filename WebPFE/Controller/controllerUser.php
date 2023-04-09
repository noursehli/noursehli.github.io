<?php
$controller= "User" ;
require_once ("{$ROOT}{$DS}Model{$DS}ModelUser.php");
if(isset($_REQUEST['action']))
$action = $_REQUEST['action'];
else $action="User";
switch ($action) { 

case  "User" :
    $view ="Consultsite";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;}
?>