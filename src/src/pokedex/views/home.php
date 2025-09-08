<!-- home.php pour afficher les données du menu principal -->
<?php

if (isset($_GET["type"])) {
    $type = htmlspecialchars($_GET["type"]);
} else {
    $type = "all";
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>

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

    <div class="d-flex justify-content-center mb-3 fs-3">
        <form action="index.php?type=<?= $type ?>" method="POST">
            <select name="type" id="type">
                <option value="Tous les types" name="Tous les types"><b>Tous les types</b></option>
                <option value="Acier">Acier</option>
                <option value="Combat">Combat</option>
                <option value="Dragon">Dragon</option>
                <option value="Eau">Eau</option>
                <option value="Electrik">Electrik</option>
                <option value="Fée">Fée</option>
                <option value="Feu">Feu</option>
                <option value="Glace">Glace</option>
                <option value="Insecte">Insecte</option>
                <option value="Normal">Normal</option>
                <option value="Plante">Plante</option>
                <option value="Poison">Poison</option>
                <option value="Psy">Psy</option>
                <option value="Roche">Roche</option>
                <option value="Sol">Sol</option>
                <option value="Spectre">Spectre</option>
                <option value="Ténèbres">Ténèbres</option>
                <option value="Vol">Vol</option>
            </select>
            <button type="submit">Envoyer</button>
        </form>
    </div>

    <main class="main-pokemon">
        <?php foreach ($tousLesPokemons as $pokemon) { ?>
            <div class="div-pokemon">
                <div class="d-flex justify-content-center">
                    <img class="taille-img" src="<?= $pokemon['image'] ?>" alt="<?= $pokemon['image'] ?>">
                </div>
                <p class="ms-3 mx-3">Nom : <b><?= $pokemon['name'] ?></b></p>
                <p class="ms-3 mx-3">n°pokédex : <b><?= $pokemon['id'] ?></b></p>
                <div class="ms-3 mx-3 mb-3">
                    Type(s) : <?= implode(" ", $pokemon['type']) ?>
                </div>
                <p class="ms-3 mx-3">Génération : <b><?= $pokemon['generation'] ?></b></p>
                <div class="d-flex justify-content-center mb-3">
                    <form action="index.php?url=details/<?= $pokemon['id'] ?>" method="POST">
                        <button class="btn btns-jour" type="submit">En savoir plus</button>
                    </form>
                </div>
            </div>
        <?php } ?>
    </main>

    <footer class="d-flex justify-content-center footer align-items-center p-3">
        <img class="ms-5 mx-5" src="../../assets/img/pokeball_2.png" alt="../../assets/img/pokeball_2.png">
        <p>Pokédex fait par Kevin LIOUST DIT LAFLEUR !!!!</p>
        <img class="ms-5 mx-5" src="../../assets/img/pokeball_2_2.png" alt="../../assets/img/pokeball_2_2.png">
    </footer>

    <!-- Lien vers Bootstrap avec JavaScript -->
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>