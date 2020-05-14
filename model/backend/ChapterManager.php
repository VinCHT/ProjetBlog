<?php
require_once('model/frontend/ConnectManager.php');

class ChapterManagerBack extends Manager
{
    
    public function getPostsBack()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM chapters WHERE publication= 1  ORDER BY creation_date DESC');
    
        return $req;
    }

    public function getDrafts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM chapters WHERE publication= 2  ORDER BY creation_date DESC');
    
        return $req;
    }
}







