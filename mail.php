<?php
// Utilisation de filter_input pour nettoyer les données (Sécurité)
$email   = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$nom     = htmlspecialchars($_POST['nom'] ?? '');
$prenom  = htmlspecialchars($_POST['prenom'] ?? '');
$subject = htmlspecialchars($_POST['objet'] ?? 'Nouveau contact Portfolio');
$comment = htmlspecialchars($_POST['txt'] ?? '');

// Import des classes PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv; // Ajout pour le .env

require 'vendor/autoload.php';

// Chargement des variables d'environnement
$dotenv = Dotenv::createImmutable(__DIR__); // <--- AJUSTÉ ICI car mail.php est à la racine
$dotenv->load();

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';

try {
    $mail->isSMTP();
    $mail->Host       = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['SMTP_USER']; 
    // On récupère le mot de passe depuis le .env
    $mail->Password   = $_ENV['SMTP_PASSWORD']; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $mail->Port       = $_ENV['SMTP_PORT'];

    $mail->setFrom($_ENV['SMTP_USER'], 'Portfolio - ' . $prenom . ' ' . $nom);
    $mail->addAddress($_ENV['SMTP_USER'], "Tom Allusse");
    $mail->addReplyTo($email, $prenom . ' ' . $nom);

    $body = "<h2>Nouveau message depuis le portfolio</h2>";
    $body .= "<p><strong>Expéditeur :</strong> $prenom $nom ($email)</p>";
    $body .= "<p><strong>Message :</strong><br>" . nl2br($comment) . "</p>";

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    header('Location: contact.php?success=1');

} catch (Exception $e) {
    error_log("Erreur mail : " . $mail->ErrorInfo);
    header('Location: contact.php?error=1');
}