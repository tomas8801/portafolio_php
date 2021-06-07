<div class="col-md-12">
    
    <ul class="filters text-center" id="filters">
        <li class="active" data-filter="*"><a href="#!">All</a></li>
        <li data-filter=".html"><a href="#!">HTML</a></li>
        <li data-filter=".css"><a href="#!">CSS</a></li>
        <li data-filter=".javascript"><a href="#!">Javascript</a></li>
        <li data-filter=".php"><a href="#!">PHP</a></li>
    </ul>



    <div class="projects">

    <?php foreach($projects as $project):?>
        <?php 
            $languajes = $project->languages;
            $languajes = explode(' - ', $languajes);
            $langs = implode(' ', $languajes);
            $langs = strtolower($langs);
        ?>
        <div class="col-lg-4 item <?=$langs?>">

            <div class="card">

                <div class="card-head">
                    <img src="<?=url_base?>assets/img/<?=$project->image?>" alt="" class="img-fluid card-img">


                    <div class="card-hover">
                        <small><?=$project->languages?></small>
                        <div class="links">
                            <?php if($project->web):?>
                            <a href="<?=$project->web?>" target="_blank"><img class="svg-logo" src="<?=url_base?>assets/img/red-mundial.svg" alt="web-icon"></a>        
                            <?php endif; ?>
                            <a href="<?=$project->github?>" target="_blank"><img class="svg-logo" src="<?=url_base?>assets/img/logo-github.svg" alt="github-icon"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body text-center">
                    <h4 class="title"><?= $project->name?></h4>
                    <a href="<?=url_base?>project/single&id=<?=$project->id?>" class="btn btn-lg card-btn" id="goSingle">Description</a>
                </div>

            </div>

        </div>
    <?php endforeach;?>
    </div>

</div> 