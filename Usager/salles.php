<?php

session_start();
if (!isset($_SESSION['pseudo'])) {
	header ('Location: ../Login.php');
	exit();
}


$bdd = new PDO('mysql:host=localhost;dbname=mrbs;charset=utf8', 'root', '');

$requete = $bdd->query('SELECT nomAnimateur, prenomAnimateur, room_name, capacity FROM mrbs_reservation r INNER JOIN mrbs_room ro ON r.idSalle=ro.id ');



        

echo('
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Salles Usager</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">
    
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
            <a class="navbar-brand" href="../apresLogin.php">M2L</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href=../Usager/indexusager.php>Accueil Usager</a></li>
            <li class="active"><a href="../Usager/salles.php">Salles</a></li>
            <li><a href="../Usager/reservation2.php">Réservations</a></li>
            <li><a href="../Usager/reserver.php">Réserver</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> '); echo htmlentities(trim($_SESSION['pseudo']));echo('</a></li>
           <li ><a href="../Login.php">Deconnexion <img src="../img/logout.jpg" alt=" Se déconnecter" width="15" height="17"/></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
        <div class="col-md-3">
                    <img src="../img/LogoM2L.jpg" width="200" height="200" alt="Logo M2L">
                </div>

      <div class="starter-template text-center">
        <h1 class="text-center" style="margin-bottom: 40px;">Salles</h1>
        
      </div>

    </div><!-- /.container -->
    
    <div>
        
        <form method="post" action="index.php" role="form">
				<div class="form-group">
					<label for="choixDomaine">Choix du domaine</label>
					<select id="choixDomaine" class="form-control ">
						<option value="tous" selected>Tous les domaines</option>
						<option value="multimedia">Multimédia</option>
						<option value="reunion">Réunion</option>
					</select>
				</div>
				<div class="from-group">
					<label for="choixSalle">Choix de la salle</label>
					<select id="choixSalle" class="form-control">
						<option value="tous" selected>Toutes les salles</option>
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
				</div>
				<div class="form-group">
					<input type="hidden" name="envoye" value="oui" />
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-default">Filtrer</button>
				</div>
			</form>
    </div>
    
    
    <div>
    <table class="table table-centre table-responsive">
        
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Maximum</th>
           
        </tr>
        
        ');

while ($donnee = $requete->fetch())
{echo('
            <tr>
            <td>'.$donnee['nomAnimateur'].' '.$donnee['prenomAnimateur'].'</td>
            <td>'.$donnee['room_name'].'</td>
            <td>'.$donnee['capacity'].'</td>
            </tr>');
}

echo('
            
       
        
        
            
        </tr>
        
    </table>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>');
 

?>
