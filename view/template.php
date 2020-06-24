<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Billet simple pour l'Alaska : Le nouvel ouvrage de Jean Forteroche">
        <meta name="author" content="Jean Forteroche">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="http://developpeur-aura.com/Jean_Forteroche/public/images/logo.png">
        <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
        <link href="http://developpeur-aura.com/Jean_Forteroche/public/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title><?= $title ?></title>
    </head>
    <body>
  
    <?php require('frontend/header.php');?>
   
     <?= $content ?>

     <?php require('frontend/footer.php');?>
    </body>
</html>