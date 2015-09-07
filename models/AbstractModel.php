<?php

abstract class AbstractModel
{
    protected static $table;
    static public function getAll(){

        $db = new DB;
        return $db->queryAll('SELECT * FROM' . static::$table, 'News');
    }

}