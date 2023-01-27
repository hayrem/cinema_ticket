<!-- insert home page -->
<?php
require "views/partials/head.php";
require "views/partials/nav.php";
require "views/partials/banner.php";
?>
<div class="container-fluid mb-4">
    <h2>Trending</h2>
</div>
<!-- <h3>Show</h3> -->

<div class="container  d-flex flex-wrap  container-card">
    <?php foreach ($shows as $show) : ?>
        <div class="card me-3" style="width: 16rem;">
            <img src=" <?php echo $show['image']; ?> " width="100%" height="70%" class="card-img-top">
            <div class="card-body" height="30%">
                <h6 class="card-title"><?= $show['title'] ?></h6>
                <div class='d-flex justify-content-between align-items-center'>
                    <p class="card-text"> <?= $show['released'] . ' ' . $show['duration'] . 's' ?></p>
                    <a href="/detail?movie_id=<?php echo $show['movie_id'] ?>" class="btn btn-danger">Detail</a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
</div>

<?php require "views/partials/footer.php" ?>