<?php

require_once __DIR__ . '/DB.php';

class Validation {

    public $name;
    public $a = ['<span style="color: red">Заполните имя!</span>',
        '<span style="color: red">Только английские буквы!</span>',
        '<span style="color: green">Все в порядке!</span>',
        '<span style="color: red">Login занят!</span>',
        '<span style="color: green">Login свободен!</span>',
        '<span style="color: red">Пароль не совпадает!</span>',
        '<span style="color: green">Пароль совпал!</span>',
        '<span style="color: red">Пароль должен быть не менее  <br> 7  символов и содержать A-Z,a-z,0-9!</span>',
        '<span style="color: red">Введите правильный Email!</span>',
        '<span style="color: red">Введите пароль!</span>',
        '<span style="color: green">Повторите пароль!</span>',];
        public $login;
    public $email;
    public $pass;
    public $conf_pass;
//проверка поля имя на пустоту, применение фильтров.
public function empty_name (){
        $this->name = $_POST ['name'];
        if (! (filter_has_var(INPUT_POST, 'name') &&
        (strlen(filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING)) > 0))) {
            return $this->a[0];
        }

        else return $this->a[2];
}

// Проверка email на корректность

public function email (){

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if ($email === false) {
            return $this->a[8];
        }
    else return $this->a[2];

    }

// Проверка login.
    public function login_name (){
        $this->name = $_POST ['login'];
        if (! (filter_has_var(INPUT_POST, 'login') &&
            (strlen(filter_input(INPUT_POST, 'login',FILTER_SANITIZE_STRING)) > 0))) {
            return $this->a[0];
        }
    $this->login = $_POST['login'];
    if (!ereg("^([a-z,A-Z,А-я,А-Я,0-9]{4,15})$",$this->login)) {
    return $this->a[1];}
    $db= new DB();
    $res = $db->query('SELECT * FROM users WHERE login=:login', [':login'=>$this->login]);
    foreach ($res as $key => $value) {
    if (in_array($this->login, $value)) {
}   return $this->a[3];}
    if(!isset($value)){
    return $this->a[4];;
    }
    }
//Проверка login на совпадение, соответствие требованиям.
    public function pass(){

        $this->pass = $_POST['pass'];
        if (!ereg("^([a-z,A-Z,А-я,А-Я,0-9]{7,15})$",$this->pass)) {
            return $this->a[7];}
        if (! (filter_has_var(INPUT_POST, 'pass') &&
            (strlen(filter_input(INPUT_POST, 'pass',FILTER_SANITIZE_STRING)) > 0))) {
            return $this->a[9];


        } else return $this->a[10];

    }
    public function conf_pass(){
        $this->pass = $_POST['pass'];
        $this->conf_pass = $_POST ['conf_pass'];
        if (!ereg("^([a-z,A-Z,А-я,А-Я,0-9]{7,15})$",$this->conf_pass)) {
            return $this->a[7];}

        if($this->conf_pass==$this->password && strlen(filter_input(INPUT_POST, 'conf_pass',FILTER_SANITIZE_STRING)) > 0)
        {
            return $this->a[6];
        }


    }

    // Отправка данных в БД
    public function in_db(){
    $db= new DB();



    }
}



