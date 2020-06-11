
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

<div class="bandBlue"></div>
<table class="table">
  <thead class="thead-dark">
    <tr>
    <th class ="effacerColResp" scope="col">Chapitre n°</th>
      <th scope="col">Titre</th>
      <th class="contenu-center" scope="col">Contenu</th>
      <th class ="effacerColResp" scope="col">Date de création</th>
      <th  class ="gestion" scope="col" colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class ="effacerColResp" scope="row"><?= htmlspecialchars($datapostsBack['id']) ?></th>
      <td><?= htmlspecialchars($datapostsBack['title']) ?></td>
      <td class="contenu-center"><?= nl2br(substr($datapostsBack['content'], 0, 200).'...') ?></td>
      <td class ="effacerColResp">Le <?= $datapostsBack['creation_date_fr'] ?></td>
  
      <th class ="effacerColResp"><a class="lien-navigation" href="index.php?action=postBack&amp;id=<?= $datapostsBack['id'] ?>">Modifier le chapitre</a></th>
      <th><a href="index.php?action=suppChapitre&amp;id=<?=$datapostsBack['id'] ?>">Supprimer</a></th>
     
      </tr>
  </tbody>
</table>

<?php
}
?>


<h2 class="titre-page">Tous les brouillons</h2>
<div class="bandBlue"></div>
<?php
while ($dataDrafts = $postsDrafts->fetch())
{
?>


<table class="table">
  <thead class="thead-dark">
    <tr>
    <th class ="effacerColResp" scope="col">Chapitre n°</th>
      <th scope="col">Titre</th>
      <th scope="col">Contenu</th>
      <th class ="effacerColResp" scope="col">Date de création</th>
      <th  class ="gestion" scope="col" colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class ="effacerColResp" scope="row"><?= htmlspecialchars($dataDrafts['id']) ?></th>
      <td><?= htmlspecialchars($dataDrafts['title']) ?></td>
      <td><?= nl2br(substr($dataDrafts['content'], 0, 200).'...') ?></td>
      <td class ="effacerColResp" >Le <?= $dataDrafts['creation_date_fr'] ?></td>
      <th class ="effacerColResp"><a  class="lien-navigation" href="index.php?action=postBackDraft&amp;id=<?= $dataDrafts['id'] ?>">Modifier le brouillon</a></th>
      <th><a href="index.php?action=suppChapitreDraft&amp;id=<?=$dataDrafts['id'] ?>">Supprimer</a></th>
  
    </tr>
  </tbody>
</table>
<br>

<?php
}

?>


<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>

  
