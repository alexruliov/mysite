<?php

class Validator {

    public function prov (){
            if (! (filter_has_var(INPUT_POST, 'name') &&
            (strlen(filter_input(INPUT_POST, 'name')) > 0))) {
                echo '<p style="color: red">Заполните имя</p>';}
        else echo '<p style="color: green">Все впорядке</p>';}
        }

$c = new Validator();
$c->prov();


