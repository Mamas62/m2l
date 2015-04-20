<?php

echo('

<!DOCTYPE html>
<html lang="fr">');






echo('

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Salles Réservations</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../Login.php">M2L</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href=../Usager/indexusager.php>Accueil Usager</a></li>
            <li><a href="../Usager/salles.php">Salles</a></li>
            <li><a href="../Usager/reservation2.php">Réservations</a></li>
            <li class="active"><a href="../Usager/reserver.php">Réserver</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Grégory Leplafond(user)</a></li>
          <li ><a href="../Connexion.php">Deconnexion <img src="../img/logout.jpg" alt=" Se déconnecter" width="15" height="17"/></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

      
      
    <div class="container">
        
        

      <div class="starter-template text-center">
          <div class="col-md-3">
                    <img src="../img/LogoM2L.jpg" width="200" height="200" alt="Logo M2L">
                </div>
        <h1> <br> </h1>
        <h2>Page Reservation</h2>
        
      </div>
        <form method="post" action="reserver.php" role="form">
				<div class="form-group container jumbotron text-center">
					<label for="choixSalle">Salle:</label>
					<select class="input-sm" name="choixSalle" id="choixSalle">
						<option value="amphitheatre">Amphithéâtre</option>
						<option value="baccarat">Baccarat (Réunion)</option>
						<option value="corbin">Corbin (Réunion)</option>
						<option value="daum">Daum (Réunion)</option>
						<option value="galle">Gallé (Réunion)</option>
						<option value="lamour">Lamour (Réunion)</option>
						<option value="longwy">Longwy (Réunion)</option>
						<option value="majorelle">Majorelle (Réunion)</option>
						<option value="multimedia">Multimédia</option>
						<option value="reunion_etage">Réunion d étage</option>
					</select>
					
					
					<label for="choixTypeId">Type:</label>
					<select class="input-sm" name="choixType" id="choixTypeId">
						<option value="regulier">Régulier</option>
						<option value="occasionnel">Occasionnel</option>
					</select>
					
					
					</br>
					
                                        
                                        <label for="date_deb_reserv">Date debut</label>
                                        <input class="input-sm" type="date" name="dateDeDebut" id="date_deb_reserv">
                                        
                                         <label for="heure_debut">Heure début</label>
                                         <input class="input-sm" type="time" name="heureDeDebut" id="heure_debut">
										 
										 <label for="date_fin_reserv">Date fin</label>
                                        <input class="input-sm" type="date" name="dateDeFin" id="date_fin_reserv">
                                         
                                         <label for="heure_fin">Heure fin</label>
                                         <input class="input-sm" type="time" name="heureDeFin" id="heure_fin">
										 
										 
										 </br>
										 <label for="confirmation">Etat de la confirmation:</label>
										 <input class="input-sm" type="radio" name="confirmation" value="confirme" id="cofirmation">Confirmé
										 <input class="input-sm" type="radio" name="confirmation" value="provisoire" id="cofirmation">Provisoire
										 
                                         
                                         <div class="form-group">
					<input type="hidden" name="envoye" value="oui" />
                                         </div>
                                         
                                         
                                         
                                         <div class="form-group navbar-btn ">
                                             
                                            
                                             
                                         </div>
            
              </div>
			  
			  <div class="form-group container jumbotron text-center">
			  
			  <label for="typePeriodicite">Type de périodicité :</label>
			  <input type="radio" name="periodicite" value="aucune" id="typePeriodicite">Aucune
			  <input type="radio" name="periodicite" value="jour" id="typePeriodicite">Jour
			  <input type="radio" name="periodicite" value="semaine" id="typePeriodicite">Semaine
			  <input type="radio" name="periodicite" value="mois" id="typePeriodicite">Mois
			  <input type="radio" name="periodicite" value="annee" id="typePeriodicite">Annee
			  <input type="radio" name="periodicite" value="moisJourSemaine" id="typePeriodicite">Mois, même jour semaine
			  <input type="radio" name="periodicite" value="nSemaine" id="typePeriodicite">toutes les n semaines
			  
			  </br>
			   <label for="date_fin_periodicite">Date de fin de périodicité :</label>
               <input class="input-sm" type="date" id="date_fin_periodicite" name="finPeriodicite">
			  
			  </div>
			  
        
		
		
            
            <div class="form-group container jumbotron text-center">
			
				<label for="breveDescription">Brève description</label>
               <textarea class="form-control " name="descriptionBreve" id="breveDescription" rows="1"></textarea>
			   
			   
                
                <label for="description">Description</label>
               <textarea class="form-control " name="descriptionTotale" id="description" rows="3"></textarea>
                
            </div>
            
            <div class="form-group text-center">
                
                <input type="submit" value="valider" class="btn btn-default" name="validation">
                
            </div>
			 
			 
			
			</form>
			
			');
			 
			 //récupération de la brève description
			 if( isset ($_POST['descriptionBreve']))
			{
				$descriptionBreve=$_POST['descriptionBreve'];
				
			}
			
			//récupération de la description
			 if( isset ($_POST['descriptionTotale']))
			{
				$description=$_POST['descriptionTotale'];
				
			}
			
			//récupération de la salle
			 if( isset ($_POST['choixSalle']))
			{
				$salle=$_POST['choixSalle'];
				
			}
			
			//récupération du type
			 if( isset ($_POST['choixType']))
			{
				$type=$_POST['choixType'];
				
			}
			
			//récupération de la date de début
			if( isset ($_POST['dateDeDebut']))
			{
				$dateDebut=$_POST['dateDeDebut'];
				
			}
			
			//récupération de l'heure de début 
			if( isset ($_POST['heureDeDebut']))
			{
				$heureDebut=$_POST['heureDeDebut'];
				
			}
			
			//récupération de la date de fin
			if( isset ($_POST['dateDeFin']))
			{
				$dateFin=$_POST['dateDeFin'];
				
			}
			
			//récupération de l'heure de fin
			if( isset ($_POST['heureDeFin']))
			{
				$heureFin=$_POST['heureDeFin'];
				
			}
			
			//récupération de la confirmation
			if( isset ($_POST['confirmation']))
			{
				$confirmation=$_POST['confirmation'];
				
			}
			
			//récupération de la periodicite
			if( isset ($_POST['periodicite']))
			{
				$periodicite=$_POST['periodicite'];
				
			}
			
			//récupération de la date de fin de périodicité
			if( isset ($_POST['finPeriodicite']))
			{
				$finPeriodicite=$_POST['finPeriodicite'];
				
			}
			
			echo $finPeriodicite;
			
			echo('
			
            

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html> ');

?>