
<?php 
    require "views/partials/head.php";
    require "views/partials/nav.php";
    require ('models/list_show.model.php');
    $cinemas = getDetaCinemas();

    require "views/cinema/cinema.view.php";

?>

