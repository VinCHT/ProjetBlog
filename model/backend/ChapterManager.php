<?php
require_once('model/frontend/ConnectManager.php');

class ChapterManagerBack extends Manager
{
    // recupere les posts publiés
    public function getPostsBack()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM chapters WHERE publication= 1  ORDER BY creation_date DESC');
    
        return $req;
    }

    // recupere les brouillons
    public function getDrafts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM chapters WHERE publication= 2  ORDER BY creation_date DESC');
    
        return $req;
    }

    //ENVOYER UN CHAPITRE DANS LA BDD
    public function postChapitre($title, $content) 
	{
		$db = $this->dbConnect();
		$inserChap = $db->prepare('INSERT INTO chapters(title, content, creation_date) VALUES (?, ?, NOW())');
        $chapitre = $inserChap->execute(array($title, $content));
		
		return $chapitre;

    }
    
    //supprimer un chapitre et ses commentaires associés
    public function deletChapitre($dataId) 
	{ 
        $db = $this->dbConnect();
        $comment = $db->prepare('DELETE FROM comments WHERE id = ?');
        $comment->execute([$dataId]);
        $req = $db->prepare('DELETE FROM posts WHERE id = ?');
        $req->execute(array($dataId));
       	return $req;
    }


    //modifier un chapitre 
    public function updateChapitre($title, $content, $postId) 
	{
		$db = $this->dbConnect();
		$updChap = $db->prepare('UPDATE chapters SET title = ?, content = ? WHERE id = ?');
        $chapOk = $updChap->execute(array($title, $content,$postId));
		return $chapOk;

	}
}







