<?php

require_once __DIR__ . '/DB.php';

class Validator {

    public $name;
    public $login;
    public $email;
    public $password;

    public function name (){
        $this->name = $_POST ['name'];
        $this->login = $_POST ['login'];
        $this->email = $_POST ['email'];
        $this->password = $_POST ['password'];
        if (! (filter_has_var(INPUT_POST, 'name') &&
        (strlen(filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING)) > 0))) {
            return 1;
        }
        elseif (!ereg("^([a-z,A-Z,А-я,А-Я,0-9]{5,15})$",$this->name)) {
            return 2;
                    }
        else return 3;

}
    public function login (){

    $db= new DB();
    $res = $db->query('SELECT login FROM users');
    if (in_array($this->login, $res)) {
echo 1;
        } else echo 2;    }
}

$c = new Validator();
if ($c->name() == 1) {echo '<span style="color: red">Заполните имя</span>';};
if ($c->name() == 2) {echo '<span style="color: red">Только английские буквы</span>';};
if ($c->name() == 3) {echo '<span style="color: green">Все в порядке</span>';};
if ($c->login() == 4) {echo '<span style="color: green">Все в порядке</span>';};
if ($c->login() == 5) {echo '<span style="color: red">Login занят</span>';};


