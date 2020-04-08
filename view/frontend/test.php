

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

<?php $title = 'test'; ?>


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


<p> TEST<?php echo $_GET['nom']; ?> <?php echo $_GET['prenom']; ?>
  
<?php $content = ob_get_clean(); ?>



     

<?php require('view/frontend/template.php'); ?>
     




    </body>
</html>