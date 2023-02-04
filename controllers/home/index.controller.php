<?php
// $heading = "Home page";
require "views/partials/head.php";
require "views/partials/nav.php";
require "views/partials/banner.php";

require "models/list_show.model.php";
require "controllers/search/search.controller.php";

$heading = "Home page";

require "models/users.model.php";
require "views/home/index.view.php";


?>

<?php
require "controllers/alert/alert.controller.php";
require "database/database.php";
require "views/partials/footer.php"?>
