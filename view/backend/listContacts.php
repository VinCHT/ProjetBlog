<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>
<?php require('undermenu.php'); ?>

<h2 class="titre-page">Liste des messages</h2>

<?php
while ($datamessages = $allContactsBack->fetch())
{
?>
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">n°</th>
      <th scope="col">Nom</th>
      <th scope="col">Subject</th>
      <th scope="col">Date</th>
      <th scope="col">Message</th>
      <th class ="gestion" scope="col"colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= htmlspecialchars($datamessages['id']) ?></th>
      <td><?= htmlspecialchars($datamessages['author']) ?></td>
      <td><?= htmlspecialchars($datamessages['content_subject']) ?></td>
      <td><?= htmlspecialchars($datamessages['content_date']) ?></td>
      <td><?= htmlspecialchars($datamessages['content']) ?></td>

      <th>
      <?php 
        if ($datamessages['supprim'] == 0) 
      { 
      ?>
        <a class="lien-navigation" href="index.php?=supprim=<?=htmlspecialchars($datamessages['id']) ?>">Supprimer</a>
        <?php 
      }
        ?>
      </th>
    </tbody>
  </table>

      <?php
      }
      // $allContacts-closeCursor();
      ?>


<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>

  
