<?php $title = 'Liste des chapitres'; ?>

<?php ob_start(); ?>
<img src="http://developpeur-aura.com/Jean_Forteroche/public/images/header.jpg" class="card-img-top" alt="Responsive image">
<h2 class="titre-page">Tous les chapitres</h2>
<?php
while ($data = $posts->fetch())
{
?>
            <div class="container-articles"> 
            <article class="chapitre" id="article1">
            <h3 class="chapitre-numero">Chapitre n° <?= htmlspecialchars($data['num_chapter']) ?></h3>
            <div class="chapitre-img"><?= htmlspecialchars($data['alt']) ?> <?php
                echo'<img src="public/images/' .$data["images"].'"/>';
                ?>
            </div>
            <br>                                   
              
                <br>
                <h3 class="chapitre-title"><?= htmlspecialchars($data['title']) ?></h3>    
                <br>
                <div class="chapitre-date">Le <?= $data['creation_date_fr'] ?></div>  
                <br>           
                <div class="chapitre-text"><?= nl2br(substr($data['content'], 0, 1000).'...') ?></div>
                <br>
                <a class="lien-navigation" href="index.php?action=post&amp;id=<?= $data['id'] ?>">Lire la suite</a>
                <br>
                <hr class="style1">
                <br>
            
            </article>
         </div> <!--fin div container-articles -->

<?php
}
$posts->closeCursor();
?>



<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
