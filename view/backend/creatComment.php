
<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>
<?php require('undermenu.php'); ?>
<h2 class="titre-page">Créer un commentaire</h2>

    <br>
    <div class="container-undermenu">
    <div class="group">
        <form action="..." method="POST">
            <div class="col-lg-12">
                <div class="form-group row">
                    <label for="title" class="col-lg-3">Pseudo</label>
                    <div class="col-lg-9">
                        <input type="text" name="title" class="form-control" id="title"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-lg-3">Date de publication</label>
                    <div class="col-lg-9">
                        <textarea name="content" id="content" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-lg-3">Sujet</label>
                    <div class="col-lg-9">
                        <input type="text" name="title" class="form-control" id="title"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-lg-3">Commentaire</label>
                    <div class="col-lg-9">
                        <input type="text" name="title" class="form-control" id="title"/>
                    </div>
                </div>
            
                <div class="form-group row">
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-success" placeholder="Envoyer"/> 
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>


