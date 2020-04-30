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
function backChapters()
{
    $chapterManager = new ChapterManager();
    $posts = $chapterManager->getPosts();

    require('view/backend/listPostsView.php');
}

function backContacts()
{
    // require('view/backend/administration.php');
    require('view/backend/listContacts.php');
}
function login()
{
    // require('view/backend/administration.php');
    require('view/backend/login.php');
}
// function creatComment()
// {
//     require('view/backend/creatComment.php');
// }
function singleComment()
{
    require('view/backend/singleCommentView.php');
}

function creatChapter()
{
    require('view/backend/creatChapter.php');
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

function voir() 
{
    $chapterManager = new ChapterManager();
    $lastPost =$chapterManager->getLastPost();
    require('view/backend/postView2.php');
}

function listPostsView()
{
    $chapterManager = new ChapterManager();
    $posts = $chapterManager->getPosts();

    require('view/frontend/listPostsView.php');
}
function listPostsView2()
{
    $chapterManager = new ChapterManager();
    $posts = $chapterManager->getPosts();

    require('view/backend/listPostsView2.php');
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
function post2()
{
    $chapterManager= new ChapterManager();
    $commentManager = new CommentManager();

    $post = $chapterManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/backend/postView2.php');

}

function backComments()
{
    $chapterManager= new ChapterManager();
    $commentManager = new CommentManager();

    $post = $chapterManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/backend/backComments.php');

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

function allComments()
{
    $commentsManager = new CommentManager();
    $postComment = $commentsManager->getAllComments();
  
}

function addComment2($postId, $author, $comment)
{
    $commentManager = new CommentManager();
    $postComment = $commentManager->postComment($postId, $author, $comment);

    if ($postComment === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post2&id=' . $postId);
    }
}

function addMessage($author,$subject, $content)
{
    $contentManager = new ContactManager();
    $postContent = $contentManager->postContact($author, $subject, $content);
  
}


function AllMessages()
{
    $allMessagesManager = new ContactManager();
    $allContacts = $allMessagesManager->getContacts();
    require('view/backend/listContacts.php');
}

function oneDelete()
{
    $messageDelete = new ContactManager();
    $adelete = $messageDelete->goDelete();
  
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





