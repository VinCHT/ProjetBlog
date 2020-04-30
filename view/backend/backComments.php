
<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>
<?php require('undermenu.php'); ?>

<h2>Voir la liste des commentaires</h2>

<?php
while ($comment = $comments->fetch())
{
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Pseudo</th>
      <th scope="col">Commentaire</th>
      <th scope="col">Date de publication</th>
    
      <th class ="gestion" scope="col"colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= htmlspecialchars($comment['author']) ?></td>
      <td><?= nl2br(htmlspecialchars($comment['comment'])) ?></td>
      <td> le <?= $comment['comment_date_fr'] ?></td>
      <th>Voir</th>
      <th>Suprimer</th>
    </tr>
  </tbody>
</table>
<?php
}
?>



<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>

  
