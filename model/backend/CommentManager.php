<?php
require_once('model/frontend/ConnectManager.php');

class CommentManagerBack extends Manager
{
    //récupère tous les commentaires approuvés
    public function getCommentsBack()
    {
        $db = $this->dbConnect();
        $req= $db->query('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date FROM comments WHERE comment_approve= 1 ORDER BY comment_date DESC');
        return $req;
    }

    //récupère tous les commentaires à approuver
    public function getCommentsBackToApprove()
    {
        $db = $this->dbConnect();
        $req= $db->query('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date FROM comments WHERE comment_approve= 0 ORDER BY comment_date DESC');
        return $req;
    }

    //récupère tous les commentaires signalés
    public function getCommentsBackSignal()
    {
        $db = $this->dbConnect();
        $req= $db->query('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date FROM comments WHERE comment_signal= 1 ORDER BY comment_date DESC');
        return $req;
    }

    public function getListComments()
    {
        $db = $this->dbConnect();
        $req  = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date FROM comments ORDER BY comment_date DESC');
        return $req ;
    }

    //SIGNALER COMMENTAIRE
    public function signalement($commentId) 
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comments SET comment_signal = 1 WHERE id = ?');
        $req->execute(array($commentId));
        return $req;
    }

    //APPROUVER COMMENTAIRE qui a été signalé
    public function approbation($commentId) 
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comments SET comment_signal = 0, comment_approve = 1 WHERE id = ?');
        $req->execute(array($commentId));
        return $req;
    }

    //APPROUVER COMMENTAIRE
    public function approbationAndValid($commentId) 
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comments SET comment_approve = 1 WHERE id = ?');
        $req->execute(array($commentId));
        return $req;
    }

    //SUPPRIMER COMMENTAIRE
    public function suppression($commentId) 
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM comments WHERE id = ?');
        $req->execute(array($commentId));
        return $req;
    }

}