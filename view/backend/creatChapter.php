
<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>
<?php require('undermenu.php'); ?>
<h2>Editer un chapitre</h2>
    <br>
    <div class="container-undermenu">
    <div class="group">
        <form action="upload" method="POST" enctype="multipart/form-data">
            <div class="col-lg-12">
                <div class="form-group row">
                        <label for="title" class="col-lg-3">N° du chapitre</label>
                        <div class="col-lg-9">
                            <input type="text" name="title" class="form-control" id="title"/>
                        </div>
                    </div>
                <div class="form-group row">
                    <label for="title" class="col-lg-3">Titre</label>
                    <div class="col-lg-9">
                        <input type="text" name="title" class="form-control" id="title"/>
                    </div>
                </div>
            
                <!-- <div class="form-group row">
                    <label for="content" class="col-lg-3">Date de publication</label>
                    <div class="col-lg-9">
                        <textarea name="content" id="content" class="form-control" placeholder="Indiquez la date de publication"></textarea>
                    </div>
                </div> -->
                <div class="form-group row">
                    <label for="title" class="col-lg-3">Contenu</label>
                    <div class="col-lg-9">
                        <input type="text" name="title" class="form-control" id="title"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-lg-3">Image</label>
                    <div class="col-lg-9">
                        <!-- On limite le fichier à 100Ko -->
                        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                        <input type="file" name="avatar"class="form-control">
                    </div>
                </div>
                <br>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col"><a href="index.php?action=creatChapter" type="submit" class="btn btn-success">+ Publier</a></th>
                        </tr>
                    </thead>
                    </table>
                    <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col"><a href="index.php?action=creatChapter" type="submit" class="btn btn-success">+ Enregister le brouillon</a></th>
                        </tr>
                    </thead>
                    </table>
            </div>
        </form>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('view/templateBack.php'); ?>

  