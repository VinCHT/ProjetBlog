<?php $title = 'Contact'; ?>


<?php ob_start(); ?>

  <!-- FORMULAIRE DE CONTACT -->
  <div class="bg-contact2">
            <div class="container-contact2">
                <div class="wrap-contact2">
                    <form class="contact2-form validate-form">
                        <span class="contact2-form-title">
                            Nous contacter
                        </span>
    
                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <input class="input2" type="text" name="name">
                            <span class="focus-input2" data-placeholder="NAME"></span>
                        </div>
    
                        <div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input2" type="text" name="email">
                            <span class="focus-input2" data-placeholder="EMAIL"></span>
                        </div>
    
                        <div class="wrap-input2 validate-input" data-validate = "Message is required">
                            <textarea class="input2" name="message"></textarea>
                            <span class="focus-input2" data-placeholder="MESSAGE"></span>
                        </div>
    
                        <div class="container-contact2-form-btn">
                            <div class="wrap-contact2-form-btn">
                                <div class="contact2-form-bgbtn"></div>
                               
                            </div>
                        </div>
                        <button type="button" class="btn btn-success">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
  <!--FIN FORMULAIRE DE CONTACT -->


<?php $content = ob_get_clean(); ?>

<!-- <?php// require 'template.php'; ?> -->

<?php require 'template.php'; ?>   

<!-- LIEN A LA RACINE -->
<!-- http://developpeur-aura.com/Jean_Forteroche/view/frontend/header.php -->
