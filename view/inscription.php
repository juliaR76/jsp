<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <?php if(isset($erreur)){ echo $erreur;} ?>
             <form action="index.php?action=inscription" method="post" name="sentMessage" id="contactForm" novalidate>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Pseudo</label>
                        <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" id="pseudo" value="<?php if(isset($pseudo)){ echo $pseudo; } ?>">
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Nom</label>
                        <input type="text" name="last_name" class="form-control" placeholder="nom de famille" id="last_name" value="<?php if(isset($last_name)){ echo $last_name; } ?>">
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Prenom</label>
                        <input type="text" name="first_name" class="form-control" placeholder="nom de famille" id="first_name" value="<?php if(isset($first_name)){ echo $first_name; } ?>">
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Adresse</label>
                        <input type="text" name="adresse" class="form-control" placeholder="Adresse postale" id="adresse" value="<?php if(isset($adresse)){ echo $adresse; } ?>">
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Mot de pass</label>
                        <input type="password" name="pass" placeholder="mot de passe" class="form-control" id="pass">
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Confirmer votre mot de pass</label>
                        <input type="password" name="confirmationPass" placeholder="confirmer mot de passe" class="form-control" id="pass">
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" id="Email" value="<?php if(isset($email)){ echo $email; } ?>">
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>numero de telephone</label>
                        <input type="text" name="phone" class="form-control" placeholder="n° de fixe ou portable" id="phone" value="<?php if(isset($phone)){ echo $phone; } ?>">
                    </div>
                </div> 
                <br>
                <div id="success"></div>
                    <div class="form-group">
                    <a href="index.php?action=connexion"><button type="submit" name="creerCompte" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Créer un compte</button></a>
                </div>
            </form>
        </div>
    </div>
</div>
