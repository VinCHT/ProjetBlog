<?php
require_once('ConnectManager.php');

class CommentManager extends Manager
{



    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments WHERE chapter_id = ? AND comment_signal= 0 ORDER BY comment_date DESC');
        $comments->execute(array($postId));
    
        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(chapter_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        
        $affectedLines = $comments->execute(array($postId, $author, $comment));
        return $affectedLines;
    }


    public function getListComments()
    {
        $db = $this->dbConnect();
        $req  = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments ORDER BY comment_date DESC');
  
    
        return $req ;
    }




}


