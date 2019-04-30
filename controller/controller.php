<?php

// namespace controller;

// Fonction permettant de créer un personnage en récupérant les values d'un form en méthode POST puis les filtres avec FILTER_SANITIZE
function create()
{
    $name = $_POST['name'];
    $job = $_POST['job'];
    $level = $_POST['level'];

    if (filter_var($name, FILTER_SANITIZE_STRING) !== false && filter_var($job, FILTER_SANITIZE_STRING) !== false && filter_var($level, FILTER_VALIDATE_INT) !== false) {
        createCharacter($name, $job, $level);
        print("je passe par ici");
    } else {
        header('Location: /mvcTraining/index.php');
        exit();
    }

    header('Location: /mvcTraining/index.php');
    exit();
}

// Fonction permettant de delete un personnage en récupérant son ID par la méthode GET
function delete()
{
    $id = $_GET['id'];
    if (filter_var($id, FILTER_VALIDATE_INT) !== false) {
        deleteById($id);
    }

    header('Location: /mvcTraining/index.php');
    exit();
}

// Fonction permettant d'affcher tout les personnages contenus dans la base de donnée
function read()
{
    $posts = getAll();

    include("templates/mainView.php");
}

// Foncton permettant d'afficher les informations d'un personnage grâce à son ID par la méthode GET
// Permettant de mettre en value de base les informations du personnage à modifier si celle-ci ne sont pas modifié
function updateForm($id)
{
    $charact = getOne($id);

    include("templates/updateViewForm.php");
}

// Fonction permettant de récupérer les informations d'un form par la méthode POST pour mettre à jour un personnage
function update()
{
    $name = $_POST['name'];
    $job = $_POST['job'];
    $level = $_POST['level'];
    $id = $_POST['id'];

    if (
        filter_var($name, FILTER_SANITIZE_STRING) !== false
        && filter_var($job, FILTER_SANITIZE_STRING) !== false
        && filter_var($level, FILTER_VALIDATE_INT) !== false
        && filter_var($id, FILTER_VALIDATE_INT) !== false
    ) {

        updateCharacter($name, $job, $level, $id);
    } else {
        header('Location: /mvcTraining/index.php');
        exit();
    }

    header('Location: /mvcTraining/index.php');
    exit();
}
