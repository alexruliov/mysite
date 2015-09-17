<?php
require_once __DIR__ . '/DB.php';
require_once __DIR__ . '/val.php';


$db= new DB();


$res = $db->query('SELECT * FROM users WHERE login=:login', [':login'=>$c->login]);

var_dump($res);


//$c = 'sergey';
//if (in_array($c, $res)) {
//echo 'Ok.';
//} else {
//    echo 'Error';
//}