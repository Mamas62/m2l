<?php
session_start();
if (!isset($_SESSION['pseudo'])) {
	header ('Location: ../Login.php');
	exit();
}
?>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=mrbs;charset=utf8', 'root', '');
$requete = $bdd->query('SELECT id, level, name, email FROM mrbs_users');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Usagers Administrateurs</title>

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
            <li><a href="../Administrateur/indexadmin.php">Accueil Administrateur</a></li>
            <li class="active"><a href="../Administrateur/usagers.php">Utilisateurs</a></li>
            <li><a href=../Administrateur/salles.php>Salles</a></li>
            <li><a href=../Administrateur/reservation.php>Réservations</a></li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span>[ <?php echo htmlentities(trim($_SESSION['pseudo'])); ?> ]</a></li>
                        <li ><a href="../Login.php">Deconnexion <img src="../img/logout.jpg" alt=" Se déconnecter" width="15" height="17"/></a></li>
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
                    <h1 class="text-center" style="margin-bottom: 40px;">Page des Utilisateurs</h1>
                </div>
                                
                <div class="col-md-9 text-center">
                    <p class="lead">.</p>
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
    
    <div class="container">
        <h2>Liste des utilisateurs</h2>
    <table class="table table-hover text-center" style="margin-top: 20px;">
        <thead>
            <tr class="success">
                <th class="text-capitalize text-center">Action</th>
            <th class="text-capitalize text-center">Droits</th>
            <th class="text-capitalize text-center">Nom</th>
            <th class="text-capitalize text-center">Adresse courriel</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
            while ($donnee = $requete->fetch())
            {
                if($donnee['level']== 2){
                    $maVar = "Admin";
                }
                else{
                    $maVar = "User";
                }
                echo('
            <tr>               
            <td>'."<a href=\"modificationusagers.php?idPersonne=".$donnee['id']."&levelPersonne=".$donnee['level']."&namePersonne=".$donnee['name']."&emailPersonne=".$donnee['email']."\">Modifier</a></div>"." - "."<a href=\"suppressionusagers.php?idPersonne2=".$donnee['id']."&namePersonne2=".$donnee['name']."\">Supprimer</a></div>".'</td>          
            <td>'.$maVar.'</td>
            <td>'.$donnee['name'].'</td>
            <td>'.$donnee['email'].'</td>
            </tr>
            ');
            }
            ?>
        </tbody>
        
        
        <FORM ACTION="../Administrateur/creationusagers.php">
        <INPUT TYPE="SUBMIT" VALUE="Ajouter un nouvel utilisateur"></FORM>

</body>
</html>