
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
    <!-- <div id="chapitre-img"><img src="<?= htmlspecialchars($postBack['images']) ?>" alt="..."></div>     -->
    <div id="chapitre-numero">Chapitre : <?= htmlspecialchars($postBack['id']) ?></div>
        <form class="form" method="post" action="index.php?action=modifChapitre&amp;id=<?=$postBack['id'] ?>">
            <textarea name="title" rows="1" placeholder="title"><?=$postBack['title'] ?></textarea><br><br>
            <textarea id="mytextarea" name="content"  rows="5" cols="50" placeholder="content"><?=$postBack['content'] ?></textarea><br><br>
            <button type="submit" name="suppChapitre">Enregistrer</button><br>
        </form>

        <form class="form" method="post" action="index.php?action=unpublished&amp;id=<?=$postBack['id'] ?>">
          <button type="submit">Dépublier</button>
        </form>
      <p><a href="index.php?action=listPostsViewBack">Retour à la liste des chapitres</a></p>
  </article>
</div> <!--fin div container-articles -->




  <?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>
