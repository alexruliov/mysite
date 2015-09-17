<?php

require_once __DIR__ . '/DB.php';

class Validation {

    public $name;
    public $a = ['<span style="color: red">Заполните имя</span>',
        '<span style="color: red">Только английские буквы,</span>',
        '<span style="color: green">Все в порядке</span>',
        '<span style="color: red">Login занят</span>',
        '<span style="color: green">Login занят</span>'];
    public $login;

    public function empty_name (){
        $this->name = $_POST ['name'];
        if (! (filter_has_var(INPUT_POST, 'name') &&
        (strlen(filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING)) > 0))) {
            return false;
        }

        else return true;
}
 public function eng_name (){

 if (!ereg("^([a-z,A-Z,А-я,А-Я,0-9]{5,15})$",$this->name)) {

  return false;



}
     else return true;
}

    public function login_name (){
    $this->login = $_POST ['login'];
    $db= new DB();
    $res = $db->query('SELECT FROM users WHERE login=:login', [':login'=>$this->login]);
$ret = array_merge($res);
       var_dump ($ret);
        if (in_array($this->login, $ret)) {
return true;
    } else return false;
}

}

$a = new Validation();
$a->login_name();
var_dump($a->login_name());

