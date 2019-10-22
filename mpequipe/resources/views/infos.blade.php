<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/assets/css/style-commun.css">
    <link rel="stylesheet" href="../public/assets/css/style-mentions-légales.css">
    <link rel="stylesheet" href="../public/assets/css/style-infos.css">

    <title>TROC HOUR</title>
</head>
<body>
<header>
    <!--<h1>PROJET MARKETPLACE</h1>-->
    <a href="#"  id="logo"><img src="../public/assets/images/logo.png" style=></a>
    <div>
        <div id="boutonsConnexion">
            <button type="submit" id="inscription">S'INSCRIRE</button>
            <button type="submit" id="connexion">SE CONNECTER</button>
        </div>
        <nav>
            <ul id="menu">
                <li><a href="<?php echo url("/") ?>">ACCUEIL</a></li>
                <li><a href="<?php echo url("/infos") ?>">COMMENT ÇA MARCHE?</a></li>
                <li><a href="<?php echo url("/contact") ?>">CONTACT</a></li>
            </ul>
        </nav>
    </div>
</header>
    <h3>Comment ça marche ?</h3>
<main>
    <!-- <section id="notice"> -->
    <div id="conteneur">
        <img id="sophie" src="../public/assets/images/sophie.png">            
            <p>Sophie, 30 ans, elle est Atsem dans l’école maternelle du quartier. 
            Elle s’inscrit <strong>gratuitement</strong> à troc'hour. Elle communique les types de services qu‘elle offre aux autres et ceux dont elle a besoin.</p>
        <img src="../public/assets/images/sophie2.png">
            <p>Elle reçoit 3 crédits (3 heures). Chaque crédit équivaut à une heure de service échangé. Elle consulte les services proposés... </p>
        <img src="../public/assets/images/sophiePaul.png">
            <p>et elle contacte Paul pour qu’il l’aide à jardiner. Elle dépense un crédit pour 1h de service.</p>
    </div>
    <br>
    <div id="conteneur1">
        <img src="../public/assets/images/paulHayat.png">
            <p>Paul utilise son crédit pour recevoir 1h de cours de peinture proposé par Hayat.</p>
        <img src="../public/assets/images/hayatMario.png">
            <p>Hayat à son tour choisit de dépenser son crédit pour une heure de cuisine faite par Mario.</p>
        <img src="../public/assets/images/MarioAbdel.png">
            <p>Mario choisit Abdel pour la garde de ses enfants.. </p>
    </div>
</main>
<footer>
    <p>Troc Hour est une initiative de la Maison du quartier. Elle est soutenue par la ville de Marseille.</p>
    <p>Vous pouvez nous soumettre des idées d’améliorations, suggérer des services manquants ou signaler un abus : contact@troc-hour.com</p>
    <a href="<?php echo url("/mentions-legales") ?>">Mentions légales</a>
    <a href="<?php echo url("/conditions-generales") ?>">Conditions Générales d'Utilisation</a>
    <ul>
        <li><a href="<?php echo url("/espace-membre") ?>">membre</a></li>
        <li><a href="<?php echo url("/espace-admin") ?>">admin</a></li>
    </ul>
</footer>
    
</body>
</html>
