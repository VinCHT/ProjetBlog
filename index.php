<?php

require('controller/frontend.php');
// require('controller/backend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'homeView') {
            homeView();
        }
        elseif ($_GET['action'] == 'listPostsView') {
            listPostsView();
        } 
        elseif ($_GET['action'] == 'contactView') {
            contactView();
        }
        elseif ($_GET['action']=='dashboard') {
            dashboard();
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
                throw new Exception('Aucun identifiant de billet envoyé');
            }
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
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'post') 
        {
            $comment= intval($_GET['id']);
            // intval — Retourne la valeur numérique entière équivalente d'une variable
            addSignal($comment);
          }
        // FORMULAIRE CONTACT
        elseif ($_GET['action'] == 'addContact') 
        {
            addContact($_POST['cont_name']);
        }
        
    }
    else {
        homeView();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
