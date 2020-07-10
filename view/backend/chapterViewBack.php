
<?php $title = 'Chapitre backend'; ?>
<?php ob_start(); ?>
<?php require('undermenu.php'); ?>
<script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
<h2 class="titre-page">Modifier le chapitre</h2>


<div class="bg-contact2">
    <div class="container-contact2">
        <div class="wrap-contact2">
          <article class="chapitre">
          <div class="chapitre-img"><?php
                        echo'<td><img src="public/images/' .$postBack["images"].'" width:60px height:60px /></td>';
                        ?>
            </div>
            <br><br>
       
            <form class="contact2-form validate-form" class="wrap-input2 validate-input" class="form" method="post" action="index.php?action=modifChapter&amp;id=<?=$postBack['id'] ?>">
                    
                    <textarea class="wrap-input2 validate-input"  name="title" rows="1" placeholder="title"><?=$postBack['title'] ?></textarea>
                    <textarea class="wrap-input2 validate-input" name="num_chapter"  placeholder="numero chapitre"><?=$postBack['num_chapter'] ?></textarea>
                    <textarea class="wrap-input2 validate-input"  id="mytextarea" name="content"  rows="5" cols="50" placeholder="content"><?=$postBack['content'] ?></textarea>
                  
                      <select class="wrap-input2 validate-input"  name="publication">
                        <option value="1">Publier</option>
                        <option value="2">Brouillon</option>
                      </select>
                        <button class="wrap-input2 validate-input"  type="submit" name="btnUpdateChapter">Valider</button>    
                        <p><a class="input6" href="index.php?action=listPostsViewBack">Retour à la liste des chapitres</a></p>
                </form>

            
           
            </div>
          </article>


        </div>
      </div>
</div>


  <?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>
