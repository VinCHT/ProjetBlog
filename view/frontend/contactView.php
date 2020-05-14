<?php $title = 'Contact'; ?>


<?php ob_start(); ?>
<img src="http://developpeur-aura.com/Jean_Forteroche/public/images/header.jpg" class="card-img-top" class="img-fluid" alt="Responsive image">
<!-- FORMULAIRE DE CONTACT -->
<div class="bg-contact2">
            <div class="container-contact2">
                <div class="wrap-contact2">
                    <form class="contact2-form validate-form"action="index.php?action=addMessage&amp;id=<?= $post['id'] ?>" method="post">
                        <span class="contact2-form-title">
                            Nous contacter
                        </span>
    
                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <label for="author">Prénom</label><br />
                            <input class="input2" type="text" id="author" name="author" />
                        </div>
                        <div class="wrap-input2 validate-input" data-validate="subject is required">
                            <label for="content_subject">Objet</label><br />
                            <input class="input2" type="text" id="content_subject" name="content_subject" />
                        </div>
                        <div class="wrap-input2 validate-input" data-validate = "Message is required">
                            <label for="content">Commentaire</label><br />
                            <textarea class="input2" id="content" name="content"></textarea>
                        </div>
    
                        <div class="container-contact2-form-btn">
                            <div class="wrap-contact2-form-btn">
                                <div class="contact2-form-bgbtn"></div>
                               
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success"/> 
                    </form>
                </div>
            </div>
        </div>
  <!--FIN FORMULAIRE DE CONTACT -->












<?php $content = ob_get_clean(); ?>


<?php require('view/template.php'); ?> 

<!-- LIEN A LA RACINE -->
<!-- http://developpeur-aura.com/Jean_Forteroche/view/frontend/header.php -->
