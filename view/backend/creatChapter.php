
<?php $title = 'Créer un chapitre'; ?>
<?php ob_start(); ?>
<?php require('undermenu.php'); ?>

<script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
<h2 class="titre-page">Editer un chapitrre</h2>

<div class="bg-contact2">
    <div class="container-contact2">
        <div class="wrap-contact2">
          <article class="chapitre">
            <div class="editChapter">
                <form class="contact2-form validate-form"method="post" action="index.php?action=editChapter&amp;id=" enctype="multipart/form-data">
                    <input type="text" placeholder="Titre du chapitre" id="title" name="title" class="wrap-input2 validate-input"/> 
                    <textarea id="mytextarea" name="content" rows="5" cols="50" placeholder="Texte du chapitre"></textarea>
                    <input type="text" placeholder="N° du chapitre" id="num_chapter" class="wrap-input2 validate-input" name="num_chapter" /><br><br><br>
                    <input class="wrap-input2 validate-input" type="file" name="img" class="form-control-file">

                    <input type="text" placeholder="Texte alternatif de l'image" id="Texte alternatif de l'image" name="alt" class="wrap-input2 validate-input" /> 
                    <select class="wrap-input2 validate-input" name="publication">
                        <option value="1">Publier</option>
                        <option value="2">Brouillon</option>
                    </select> 
                    <br>
                    <button class="wrap-input2 validate-input" type="submit" name="btnUpdateChapter" name="btnAjout">Envoyer</button>    
                
                </form>
            <div>
        </article>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>


