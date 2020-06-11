<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>
<?php require('undermenu.php'); ?>

<h2 class="titre-page">Liste des commentaires en ligne</h2>
<div class="bandBlue"></div>
<?php
while ($datacomments = $allCommentsBack->fetch())
{
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Message</th>
      <th class ="effacerColResp" scope="col">Date</th>
      <th class ="gestion" scope="col" colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= htmlspecialchars($datacomments['author']) ?></td>
      <td><?= htmlspecialchars($datacomments['comment']) ?></td>
      <td class ="effacerColResp"><?= htmlspecialchars($datacomments['comment_date']) ?></td>

      <th><a href="index.php?action=delete&amp;id=<?=$datacomments['id'] ?>">Supprimer</a></th>
      </tbody>
  </table>
  <?php
  }
  ?>

<h2 class ="titre-page">Liste des commentaires hors ligne signalés</h2>
<div class ="bandBlue"></div>
<?php
while ($datacommentsSignal = $allCommentsBackSignal->fetch())
{
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Message</th>
      <th scope="col">Date</th>
      <th class ="gestion" scope="col" colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
  
      <td><?= htmlspecialchars($datacommentsSignal['author']) ?></td>
      <td><?= htmlspecialchars($datacommentsSignal['comment']) ?></td>
      <td><?= htmlspecialchars($datacommentsSignal['comment_date']) ?></td>
      <th><a href="index.php?action=approve&amp;id=<?=$datacommentsSignal['id'] ?>">Approuver</a></th>
      <th><a href="index.php?action=delete&amp;id=<?=$datacommentsSignal['id'] ?>">Supprimer</a></th>
      </tbody>
  </table>
  
<?php
}
?>

<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>

  
