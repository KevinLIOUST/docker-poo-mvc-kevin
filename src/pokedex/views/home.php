<!-- home.php pour afficher les données du menu principal -->
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
    <header class="d-flex justify-content-center header mb-3">
        <h1 class="mt-3">Pokédex</h1>
    </header>

    <main class="main-pokemon">
        <?php foreach ($tousLesPokemons as $pokemon) { ?>
            <div class="div-pokemon">
                <div class="d-flex justify-content-center">
                    <img class="taille-img" src="<?= $pokemon['image'] ?>" alt="<?= $pokemon['image'] ?>">
                </div>
                <div class="div-nom-numero">
                    <p class="text-center">Nom : <?= $pokemon['name'] ?></p>
                    <p class="text-center">n°pokédex : <?= $pokemon['id'] ?></p>
                </div>
                <p class="text-center">Types : <?= implode(", ", $pokemon['type']) ?></p>
                <div class="d-flex justify-content-center mb-3">
                    <form action="index.php?url=details/<?= $pokemon['id'] ?>" method="POST">
                        <button class="btn btns-jour" type="submit">En savoir plus</button>
                    </form>
                </div>
            </div>
        <?php } ?>
    </main>

    <footer class="d-flex justify-content-center footer mt-3">
        <p>Pokédex fait par Kevin LIOUST DIT LAFLEUR !!!!</p>
    </footer>
</body>

</html>