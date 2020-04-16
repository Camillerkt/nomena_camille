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
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<div class="lists">
					<!-- Premiere colonne -->

					<div class="list">
						<!-- barre de recherche -->
						<div class="form-group">
							<div class="container">
								<div class="row">
									<div class="col-6">
								    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Exercice...">
									</div>
									<div class="col">
								   	<button type="button" class="btn btn-danger">Rechercher</button>
								    </div>
							   	</div>
						    </div>
						</div>
						<!-- Fin barre de recherche -->


						

						<div class="list-item" draggable="true">List item 1</div>
						<div class="list-item" draggable="true">List item 2</div>
						<div class="list-item" draggable="true">List item 3</div>
					</div>
					<!-- Fin Premiere colonne -->
					<!-- Deuxième colonne -->
					<div class="list">
						<div class="form-group">
						    <label for="exampleFormControlTextarea1">Votre cours :</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ecrivez ici ..."></textarea>
  						</div>
					</div>
					<!-- Fin deuxième colonne -->
					<!-- Dernière colonne -->
					<div class="list">
						<span style="color: #ff7675;"><i class="fa fa-star-o" aria-hidden="true"></i>  Intéressé(e) par :<hr/></span>

						<div class="list-item" draggable="true">...</div>

					</div>
					<!-- Fin Dernière colonne -->
				</div>
			</div>
		</div>
	</div>
	<script src="dragndrop.js"></script>
</body>
</html>