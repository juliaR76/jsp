<div class="sectionPage" id="sectionPage">
    <div class="col-10">
        <div class="container">               
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="index.php?action=connexion" method="post" name="connexion" id="contactForm">
                    <?php if($erreur != ""){ echo $erreur;} ?> 
                        <div class="form-group">
                            <label for="exampleInputEmail1">Identifiant</label>
                            <input type="text" name="pseudo" class="form-control" placeholder="Votre Pseudo" id="pseudo" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Votre mot de passe">
                        </div>
                        <a href="index.php?action=admin"><button type="submit" name="connecter" class="btn btn-primary">Se Connecter</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>                     

