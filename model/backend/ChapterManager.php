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

  
    
    //supprimer un chapitre et ses commentaires associés
    public function deletChapitre($dataId) 
	{ 
        $db = $this->dbConnect();
        $comment = $db->prepare('DELETE FROM comments WHERE id = ?');
        $comment->execute([$dataId]);
        $req = $db->prepare('DELETE FROM chapters WHERE id = ?');
        $req->execute(array($dataId));
       	return $req;
    }

    //supprimer un chapitre et ses commentaires associés
    public function deletChapitreDraft($dataId) 
	{ 
        $db = $this->dbConnect();
        $comment = $db->prepare('DELETE FROM comments WHERE id = ?');
        $comment->execute([$dataId]);
        $req = $db->prepare('DELETE FROM chapters WHERE id = ?');
        $req->execute(array($dataId));
       	return $req;
    }

    public function getPostBack($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM chapters WHERE id = ?');
        $req->execute(array($postId));
        $postBack = $req->fetch();
    
        return $postBack;
    }

    public function getPostBackDraft($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM chapters WHERE id = ?');
        $req->execute(array($postId));
        $postBackDraft = $req->fetch();
    
        return $postBackDraft;
    }

    //Modifier un chapitre
    public function updateChapitre($title, $content, $postId) //modifie chapitre 
	{
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE chapters SET title = ?, content = ? WHERE id = ?');
        $postBack = $req->execute(array($title, $content,$postId));
        return $postBack;
    }

    //Modifier un brouillon
    public function updateBrouillon($title, $content, $postId) //modifie chapitre 
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE chapters SET title = ?, content = ? WHERE id = ?');
        $postBackDraft  = $req->execute(array($title, $content,$postId));
        return $postBackDraft ;
    }

    public function updateTheDraft($publication) //modifie chapitre 
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE chapters SET publication= 1');
        $postUpBackDraft = $req->execute(array($publication));
        return $postUpBackDraft;
    }
    
  

    // Ajouter un chapitre -> publié ou brouilon
    public function postChapitre($photo,$title, $content, $numChapter, $publication,$alt) 
	{
		$db = $this->dbConnect();
		$inserChap = $db->prepare('INSERT INTO chapters(images,title, content, num_chapter, creation_date, publication, alt) VALUES (?, ?, ?,?, NOW(),?,?)');
        $chapitre = $inserChap->execute(array($photo,$title, $content, $numChapter, $publication,$alt));
		
		return $chapitre;

    }

    
    // Publier le brouilon
    public function draftOnline($content,$postId) 
	{
		$db = $this->dbConnect();
		$inserTheDraft = $db->prepare('UPDATE chapters SET content = ? WHERE id = ?');
        $draftOnline= $inserTheDraft->execute(array($content,$postId));
		
		return $draftOnline;

    }

  //Publier un brouillon
  public function get1($postBackDraft) 
  {
      $db = $this->dbConnect();
      $req = $db->prepare('UPDATE chapters SET publication = 1 WHERE id = ?');
      $req->execute(array($postBackDraft));
 
      return $req;
  }
    
      //Dépublier un chapitre
  public function get2($postBack) 
  {
      $db = $this->dbConnect();
      $req = $db->prepare('UPDATE chapters SET publication = 2 WHERE id = ?');
      $req->execute(array($postBack));
 
      return $req;
  }
    
}







