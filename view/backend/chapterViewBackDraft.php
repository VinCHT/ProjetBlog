<?php $title = 'Chapitre backend'; ?>
<?php ob_start(); ?>
<?php require('undermenu.php'); ?>
<script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
<h2 class="titre-page">Modifier le brouillon</h2>



<div class="container-articles"> 
<article class="chapitre" id="article1">
<div id="chapitre-img"><img src="http://developpeur-aura.com/Jean_Forteroche/public/images/article4.jpeg" alt="..."></div>    
<div id="chapitre-numero">Chapitre : <?= htmlspecialchars($postBackDraft['id']) ?></div>
    <form class="form"method="post" action="index.php?action=modifBrouillon&amp;id=<?=$postBackDraft['id'] ?>">
        <textarea type="text" name="title" rows="1" placeholder="title"><?=$postBackDraft['title'] ?></textarea><br><br>
        <textarea class="mytextarea" name="content"  rows="5" cols="50" placeholder="content"><?=$postBackDraft['content'] ?></textarea><br><br>
        <button type="submit" name="suppChapitre"class="btn btn-primary">Modifier le brouillon</button><br>
        
    </form>
    <p><a href="index.php?action=publishDraft&amp;id=<?=$postBackDraft['id'] ?>">Publier</a></p>
    <p><a href="index.php?action=listPostsViewBack">Retour à la liste des brouillon</a></p>
    </article>
    </div> <!--fin div container-articles -->





  <?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>
