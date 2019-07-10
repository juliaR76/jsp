<form action="index.php?action=admin" method="post">
<?php if(isset($msg)){ echo $msg;} ?> 
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputEmail4">Niveau</label>
            <input type="text" class="form-control" name="category" id="inputLevel" >
        </div>
        <div class="form-group col-md-3">
            <label>Module</label>
            <input type="text" class="form-control" name="module" id="inputModule" >
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Titre</label>
        <input type="text" class="form-control" name="title" placeholder="Titre">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Corps de texte</label>
        <textarea id="myTextarea" class="form-control" name="content" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Auteur</label>
        <input type="text" class="form-control" name="author" placeholder="Auteur" >
    </div>
    <a href="index.php?action=admin"><button  type="submit" name="publier" class="btn btn-primary">Publier</button></a>
</form>