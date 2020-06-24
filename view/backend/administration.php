<?php
require_once 'controller/backend.php';
forcer_utilisateur_connecte();
?>

<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>
<img src="http://developpeur-aura.com/Jean_Forteroche/public/images/header.jpg" class="img-fluid" alt="Responsive image">
<h2 class="titre-page">Administration</h2>

<?php require('undermenu.php'); ?>
<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>

  
