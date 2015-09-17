<?php

class Login {

    public $login;

    public function login (){

        $db= new DB();
        $res = $db->query('SELECT login FROM users');
        if (in_array($this->login, $res)) {
            return 4;
        } else return 5;
    }



}