<?php
require_once('model/frontend/CommentManager.php');
require_once('model/frontend/ChapterManager.php');
require_once('model/frontend/ContactManager.php');
//a mettre dans controller backend
function dashboard()
{
    // require('view/backend/administration.php');
    require('view/backend/administration.php');
}

function adminChapters()
{
    // require('view/backend/administration.php');
    require('view/frontend/blistPostsView.php');
}

function adminComments()
{
    // require('view/backend/administration.php');
    require('view/frontend/blistComments.php');
}

function reportComments()
{
    // require('view/backend/administration.php');
    require('view/frontend/reportComments.php');
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
function addContact($contactName) 
{
    $contactManager = new ContactManager();
    $postContact = $contactManager->postContact($contactName);
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




