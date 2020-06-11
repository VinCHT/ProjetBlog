
<?php $title = 'Créer un chapitre'; ?>
<?php ob_start(); ?>
<?php require('undermenu.php'); ?>

<script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
<h2 class="titre-page">Editer un chapitre</h2>

      
<div class= editChapter>
    <form class="contact2-form validate-form" method="post" action="index.php?action=editChapitre&amp;id= " enctype="multipart/form-data">
        <input type="text" placeholder="Titre du chapitre" id="title" name="title" class="wrap-input2 validate-input"/>
        <input type="text" placeholder="Texte alternatif de l'image" id="alt" class="wrap-input2 validate-input" name="alt" />
        <input type="text" placeholder="N° du chapitre" id="title" class="wrap-input2 validate-input" name="num_chapter" /><br><br><br>
        <textarea id="mytextarea" name="content" rows="5" cols="50" placeholder="Texte du chapitre"></textarea><br>
        <select name="publication">
            <option value="1">Publier</option>
            <option value="2">Enregister le brouillon</option>
        </select>
        <button type="submit" name="insert">Envoyer</button><br><br>
    </form>
</div> 

<!-- <form method="post" action="index.php?action=sendImage"enctype="multipart/form-data">
        <p>
            <h1>Formulaire</h1>
            <input type="file" required name="image" /><br />
            <button type="submit">Envoyer</button>
        </p>
        <h2> URL de l'image : 
<?php
    if(isset($error) && $error == 0) 
    {
        echo'
            <input class="inputImage" type="text" value="http://developpeur-aura.com/'.$address.'" />

            <img src="'.$address.'" id="image" /><br />
        ';

    } else if(isset($error) && $error == 1)
    {
        echo 'Votre image ne peut pas être envoyée. Vérifiez son extension et sa taille (maximum à 3 Mo).';
    }


?>

</h2>
    </form> -->

<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>

  
