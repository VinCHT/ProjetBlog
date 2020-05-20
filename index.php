<?php

require('controller/frontend.php');
require('controller/backend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'homeView') {
            homeView();
        }
        elseif ($_GET['action'] == 'listPostsView') {
            listPostsView();
        } 
        elseif ($_GET['action'] == 'listPostsViewBack') {
            listPostsViewBack();
        } 
        elseif ($_GET['action'] == 'createChapter') {
            createChapter();
        } 
      
        elseif ($_GET['action'] == 'contactView') {
            contactView();
        }
        elseif ($_GET['action']=='dashboard') {
            dashboard();
        }
       
        elseif ($_GET['action']=='singleComment') {
            singleComment();
        }
        elseif ($_GET['action']=='login') {
            login();
        }
      
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
        }
        elseif ($_GET['action'] == 'post2') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post2();
            }
            else {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
        }

      
        elseif ($_GET['action'] == 'addComment') 
        {
            if (isset($_GET['id']) && $_GET['id'] > 0) 
            {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) 
                {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else 
                {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else 
            {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
        }

        // Signaler un commentaire
        elseif ($_GET['action'] == 'signal')
        {
            signal($_GET['id']);
        }
        // Approuver un commentaire
        elseif ($_GET['action'] == 'approve') 
        {
            approve($_GET['id']);
        }
        // Supprimer un commentaire
        elseif ($_GET['action'] == 'delete') 
        {
            delete($_GET['id']);
        }
        // Supprimer un message
        elseif ($_GET['action'] == 'deleteM') 
        {
            deleteM($_GET['id']);
        }

        

        elseif ($_GET['action'] == 'addMessage') 
        {
            if (!empty($_POST['author']) && !empty($_POST['content_subject']) && !empty($_POST['content'])) 
            {
                addMessage($_POST['author'],$_POST['content_subject'], $_POST['content']);
            }
            else 
            {
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
            
        }
        
     
        elseif ($_GET['action'] == 'getMessages') 
        {
            AllMessages();
        }
        elseif ($_GET['action'] == 'getComments') 
        {
            AllCommentsBack();
        }
        

       




    }
    else {
        homeView();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
