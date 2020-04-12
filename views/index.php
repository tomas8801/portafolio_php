


<?php foreach($projects as $project):?>
    <div class="col-lg-4 item html css javascript">

        <div class="card">

            <div class="card-head">
                <img src="assets/img/<?=$project->image?>" alt="" class="img-fluid card-img">


                <div class="card-hover">
                    HTML-CSS
                    <a href="https://github.com/tomas8801/netl">Github</a>
                </div>
            </div>

            <div class="card-body text-center">
                <h4 class="title"><?= $project->name?></h4>
                <a href="<?=url_base?>page/single&id=<?=$project->id?>" class="btn btn-lg card-btn">Gallery</a>
            </div>

        </div>

    </div>
<?php endforeach;?>

             
