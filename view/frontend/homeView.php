<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>


<!-- CODE VERIFIER AVEC PASCAL -->
<!-- ouvrir php
// $reponse = $db->query('SELECT * FROM chapters');
//      while ($data=$reponse->fetch())
//      {
//         echo $data ['title'];
//         echo '<img src="'.$data ['illustration'].'"';
        
//      }

fermer php-->
   <!-- BANNIERE -->
   <!-- <div id="banniere"></div> -->
 <!--FIN BANNIERE -->

 <div id="container-content">
<!-- représente le contenu majoritaire du <body> du document.  -->
  <main id="main">
    <div id="container-card">
    <!--DEBUT CARTE JF -->
    <!--CLASSE TOPBAR VIA BOOTSTRAP-->
      <div class="card mb-3">
        <div class="row no-gutters">
          <div id="JF" class="col-md-">
          <!-- ATTENTION L IMAGE EST RECUPERER DANS LEDITEUR ET PAS DANS LA BASE -->
            <img src="http://developpeur-aura.com/Jean_Forteroche/view/frontend/images/JF.jpg" class="card-img-top" alt="JF">
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
    </div>

    <h2 id="emplacement-dernier-chapitre">Le dernier chapitre</h2>
    <div class="container-articles"> 
        <article class="chapitre" id="article1">
            <div id="chapitre-img"><img src="http://developpeur-aura.com/Jean_Forteroche/view/frontend/images/chapitre4.jpeg" alt="..."></div>                                  
            <div id="chapitre-numero">Chapitre </div>
            <br>
            <div id="chapitre-date">Publié le </div>
            <h3 id="chapitre-title"></h3>                 
            <div id="chapitre-text"></div>
            <br>
        </article>
    </div>
  </main>
 </div> <!--FIN container-content -->






<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>