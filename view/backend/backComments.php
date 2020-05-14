<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>
<?php require('undermenu.php'); ?>

<h2 class="titre-page">Liste des commentaires</h2>

<?php
while ($datacomments = $allCommentsBack->fetch())
{
?>
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">n°</th>
      <th scope="col">Nom</th>
      <th scope="col">Message</th>
      <th class ="gestion" scope="col"colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row"><?= htmlspecialchars($datacomments['id']) ?></th>
      <td><?= htmlspecialchars($datacomments['author']) ?></td>
      <td><?= htmlspecialchars($datacomments['comment']) ?></td>
      <em><a href="index.php?action=deleteComment">Supprimer</a></em>
      </tbody>
  </table>
  <?php
      }
      // $allContacts-closeCursor();
      ?>

<h2 class="titre-page">Liste des commentaires signalés</h2>
<?php
while ($datacommentsSignal = $allCommentsSignalBack->fetch())
{
?>
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">n°</th>
      <th scope="col">Nom</th>
      <th scope="col">Message</th>
      <th class ="gestion" scope="col"colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row"><?= htmlspecialchars($datacommentsSignal['id']) ?></th>
      <td><?= htmlspecialchars($datacommentsSignal['author']) ?></td>
      <td><?= htmlspecialchars($datacommentsSignal['comment']) ?></td>
      <th><a class="lien-navigation" href="index.php?=supprim=<?=htmlspecialchars($datacommentsSignal['id']) ?>">Supprimer</a></th>
      </tbody>
  </table>
  <?php
      }
      // $allContacts-closeCursor();
      ?>

<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>

  
