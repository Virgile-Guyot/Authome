<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Style_Restriction.css" />
    <title>BanièreType</title>
</head>

<body>
<header>
    <p id="Profil"/>Mon profil</p>
    <p id="AjoutMaison"/>Ajouter une maison</p>
    <p id="Déco"/>Déconnexion</p>
</header>

<div id="BarreGauche">
    <img id="Logo" src="../Ressources/Logo.png" alt="Logo Authome">
    <ul id="ListeBG">
        <a href="https://www.facebook.com/" title ="Lien vers..." ><li>Lien1</li></a>
        <li>Lien2</li>
        <li>Lien3</li>
        <li>Lien4</li>
        <li>etc...</li>
    </ul>
</div>

<! ZONE DU MILIEU !>

<div id="ZoneCentrale">

   <?php include("Utilisateur_Restriction.php");?>
   <?php include("Utilisateur_Restriction.php");?>
   <?php include("Utilisateur_Restriction.php");?>
   <?php include("Utilisateur_Restriction.php");?>
   <?php include("Utilisateur_Restriction.php");?>
   <?php include("Utilisateur_Restriction.php");?>
   <?php include("Utilisateur_Restriction.php");?>
   <?php include("Utilisateur_Restriction.php");?>
   <?php include("Utilisateur_Restriction.php");?>
   <?php include("Utilisateur_Restriction.php");?>
   <?php include("Utilisateur_Restriction.php");?>
   <?php include("Utilisateur_Restriction.php");?>
   <?php include("Utilisateur_Restriction.php");?>
   <?php include("Utilisateur_Restriction.php");?>


</div>

<?php include("Footer.php"); ?>
</body>
</html>