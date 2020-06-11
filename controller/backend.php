<?php
require_once('model/backend/CommentManagerBack.php');
require_once('model/backend/ChapterManagerBack.php');
require_once('model/backend/ContactManagerBack.php');

function dashboard()
{
    require('view/backend/administration.php');
}

function logout() {
	require('logout.php');
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

//ENVOYER UN BROUILLON EN PUBLICATION
function draftToPublish($postBackDraft) //signale un commentaire
{
	$draft2publication = new ChapterManagerBack();
	$bePublish = $draft2publication->get1($postBackDraft);
	require('view/backend/administration.php');
}

//ENVOYER UN BROUILLON EN PUBLICATION
function unpublished($postBack) //signale un commentaire
{
	$unPublication = new ChapterManagerBack();
	$unPublish = $unPublication->get2($postBack);
	require('view/backend/administration.php');
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

//Afficher un chapitre dans le backend pour pouvoir le modifier par la suite
function postBack()
{
    $chapterManagerBack= new ChapterManagerBack();
    $postBack = $chapterManagerBack->getPostBack($_GET['id']);
    
    require('view/backend/chapterViewBack.php');

}

//Afficher un brouillon dans le backend pour pouvoir le modifier par la suite
function postBackDraft()
{
    $chapterManagerBack= new ChapterManagerBack();
    $postBackDraft = $chapterManagerBack->getPostBackDraft($_GET['id']);
    
    require('view/backend/chapterViewBackDraft.php');

}



//Modifier un chapitre
function modifChapitre($title, $content,$postId) 
{
	$chapModif = new ChapterManagerBack();
	$postBack = $chapModif->updateChapitre($title, $content,$postId);
	
	require('view/backend/administration.php');
}

//Modifier un brouillon
function modifBrouillon($title, $content,$postId) 
{
	$brouillonModif = new ChapterManagerBack();
	$postBackDraft = $brouillonModif->updateBrouillon($title, $content,$postId);
	
	require('view/backend/administration.php');
}


function upDraft($publication) 
{
	$upDraft = new ChapterManagerBack();
	$postUpBackDraft = $upDraft->updateTheDraft($publication);
	
	require('view/backend/administration.php');
}



// supprimer un chapitre
function suppChapitre($dataId)
{
	$supprime = new ChapterManagerBack();
	$deletedPost = $supprime->deletChapitre($dataId);

	require('view/backend/administration.php');
}

// supprimer un brouillon
function suppChapitreDraft($dataId)
{
	$supprime = new ChapterManagerBack();
	$deletedPostDraft = $supprime->deletChapitreDraft($dataId);

	require('view/backend/administration.php');
}


//Ajouter un chapitre
function editChapitre($title, $content,$numChapter,$publication,$alt)
{
	$chapEdit = new ChapterManagerBack();
	$chapitre = $chapEdit->postChapitre($title, $content,$numChapter,$publication,$alt);
	require('view/backend/administration.php');

}

//Publier un brouillon
function postDraftOnline($content,$postId)
{
	$draftEdit = new ChapterManagerBack();
	$draftOnline = $draftEdit->draftOnline($content,$postId);
	require('view/backend/administration.php');

}
