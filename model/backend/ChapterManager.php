<?php
require_once('model/frontend/ConnectManager.php');

class ChapterManagerBack extends Manager
{
    // recupere les posts publiés
    public function getPostsBack()
    {
        $db = $this->dbConnect();
        $postsBack = $db->query('SELECT id, title, content, num_chapter, images, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM chapters WHERE publication= 1  ORDER BY creation_date DESC');
    
        return $postsBack;
    }

    // recupere les brouillons
    public function getDrafts()
    {
        $db = $this->dbConnect();
        $postsDrafts = $db->query('SELECT id, title, content, num_chapter, images, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM chapters WHERE publication= 2  ORDER BY creation_date DESC');
    
        return $postsDrafts;
    }

  
    //supprimer un chapitre et ses commentaires associés
    public function deletChapter($dataId) 
	{ 
        $db = $this->dbConnect();
        $comment = $db->prepare('DELETE FROM comments WHERE id = ?');
        $comment->execute([$dataId]);
        $req = $db->prepare('DELETE FROM chapters WHERE id = ?');
        $req->execute(array($dataId));
       	return $req;
    }

    //supprimer un chapitre et ses commentaires associés
    public function deletChapterDraft($dataId) 
	{ 
        $db = $this->dbConnect();
        $comment = $db->prepare('DELETE FROM comments WHERE id = ?');
        $comment->execute([$dataId]);
        $req = $db->prepare('DELETE FROM chapters WHERE id = ?');
        $req->execute(array($dataId));
       	return $req;
    }

    public function getPostBack($postIdBack)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, num_chapter, images, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM chapters WHERE id = ?');
        $req->execute(array($postIdBack));
        $postBack = $req->fetch();
    
        return $postBack;
    }

    public function getPostBackDraft($postIdBackDraft)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, num_chapter, images, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM chapters WHERE id = ?');
        $req->execute(array($postIdBackDraft));
        $postBackDraft = $req->fetch();
    
        return $postBackDraft;
    }

    //Modifier un chapitre
    public function updateChapter($title, $numChapter, $content, $publication, $postId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE chapters SET title = ?, num_chapter = ?, content = ?, publication = ? WHERE id = ?');
        $updateChapter = $req->execute(array($title, $numChapter, $content, $publication, $postId));
        return $updateChapter;
    }

    //Modifier un brouillon
    public function updateDraft($title, $numChapter, $content, $publication, $postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE chapters SET title = ?, num_chapter = ?, content = ?, publication = ? WHERE id = ?');
        $updateDraft = $req->execute(array($title, $numChapter, $content, $publication, $postId));
        return $updateDraft;
    }

    
    // Ajouter un chapitre -> publié ou brouilon
    public function postChapter($photo, $title, $content, $numChapter, $publication,$alt) 
	{
		$db = $this->dbConnect();
		$inserChap = $db->prepare('INSERT INTO chapters(images,title, content, num_chapter, creation_date, publication, alt) VALUES (?, ?, ?, ?, NOW(),?,?)');
        $chapitre = $inserChap->execute(array($photo,$title, $content, $numChapter, $publication,$alt));
		return $chapitre;

    }



    
}







