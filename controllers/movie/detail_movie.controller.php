<?php
require("views/home/index.view.php");

require ('models/list_show.model.php');

$getID = ($_GET['movie_id']);
$movies = getDetailMovie($getID);

require("views/detail_movies/detail_movie.view.php");


;?>
