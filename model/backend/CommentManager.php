<?php
require_once('model/frontend/ConnectManager.php');

class CommentManagerBack extends Manager
{
    
    public function getCommentsBack()
    {
        $db = $this->dbConnect();
        $req= $db->query('SELECT * FROM comments ');
       
        return $req;
    }

    public function getCommentsSignal()
    {
        $db = $this->dbConnect();
        $req= $db->query('SELECT * FROM comments WHERE comment_signal=1');
    
        return $req;
    }

    public function deleteComment($id_comment)
    {
        $db = $this->dbConnect();
        $req= $db->query('DELETE * FROM comments WHERE id = ?');
        return $req;
    }

}