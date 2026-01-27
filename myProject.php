<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets - Mon Portfolio</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/styleProject.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include_once "src/layout/navbar.php";
    ?>
    <main>
        <div class="card-projet">
            <div class="image-box">
                <img src="src/images/projet/cv.png" alt="Projet site cv">
            </div>
            <div class="content-projet">
                <h2>CV</h2>
                <p>Projet de faire un CV en site web</p>
            </div>
        </div>
        <div class="card-projet">
            <div class="image-box">
                <img src="src/images/projet/mangas.png" alt="Projet site mangas / animes">
            </div>
            <div class="content-projet">
                <h2>Mangas, Animes</h2>
                <p>Ce site parle de l'histoire des mangas, des animes et des festivals</p>
            </div>
        </div>
        <div class="card-projet">
            <div class="image-box">
                <img src="src/images/projet/blog.png" alt="Projet site stage blog">
            </div>
            <div class="content-projet">
                <h2>Blog</h2>
                <p>Mon projet de stage a été de créer un blog</p>
            </div>
        </div>
        <div class="card-projet">
            <div class="image-box">
                <img src="src/images/projet/garderie.png" alt="Projet site gsb">
            </div>
            <div class="content-projet">
                <h2>Garderie</h2>
                <p>Je devais ajouter de multiples fonctionnalités (faire que les factures en dessous de 15 euros s'ajoutent jusqu'à atteindre 15 euros ...)</p>
            </div>
        </div>
        <div class="card-projet">
            <div class="image-box">
                <img src="src/images/projet/discord.jpg" alt="Projet bot discord">
            </div>
            <div class="content-projet">
                <h2>Bot Discord</h2>
                <p>J'avais pour projet de créer un bot Discord avec de multiples fonctionnalités</p>
            </div>
        </div>
        <div class="card-projet">
            <div class="image-box">
                <img src="src/images/projet/gsb.png" alt="Projet site gsb">
            </div>
            <div class="content-projet">
                <h2>GSB</h2>
                <p>J'avais pour projet de faire un site web GSB en utilisant une API Web</p>
            </div>
        </div>
        <div class="card-projet">
            <div class="image-box">
                <img src="src/images/projet/gsb_angular.png" alt="Projet site gsb avec l'utilisation du framework">
            </div>
            <div class="content-projet">
                <h2>GSB sous Angular</h2>
                <p>J'avais pour projet de reconstruire un site web GSB en utilisant le framework Angular</p>
            </div>
        </div>
        <div class="card-projet">
            <div class="image-box">
                <img src="src/images/projet/atelierdezola.png" alt="Projet site vitrine pour l'entreprise L'Atelier de Zola">
            </div>
            <div class="content-projet">
                <h2>Site vitrine</h2>
                <p>J'avais pour projet de construire un site vitrine pour L'Atelier de Zola</p>
            </div>
        </div>
    </main>
    <?php
        include_once "src/layout/footer.php";
    ?>
    <script src="src/js/app.js"></script>
</body>
</html>