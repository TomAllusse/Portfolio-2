<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bachelor Informatique, Cybersécurité et IA - Mon Portfolio</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/styleBachelor.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include_once "src/layout/navbar.php";
    ?>
    <main id="main-bachelor">
        <h1 id="title-bachelor">Qu’est-ce que le Bachelor informatique, cybersécurité et IA ?</h1>
        <p id="desc-bachelor">Le Bachelor Informatique, Cybersécurité et IA de l'IPSSI est une formation de niveau Bac+3 (titre RNCP de niveau 6) conçue pour répondre à la convergence de trois domaines clés du numérique actuel.</p>
        <p id="desc-bachelor">Contrairement à un cursus informatique classique, ce programme est hybride : il vous apprend à construire des systèmes (Informatique), à les protéger (Cybersécurité) et à les rendre intelligents (IA).</p>
        <div class="option">
            <div id="reseaux">
                <h3 id="title-reseaux">Bachelor 3 Admin Systèmes Réseaux</h3>
                <p class="paragraphe">Une formation professionnalisante à la fois pour ses cours orientés vers la pratique, pour les différents projets et l’expérience acquise en alternance.</p>
                <p class="paragraphe">Voici les débouchés :</p>
                <ul class="ul-list">
                    <li class="list">Administrateur Systèmes et Réseaux</li>
                    <li class="list">Technicien Cloud / Virtualisation</li>
                    <li class="list">Superviseur Sécurité (SOC Junior)</li>
                    <li class="list">Responsable Support Niveau 2/3</li>
                    <li class="list">Analyste SOC Junior (Security Operations Center)</li>
                    <li class="list">Technicien en Gestion des Vulnérabilités</li>
                    <li class="list">Intégrateur de Solutions de Sécurité</li>
                </ul>
            </div>
            <div id="dev">
                <h3 id="title-dev">Bachelor Dev. IA, Fullstack</h3>
                <p class="paragraphe">Ce Bachelor nous forme dans 3 domaines : le développement Fullstack, l'IA générative et le DevOps. Nous apprenons à créer des applications complexes, à les booster à l'IA et à automatiser leur déploiement en production.</p>
                <p class="paragraphe">Voici les débouchés :</p>
                <ul class="ul-list">
                    <li class="list">Développeur Fullstack</li>
                    <li class="list">Développeur Front-end</li>
                    <li class="list">Développeur Back-end</li>
                    <li class="list">Développeur IA Junior</li>
                    <li class="list">Intégrateur de Solutions d'IA</li>
                    <li class="list">Data Engineer Junior</li>
                    <li class="list">Développeur d'Applications Mobiles</li>
                </ul>
            </div>
        </div>
    </main>
    <?php
        include_once "src/layout/footer.php";
    ?>
    <script src="src/js/app.js"></script>
</body>
</html>