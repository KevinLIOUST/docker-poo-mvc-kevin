<?php
// var_dump($pokemonAvecId);

$tousLesPokemons = $pokemonModel->getAll();
// var_dump($_GET);

if (isset($_GET['url'])) {
    // Trouver la position du caractère spécifique (par exemple ':')
    $position = strpos($_GET['url'], '/');

    // Vérifier si le caractère existe dans la chaîne
    if ($position !== false) {
        // Extraire la partie après le caractère '/'
        $partie = substr($_GET['url'], $position + 1);

        if (!is_numeric($partie)) {
            $pokemonModel->showError();
        } else {
            if ($partie > count($tousLesPokemons)) {
                $pokemonModel->showError();
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon !!!!</title>

    <!-- Lien vers Bootstrap -->
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />

    <!-- Lien vers les icônes Bootstrap -->
    <link rel="stylesheet" href="../../node_modules/bootstrap-icons/font/bootstrap-icons.min.css">

    <!-- Lien vers le fichier pour designer le site web -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="d-flex justify-content-center align-items-center header mb-3 p-3">
        <img class="ms-5 mx-5" src="../../assets/img/pokeball_2.png" alt="../../assets/img/pokeball_2.png">
        <h1 class="mt-3">Pokédex</h1>
        <img class="ms-5 mx-5" src="../../assets/img/pokeball_2_2.png" alt="../../assets/img/pokeball_2_2.png">
    </header>

    <main class="div-pokemon-details">
        <div class="d-flex justify-content-center">
            <img class="taille-img" src="<?= $pokemonAvecId['image'] ?>" alt="<?= $pokemonAvecId['image'] ?>">
        </div>
        <p class="ms-3 mx-3">Nom : <b><?= $pokemonAvecId['name'] ?></b></p>
        <p class="ms-3 mx-3">n°pokédex : <b><?= $pokemonAvecId['id'] ?></b></p>
        <div class="ms-3 mx-3 mb-3">
            Type(s) : <?= implode(" ", $pokemonAvecId['type']) ?>
        </div>
        <p class="ms-3 mx-3"><?= $pokemonAvecId['description'] ?></p>
        <p class="ms-3 mx-3">Génération : <b><?= $pokemonAvecId['generation'] ?></b></p>
        <div class="d-flex justify-content-center mb-3">
            <form action="index.php">
                <button class="btn btns-jour">Retour</button>
            </form>
        </div>
    </main>

    <footer class="d-flex justify-content-center footer align-items-center p-3">
        <img class="ms-5 mx-5" src="../../assets/img/pokeball_2.png" alt="../../assets/img/pokeball_2.png">
        <p>Pokédex fait par Kevin LIOUST DIT LAFLEUR !!!!</p>
        <img class="ms-5 mx-5" src="../../assets/img/pokeball_2_2.png" alt="../../assets/img/pokeball_2_2.png">
    </footer>
</body>

</html>