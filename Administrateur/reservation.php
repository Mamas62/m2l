<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Reservations Administrateurs</title>

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
                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">   
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../apresLogin.php">M2L</a>
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
            <li><a href=../Administrateur/indexadmin.php>Accueil Administrateur</a></li>
            <li><a href="../Administrateur/usagers.php">Utilisateurs</a></li>
            <li><a href=../Administrateur/salles.php>Salles</a></li>
            <li class="active"><a href="../Administrateur/reservation.php">Réservations</a></li>
            
                    </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> User1 (Administrateur)</a></li>
                        <li ><a href="../Connexion.php">Deconnexion <img src="../img/logout.jpg" alt=" Se déconnecter" width="15" height="17"/></a></li>
                    </ul>
                    
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="../img/LogoM2L.jpg" width="200" height="200" alt="Logo M2L">
                </div>
                <div class="col-md-9">
                    <h1 class="text-center" style="margin-bottom: 40px;">Page des Réservations </h1>
                </div>
                
                <div class="col-md-9 text-left">
                  
                    <p class="lead"><label>Choix du jour:</label><php>
                        <input type="date" max="2018-12-31" min="1995-01-01" name="the_date">
                    </php>
                        </p>
                   
                
                
               
                     <p class="lead"></p>
                    <p class="lead">
                        <label for="choixSalle">
                            Choix de l'utilisateur :
                        </label>
                        <select class="input-sm" id="choixSalle">
						  <?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=mrbs;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM mrbs_users');
while ($donnees = $reponse->fetch())
{
?>
   <option value=""><?php echo$donnees['name'] ?></option>
                 <?php
                 }

$reponse->closeCursor(); // Termine le traitement de la requête

?>

					</select>
                 </p>
                    
               
                    <p class="lead"></p>
                    <p class="lead">
                        <label for="choixUser">
                            Choix de la salle:
                        </label>
                        <select class="input-sm" id="choixUser">
                            <?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=mrbs;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM mrbs_room');
while ($donnees = $reponse->fetch())
{
?>
   <option value=""><?php echo$donnees['room_name'] ?></option>
                 <?php
                 }

$reponse->closeCursor(); // Termine le traitement de la requête

?>

                        </select>
                    </p>
                    
                    
                    
                   
                    <br>
                <br>
                <br>  
                    
                </div>
              
               <div class="col-md-11 text-right">
                   <h3>  <strong>
                        Affichage en fonction du critère de selection
                  
                     <br>
                     Si pas de filtre, affichage pouvant être trié par colonne par le client.
                       </strong> </h3>
                    
                </div>
                
            </div>
           
            <div class="row">
  
            </div>

        </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>
