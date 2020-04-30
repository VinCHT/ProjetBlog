
<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>
<?php require('undermenu.php'); ?>
<h2 class="titre-page">Tous les chapitres publiés</h2>
<?php
while ($data = $posts->fetch())
{
?>

<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Chapitre n°</th>
      <th scope="col">Titre</th>
      <th scope="col">Extrait</th>
      <th scope="col">Date de création</th>
      <th class ="gestion" scope="col"colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= htmlspecialchars($data['id']) ?></th>
      <td><?= htmlspecialchars($data['title']) ?></td>
      <td><?= nl2br(substr($data['content'], 0, 50).'...') ?></td>
      <td>Le <?= $data['creation_date_fr'] ?></td>
      <th><a class="lien-navigation" href="index.php?action=post2&amp;id=<?= $data['id'] ?>">Voir</a></th>
      <th>Suprimer</th>
    </tr>
  </tbody>
</table>
<?php
}
$posts->closeCursor();
?>
<table class="table">
  <thead class="thead-light">
    <tr>
      <!-- <th scope="col"><a href="index.php?action=creatChapter" type="button" class="btn btn-link">+ Ajouter un nouveau chapitre</a></th> -->
      <th scope="col"><a href="index.php?action=creatChapter" type="submit" class="btn btn-success">+ Ajouter un nouveau chapitre</a></th>
    </tr>
  </thead>
</table>


<!-- PROBLEME UNE SEULE BOUCLE EST VISIBLE... -->
<h2 class="titre-page">Tous les brouillons</h2>

<?php
while ($data = $posts->fetch())
{
?>

<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Chapitre n°</th>
      <th scope="col">Titre</th>
      <th scope="col">Extrait</th>
      <th scope="col">Date de création</th>
      <th class ="gestion" scope="col"colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= htmlspecialchars($data['id']) ?></th>
      <td><?= htmlspecialchars($data['title']) ?></td>
      <td><?= nl2br(substr($data['content'], 0, 50).'...') ?></td>
      <td>Le <?= $data['creation_date_fr'] ?></td>
      <th><a class="lien-navigation" href="index.php?action=post2&amp;id=<?= $data['id'] ?>">Voir</a></th>
      <th>Suprimer</th>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col"><a href="index.php?action=creatChapter" type="submit" class="btn btn-success">+ Ajouter un nouveau chapitre</a></th>
    </tr>
  </thead>
</table>
<?php
}
$posts->closeCursor();
?>



<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>

  
