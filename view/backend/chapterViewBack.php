<?php $title = 'Chapitre backend'; ?>
<?php ob_start(); ?>
<?php require('undermenu.php'); ?>
<script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
<h2 class="titre-page">Modifier le chapitre</h2>



<div class="container-articles"> 
<article class="chapitre" id="article1">
<div id="chapitre-img"><img src="http://developpeur-aura.com/Jean_Forteroche/public/images/article4.jpeg" alt="..."></div>    
<div id="chapitre-numero">Chapitre : <?= htmlspecialchars($postBack['id']) ?></div>
    <form class="form"method="post" action="index.php?action=modifChapitre&amp;id=<?=$postBack['id'] ?>">
        <textarea type="text" name="title" rows="1" placeholder="title"><?=$postBack['title'] ?></textarea><br><br>
        <textarea class="mytextarea" name="content"  rows="5" cols="50" placeholder="content"><?=$postBack['content'] ?></textarea><br><br>
        <button type="submit" name="suppChapitre"class="btn btn-primary">Modifie ton chapitre !</button><br>
    </form>
    <p><a href="index.php?action=listPostsViewBack">Retour à la liste des chapitres</a></p>
    </article>
    </div> <!--fin div container-articles -->




  <?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>
