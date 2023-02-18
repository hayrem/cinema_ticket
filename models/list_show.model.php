<?php
require("database/database.php");
// seach fucntion 
function searchMovie(string $search) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT title,released,image,duration,movie_id FROM movies WHERE title LIKE '%{$search}%' OR released LIKE '%{$search}%'");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// details fucntion
function showMovie() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT movie_id, title,released,image,duration FROM movies");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
$shows=showMovie();

// get id movie
function getDetailMovie(int $getID) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT DISTINCT * FROM hall_shows 
    WHERE movie_id = :movie_id");
    $statement->execute([':movie_id'=> $getID]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

/// not show again when show details already
function notListShow(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM movies WHERE movie_id != :id");
    $statement->execute([':id'=> $id]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);

}


/// fuction for add new movie
function addNewMovie(string $mvTitle,string $mvGenre, string $mvCountry, string $mvDuration,string $mvLanguage,string $mvReleased,string $newMvPoster, string $mvDescription, string $mvTrailer) : array
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO movies (title, genre, country, duration, released, language, description, image, trailer) VALUES (:title, :genre, :country, :duration, :released, :language, :description, :image, :trailer)");
    $statement->execute([
        ':title' => $mvTitle,
        ':genre' => $mvGenre,
        ':country' => $mvCountry,
        ':duration' => $mvDuration,
        ':language' => $mvLanguage,
        ':released' => $mvReleased,
        ':image' => $newMvPoster,
        ':description' => $mvDescription,
        ':trailer' => $mvTrailer,
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

//value display in card movie 
function postMovies():array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM `movies` WHERE post=1");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

?>