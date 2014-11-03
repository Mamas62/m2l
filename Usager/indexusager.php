<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Accueil Usager</title>

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
            <li class="active"><a href="../Usager/indexusager.php">Accueil Usager</a></li>
            <li><a href="../Usager/salles.php">Salles</a></li>
            <li><a href=../Usager/reservation2.php>Réservations</a></li>
            <li><a href="../Usager/reserver.php">Réserver</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Grégory Leplafond(user)</a></li>
          <li ><a href="../Connexion.php">Deconnexion <img src="../img/logout.jpg" alt=" Se déconnecter" width="15" height="17"/></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

        <div class="col-md-3">
                    <img src="../img/LogoM2L.jpg" width="200" height="200" alt="Logo M2L">
                </div>
        
      <div class="starter-template text-center">
        <h1> <br> </h1>
        <h2>Page d'accueil usager</h2>
        <p class="lead text-center">Bonjour Gergory Leplafond !</p>
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
