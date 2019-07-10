<div class="sectionPage" id="sectionLessons">
    <div class="col-12">
        <div class="container">               
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="allCard">
                    <?php foreach ($lessons as $lesson) : ?>
                        <div class="lessonCard">
                            
                            <div class="card mb-3">
                                <img src="public/image/smoke3.jpg" height="250px;" class="card-img-top" alt="...">
                                <div class="card-body">                                
                                    <a href="index.php?action=lesson&lesson=<?= $lesson->id() ?>">
                                    <h5 class="card-title"><?= $lesson->title() ?></h5></a>
                                    <p class="card-text"><?= substr($lesson->content(),0,0) ?></p>
                                    <p class="card-text"><small class="text-muted"><?= $lesson->category() ?>, <?= $lesson->module() ?></small></p>
                                </div>
                            </div>                      
                            <?php endforeach ?>
                        </div>        
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div> 
