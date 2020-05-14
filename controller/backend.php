<?php
require_once('model/backend/CommentManagerBack.php');
require_once('model/backend/ChapterManagerBack.php');
require_once('model/backend/ContactManagerBack.php');

function dashboard()
{
    require('view/backend/administration.php');
}

function login()
{
    require('view/backend/login.php');
}

function AllMessages()
{
    $allMessagesManagerBack = new ContactManagerBack();
    $allContactsBack = $allMessagesManagerBack->getContactsBack();
    require('view/backend/listContacts.php');
}

function AllComments()
{
    $allCommentsManagerBack = new CommentManagerBack();
    $allCommentsBack = $allCommentsManagerBack->getCommentsBack();

    $allCommentsSignalManagerBack = new CommentManagerBack();
    $allCommentsSignalBack = $allCommentsSignalManagerBack->getCommentsSignal();
    require('view/backend/backComments.php');
}

function listPostsViewBack()
{
    $chapterManagerBack = new ChapterManagerBack();
    $postsBack = $chapterManagerBack->getPostsBack();
    $chapterManagerBackDrafts = new ChapterManagerBack();
    $postsDrafts= $chapterManagerBackDrafts->getDrafts();
    require('view/backend/listPostsViewBack.php');
}

// Supprimer un commentaire
function deleteComment()
{
    $commentManager = new CommentManager();
    $deleteComment = $commentManager->deleteComment();
    require('view/backend/listPostsViewBack.php');

}

