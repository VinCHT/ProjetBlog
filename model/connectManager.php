<?php
  try
     {
        $db = new PDO('mysql:host=localhost;dbname=blog_jf;charset=utf8', 'root', '');
        //http://developpeur-aura.com/Jean_Forteroche/view/frontend/template.php
        //  $db = new PDO('mysql:host=developponadmin.mysql.db;dbname=developponadmin;charset=utf8', 'developponadmin', 'root1JF1');
  
     }
     catch(Exception $e)
     {
         die('Erreur : '.$e->getMessage());
     }


     // CODE TEST AVEC PASCAL
    //  $reponse = $db->query('SELECT * FROM chapters');
    //  while ($data=$reponse->fetch())
    //  {
    //     echo $data ['title'];
    //     echo '<img src="'.$data ['illustration'].'"';
        
    //  }

     

// D'après OC : https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4678891-nouvelle-fonctionnalite-afficher-des-commentaires

// 




//test du code pour les images






?>


