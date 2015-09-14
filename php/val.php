<?php

class Validator {

    public function prov (){
            if (! (filter_has_var(INPUT_POST, 'name') &&
            (strlen(filter_input(INPUT_POST, 'name')) > 0))) {
            return false;}
        else return true;
        }
    public function ret (){

        $a = new Validator();
        $d = $a->prov();
        if ($d == true){
            echo json_encode('Ok');}
        if ($d == false){
            echo json_encode('Error');}

    }
    }
$c = new Validator();
$c->ret();


