<?php

class ValidationForm {

    public $name;
    public $login;
    public $email;
    public $Password;
    public $conf_password;

    public function forms (){

    $this->name = $_REQUEST['name'];
    $this->conf_password = $_REQUEST['conf_password'];

          }
}

$form = new ValidationForm();
$form->name = $a;
var_dump($a);