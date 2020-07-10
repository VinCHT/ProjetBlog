<?php
require_once('ConnectManager.php');

class ChapterManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $posts  = $db->query('SELECT id, title, content, num_chapter, images, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM chapters WHERE publication= 1 ORDER BY creation_date DESC');
        return $posts;
    }
    
    public function getLastPost()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, num_chapter, images, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM chapters WHERE publication= 1 ORDER BY creation_date DESC LIMIT 1');
        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, num_chapter, images, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM chapters WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();
        return $post;
    }

  
}







