<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="StyleInscription.css" />
    <title>Authome</title>
</head>

<body >
<header>
    <img id="LogoTrans" src="../Ressources/LogoTrans.png" alt ="Logo Authome" >
    <p>Authome</p>
</header>
<div id="ZoneCentrale">
        <p class = "Titre">A Remplir :</p>
        <form class="Formulaire" method="POST" action="Test.php" >
            <input type="text" name="Nom" class="nom" placeholder="Nom" size="10" required/>
            <input type="text" name="Prenom" class="prenom" placeholder="Prénom" size="10" required/>
            <input type="text" name="Date_de_naissance" class="DdN" placeholder="Date de Naissance (JJ/MM/AAAA)" size="10" required/>
            <input type="tel" name="Telephone" class="telephone" placeholder="Téléphone" size="10" required/>
            <input type="text" name="Adresse" class="adresse" placeholder="Adresse (ex: 10 avenue de la Joie)" size="10" required/>
            <input type="text" name="Ville" class="ville" placeholder="Ville" size="10" required/>
            <input type="number" name="Code_Postal" class="CdP" placeholder="Code Postal" size="10" required/>
            <input type="submit"  title ="Valider" class="bouton" value="Valider l'inscription" />
        </form>
</div>
<?php include("Footer.php"); ?>

</body>
</html>