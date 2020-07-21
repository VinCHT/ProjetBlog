<?php $title = 'Contact'; ?>

<?php ob_start(); ?>
<img src="http://developpeur-aura.com/Jean_Forteroche/public/images/header.jpg" class="card-img-top" alt="Responsive image">
<!-- FORMULAIRE DE CONTACT -->
<div class="bg-contact2">
    <div class="container-contact2">
        <div class="wrap-contact2">
            <form class="contact2-form validate-form" action="index.php?action=addMessage&amp;id=<?= $post['id'] ?>" method="post">
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
                <div class="form-check">
                    <input class="input6" type="checkbox" class="form-check-input" id="Check1" name="Check1" data-validate = "La case doit être cochée">
                    <label class="form-check-label" for="Check1">J'autorise le site à conserver mes données personnelles. Celles-ci seront uniquement destinées à recueillir les données provenant du formulaire de contact. Aucune exploitation commerciale ne sera faite des données conservées.</label>
                </div>
                <button type="submit">Valider</button> 
            </form>
        </div>
    </div>
</div>
  <!--FIN FORMULAIRE DE CONTACT -->


<?php $content = ob_get_clean(); ?>


<?php require('view/template.php'); ?> 

<!-- LIEN A LA RACINE -->
<!-- http://developpeur-aura.com/Jean_Forteroche/view/frontend/header.php -->
