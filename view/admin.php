
  <!-- Nav tabs -->
<div class="myTab">
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="planning-tab" data-toggle="tab" href="#planning" role="tab" aria-controls="planning" aria-selected="false">Planning</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact2-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false">Contact</a>
    </li>
</ul>
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="card mb-3">
            <div class="row">
                <div class="col-md-3">
                    <img src="public/img/fire7.jpg" class="card-img" alt="...">

                </div>
                <div id="containerProfil">
                    <div id="infoProfil">
                        <h2 id="titre"><?= $_SESSION['pseudo'] ?></h2>
                        <p>Nom : <span><?= $_SESSION['last_name'] ?></span></p>
                        <p>Prenom : <span><?= $_SESSION['first_name'] ?></span></p>
                        <p>Adresse: <span><?= $_SESSION['adresse'] ?></span></p>
                        <p>Email : <span><?= $_SESSION['email'] ?></span></p>
                        <p><i class="fas fa-phone-alt"></i> : <span><?= $_SESSION['phone'] ?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="planning" role="tabpanel" aria-labelledby="planning-tab">...</div>
    <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">
        <div class="card mb-3">
            <div class="row">
                <div class="col-lg-5 col-md-10 mx-auto">
                    <form>
                        <div class="control-group">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Objet</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Objet">
                            </div>
                        </div> 
                        <div class="control-group">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>     
                        <div class="control-group">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div> 
                        </div> 
                        <div class="form-group">   
                            <button type="submit" class="btn btn-dark">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>