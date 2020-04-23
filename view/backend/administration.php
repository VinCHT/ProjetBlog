
<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>
<img src="http://developpeur-aura.com/Jean_Forteroche/public/images/header.jpg" class="img-fluid" alt="Responsive image">
<h2 class="titre-page">Administration</h2>

<div class="group">
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start dark">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Gestion des chapitres</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Cliquez pour voir, modifier ou supprimez un chapitre</p>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Gestion des commentaires</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Cliquez pour voir, modifier ou supprimez un commentaire</p>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Gestion des contacts</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Cliquez pour voir, modifier ou supprimez un contact</p>
  </a>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">n°</th>
      <th scope="col">Titre</th>
      <th scope="col">Date de création</th>
      <th scope="col">Image</th>
      <th scope="col"colspan="2">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Les deux mondes</td>
      <td>Le sujet est celui d'un monde fragile qui change à..</td>
      <td>2020-02-03 08:14:17</td>
      <th>Modifier</th>
      <th>Suprimer</th>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Terre d'Inglefield</td>
      <td>Il est le résultat d'une attente de six mois et d'...</td>
      <td>2020-01-18 05:00:22</td>
      <th>Modifier</th>
      <th>Suprimer</th>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>L'appel des glacier</td>
      <td>Emigré aux Etats-Unis avec sa famille, il y sera j...</td>
      <td>2020-02-01 17:00:17</td>
      <th>Modifier</th>
      <th>Suprimer</th>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Baked Alaska</td>
      <td>Les glaces restantes reculent alors vers le nord, ..</td>
      <td>2020-02-03 08:14:17</td>
      <th>Modifier</th>
      <th>Suprimer</th>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col"><button type="button" class="btn btn-link">+ Ajouter un nouveau chapitre</button></th>
    </tr>
  </thead>
</table>

<?php require('view/templateBack.php'); ?>

  
