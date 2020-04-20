<?php 
include 'back-office/database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Le réseau social pour les profs de Mathématiques !</title>
	<?php 
	include 'head.php';
	?>
</head>
<body><br/><br/>
	<div class="container">
		<!-- afficher une erreur de connexion
		<?php include 'back-office/erreurDeConnexion.php'; ?>
		fin de l'affichage de l'erreur de connexion -->
		<div class="card" id="inscription_carte">
			<div class="card-header">
				<i class="fa fa-user-plus" aria-hidden="true"></i> Inscription au réseau social
			</div>
			<div class="card-body">
				<form method="POST" action="">
  					<div class="form-group">
    					<label for="exampleInputEmail1">Nom</label>
    					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" placeholder="Ecrivez ici votre nom...">
  					</div>
  					<div class="form-group">
    					<label for="exampleInputEmail1">Prénom</label>
    					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prenom" placeholder="Ecrivez ici votre prénom...">
  					</div>
  					<div class="form-group">
    					<label for="exampleInputEmail1">Nom d'utilisateur</label>
    					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom_user" placeholder="Ecrivez ici le nom d'utilisateur utilisé sur le réseau...">
  					</div>
  					<div class="form-group">
    					<label for="exampleInputPassword1">Password</label>
    					<input type="password" class="form-control" id="exampleInputPassword1" name="mdp" placeholder="Ecrivez ici votre mot de passe...">
  					</div>
  					<div class="card-footer">
  						<div align="center">
  							<button type="submit" class="btn btn" name="s_inscrire" id="SignUpButton">S'inscrire</button>
  						</div>
  					</div>
				</form>
			</div>
		</div><br/>
		<div class="card">
		    <div class="card-body">
		       	<div align="center">
					<a href="login.php" style="text-decoration: none;"><span style="color: #ff7675;"><i class="fa fa-calculator" aria-hidden="true"></i>  J'ai déjà déjà un compte</span></a>
					</div>
			</div>
		</div><br/>
		<div class="card">
		    <div class="card-body">
		       	<div align="center">
					<span id="FooterConnexion">&copy; 2020 by NomApplication
					<hr/>
					<i class="fa fa-facebook-official" aria-hidden="true"></i>  <i class="fa fa-instagram" aria-hidden="true"></i>  <i class="fa fa-twitter" aria-hidden="true"></i></span>
					</div>
			</div>
		</div><br/>
	</div>
</body>
</html>