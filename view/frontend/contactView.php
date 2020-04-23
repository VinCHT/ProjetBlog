<?php $title = 'Contact'; ?>


<?php ob_start(); ?>
<img src="http://developpeur-aura.com/Jean_Forteroche/public/images/header.jpg" class="card-img-top" class="img-fluid" alt="Responsive image">
  <!-- FORMULAIRE DE CONTACT -->
  <div class="bg-contact2">
            <div class="container-contact2">
                <div class="wrap-contact2">
                    <form action="index.php?action=addContact" method="post" class="contact2-form validate-form">
                        <span class="contact2-form-title">
                            Nous contacter
                        </span>
                        <!-- <div class="wrap-input2 validate-input" data-validate="Subject is required">
                            <input class="input2" type="text" name="subject">
                            <span class="focus-input2" data-placeholder="SUBJECT"></span>
                        </div> -->
                        <!-- <div class="wrap-input2 validate-input" data-validate="Name is required">
                        <label for="pseudo"></label><br />
                            <input class="input2" type="text" name="name">
                            <span class="focus-input2" data-placeholder="NAME"></span>
                        </div> -->
                        <div>
                            <label for="pseudo">Pseudo</label><br/>
                            <input class="input2" type="text"/>
                        </div>
                        <!-- <div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input2" type="text" name="email">
                            <span class="focus-input2" data-placeholder="EMAIL"></span>
                        </div>
    
                        <div class="wrap-input2 validate-input" data-validate = "Message is required">
                        <label for="message"></label><br />
                            <textarea class="input2" name="message"></textarea>
                            <span class="focus-input2" data-placeholder="MESSAGE"></span>
                        </div>  -->
    
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

<!-- <?php// require 'template.php'; ?> -->

<?php require('view/template.php'); ?> 

<!-- LIEN A LA RACINE -->
<!-- http://developpeur-aura.com/Jean_Forteroche/view/frontend/header.php -->
