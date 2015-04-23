<?php
session_start();
if (!isset($_SESSION['pseudo'])) {
	header ('Location: ../Login.php');
	exit();
}
         // ---
         if(empty($_GET['idPersonne2'])) {
             $id2 ='' ;
         }
         else{
         // Recuperer l'iD de la personne à modifiée            
             $id2 = $_GET["idPersonne2"] ;            
         }
        // ---
        if(empty($_GET['namePersonne2'])) {
            $name2 = '' ;
        }
        else{
        // Recuperer le nom de la personne à modifiée
        $name2 = $_GET["namePersonne2"] ;
        }        
        // ---
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
        <h2>Suppression d'un utilisateur</h2>
        
        <FORM ACTION="../Administrateur/usagers.php">
        <INPUT TYPE="SUBMIT" VALUE="Retour"></FORM>
        
     </div>
        
        <div class="col-md-12 text-center">
      <form name="suppression" method="post" >
            Voulez-vous vraiment supprimer l'usager : <?php echo $name2; ?>             
            <br><input type="submit" name="Confirmer" value="Confirmer" />
        </form>

        <?php
        
        if(isset($_POST['Confirmer'])){
            
       //on se connecte à la base de données:
      $mysqli = mysqli_connect("localhost", "root", "", "mrbs");    
      
      $marequete = "DELETE FROM mrbs_users WHERE id = '".$id2."' ";
      $sql = mysqli_query($mysqli,$marequete);
      
      //affichage des résultats, pour savoir si l'insertion a marchée:
      if($sql)
      {
        echo '<p style="color:#40A468;">Suppression correctement effectuée.</p>';
      }
      else
      {
        echo '<p style="color:#FA0008;">Suppression échouée.</p>';
      }
        }
       
       
    ?>
            
    </div>
    
</body>
</html>