<?php

class Manager
{
    public static function dbConnect()
    {
    $db = new PDO('mysql:host=developponadmin.mysql.db;dbname=developponadmin;charset=utf8', 'developponadmin', 'root1JF1');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db;
    }
}