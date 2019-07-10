
    <?php if(isset($msgProfil)){ echo $msgProfil;} ?> 
    <img id="imgProfil" src="public/image/avatar/<?= $member->avatar() ?>" width="130px;">
    <form  action="index.php?action=admin" method="post" enctype="multipart/form-data">
        <input type="file" name="avatar"/>     
        <button class="btn btn-primary" name="avatarPost" type="submit">Mettre à jour</button>       
    </form> 
<div class="infoProfil">  
    <form>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputEmail4">Nom</label>
                <input type="text" class="form-control" id="inputNom4" value="<?= $_SESSION['last_name'] ?>">
            </div>
            <div class="form-group col-md-3">
                <label>Prénom</label>
                <input type="text" class="form-control" id="inputPrenom" value="<?= $_SESSION['first_name'] ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Pseudo</label>
                <input type="text" class="form-control" id="inputPseudo" value="<?= $_SESSION['pseudo'] ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" value="<?= $_SESSION['email'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Adresse</label>
            <input type="text" class="form-control" id="inputAddress" value="<?= $_SESSION['adresse'] ?>">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Numéro de contact</label>
            <input type="text" class="form-control" id="inputTel" value="<?= $_SESSION['phone'] ?>">
        </div> 
        
    </form>
</div>


                        