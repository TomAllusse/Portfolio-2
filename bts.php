<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTS SIO - Mon Portfolio</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/styleBTS.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include_once "src/layout/navbar.php";
    ?>
    <main id="main-btssio">
        <h1 id="title-btssio">Qu’est-ce que le BTS SIO ?</h1>
        <p id="desc-btssio">Le Brevet de Technicien Supérieur Services Informatiques aux Organisations, s'adresse à ceux qui souhaitent se former en deux ans aux métiers d'administrateur réseau ou de développeur. Pour par la suite intégrer directement le marché du travail ou continuer des études dans le domaine de l'informatique.</p>
        <div class="option">
            <div id="slam">
                <h3 id="title-slam">SLAM</h3>
                <p class="paragraphe"><span>SLAM</span> signifie <span>« Solutions Logicielles et Applications Métiers »</span>.</p>
                <p class="paragraphe">L’option SLAM est destinée aux étudiants qui s’orientent vers les métiers liés à la conception et à la maintenance de programmes applicatifs.</p>
                <p class="paragraphe">Voici les débouchés :</p>
                <ul class="ul-list">
                    <li class="list">Développeur d'applications informatiques</li>
                    <li class="list">Développeur informatique</li>
                    <li class="list">Analyste d'applications ou d'études</li>
                    <li class="list">Analyste programmeur</li>
                    <li class="list">Chargé d'études informatiques</li>
                    <li class="list">Informaticien d'études</li>
                    <li class="list">Programmeur analyste</li>
                    <li class="list">Programmeur d'applications</li>
                    <li class="list">Responsable des services applicatifs</li>
                    <li class="list">Technicien d'études informatiques</li>
                </ul>
            </div>
            <div id="sisr">
                <h3 id="title-sisr">SISR</h3>
                <p class="paragraphe"><span>SISR</span> signifie <span>« Solutions d’Infrastructure, Systèmes et Réseaux »</span>.</p>
                <p class="paragraphe">Assurer la sécurité, la maintenance et l’installation des réseaux et des équipements informatiques font partie des principales missions des futurs administrateurs, techniciens ou pilotes d’exploitation.</p>
                <p class="paragraphe">Voici les débouchés :</p>
                <ul class="ul-list">
                    <li class="list">Technicien de production</li>
                    <li class="list">Technicien d’infrastructure</li>
                    <li class="list">Technicien réseau et télécoms</li>
                    <li class="list">Technicien systèmes et réseaux</li>
                    <li class="list">Support systèmes et réseaux</li>
                    <li class="list">Pilote d’exploitation</li>
                    <li class="list">Informaticien support et déploiement</li>
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