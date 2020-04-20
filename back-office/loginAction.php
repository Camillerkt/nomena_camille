<?php
if(isset($_POST['se_connecter'])){
	if(!empty($_POST['nom_user']) AND !empty($_POST['mdp'])){
		$nom_user = htmlspecialchars($_POST['nom_user']);
		$mdp = sha1($_POST['mdp']);
		$look_if_user_in_db = $bdd->prepare('SELECT * FROM users WHERE nom = ? nom_user = ? AND mdp = ? ');
		$look_if_user_in_db->execute(array($nom_user, $mdp));
		if($look_if_user_in_db->rowCount() == 1){
			$les_infos_de_l_user = $look_if_user_in_db->fetch();
			$_SESSION['nom'] = $les_infos_de_l_user['nom'];
			$_SESSION['prenom'] = $les_infos_de_l_user['prenom'];
			$_SESSION['mdp'] = $les_infos_de_l_user['mdp'];
			$_SESSION['id'] = $les_infos_de_l_user['id'];
			$_SESSION['nom_user'] = $les_infos_de_l_user['nom_user'];
			header('Location: index.php');
		}else{
			//
		}
	}else{
		//
	}
}
?>