<?php

$ROOT = dirname(__DIR__);
$DS = DIRECTORY_SEPARATOR;
$controller= "Authentification" ;
require_once("{$ROOT}{$DS}Model{$DS}ModelAuthentification.php");

if(isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action ='Authentification' ;
}

switch ($action) { 

    case "Authentification":
        $view = "Authentification";
        require("{$ROOT}{$DS}view{$DS}view.php");
        break;
    
    case "Dashboard":
        if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $log = ModelAuthentification::authenticateUser($username, $password);
            if($log != null) {
                $view = "Dashboard";
            } else {
                $view = "Authentification";
            }
            require("{$ROOT}{$DS}view{$DS}view.php");
        } else {
            
        break;
}}
?>

