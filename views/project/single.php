

<div class="col-lg-12">
<h1 class="text-center"><?= $project->name?></h1>
<div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="<?=url_base?>assets/img/<?= $project->image?>" alt="First slide">
    </div>

    <?php foreach($images as $img): ?>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=url_base?>assets/img/<?= $img->image_path?>" alt="Second slide">
    </div>
    <?php endforeach;?>

  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<h5><?=$project->description?></h5>
<h6><?=$project->languages?></h6>

</div>