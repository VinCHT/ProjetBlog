
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
                     
                        <div class="col-md-12">
                            <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Pseudo"/>
                        </div>
                        <div class="col-md-12">
                            <input type="password" name="pass" id="password" class="form-control" placeholder="Mot de passe"/>
                        </div>
                  
                        <div class="container-contact2-form-btn">
                            <div class="wrap-contact2-form-btn">
                                <div class="contact2-form-bgbtn"></div>                             
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success" placeholder="Connexion"/> 
                    </form>
                </div>
            </div>
        </div>

<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>

  
