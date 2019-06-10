<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-10 mx-auto">
            <?php if(isset($erreur)){ echo $erreur;} ?>
                <form>
                    <div class="control-group">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Objet</label>
                            <input type="text" name="object" class="form-control" id="exampleFormControlInput1" placeholder="Objet" value="<?php if(isset($_POST['object'])){ echo $_POST['object']; } ?>">
                        </div>
                    </div> 
                    <div class="control-group">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
                        </div>
                    </div>     
                    <div class="control-group">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php if(isset($_POST['message'])){ echo $_POST['message']; } ?></textarea>
                        </div> 
                    </div> 
                    <div class="form-group">   
                        <button name="sendMail" type="submit" id="sendMessageButton" class="btn btn-dark" ata-toggle="modal" data-target="#exampleModal">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>