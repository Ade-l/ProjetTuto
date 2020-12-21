<?php
ini_set("display_errors", true);
ini_set("display_startup_errors", true);
require_once "scripts/PHPMailer/PHPMailer.php";
require_once "scripts/PHPMailer/SMTP.php";
require_once "scripts/PHPMailer/Exception.php";
require_once "scripts/PHPMailer/OAuth.php";
require_once "scripts/PHPMailer/POP3.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

session_start();
header("Content-Type: application/json");
$result = [
    "status" => ""
];
$error = [];
// 2 minutes sont nécessaires entre chaque envoie d'email
if (isset($_SESSION["time"]) && $_SESSION["time"] + 120 < time())
    $error[] = "time";
if (isset($_POST["mail"], $_POST["lastname"], $_POST["firstname"], $_POST["text"])) {
    $prenom = strtolower($_POST["firstname"]);
    $nom = strtolower($_POST["lastname"]);
    if (filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL) == false) //l'email est invalide!
        $error[] = "email";
    if ($prenom == $nom)
        $error[] = "nom";
    if (strlen($_POST["text"]) < 10) //texte de moins de 10caractère
        $error[] = "text";
    // Aucune erreur n'est survenue, on peux donc envoyer l'email!
    if ($error == []) {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = 'future.contact.s1@gmail.com';                     // SMTP username
            $mail->Password = 'UnMotDePasse';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('future.contact.s1@gmail.com', 'Future Contact');
            $mail->addAddress($_POST["mail"], "{$prenom} {$nom}");     // Add a recipient
            $mail->addReplyTo('future.contact.s1@example.com', 'Future Contact');

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Confirmation envoie contact';
            $mail->Body = "Votre demande à bien été pris en compte! Vous recevrez une réponse dans les heures qui suivent...";
            $mail->AltBody = "Votre demande à bien été pris en compte! Vous recevrez une réponse dans les heures qui suivent...";
            $mail->send();
            // on enregistre le timestamp du dernier envoie de mail
            $_SESSION["time"] = time();
        } catch (Exception $e) {
            $error[] = "mailFailed";
        }
    }
}
if ($error == []) {
    //Pas d'erreur, le mail a été envoyé.
    $result = [
        "status" => "success",
        "success" => "Votre demande à bien été pris en compte!"
    ];
} else {
    $result["status"] = "error";
    if (in_array("time", $error))
        $result["error"] = "Veuillez patientez avant de renvoyer un mail!";
    else $result["error"] = "Une erreur est survenue!";
}
//On affiche le résultat avec un format json
echo json_encode($result);