
<?php


session_start();
$_SESSION['adresse_mail'] = $_POST['email'];
$_SESSION['mot_de_passe'] = $_POST['password'];

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=authome;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$données = $bdd->query('SELECT * FROM utilisateur WHERE Adresse_mail=\'' . $_SESSION['adresse_mail'] . '\' AND Mot_de_passe=\'' . $_SESSION['mot_de_passe'] . '\'');


if ($info = $données->fetch()) {
    header('location:../Vue/MonEspace.php');
    exit();
} else {
    header('location:../Vue/Accueil.php');
    exit();
}

?>
