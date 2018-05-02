<?php
session_start();
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=authome;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$ajout_Membre = $bdd->prepare('INSERT INTO utilisateur(Nom, Prénom, adresse_mail, mot_de_passe, Ville, Code_Postal,Adresse,Telephone,Date_de_Naissance)
VALUES(:Nom,:Prenom,:adresse_mail,:mot_de_passe,:Ville,:Code_Postal,:Adresse,:Telephone,:Date_de_Naissance)');

$ajout_Membre -> execute(array(
        'Nom' => $_POST['Nom'],
        'Prenom' => $_POST['Prenom'],
        'adresse_mail' => $_SESSION['adresse_mail'],
        'mot_de_passe' => $_SESSION['mot_de_passe'],
        'Ville' => $_POST['Ville'],
        'Code_Postal' => $_POST['Code_Postal'],
        'Adresse' => $_POST['Adresse'],
        'Telephone' => $_POST['Telephone'],
        'Date_de_Naissance' => $_POST['Date_de_naissance']));

$ajout_Membre->closeCursor();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Mon Espace Personnel</title>
    <meta charset="utf-8" />
</head>
<body>
<p>
    <?php
    $données = $bdd->query('SELECT * FROM utilisateur ');
    $info = $données->fetch();

    while ($info = $données ->fetch()){
    ?>
    Votre Nom est : <?php echo $info['Nom']; ?> <br/>
    Votre Prénom est : <?php echo $info['Prénom']; ?> <br/>
    Votre Mail est : <?php echo $info['adresse_mail']; ?> <br/>
    Votre MDP est : <?php echo $info['mot_de_passe']; ?> <br/>
    Votre Ville est : <?php echo $info['Ville']; ?> <br/>
    Votre Code Postal est : <?php echo $info['Code_Postal']; ?> <br/>
    Votre Adresse est : <?php echo $info['Adresse']; ?> <br/>
    Votre téléphone est : <?php echo $info['Telephone']; ?> <br/>
    Votre Date de Naissance est : <?php echo $info['Date_de_Naissance']; ?> <br/>

</p>
<?php
}
$données->closeCursor();
?>
</body>
</html>