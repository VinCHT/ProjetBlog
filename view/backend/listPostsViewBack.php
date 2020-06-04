
<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>
<?php require('undermenu.php'); ?>
<script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
<h2 class="titre-page">Tous les chapitres publiés</h2>

<?php
while ($datapostsBack = $postsBack->fetch())
{
?>

<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
    <th class ="effacerColResp" scope="col">Chapitre n°</th>
      <th scope="col">Titre</th>
      <th class="contenu-center" scope="col">Contenu</th>
      <th class ="effacerColResp" scope="col">Date de création</th>
      <th class ="effacerColResp" class ="gestion" scope="col"colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class ="effacerColResp" scope="row"><?= htmlspecialchars($datapostsBack['id']) ?></th>
      <td><?= htmlspecialchars($datapostsBack['title']) ?></td>
      <td class="contenu-center"><?= nl2br(substr($datapostsBack['content'], 0, 200).'...') ?></td>
      <td class ="effacerColResp">Le <?= $datapostsBack['creation_date_fr'] ?></td>
     
      <th><a class ="effacerColResp" class="lien-navigation" href="index.php?action=postBack&amp;id=<?= $datapostsBack['id'] ?>">Modifier le chapitre</a></th>
      <th><a class ="effacerColResp" type="submit" href="index.php?action=suppChapitre&amp;id=<?=$datapostsBack['id'] ?>">Supprimer</th>
     
      </tr>
  </tbody>
</table>



<?php
}

?>


<h2 class="titre-page">Tous les brouillons</h2>
<?php
while ($dataDrafts = $postsDrafts->fetch())
{
?>

<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
    <th class ="effacerColResp" scope="col">Chapitre n°</th>
      <th scope="col">Titre</th>
      <th scope="col">Contenu</th>
      <th class ="effacerColResp" scope="col">Date de création</th>
      <th class ="effacerColResp" class ="gestion" scope="col"colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class ="effacerColResp" scope="row"><?= htmlspecialchars($dataDrafts['id']) ?></th>
      <td><?= htmlspecialchars($dataDrafts['title']) ?></td>
      <td><?= nl2br(substr($dataDrafts['content'], 0, 200).'...') ?></td>
      <td class ="effacerColResp">Le <?= $dataDrafts['creation_date_fr'] ?></td>
      <th><a  class ="effacerColResp" class="lien-navigation" href="index.php?action=postBackDraft&amp;id=<?= $dataDrafts['id'] ?>">Modifier le brouillon</a></th>
      <th><a class ="effacerColResp" type="submit" href="index.php?action=suppChapitreDraft&amp;id=<?=$dataDrafts['id'] ?>">Supprimer</th>
  
    </tr>
  </tbody>
</table>


<?php
}

?>















<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col"><a href="index.php?action=createChapter" type="submit">+ Ajouter un nouveau chapitre</a></th>
    </tr>
  </thead>
</table>




<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>

  
