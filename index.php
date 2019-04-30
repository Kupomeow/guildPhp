<?php

// FRONT CONTROLLER

// Permet de rappeler mon controller obligatoirement
require('controller/controller.php');
// Permet de rappeler mon model obligatoirement
require('models/model.php');

// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//  ROUTING : Permet d'afficher tout mes routes (url)
if ('/mvcTraining/' === $uri) {
    read();
} elseif ('/mvcTraining/index.php' == $uri) {
    read();
} elseif ('/mvcTraining/index.php/create' === $uri) {
    create();
} elseif ('/mvcTraining/index.php/delete' === $uri && isset($_GET['id'])) {
    delete($_GET['id']);
} elseif ('/mvcTraining/index.php/updateForm' == $uri && isset($_GET['id'])) {
    updateForm($_GET['id']);
} elseif ('/mvcTraining/index.php/updatePersonnage' == $uri) {
    update();
} else {
    // Affiche une erreur personnalisée si l'url n'est pas trouvé 
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>MAUVAISE URL !</h1></body></html>';
}
