<?php

// namespace model;

// Connexion à la BDD avec PDO
function open_database_connection()
{
    $link = new PDO("mysql:host=localhost;dbname=gaming", 'root', '');
    return $link;
}

// Deconnexion de la BDD
function close_database_connection(&$link)
{
    $link = null;
}

// Fonction permettant de rappeler tout ce qui se trouve dans "personnage"
function getAll()
{
    $link = open_database_connection();
    $result = $link->query("SELECT * FROM personnage");
    $posts = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
    }
    close_database_connection($link);

    return $posts;
}

// Fonction permettant de trouver une personnage avec un id en paramètre
function getOne($id)
{
    $link = open_database_connection();
    $result = $link->query("SELECT * FROM personnage WHERE id = $id");
    $toReturn = $result->fetch(PDO::FETCH_ASSOC);
    close_database_connection($link);
    return $toReturn;
}

// Fonction permettant de supprimer un personnage avec un id en paramètre
function deleteById($id)
{
    $link = open_database_connection();
    $result = $link->query("DELETE FROM personnage WHERE id = $id");
    close_database_connection($link);
}

// Fonction permettant de créer un personnage
function createCharacter($name, $job, $level)
{
    $link = open_database_connection();
    $result = "INSERT INTO personnage (name, job, level) VALUES (?, ?, ?)";
    $insert = $link->prepare($result);
    $insert->execute(array($name, $job, $level));

    close_database_connection($link);
}

// Fonction permettant de mettre à jour un personnage
function updateCharacter($name, $job, $level, $id)
{
    $link = open_database_connection();
    $result = "UPDATE personnage SET name = ?, job = ?, level = ? WHERE id = $id";
    $insert = $link->prepare($result);
    $insert->execute(array($name, $job, $level));

    close_database_connection($link);
}
