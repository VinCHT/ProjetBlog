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
        elseif ($_GET['action']=='login') {
            login();
        }
       
        elseif ($_GET['action']=='singleComment') {
            singleComment();
        }
        elseif ($_GET['action']=='logout') {
            logout();
        }
        ////Poster un chapitre en frontend
        elseif ($_GET['action'] == 'post') 
        {
            if (isset($_GET['id']) && $_GET['id'] > 0) 
            {
                post();
            }
            else {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
        }
        //Poster un chapitre en backend
        elseif ($_GET['action'] == 'postBack') 
        {
            if (isset($_GET['id']) && $_GET['id'] > 0) 
            {
                postBack();
            }
            else {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
        }
        //Poster un brouillon en back
        elseif ($_GET['action'] == 'postBackDraft') 
        {
            if (isset($_GET['id']) && $_GET['id'] > 0) 
            {
                postBackDraft();
            }
            else {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
        }
        // Ajouter un commentaire
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

        //Ajouter un message
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
        
        //Récupérer tous les messages
        elseif ($_GET['action'] == 'getMessages') 
        {
            AllMessages();
        }

         //Récupérer tous les commentaires
        elseif ($_GET['action'] == 'getComments') 
        {
            AllCommentsBack();
        }
        
        //Modifier un chapitre
        elseif ($_GET['action'] == 'modifChapter') 
        {
            modifChapter($_POST['title'], $_POST['num_chapter'], $_POST['content'], $_POST['publication'], $_GET['id']);
        }
        
       //Modifier un brouillon
       elseif ($_GET['action'] == 'modifDraft') 
       {
            modifDraft($_POST['title'], $_POST['num_chapter'], $_POST['content'], $_POST['publication'], $_GET['id']);
       }
    
         //Supprimer un chapitre
        elseif($_GET['action'] == 'suppChapter')
        {
            suppChapter($_GET['id']);
        }

        //Supprimer un brouillon
        elseif($_GET['action'] == 'suppChapterDraft')
        {
            suppChapterDraft($_GET['id']);
        }

        //Editer un chapitre 
          elseif($_GET['action'] == 'editChapter')
          {
            //variables
            $title= $_POST['title'];
            $content= $_POST['content'];
            $numChapter= $_POST['num_chapter'];
            $publication=$_POST['publication'];
            $photo= $_FILES['img']['name'];
            $upload="public/images/".$photo;
            move_uploaded_file($_FILES['img']['tmp_name'], $upload);
            $alt= $_POST['alt'];
  
            editChapter($_FILES['img']['name'],$_POST['title'],$_POST['content'],$_POST['num_chapter'], $_POST['publication'],$_POST['alt']); 
          }

                  
        // Publier un brouillon
        elseif ($_GET['action'] == 'draftToPublish')
        {
            draftToPublish($_GET['id']);
        }

        

    }
    else {
        homeView();
    }
}
catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}