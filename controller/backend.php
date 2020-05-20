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

function AllCommentsBack()
{
    $allCommentsManagerBack = new CommentManagerBack();
    $allCommentsBack = $allCommentsManagerBack->getCommentsBack();

    $allCommentsManagerBackSignal = new CommentManagerBack();
    $allCommentsBackSignal = $allCommentsManagerBackSignal->getCommentsBackSignal();
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



function createChapter()
{
 
    require('view/backend/createChapter.php');

}

// Signaler un commentaire
function signal($commentId) //signale un commentaire
{
	$allMessagesManagerBack = new CommentManagerBack();
	$signal = $allMessagesManagerBack->signalement($commentId);

	if($signal === false) {
		die('<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Impossible de signaler !</p>');
	}else{ 
		header('Location: index.php?action=listPostsView');

    }

}

// Approuver un commentaire
function approve($commentId) //signale un commentaire
{
	$commentManager = new CommentManagerBack();
	$approve = $commentManager->approbation($commentId);

	if($approve === false) {
		die('<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Impossible d\'approuver ce commentaire !</p>');
	}else{ 
		header('Location: index.php?action=dashboard');

    }

}

// Supprimer un commentaire
function delete($commentId) 
{
	$commentManager = new CommentManagerBack();
	$delete = $commentManager->suppression($commentId);

	if($delete === false) {
		die('<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Impossible de supprimer ce commentaire !</p>');
	}else{ 
		header('Location: index.php?action=dashboard');

    }

}

// Supprimer un message
function deleteM($messageId) 
{
	$allContactsBack = new ContactManagerBack();
	$deleteM = $allContactsBack->suppressionM($messageId);

	if($deleteM === false) {
		die('<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Impossible de supprimer ce message !</p>');
	}else{ 
		header('Location: index.php?action=dashboard');

    }

}