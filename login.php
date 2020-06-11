<?php $title = 'Se connecter'; ?>
<?php ob_start(); ?>
<?php 
$erreur = null;
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'Jean' && $_POST['motdepasse'] === 'root') {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: http://developpeur-aura.com/Jean_Forteroche/index.php?action=dashboard');
        exit();
    } else {
        $erreur = "Identifiants incorrects";
    }
}
?>

<?php 
require_once 'functions/auth.php';
if(est_connecte()) {
    header('Location : http://developpeur-aura.com/Jean_Forteroche/index.php?action=dashboard');
    exit();
}
?>

<?php if ($erreur): ?>
<div class="alert alert-danger">
    <?= $erreur ?>
</div>
<?php endif ?>

<!-- Formulaire de connexion -->
<div class="bg-contact2">
    <div class="container-contact2">
        <div class="wrap-contact2">
            <form action="" method="post" class="contact2-form validate-form">
                <span class="contact2-form-title">
                    Se connecter
                </span>
                <div class="wrap-input2 validate-input" data-validate="Name is required">
                    <label for="name">Pseudo</label><br />
                    <input class="input2" type="text" id="pseudo" name="pseudo" />
                </div>
                <div class="wrap-input2 validate-input" data-validate="password is required">
                    <label for="password">Mot de passe</label><br />
                    <input type="password" class="input2" name="motdepasse" id="password"/>
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
