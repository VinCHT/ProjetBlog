<?php
require_once('ConnectManager.php');

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments WHERE chapter_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));
    
        return $comments;
    }

    public function getLastComment()
    {
        $db = $this->dbConnect();

        $comment = $db->query('SELECT author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments ORDER BY comment_date DESC LIMIT 1');
        return $comment;
    }
    
    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(chapter_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));
        return $affectedLines;
    }
    
    
    
    // Signalement d'un commentaire
    public function postSignal($idComment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(comment_signal) VALUES(1)');
        $affectedLines = $comments->execute(array($idComment));
        return $affectedLines;
    }
    
    public function getAllComments()
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT * FROM comments');
     
        return $comments ;
    }
}


