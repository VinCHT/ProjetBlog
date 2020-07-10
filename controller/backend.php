<?php
require_once('model/backend/CommentManagerBack.php');
require_once('model/backend/ChapterManagerBack.php');
require_once('model/backend/ContactManagerBack.php');

// permet de vérifier si l'utilisateur est connecté ou non
//  1/2
function is_connect(): bool {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connect']);
}

//  2/2
function forcer_utilisateur_connecte (): void {
    if(!is_connect()) {
        
        header('Location: index.php?action=login');
        

        exit();
    }
}

// ALLER A LA PAGE DE CONNEXION
function login()
{
    require('view/backend/login.php');
}

// ALLER A LA PAGE D'ADMINISTRATION
function dashboard()
{
    require('view/backend/administration.php');
}

function logout() {
	require('view/backend/logout.php');
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
function signal($commentId) 
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
function approve($commentId) 
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
function modifChapter($title, $numChapter, $content, $publication, $postId) 
{
	$chapModif = new ChapterManagerBack();
	$postBack = $chapModif->updateChapter($title, $numChapter, $content, $publication, $postId);
	
	require('view/backend/administration.php');
}


//Modifier un brouillon
function modifDraft($title, $numChapter, $content, $publication, $postId) 
{
	$draftModif = new ChapterManagerBack();
	$postBackDraft = $draftModif->updateDraft($title, $numChapter, $content, $publication, $postId); 
	
	require('view/backend/administration.php');
}

// supprimer un chapitre
function suppChapter($dataId)
{
	$supprime = new ChapterManagerBack();
	$deletedPost = $supprime->deletChapter($dataId);

	require('view/backend/administration.php');
}

// supprimer un brouillon
function suppChapterDraft($dataId)
{
	$supprime = new ChapterManagerBack();
	$deletedPostDraft = $supprime->deletChapterDraft($dataId);

	require('view/backend/administration.php');
}


//Ajouter un chapitre
function editChapter($photo,$title,$content, $numChapter, $publication,$alt)
{
	$chapEdit = new ChapterManagerBack();
	$chapitre = $chapEdit->postChapter($photo,$title,$content, $numChapter, $publication,$alt);
	require('view/backend/administration.php');

}


