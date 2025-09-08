<?php
spl_autoload_register(function ($class) { // Exemple : Controllers\HomeController → src/Controllers/HomeController.php
    $file = __DIR__ . '/pokedex/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});