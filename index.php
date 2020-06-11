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
        elseif ($_GET['action'] == 'modifChapitre') 
        {
          modifChapitre($_POST['title'], $_POST['content'], $_GET['id']);
        }
        
       

        //Modifier un brouillon
        elseif ($_GET['action'] == 'modifBrouillon') 
        {
            modifBrouillon($_POST['title'], $_POST['content'], $_GET['id']);
           
        }
       
    //Modifier un brouillon
        elseif ($_GET['action'] == 'publishDraft') 
        {
            upDraft($_POST['publication']);
        }
    
         //Supprimer un chapitre
        elseif($_GET['action'] == 'suppChapitre')
        {
            suppChapitre($_GET['id']);
        }

        //Supprimer un brouillon
        elseif($_GET['action'] == 'suppChapitreDraft')
        {
            suppChapitreDraft($_GET['id']);
        }



        //Editer un chapitre pour la première fois                   NE PAS OUBLIER DE POSTER IMAGE ET ALT
        elseif($_GET['action'] == 'editChapitre')
        {
            editChapitre($_POST['title'], $_POST['content'],$_POST['num_chapter'], $_POST['publication'],$_POST['alt']); 
        }

         //ENVOYER IMAGE
         elseif($_GET['action'] == 'sendImage')
         {
                 
                    // ENVOI FICHIER PHP
            if (isset($_FILES['image']) && $_FILES['image'] ['error'] == 0) 
            {
                //variable pour l'erreur
                $error=1;
                // TAILLE
                if ($_FILES['image']['size'] <= 3000000)
                {
                    // EXTENSION
                    $informationsImage = pathinfo($_FILES['image']['name']);
                    $extensionImage = $informationsImage['extension'];
                    $extensionsArray = array('png', 'jpeg', 'jpg');

                    if (in_array($extensionImage, $extensionsArray))
                    {
                        $address = 'public/images/'.time().rand().rand().'.'.$extensionImage;
                        move_uploaded_file($_FILES['image']['tmp_name'], $address);
                        
                        $error=0;
                    }
                }
               
            }

            require('view/backend/createChapter.php');
         }
 

          
        // Publier un brouillon
        elseif ($_GET['action'] == 'draftToPublish')
        {
            draftToPublish($_GET['id']);
        }

         // Dépublier un chapitre
         elseif ($_GET['action'] == 'unpublished')
         {
            unpublished($_GET['id']);
         }

    }
    else {
        homeView();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
