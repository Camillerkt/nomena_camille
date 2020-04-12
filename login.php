<?php 
include 'database.php';
?>s
<!DOCTYPE html>
<html>
<head>
	<title>Le réseau social pour les profs de Mathématiques !</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- Bootstrap Framework -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!-- Fin Bootstrap Framework -->
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Fin font awesome -->
</head>
<body><br/><br/>
<!-- couleur principale : #ff7675 -->
<!-- couleur arriere plan : #dcdde1 -->
	<div class="container">
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
						            <form id="register-form" role="form" autocomplete="off" class="form" method="post">
						                <div class="form-group">
						                	<div class="input-group">
						                        <input id="NomConnexionForm" name="forgetAnswer" placeholder="Nom d'utilisateur" class="form-control"  type="text">
						                    </div>
						                </div>
						                <div class="form-group">
						                    <div class="input-group">
						                        <input name="mdp" placeholder="Mot de passe" class="form-control"  type="password" id="PasswordConnexionForm">
						                    </div>
						                </div>
						                <div class="form-group">
						                    <input name="" class="btn btn-lg" value="Se connecter" type="submit" id="ConnectButton">  

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