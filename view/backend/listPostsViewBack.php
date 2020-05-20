
<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>
<?php require('undermenu.php'); ?>
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
      <th scope="col">Contenu</th>
      <th class ="effacerColResp" scope="col">Date de création</th>
      <th class ="gestion" scope="col"colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class ="effacerColResp" scope="row"><?= htmlspecialchars($datapostsBack['id']) ?></th>
      <td><?= htmlspecialchars($datapostsBack['title']) ?></td>
      <td><?= htmlspecialchars($datapostsBack['content']) ?></td>
      <td class ="effacerColResp">Le <?= $datapostsBack['creation_date_fr'] ?></td>
      <th class ="effacerColResp">Modifier</th>
      <th>Suprimer</th>
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
<br>

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
      <th class ="gestion" scope="col"colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class ="effacerColResp" scope="row"><?= htmlspecialchars($dataDrafts['id']) ?></th>
      <td><?= htmlspecialchars($dataDrafts['title']) ?></td>
      <td><?= htmlspecialchars($dataDrafts['content']) ?></td>
      <td class ="effacerColResp">Le <?= $dataDrafts['creation_date_fr'] ?></td>
      <th>Modifier</th>
      <th>Suprimer</th>
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

  
