<?php $title = 'Tous les chapitres'; ?>

<?php ob_start(); ?>
<img src="http://developpeur-aura.com/Jean_Forteroche/public/images/header.jpg" class="card-img-top" alt="Responsive image">
<h2 class="titre-page">Billet simple pour l'Alaska</h2>

<div class="container-articles"> 
    <article class="chapitre">
    <div class="chapitre-img"><?php
                echo'<td><img src="public/images/' .$post["images"].'" width:60px height:60px /></td>';
                ?>
            </div>                               
            <h3 class="chapitre-numero">Chapitre n° <?= htmlspecialchars($post['num_chapter']) ?></h3>
            <br>
            <h3 class="chapitre-title"><?= htmlspecialchars($post['title']) ?></h3>    
            <div class="chapitre-date"><?= $post['creation_date_fr'] ?></div>             
            <div class="chapitre-text"><?= nl2br(htmlspecialchars($post['content'])) ?></div>
            <br>
            <p><a href="index.php?action=listPostsView">Retour à la liste des chapitres</a></p>
    </article>
</div>


<div class="bg-contact2">
            <div class="container-contact2">
                <div class="wrap-contact2">
                    <form class="contact2-form validate-form" action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                        <div class="contact2-form-title">
                            Postez votre commentaire
                        </div>
    
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
                        <button type="submit">Valider</button> 
                    </form>
                </div>
            </div>
</div>

<h2>Voir la liste des commentaires</h2>

<?php
while ($comment = $comments->fetch())
{
?>
<div class="container-articles"> 
    <article class="chapitre">
        <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
        <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        <p><a href="index.php?action=signal&amp;id=<?=$comment['id'] ?>">Signaler</a></p>
    </article>
</div> 
<hr class="style1">
<br>
<?php
}
?>



<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
