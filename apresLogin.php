<?php
session_start();
if (!isset($_SESSION['pseudo'])) {
	header ('Location: Login.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Espace membre</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
        
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <li><a class="navbar-brand" href="Login.php">M2L</a></li> 
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse"> 
          <ul class="nav navbar-nav">
              <li><a href="Administrateur/indexadmin.php">Partie Administrateur</a></li>
              <li><a href="Usager/indexusager.php">Partie Utilisateur</a></li>          
          </ul>
            
        <ul class="nav navbar-nav navbar-right">          
        <li ><a href="../m2l/Login.php"> [ <?php echo htmlentities(trim($_SESSION['pseudo'])); ?> ] Deconnexion <img src="../m2l/img/logout.jpg" alt=" Se déconnecter" width="15" height="17"/></a></li>
          </ul>
          </div>
                 
        </div><!--/.container-fluid -->
 
      </div>
        <div class="row">
        <div class="col-md-1 img-responsive">
            <img src="../m2l/img/LogoM2L.jpg" width="200" height="200" alt="Logo M2L"> 
                </div>
         </div>
      <div class="row">
          <div class="col-md-12 text-center">
              <h2><strong>Bienvenue sur le site de la Maison des Ligues de Lorraine</strong>  </h2>
          </div>
          <div class="col-md-12 text-center">
              <h4><a href="http://localhost/PPE/m2lperso/m2l/monAPK/appliFredi.apk">TELECHARGER L'APPLICATION</a></h4>
          </div>
          
          <div class="col-md-12 text-center">
              <h3>Bienvenue <?php echo htmlentities(trim($_SESSION['pseudo'])); ?> !</h3>
          </div>
          
      </div>
      
      
            </div>
        </div>
            <div class="row">
                 <div class="col-md-12 text-center">

                 </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>