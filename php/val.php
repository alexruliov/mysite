<?php

class Validator {

    public function name (){
        if (! (filter_has_var(INPUT_POST, 'name') &&
        (strlen(filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING)) > 0))) {
        echo '<span style="color: red">Заполните имя</span>';}
        else echo '<span style="color: green">Все в порядке</span>';}
        }

$c = new Validator();
$c->name();


