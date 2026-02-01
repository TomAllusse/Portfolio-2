<?php
    if(isset($_GET['success'])){
        echo '  <script>
                    alert("Le mail a bien été envoyé avec succès !");
                </script>';
    } else if(isset($_GET['error'])){
        // Note l'antislash devant l'apostrophe de l'envoi
        echo '  <script>
                    alert("Erreur lors de l\'envoi du mail !");
                </script>';
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Mon Portfolio</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/styleContact.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include_once "src/layout/navbar.php";
    ?>
    <section id="contact">
        <!-- DIV "CONTACT" -->
        <div class="contactBoxForm">
            <h1 class="contactTitleForm">Contactez-moi
                <span class="logoTitre">
                    <img src="src/svg/logoPlane.svg" alt="Icône d'avion en papier">
                </span>
            </h1>
            <form class="contactForm" action="mail.php" method="post">
                <label for="email" class="labelEmail">Email</label>
                <input type="email" name="email" id="email" class="emailInp" required maxlength="50" placeholder="Entrez votre email">
                <div>
                    <label for="prenom" class="labelFirstName">Prénom</label>
                    <input type="text" name="prenom" id="prenom" required maxlength="35" class="firstnameInp" placeholder="Entrez votre prénom">
                </div>
                <div>
                    <label for="nom" class="labelSurname">Nom</label>
                    <input type="text" name="nom" id="nom" required maxlength="35" class="surnameInp" placeholder="Entrez votre nom">
                </div>
                <div>
                    <label for="objet" class="labelObject">Objet</label>
                    <input type="text" name="objet" id="objet" required maxlength="75" class="objectInp" placeholder="Entrez votre objet">
                </div>
                <label for="txtArea" class="labelTxt">Commentaire</label>
                <textarea name="txt" id="txtArea" cols="50" rows="10" placeholder="Entrez votre commentaire"></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
        <!-- DIV "INFORMATION" -->
        <div class="contactBoxInfo">
            <h1 class="contactTitle">
                Me trouver
            </h1>
            <div class="contactInfo">
                <a href="tel:+33673155529" class="contactPhone">
                    (+33) 6 73 15 55 29
                </a>
                <a href="mailto:t.allusse@ecole-ipssi.net" class="contactEmail">
                    t.allusse@ecole-ipssi.net
                </a>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62381.31558545002!2d5.117635994968854!3d46.29214547639208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f34effcc36adcf%3A0x408ab2ae4c21760!2s01340%20Attignat!5e0!3m2!1sfr!2sfr!4v1769980148330!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <a href="https://maps.app.goo.gl/bBDJrnTv7ne7s6mM8" class="contactAddress">01340 Attignat - FRANCE</a>
            </div>
        </div>
    </section>
    <?php
        include_once "src/layout/footer.php";
    ?>
    <script src="src/js/app.js"></script>
</body>
</html>