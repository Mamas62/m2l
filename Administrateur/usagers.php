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
                    <a class="navbar-brand" href="../Login.php">M2L</a>
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse"> 
                    <ul class="nav navbar-nav">
            <li><a href="../Administrateur/indexadmin.php">Accueil Administrateur</a></li>
            <li class="active"><a href="../Administrateur/usagers.php">Utilisateurs</a></li>
            <li><a href=../Administrateur/salles.php>Salles</a></li>
            <li><a href=../Administrateur/reservation.php>Réservations</a></li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> User1 (Administrateur)</a></li>
                        <li ><a href="#">Deconnexion <img src="../img/logout.jpg" alt=" Se déconnecter" width="15" height="17"/></a></li>
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
                    <h1 class="text-center" style="margin-bottom: 40px;">Page d'Utilisateurs</h1>
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
            <th class="text-capitalize text-center">Nom</th>
            <th class="text-capitalize text-center">Prenom</th>
            <th class="text-capitalize text-center">Numero</th>
            <th class="text-capitalize text-center">Email</th>
            </tr>
        </thead>
        
        <tbody>
            
            <tr>
            <td>User1</td>
            <td></td>
            <td>0</td>
            <td>user1@hotmail.fr</td>
            </tr>

            <tr>
            <td>Stark</td>
            <td>Tony</td>
            <td>1</td>
            <td>tonystark@hotmail.fr</td>
            </tr>

            <tr>
            <td>Rogers</td>
            <td>Steve</td>
            <td>2</td>
            <td>steverogers@hotmail.fr</td>
            </tr>

            <tr>
            <td>Barton</td>
            <td>Clin</td>
            <td>3</td>
            <td>clinbarton@hotmail.fr</td>
            </tr>

            <tr>
            <td>Banner</td>
            <td>Bruce</td>
            <td>4</td>
            <td>brucebanner@hotmail.fr</td>
            </tr>
        </tbody>
        
     <div class="control-group">
        <input type="hidden" name="filtrer" value="ok" />
        <button type="submit" class="btn btn-default">Filtrer</button>
     </div>
</body>
</html>
