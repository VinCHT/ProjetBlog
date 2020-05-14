<?php
require_once('model/frontend/ConnectManager.php');

class ContactManagerBack extends Manager
{
    
    public function getContactsBack()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, author, content, content_subject, content_date,  DATE_FORMAT(content_date, \'%d/%m/%Y à %Hh%i\') AS content_date FROM messages WHERE supprim=0 ORDER BY content_date DESC');
      
        return $req;
    }

}