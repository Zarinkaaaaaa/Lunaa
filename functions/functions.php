<?php 

function getUser()
{
    global $database;

    $sql = 'SELECT * FROM `users` WHERE id = :id';

    $prepare = $database->prepare($sql);

    $prepare->execute([
        ':id' => $_SESSION['user']['id']
    ]);
    
    return $prepare->fetch(PDO::FETCH_ASSOC);
}