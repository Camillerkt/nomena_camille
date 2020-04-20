<?php 
include 'back-office/database.php';
if(!isset($_SESSION['mdp'])){
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Le réseau social pour les profs de Mathématiques !</title>
	<?php 
	include 'head.php';
	?>
</head>
<body>
</body>
</html>