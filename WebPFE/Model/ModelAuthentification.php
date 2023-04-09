<?php
require_once ("Model.php");
class ModelAuthentification extends Model {
    private $Manager_ID;
    private $Manager_firstname;
    private $Manager_lastname;
    private $Login;
    private $PWD;

    protected static $Log='Login';
    protected static $Pass='PWD';
    protected static $table = 'Manager';
    protected static $primary = 'Manager_ID';

    public function __construct($Manager_ID, $Manager_firstname, $Manager_lastname, $Login, $PWD) {
        $this->Manager_ID = $Manager_ID;
        $this->Manager_firstname = $Manager_firstname;
        $this->Manager_lastname = $Manager_lastname;
        $this->Login = $Login;
        $this->PWD = $PWD;
    }

    // Getters
    public function getManager_ID() {
        return $this->Manager_ID;
    }

    public function getManager_firstname() {
        return $this->Manager_firstname;
    }

    public function getManager_lastname() {
        return $this->Manager_lastname;
    }

    public function getLogin() {
        return $this->Login;
    }

    public function getPwd() {
        return $this->PWD;
    }

    // Setters
    public function setManager_firstname($Manager_firstname) {
        $this->Manager_firstname = $Manager_firstname;
    }

    public function setManager_lastname($Manager_lastname) {
        $this->Manager_lastname = $Manager_lastname;
    }

    public function setLogin($Login) {
        $this->Login = $Login;
    }

    public function setPWD($PWD) {
        $this->PWD = $PWD;
    }
}
?>

