
<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>
<img src="http://developpeur-aura.com/Jean_Forteroche/public/images/header.jpg" class="img-fluid" alt="Responsive image">
<h2 class="titre-page">Connexion - Déconnexion</h2>

    <div class="bg-contact2">
            <div class="container-contact2">
                <div class="wrap-contact2">
                    <form action="index.php?action=addContact" method="post" class="contact2-form validate-form">
                        <span class="contact2-form-title">
                            Se connecter
                        </span>
                     
                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <label for="author">Pseudo</label><br />
                            <input class="input2" type="text" id="author" name="author" />
                        </div>
                        <div class="wrap-input2 validate-input" data-validate="password is required">
                            <label for="mdp">Mot de passe</label><br />
                            <input type="password" class="input2" name="pass" id="password"/>
                        </div>
                  
                        <div class="container-contact2-form-btn">
                            <div class="wrap-contact2-form-btn">
                                <div class="contact2-form-bgbtn"></div>                             
                            </div>
                        </div>
                        <button type="submit">Valider</button> 
                    </form>
                </div>
            </div>
        </div>

<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>

  
