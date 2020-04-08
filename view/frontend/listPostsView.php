<?php $title = 'Les chapitres'; ?>

<?php ob_start(); ?>

<h2>On doit voir tous les chapitres </h2>

<!-- CODE VERIFIER AVEC PASCAL -->
<!-- ouvrir php
// $reponse = $db->query('SELECT * FROM chapters');
//      while ($data=$reponse->fetch())
//      {
//         echo $data ['title'];
//         echo '<img src="'.$data ['illustration'].'"';
        
//      }

fermer php-->



<div id ='test'></div>







<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>