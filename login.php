<?php 
if(isset($_POST['se_connecter'])){
	include 'back-office/loginAction.php';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Le réseau social pour les profs de Mathématiques !</title>
	<!-- include les éléments de head -->
	<?php include 'head.php'; ?>
	<!-- fin include les éléments de head -->
</head>
<body><br/><br/>
	<div class="container">
		<!-- afficher une erreur de connexion -->
		<?php include 'back-office/erreurDeConnexion.php'; ?>
		<!-- fin de l'affichage de l'erreur de connexion -->
		<div class="row">
			<!-- Code présentation -->
			<div class="col-md-8 col-xs-12 col-lg-8">
				<div class="card" id="AffichageGrandEcran">
					<div class="card-body">
						<h1 id="TitrePrincipalConnexion"><i class="fa fa-handshake-o" aria-hidden="true"></i>  Partagez des ressources pédagogiques aux professeurs de mathématiques du <b>Monde Entier</b> avec NomApplication !</h1>
						<hr/>
						<img src="images/AccueilLogin.jpg" class="img-fluid" alt="Responsive image">

					</div>
				</div><br/>
			</div>
			<!-- Fin Code présentation -->
			<!-- Code connexion -->
			<div class="col-md-4 col-xs-12 col-lg-4">
				<div class="card">
					<div class="card-body">
						<div class="panel panel-default">
						    <div class="panel-body">
						        <div class="text-center">
						            <h2 class="text-center" id="TitreConnexionForm">Connectez-vous !</h2>
						            <hr/>
						            <p id="SousTitreConnexionForm"><i class="fa fa-calculator" aria-hidden="true"></i>  Devenez membre du meilleur réseau social pour profs de Maths !</p>
						            <form id="register-form" role="form" autocomplete="off" class="form" method="POST" action="">
						                <div class="form-group">
						                	<div class="input-group">
						                        <input id="NomConnexionForm" name="nom_user" placeholder="Nom d'utilisateur" class="form-control"  type="text">
						                    </div>
						                </div>
						                <div class="form-group">
						                    <div class="input-group">
						                        <input name="mdp" placeholder="Mot de passe" class="form-control"  type="password" id="PasswordConnexionForm">
						                    </div>
						                </div>
						                <div class="form-group">
						                    <input name="se_connecter" class="btn btn-lg" value="Se connecter" type="submit" id="ConnectButton">  

						                </div>

						                
						            </form>
						        </div>
					        </div>
				       	</div>
				    </div>
		        </div><br/>
		        <div class="card">
		        	<div class="card-body">
		       			<div align="center">
							<a href="signup.php" style="text-decoration: none;"><span style="color: #ff7675;"><i class="fa fa-user-plus" aria-hidden="true"></i>  Je n'ai pas encore de compte</span></a>
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
		</div>
	</div>
</body>
</html>