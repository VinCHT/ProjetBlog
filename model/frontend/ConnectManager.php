<?php

class Manager
{
    public static function dbConnect()
    {
    //En ligne
    $db = new PDO('mysql:host=developponadmin.mysql.db;dbname=developponadmin;charset=utf8', 'developponadmin', 'root1JF1');
    //En local
    //$db = new PDO('mysql:host=localhost;dbname=developponadmin', 'root', '');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
    }
}

//ADMIN : Jean root