<?php
/* ----------------  Déclaration de variable ---------------- */

$user = [];

/* ----------------- Assignation des valeurs ---------------- */

$user["lastname"] = $_POST["lastname"];
$user["firstname"] = $_POST["firstname"];
$user["email"] = $_POST["email"];
$user["phone"] = $_POST["phone"];
$user["message"] = $_POST["message"];

/* $query = $dbh->prepare("INSERT INTO users (firstname, lastname, email, password, message) VALUES :firstname, :lastname, :email, :password, :message");
$query->execute($user); */





?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact.php</title>
</head>

<body>

    <?php if ($user["lastname"] == "teapot" || $user["firstname"] == "teapot") { ?>
        <p>I'm a teapot</p>
        <?php http_response_code(418); ?>
    <?php } elseif ($user["firstname"] == "jason" || $user["firstname"] == "json") {
        header("Content-Type: application/json"); ?>
        <p>Salut Jason. Voici du contenu pour toi ;)</p>
    <?php } else { ?>
        <p> Bonjour <?php echo $user["firstname"] . " " . $user["lastname"] ?>. J'ai noté votre email : <?php echo $user["email"] ?> et votre numéro de téléphone : <?php echo $user["phone"] ?>. Merci pour votre message : <?php echo $user["message"] ?> </p>
    <?php } ?>
</body>

</html>