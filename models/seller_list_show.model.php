<?php
require("database/database.php");

function read_seller_edit(){
    global $connection;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (!empty($_POST['title']) and !empty($_POST['genre'])
            and !empty($_POST['country']) and !empty($_POST['duration']) and !empty($_POST['released']) 
            and !empty($_POST['language']) and !empty($_POST['description'])) 
        {
            $statement = $connection->prepare("update movies set title = :title, genre = :genre, country = :country, duration = :duration, released = :released, language = :language, image = :image, trailer = :trailer,  description = :description where movie_id = :movie_id");
            $statement->execute([
                ':title' => $_POST['title'],
                ':movie_id' => $_POST['movie_id'],
                ':genre' =>  $_POST['genre'],
                ':duration' =>  $_POST['duration'],
                ':released' =>  $_POST['released'],
                ':country' =>  $_POST['country'],
                ':language' =>  $_POST['language'],
                ':image' =>  $_POST['image'],
                ':trailer' =>  $_POST['trailer'],
                ':description' =>  $_POST['description']
            
    
            ]);
        }
    } 
}
$seller = read_seller_edit();

function getMovie(){
    global $connection;
    $statement = $connection->prepare("select * from movies");
    $statement->execute();
    return $statement->fetchAll();

}


function getMovieId($movie_id){
    global $connection;
    $statement = $connection->prepare('select * from movies where movie_id = :movie_id');
    $statement->execute([':movie_id' => $movie_id]);
    return  $statement->fetch();
};

