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
        $req = $db->query('SELECT id, author, content, content_subject, content_date,  DATE_FORMAT(content_date, \'%d/%m/%Y à %Hh%i\') AS content_date FROM messages WHERE supprim=0 ORDER BY content_date DESC');
        return $req;
    }

    // Supprimer un commentaire
    public function goDelete()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM messages WHERE confirm= 1 AND id =?');
        return $req;
    }

    // A effacer quand on backend
    public function getAllComments()
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT * FROM comments');
        return $comments ;
    }

}