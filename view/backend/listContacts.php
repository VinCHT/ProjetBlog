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
      
      <th scope="col">Nom</th>
      <th class ="effacerColResp" scope="col">Subject</th>
      <th class ="effacerColResp" scope="col">Date</th>
      <th scope="col">Message</th>
      <th class ="gestion" scope="col"colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
 
      <td><?= htmlspecialchars($datamessages['author']) ?></td>
      <td class ="effacerColResp"><?= htmlspecialchars($datamessages['content_subject']) ?></td>
      <td class ="effacerColResp"><?= htmlspecialchars($datamessages['content_date']) ?></td>
      <td><?= htmlspecialchars($datamessages['content']) ?></td>
      <th><a href="index.php?action=deleteM&amp;id=<?=$datamessages['id'] ?>">Supprimer</a></th>
     
    </tbody>
  </table>

      <?php
      }
      // $allContacts-closeCursor();
      ?>


<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>

  
