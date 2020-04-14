


<?php foreach($projects as $project):?>
    <?php 
        $languajes = $project->languages;
        $languajes = explode('-', $languajes);
        $langs = implode(' ', $languajes);
        $langs = strtolower($langs);
    ?>
    <div class="col-lg-4 item <?=$langs?>">

        <div class="card">

            <div class="card-head">
                <img src="assets/img/<?=$project->image?>" alt="" class="img-fluid card-img">


                <div class="card-hover">
                    <?=$project->languages?>
                    <a href="<?=$project->github?>">Github</a>
                </div>
            </div>

            <div class="card-body text-center">
                <h4 class="title"><?= $project->name?></h4>
                <a href="<?=url_base?>project/single&id=<?=$project->id?>" class="btn btn-lg card-btn">Gallery</a>
            </div>

        </div>

    </div>
<?php endforeach;?>

             
