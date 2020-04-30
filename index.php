<?php

require('controller/frontend.php');
// require('controller/backend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'homeView') {
            homeView();
        }
        if ($_GET['action'] == 'voir') {
            voir();
        }
        elseif ($_GET['action'] == 'listPostsView') {
            listPostsView();
        } 
        elseif ($_GET['action'] == 'listPostsView2') {
            listPostsView2();
        } 
    
        elseif ($_GET['action'] == 'contactView') {
            contactView();
        }
        elseif ($_GET['action']=='dashboard') {
            dashboard();
        }
        elseif ($_GET['action']=='creatChapter') {
            creatChapter();
        }
       
        elseif ($_GET['action']=='singleComment') {
            singleComment();
        }
        elseif ($_GET['action']=='login') {
            login();
        }
        elseif ($_GET['action']=='backChapters') {
            backChapters();
        }
      
        elseif ($_GET['action']=='backContacts') {
            backContacts();
        }
        elseif ($_GET['action']=='adminChapters') {
            adminChapters();
        }
        elseif ($_GET['action']=='adminComments') {
            adminComments();
        }
        elseif ($_GET['action']=='reportComments') {
            reportComments();
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
        elseif ($_GET['action'] == 'backComments') {
                backComments();
            
        }
        elseif ($_GET['action'] == 'commentconfirm') {
            commentConfirm();
        
    }
     
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
        }
        elseif ($_GET['action'] == 'addMessage') 
        {
            addMessage($_POST['author'],$_POST['content_subject'], $_POST['content']);
        }
        elseif ($_GET['action'] == 'getMessages') 
        {
            AllMessages();
        }
        elseif ($_GET['action'] == 'supprim') 
        {
          
            oneDelete();
            
        }
        elseif ($_GET['action'] == 'post') 
        {
            $comment= intval($_GET['id']);
            // intval — Retourne la valeur numérique entière équivalente d'une variable
            addSignal($comment);
          }
    
     
        
    }
    else {
        homeView();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
