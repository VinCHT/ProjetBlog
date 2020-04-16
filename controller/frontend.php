<?php
require_once('model/frontend/CommentManager.php');
require_once('model/frontend/ChapterManager.php');
require_once('model/frontend/ContactManager.php');
//a mettre dans controller backend
function dashboard()
{
    // require('view/backend/administration.php');
    require('view/frontend/administration.php');
}


function homeView() 
{
    $chapterManager = new ChapterManager();
    $lastPost =$chapterManager->getLastPost();
    require('view/frontend/homeView.php');
}

function listPostsView()
{
    $chapterManager = new ChapterManager();
    $posts = $chapterManager->getPosts();

    require('view/frontend/listPostsView.php');
}

function contactView()
{
    require('view/frontend/contactView.php');
}

function post()
{
    $chapterManager= new ChapterManager();
    $commentManager = new CommentManager();

    $post = $chapterManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();
    $postComment = $commentManager->postComment($postId, $author, $comment);

    if ($postComment === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function addSignal($postId, $author, $comment)
{
    $affectedLines = postSignal($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible de signaler le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function addPseudo($pseudo)
{
    $affectedLines = postPseudo($pseudo);
    header('Location: index.php?');
}



