<?php

$connection = new mysqli("localhost","root","",'');
$query = "select login from users";
$result = $connection->query($query);
while($row = mysqli_fetch_array($result))
{
    array(1) { [0]=> array(10) { ["id"]=> string(1) "1" [0]=> string(1) "1" ["name"]=> string(8) "Иван" [1]=> string(8) "Иван" ["login"]=> string(4) "ivan" [2]=> string(4) "ivan" ["email"]=> string(12) "ivan@mail.ru" [3]=> string(12) "ivan@mail.ru" ["password"]=> string(4) "1234" [4]=> string(4) "1234" } } Email:
Пароль:
Login:
