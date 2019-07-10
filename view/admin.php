<div class="admin-section" id="admin-section">
    <div class="">
        <div class="container">               
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="list-group">
                    <?php if($_SESSION['authorization'] == 1){?>
                        <button id="profil" type="button" class="list-group-item list-group-item-action">Profil</button>
                            <div  class="profilContainer"><?php include('view/profil.php') ?></div>

                        <button id="planning" type="button" class="list-group-item list-group-item-action">Planning</button>
                            <div  class="planningContainer"><?php include('view/planning.php') ?></div>
                        
                        <button id="addPost" type="button" class="list-group-item list-group-item-action">Ajouter un Cours</button>
                            <div  class="addContainer"><?php include('view/addPost.php') ?></div>

                        <button id="addMember" type="button" class="list-group-item list-group-item-action">Ajouter un membre</button>
                            <div  class="addMemberContainer"><?php include('view/addMember.php') ?></div>

                        <button id="recap" type="button" class="list-group-item list-group-item-action">Recap</button> 
                            <div  class="recapContainer"><?php include('view/recap.php') ?></div> 
                    <?php } else { ?> 
                        <button id="profil" type="button" class="list-group-item list-group-item-action">Profil</button>
                            <div  class="profilContainer"><?php include('view/profil.php') ?></div>

                        <button id="planning" type="button" class="list-group-item list-group-item-action">Planning</button>
                            <div  class="planningContainer"><?php include('view/planning.php') ?></div>
                    <?php } ?>  
                            
                    </div>
                </div>                      
            </div>
        </div>                   
    </div>  
</div>