<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Mon Portfolio</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/styleIndex.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include_once "src/layout/navbar.php";
    ?>
    <div>
        <div class="information">
            <h1>Bonjour,</h1>
            <h1>Tom ALLUSSE, étudiant en 2e année</h1>
            <h1>Bachelor Informatique, Cybersécurité et IA</h1>
        </div>
        <div class="information desc">
            <article>
                Diplômé d'un BTS Services Informatiques aux Organisations, j'ai rejoint l’IPSSI en 2ème année de Bachelor Informatique, Cybersécurité et IA.  
                J’ai pour but d’obtenir un diplôme Bachelor IA, développement Fullstack DevOps en 2027, puis de suivre une formation Mastère ou Master. 
            </article>
            <article>
                J'ai choisi de me spécialiser dans le développement Web et le développement d'applications mobiles et Web.
                Durant mon cursus, j'ai acquis une maîtrise des langages de programmation en web (HTML, PHP, CSS, JavaScript, SQL, C#), objet (PHP, C#), logiciel (C#, C++) ainsi que des frameworks (Angular) et outils associés (Visual Studio).
            </article>
            <article>
                Je recherche un stage de 2 mois minimum, à partir du 11 mai jusqu'au 2 octobre, avec la possibilité de poursuivre en alternance.
            </article>
            <a href="details.php">Détails</a>
        </div>
    </div> 
    <?php
        include_once "src/layout/footer.php";
    ?>
    <script src="src/js/app.js"></script>
</body>
</html>