<?php $title = 'Tous les chapitres'; ?>

<?php ob_start(); ?>
<img src="http://developpeur-aura.com/Jean_Forteroche/public/images/header.jpg" class="card-img-top" class="img-fluid" alt="Responsive image">
<h2 class="titre-page">Billet simple pour l'Alaska</h2>

<div class="container-articles"> 
            <article class="chapitre" id="article1">
            <div id="chapitre-img"><img src="http://developpeur-aura.com/Jean_Forteroche/public/images/article4.jpeg" alt="..."></div>                                  
                <div id="chapitre-numero">Chapitre : <?= htmlspecialchars($post['id']) ?></div>
                <br>
                <h3 id="chapitre-title"><?= htmlspecialchars($post['title']) ?></h3>    
                <div id="chapitre-date"><?= $post['creation_date_fr'] ?></div>             
                <div id="chapitre-text"><?= nl2br(htmlspecialchars($post['content'])) ?></div>
                <br>
                <p><a href="index.php?action=listPostsView">Retour à la liste des chapitres</a></p>
            </article>
         </div> <!--fin div container-arrticles -->

<!-- FORMULAIRE DE CONTACT -->
<div class="bg-contact2">
            <div class="container-contact2">
                <div class="wrap-contact2">
                    <form class="contact2-form validate-form"action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                        <span class="contact2-form-title">
                            Postez votre commentaire
                        </span>
    
                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <label for="author">Pseudo</label><br />
                            <input class="input2" type="text" id="author" name="author" />
                        </div>
                        <div class="wrap-input2 validate-input" data-validate = "Message is required">
                            <label for="comment">Commentaire</label><br />
                            <textarea class="input2" id="comment" name="comment"></textarea>
                        </div>
    
                        <div class="container-contact2-form-btn">
                            <div class="wrap-contact2-form-btn">
                                <div class="contact2-form-bgbtn"></div>
                               
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success"/> 
                    </form>
                </div>
            </div>
        </div>
  <!--FIN FORMULAIRE DE CONTACT -->









<h2>Voir la liste des commentaires</h2>

<?php
while ($comment = $comments->fetch())
{
?>
<div class="container-articles"> 
    <article class="chapitre" id="article1">
        <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
        <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        <p><a id="signalement" href="<?= "index.php?action=action&id=".$comment['id'] ?>">Signaler ce commentaire</a></p>
        </article>
</div> <!--fin div container-arrticles -->
<hr class="style1">
<br>
<?php
}
?>



<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
