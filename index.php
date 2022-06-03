<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier 4 : Formulaire de contact</title>
</head>

<body>

    <section id="divForm">
        <form action="contact.php" method="POST">
            <input name="lastname" type="text" placeholder="Nom">
            <input name="firstname" type="text" placeholder="Prénom">
            <input name="email" type="email" placeholder="votre.email@juste.ici">
            <input name="phone" type="phone" placeholder="n° de téléphone">
            <textarea name="message" cols="30" rows="10" placeholder="Votre message ici."></textarea>
            <button>Envoyer</button>
        </form>

    </section>



</body>

</html>