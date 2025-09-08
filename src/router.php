<?php
// Le router appelle tous les controleurs dont on a besoin pour récupérer et afficher les données en fonction de la page

use controllers\HomeController;
use controllers\DetailsController;

$url = $_GET["url"] ?? 'home';

$arrayUrl = explode('/', $url);

$page = $arrayUrl[0];

$id = $arrayUrl[1] ?? null;

switch ($page) {
    case 'home':

        // Exemple pour afficher home
        // require_once __DIR__ . "/pokedex/controllers/HomeController.php";

        // Je crée un objet controller pour class HomeController
        // J'utilise la méthde Index pour afficher le contenu
        $homeController = new HomeController();
        $homeController->index();
        break;

    case 'details':
        // require_once __DIR__ . "/pokedex/controllers/DetailsController.php";
        $detailsController = new DetailsController();
        $detailsController->show($id);
        break;

    case 'error':
        include_once __DIR__ . '/pokedex/views/error404.php';
        break;

    default:
        break;
}
?>