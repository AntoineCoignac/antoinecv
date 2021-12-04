<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-type: text/html; charset=utf-8");
?>
<?php
if (isset($_GET["nom"]) and isset($_GET["adresseMail"]) and isset($_GET["mess"])) {
    if ($_GET["nom"] != "" and $_GET["adresseMail"] != "" and $_GET["mess"] != "") {
        $noM = $_GET["nom"];
        $maiL = $_GET["adresseMail"];
        $mess = $_GET["mess"];
        require("vendor/autoload.php"); // Ajoute et exécute le fichier
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        // Configuration du serveur SMTP
        $mail->SMTPDebug = 1; // Active/désactive les messages de mise au point
        $mail->isSMTP(); // Utilise le protocole SMTP
        $mail->Host = "smtp.gmail.com"; // Configure le nom du serveur serveur SMTP
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS; // Active le cryptage sécurisé TLS
        $mail->Port = 465; // Configure le numéro de port
        $mail->SMTPAuth = true; // Active le mode authentification
        $mail->Username = "azertyqsdfg789456123@gmail.com"; // Identifiant du compte SMTP
        $mail->Password = "azertyqsdfg123"; // Mot de passe du compte SMTP
        // Destinataires
        $mail->setFrom("azertyqsdfg789456123@gmail.com", "Mailer");
        $mail->addAddress("antoine.coignac.etu@univ-lemans.fr", "Antoine Coignac"); // Ajout du destinataire
        // Contenu du mail
        $mail->isHTML(true);
        $mail->Subject = "Commentaire de " . $noM . " " . $maiL;
        $mail->Body = $mess;
        $mail->CharSet = PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>CV Antoine Coignac</title>
    <meta name=description content="CV Antoine Coignac" />
    <link rel="stylesheet" href="css/style-contact.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head>

<body>
    <main>
        <div>
            <h1>Merci pour votre message <strong> <?php echo ($noM) ?> </strong> !</h1>
        </div>
        <div>
            <p> Vous avez écrit : <?php echo ($mess) ?> </p>
        </div>
    </main>
    <footer><a href="index.php"><img src="images/flechetop.png" alt="" /></a></footer>
</body>

</html>