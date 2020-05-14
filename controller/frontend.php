<?php
require_once('model/frontend/CommentManager.php');
require_once('model/frontend/ChapterManager.php');
require_once('model/frontend/ContactManager.php');

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
/*A EFFACER QUAND CA MARCHE DANS LE BACK*/

function contactView()
{
    require('view/frontend/contactView.php');
}

function post()
{
    $chapterManager= new ChapterManager();
    $post = $chapterManager->getPost($_GET['id']);
    
    $commentManager = new CommentManager();
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

function addSignal($idComment,$author, $comment)
{
    $signalManager = new CommentManager();
    $signalContent = $signalManager->postSignal($idComment,$author, $comment);
    if ($signalContent === false) 
    {
        throw new Exception('Impossible denvoyer le message !');
    }
    else {
        header('Location: index.php?action=listPostsView');
    }
}



function addMessage($author, $subject, $content)
{
    $contentManager = new ContactManager();
    $postContent = $contentManager->postContact($author, $subject, $content);
    if ($postContent === false) 
    {
        throw new Exception('Impossible d\'ajouter le message !');
    }
    else {
        header('Location: index.php?action=contactView');
    }
}







