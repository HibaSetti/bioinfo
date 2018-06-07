<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=ghrv;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
//$time = strtotime($_GET['naissance']);
//$newformat = date('Y-m-d',$time);
$req = $bdd->prepare('INSERT INTO patient (nom, prenom,naissance,tel) VALUES(?,?,?,?)');
$req->execute(array($_POST['nom'], $_POST['prenom'],$_POST['naissance'],$_POST['tel']));

// Redirection du visiteur vers la page du minich
echo "<div class='alert alert-danger'> Utilisateur a été bien enregistré!</div>";
header('Location: index.php');

?>