<?php
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=developponadmin.mysql.db;dbname=developponadmin;charset=utf8', 'developponadmin', 'root1JF1');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

//avec la gestion des erreurs je pourrais mm enlever le try et le catch...