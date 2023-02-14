<?php

//cinema detail fuction 
function getDetahall() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM halls");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
 
}

// function get hallShows
function hallShow(int $ID) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM halls 
    INNER JOIN shows ON shows.hall_id = halls.hall_id  
    INNER JOIN movies ON shows.show_id = movies.movie_id
    WHERE halls.hall_id = :hall_id");
    $statement->execute([':hall_id'=> $ID]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
};
// function get name hall

function getNameHall(int $ID) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM halls 
    WHERE halls.hall_id = :hall_id");
    $statement->execute([':hall_id'=> $ID]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
};


