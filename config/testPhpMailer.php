<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Configuration du serveur SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Serveur SMTP de Gmail
    $mail->SMTPAuth = true;
    $mail->Username = 'mahamoudinzoudine@gmail.com'; // Ton adresse Gmail
    $mail->Password = 'Mahamoud1994'; // Mot de passe d'application Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Sécurité TLS
    $mail->Port = 587; // Port SMTP pour TLS

    // Paramètres de l'email
    $mail->setFrom('mahamoudinzoudine@gmail.com', 'mahamoud');
    $mail->addAddress('mahamoud-inzoudine@hotmail.fr', 'mahamoud');
    $mail->Subject = 'Sujet de l\'email';
    $mail->Body    = 'Ceci est un email de test envoyé via Gmail avec PHPMailer';

    // Envoi
    $mail->send();
    echo 'Email envoyé avec succès';
} catch (Exception $e) {
    echo "L'envoi de l'email a échoué. Erreur : {$mail->ErrorInfo}";
}
