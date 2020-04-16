<?php $title = 'Liste des chapitres'; ?>

<?php ob_start(); ?>
<img src="http://developpeur-aura.com/Jean_Forteroche/public/images/header.jpg" class="card-img-top" alt="bannière" id="banniere">
<h2 class="titre-page">Tous les chapitres</h2>
<?php
while ($data = $posts->fetch())
{
?>
            <div class="container-articles"> 
            <article class="chapitre" id="article1">
            <div id="chapitre-img"><img src="http://developpeur-aura.com/Jean_Forteroche/public/images/article4.jpeg" alt="..."></div>                                  
                <div id="chapitre-numero">Chapitre : <?= htmlspecialchars($data['id']) ?></div>
                <br>
                <h3 id="chapitre-title"><?= htmlspecialchars($data['title']) ?></h3>    
                <div id="chapitre-date"><?= $data['creation_date_fr'] ?></div>             
                <div id="chapitre-text"><?= nl2br(substr($data['content'], 0, 1000).'...') ?></div>
                <br>
                <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Lire la suite</a>
                <hr class="style1">
                <br>
            </article>
         </div> <!--fin div container-arrticles -->

<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
