    <div id="updateSection" class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <form action="index.php?action=update&lesson=<?= $lesson->id() ?>" method="post">
                <?php if(isset($msg)){ echo $msg;} ?> 
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Niveau</label>
                            <input type="text" class="form-control" name="category" id="inputLevel" value="<?= htmlspecialchars($lesson->category()) ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Module</label>
                            <input type="text" class="form-control" name="module" id="inputModule" value="<?= htmlspecialchars($lesson->module()) ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Titre</label>
                        <input type="text" class="form-control" name="title" placeholder="Titre" value="<?= htmlspecialchars($lesson->title()) ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Corps de texte</label>
                        <textarea id="myTextarea" class="form-control" name="content" rows="10"><?= substr($lesson->content(),0,4000) ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Auteur</label>
                        <input type="text" class="form-control" name="author" placeholder="Auteur" value="<?= htmlspecialchars($lesson->author()) ?>">
                    </div>
                    <a href="index.php?action=update"><button type="submit" name="modifier" class="btn btn-primary">Modifier</button></a>
                    <a href="index.php?action=admin"><button type="button" class="btn btn-primary">Annuler</button></a>               
                </form>
            </div>  
        </div>
    </div>
