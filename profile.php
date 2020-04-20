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
	<?php 
	include 'navbar.php';
	?>
	<br/><br/><br/><br/>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<div align="center">
					<div class="card">
						<div class="card-header">
							<img src="images/female-user-test.png" class="photoProfile">
							<p class="nameProfile">Hillary Clinton</p>
						</div>
						<!-- Les activités de l'user -->
						<div class="card-body">
							<div class="container">
								<div class="row">
									<!-- Dernieres ressources publiées -->
									<div class="col">
										<div class="card">
											<div class="card-body">
												Dernières ressources publiées
												<hr/>
												<button class="btn btn-danger btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Accéder <i class="fa fa-arrow-right" aria-hidden="true"></i><br/>(ouverture modal)</button>
											</div>
										</div>
										<br/>
									</div>
									<!-- Fin des dernieres ressources publiées -->
									
									<!-- Derniers cours créés -->
									<div class="col">
										<div class="card">
											<div class="card-body">
												Derniers cours créés
												<hr/>
												<button class="btn btn-danger btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Accéder <i class="fa fa-arrow-right" aria-hidden="true"></i><br/>(ouverture modal)</button>
											</div>
										</div>
										<br/>
									</div>
									<!-- Fin des derniers cours créés -->

									<!-- Mes groupes -->
									<div class="col">
										<div class="card">
											<div class="card-body">
												Mes groupes
												<hr/>
												<button class="btn btn-danger btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Accéder <i class="fa fa-arrow-right" aria-hidden="true"></i><br/>(ouverture modal)</button>
											</div>
										</div>
									</div>
									<!-- Fin Mes groupes -->
								</div>
							</div>
						</div>
						<!-- Fin des activités de l'user -->
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>