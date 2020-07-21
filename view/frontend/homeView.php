
<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>
    <!-- BANNIERE -->
    <img src="http://developpeur-aura.com/Jean_Forteroche/public/images/header.jpg" class="card-img-top" alt="Responsive image">
 <!--FIN BANNIERE -->


    <!-- représente le contenu majoritaire du <body> du document.  -->
    <main id="main">
        <div id="container-card">
        <!--DEBUT CARTE JF -->
        <!--CLASSE TOPBAR VIA BOOTSTRAP-->
            <div class="card mb-3">
            <div class="row no-gutters">
                <div id="JF" class="col-md-">
                <img src="http://developpeur-aura.com/Jean_Forteroche/public/images/JF.jpg" class="card-img-top" alt="JF">
                </div>
        <!--CLASSE card VIA BOOTSTRAP pour la largeur de la colonne du texte de la carte-->
                <div class="col-md-12">
                    <div class="card-body">
                    <h2 class="card-title">Jean For</h2>
                    <p class="card-text">Jean Forteroche, parfois surnommé Jean For, né le 16 juin 1938 à Annecy, est un écrivain, journaliste et philosophe français. Membre de la famille De Forteroche, une des familles subsistantes de la noblesse française, propriétaire du château de Forteroche en Haute-Savoie, il descend par sa mère de la famille Chodron de Courcel de Toul, propriétaire du château de Saint-Fargeau dans l'Yonne. Il se voit dispenser un enseignement privilégié et passe notamment par l'École normale supérieure. Il est l'auteur d'une quarantaine d'ouvrages, allant de grandes fresques historiques imaginaires (L'art de vivre, 1971) aux essais philosophiques dans lesquels il partage ses réflexions sur la vie, la mort ou la condition animale (Les animaux ont un mérite : ils ne déçoivent jamais, 2016). Il est élu à l'Académie française en 1983. De 1974 à 1977, il est également réalisateur à succès.</p> <br>
                        <em>Jean Forteroche</em>
                    </div> <!--FIN DIV card-body-->
                </div>
            </div>
            </div>
         </div> <!--fin "container-card" -->
   
        <?php
        while ($data = $lastPost->fetch())
        {
        ?>
            <h2 class="titre-page">Le dernier chapitre</h2>
            <div class="container-articles"> 
                <article class="chapitre" id="article1">
                <div class="chapitre-img"><?= htmlspecialchars($data['alt']) ?> <?php
                echo'<img src="public/images/' .$data["images"].'" alt=""  />';
                ?>
            </div> 
                <br>                             
                    <div class="chapitre-numero">Chapitre n° <?= htmlspecialchars($data['num_chapter']) ?></div>
                    <br>
                    <h3 class="chapitre-title"><?= htmlspecialchars($data['title']) ?></h3>   
                    <br> 
                    <div class="chapitre-date">Le <?= $data['creation_date_fr'] ?></div>
                    <br>             
                    <div class="chapitre-text"><?= nl2br(substr($data['content'], 0, 1000).'...') ?></div>
                    <br>
                    <em><a class="lien-navigation" href="index.php?action=post&amp;id=<?= $data['id'] ?>">Lire la suite</a></em>
                </article>
         </div> <!--fin div container-articles -->
   
    </main>

        <?php
        }
        $lastPost->closeCursor();
        ?>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

  
