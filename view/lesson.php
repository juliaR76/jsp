<div class="lessonSection">
    <div class="container">
        <div class="row">
          <div class="col-12">
                    <div class="OneCard">
                        <div class="lessonCard">  
                            <div class="card">
                                <img src="public/image/smoke3.jpg" height="250px;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= htmlspecialchars($lesson->title()) ?></h5>
                                    <p class="card-text"><?= $lesson->content() ?></p>
                                    <p class="card-text"><small class="text-muted"><?= htmlspecialchars($lesson->category()) ?>, <?= htmlspecialchars($lesson->module()) ?></small></p>
                                </div>     
                            </div>                       
                        </div>        
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div> 
