<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Style.css" />
    <title>Authome</title>
</head>

<body class="grid-container">
<header>
    <img id="LogoTrans" src="../Ressources/LogoTrans.png" alt ="Logo Authome" >
    <p>Authome</p>
</header>
<div id="ZoneCentrale">
    <div id = "ZConnexion">
        <p class = "Titre">Connexion</p>
        <form class="Formulaire" method="POST" action="MonEspace.php">
            <input type="email" name="email" class="Adresse_Mail" placeholder="Adresse email" size="10" required/>
            <input type="password" name="password" class="MDP" placeholder="Mots de passe" size="10" required/>
            <input type="submit" title ="Connexion" class="bouton" value="Se Connecter" />
        </form>
    </div>

    <div id ="ZInscription">
        <p class="Titre">Inscription</p>
        <form class="Formulaire" method="POST" action="../../Inscription/Vue/Inscription.php">
            <input type="email" name="email" class="Adresse_Mail" placeholder="Adresse email" size="10" required/>
            <input type="password" name="password" class="MDP" placeholder="Mots de passe" size="10" required/>
            <label id="CGU"> <input type="checkbox" name="CGU" required/> J'accepte les CGU</label>
            <input type="submit" title ="Inscription" class="bouton" value="S'inscrire" />
        </form>

    </div>

</div>

<?php include("Footer.php"); ?>

</body>
</html>