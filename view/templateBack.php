<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Billet simple pour l'Alaska : Le nouvel ouvrage de Jean Forteroche">
        <meta name="author" content="Jean Forteroche">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="http://developpeur-aura.com/Jean_Forteroche/public/images/logo.png">
        <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
        <link href="http://developpeur-aura.com/Jean_Forteroche/public/css/style.css" rel="stylesheet">
           <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Titre de l'onglet est au sein d'une variable -->
        <script src="https://cdn.tiny.cloud/1/7qa3o00yg75okl9rojzpgdhn5im31vdn0qth87r52naw9g5s/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <!-- <script>
            tinymce.init({
                    selector: '#mytextarea'
            });
        </script> -->
        <title><?= $title ?></title>

    </head>
    <body>
  

    <?php require('backend/headerBack.php');?>
    <br>

     <!-- Affichage du contenu de la page -->
     <?= $content ?>


     <br>
     <?php require('backend/footerBack.php');?>
    </body>
</html>