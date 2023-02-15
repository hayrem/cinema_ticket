<div class="container-fluid d-flex flex-wrap mt-4">
    <?php foreach ($movies as $movie): 
    ?> 
    <div class="card-detail">
    <div class="card-thumbnail">
      <img src="../../uploads/<?php  echo $movie['image'];?>">
    </div>
    <div class="card-body-detail">
      <span class="card-title-detail"><?= $movie['title']?></span>
      <p>
        <span class="card-text bg-danger p-1 rounded text-white">HD</span>
        <span class="card-text  p-1">⭐️</span>
        <span class="card-text  p-1"><?= $movie['released']?></span>
      </p>
      <p class="card-text">Country: <?= $movie['country']?></p>
      <p class="card-text">Genre: <?= $movie['genre']?></p>
      <p class="card-text">Release: <?= $movie['released']?></p>
      <p class="card-text">Date show: <?= $movie['date_show']?></p>
      <p class="card-text">Hall: <?= $movie['hall_name']?></p>
      <div class="card-description">
        <p><?= $movie['description']?></p>
      </div>
      <div class="d-flex justify-content-between ">
        <a href="/booking?movie_id" class="btn btn-outline-danger bg-danger text-white">BOOKING</a>
    </div>
    <a href="https://youtu.be/1esRrwrmWzA"></a>
    </div>
  </div>
    <?php endforeach;?>
</div>
<div class="container-fluid " style="color:white;  padding:2% 0 0% 5.5%;">
    <h1 style="padding-bottom:2%;">Trailer</h1>
    <iframe width="95%" height="500px" src="<?= $movie['trailer']?>" style="border-radius:10px;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>



