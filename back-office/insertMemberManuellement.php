<?php 
	#Juste un fichier pour insérer un membre dans la table users car la page d'inscription n'a pas encore été créée
	include 'database.php';
	$insert = $bdd->prepare('INSERT INTO users(nom, prenom, mdp, nom_user)VALUES(?, ?, ?, ?)');
	$mdp = sha1("jean");
	$insert->execute(array("Jean", "Francois", $mdp, "JF1092"));
?>