<?php
require_once('ConnectManager.php');

class ContactManager extends Manager
{
       public function postContact($author,$subject,$content)
    {
        $db = $this->dbConnect();
        $contents = $db->prepare('INSERT INTO messages(author, content_subject, content, content_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $contents->execute(array($author, $subject, $content));
        return $affectedLines;
    }
    
    public function getContacts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, author, content, content_subject, content_date,  DATE_FORMAT(content_date, \'%d/%m/%Y à %Hh%i\') AS content_date FROM messages ORDER BY content_date DESC');
      
        return $req;
    }

    public function goDelete()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM messages WHERE id= ?');
        return $req;
    }

}