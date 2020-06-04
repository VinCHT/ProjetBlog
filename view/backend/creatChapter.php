
<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>
<?php require('undermenu.php'); ?>

<script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
<h2>Editer un chapitre</h2>
  
      
      
<div class="container-undermenu">
  <form class="form"method="post" action="index.php?action=editChapitre&amp;id= ">
   <input type="text" placeholder="Titre" id="title" name="title" />
   <input type="text" placeholder="N° de chapitre" id="title" name="num_chapter" /><br><br><br>
   <textarea id="mytextarea" name="content"  rows="5" cols="50" placeholder="Texte du chapitre"></textarea><br>
   <select name="publication">
        <option value="1">Publier</option>
        <option value="2">Enregister le brouillon</option>
       
      </select>
   <button type="submit" name="insert">Envoyer</button><br><br>
 </form>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>

  
