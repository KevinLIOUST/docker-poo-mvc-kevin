<?php
// Exemple pour afficher home
require_once __DIR__ . "/pokedex/controllers/HomeController.php";

// Je crée un objet controller pour class HomeController
// J'utilise la méthde Index pour afficher le contenu
$controller = new HomeController();
$controller->index();
?>