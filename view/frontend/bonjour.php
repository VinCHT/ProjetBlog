

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Billet simple pour l'Alaska : Le nouvel ouvrage de Jean Forteroche">
        <meta name="author" content="Jean Forteroche">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="../img/logo.jpg">
        <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
        <link rel="stylesheet" href="public/css/contact.css">
    
        <link href="public/css/style.css" rel="stylesheet"/>
           <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Titre de l'onglet est au sein d'une variable -->
        <title><?= $title ?></title>

    </head>
    <body>
  
    <?php require('view/frontend/header.php'); ?>
    <?php require('model/connectManager.php'); ?>

<!-- Page d'accueil -->

<?php $title = 'Contact'; ?>

<?php ob_start(); ?>


<!-- BANNIERE -->
<div id="banniere"></div>
<!--FIN BANNIERE -->




<p> Bonjour <?php echo $_GET['nom']; ?> <?php echo $_GET['prenom']; ?>
  
<?php $content = ob_get_clean(); ?>

     

<?php require('template.php'); ?>



    </body>
</html>