<?php 
include 'database.php'; 
/* A ajouter après avir fini le design 
if(!isset($_SESSION['mdp'])){
	header('Location: login.php');
}
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Le réseau social pour les profs de Mathématiques !</title>
	<!-- include les éléments de head -->
	<?php include 'head.php'; ?>
	<!-- fin include les éléments de head -->
</head>
<body>
	<!-- include la barre de navigation -->
	<?php include 'navbar.php'; ?>
	<!-- fin include la barre de navigation -->
	<!-- Saut de ligne pour bien placer les éléments de la page -->
	<br/><br/><br/><br/>
	<!-- Saut de ligne pour bien placer les éléments de la page -->
	<!-- Colonnes -->
	<div class="container">
		<!-- Message du haut pour créer un cours -->
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Créez votre propre cours dès maintenant : <a href="" style="text-decoration: none; color: #000"><b><i class="fa fa-play" aria-hidden="true"></i>  Commencer !</b></a>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  			</button>
		</div>
		<!-- Fin Message du haut pour créer un cours -->
	  	<div class="row">
		    <!-- Première colonne (Principale = la plus grande) -->
		    <div class="col-md col-xs-12 col-lg">
		    	<!-- Publier une ressource pédago -->
		    	<div class="card">
		    		<div class="card-body">
		    			<div class="row">
			    			<div class="col-md-7 col-xs-12"><img src="images/female-user-test.png" height="60"> Publier des ressources pédagogiques !</div>
	    					<div class="col-xs-12 col-md-4"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Publier une ressource mathématique</button></div>
			    		</div>
		    		</div>
		    	</div>
		    	<!-- Fin Publier une ressource pédago -->
		    	<br/>
		    	<div class="card">
		    		<div class="card-body">

		    			<!-- Publications -->
		    			<div class="card">
		    				<div class="card-header">
			    				<div class="row">
			    						<div class=".col-"><img src="images/user-test.png" height="60" class="pdpAccueil"></div>
	    								<div class="col-10"><span class="userInfoAccueil">Louis Quatorze <br/>
										<i class="fa fa-users" aria-hidden="true"></i>
	    								<span style="font-size: 10px;">
	    								Dans le groupe : MathouMata
	    								</span></span></div>
			    				</div>
		    				</div>
		    				<div class="card-body">
			    				<b>Ma ressource pédagogique... 
			    				<br/>Une pomme vaut 2 euros, combien valent 10 pommes ? 
			    				<br/>Aide : utiliser la règle de trois.</b>

			    				<br/><br/>

			    				<span class="tagsAccueilPubli"><i class="fa fa-file" aria-hidden="true"></i>  Classe 3ème, Maths, Proportionalité, Exercice, Cours, Autres critères</span>

			    				<hr/>
			    				<!-- Bouton ça m'intéresse -->
    							<button type="button" class="btn btn" id="interresseButtonAccueil"><i class="fa fa-star-o" aria-hidden="true"></i>  Intéressé(e)</button>
    							<!-- Fin Bouton ça m'intéresse -->
		    				
		    				</div>
		    			</div>
		    		</div>
		    	</div><br/>
		    	<!-- Fin des publications -->
		    </div>
		    <!-- Fin première colonne -->

		    <!-- Deuxième colonne -->
		    <div class="col-md-4 col-xs-12 col-lg-4">
		    	<div class="card" id="activitiesAccueil">
		    		<div class="card-body">
		    			<h5 class="DeuxiemeColonneAccueilTitre"><i class="fa fa-bullhorn" aria-hidden="true"></i>   Dernières activités</h5>
		    			<hr/>
		    			<b><i class="fa fa-calculator" aria-hidden="true"></i>  Daniel Legrand a publié une ressources pédagogique dans le groupe</b> LesMathsLove<br/><br/>
		    			<b><i class="fa fa-calculator" aria-hidden="true"></i>  Dupont Perette a publié une ressources pédagogique dans le groupe</b> ChatDoreMaths<br/><br/>
		    			<b><i class="fa fa-calculator" aria-hidden="true"></i>  Pierre Leloup a publié une ressources pédagogique dans le groupe</b> ClaVieLesMahts<br/><br/>
		    		</div>
		    	</div><br/>
		      
		    </div>
		    <!-- Fin deuxième colonne -->


  		</div>
	</div>
	<!-- Fin Colonnes -->





	<!-- Modal publier ressources-->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Publier une ressource (ex : exercice)</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<!-- Formulaire pour bulier la ressource -->
	      	<form>
			  <div class="form-group">
			    <div class="form-group">
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ecrivez ici..."></textarea>
  				</div>
			</form>
			<!-- Fin Formulaire pour bulier la ressource -->
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
	        <button type="button" class="btn btn" style="background-color: #ff7675; color: white;">Publier</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Fin Modal publier ressources-->
</body>
</html>