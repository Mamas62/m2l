<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login</title>

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

      <!-- Static navbar -->
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
          
      </div>
      
      
            </div>
        </div>
            <div class="row">
                 <div class="col-md-12 text-center">
                     <h3><strong></strong></h3><br>
                     <h3><strong> Veuillez vous identifier :</strong></h3><br>
                     <form action="Login.php" method="post">
                    Pseudo: <input type="text" name="pseudo" value="" />

                    Mot de passe: <input type="password" name="mot_de_passe" value="" />

                    <input type="submit" name="connexion" value="Connexion" />
                </form>
            <?php

    if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
        // on vérifie que le champ "Pseudo" n'est pas vide
        // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
        if(empty($_POST['pseudo'])) {
            echo '<p style="color:#FA0008;">Le champ Pseudo est vide.</p>';
        } else {
            // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
            if(empty($_POST['mot_de_passe'])) {
                echo '<p style="color:#FA0008;">Le champ Mot de passe est vide.</p>';
            } else {
                // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
                $Pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
                $MotDePasse = htmlentities(md5($_POST['mot_de_passe']), ENT_QUOTES, "ISO-8859-1");
                //on se connecte à la base de données:
                $mysqli = mysqli_connect("localhost", "root", "", "mrbs");
                //on vérifie que la connexion s'effectue correctement:
                if(!$mysqli){
                    echo '<p style="color:#FA0008;">Erreur de connexion à la base de données.</p>';
                } else {
                    // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                    $Requete = mysqli_query($mysqli,"SELECT * FROM mrbs_users WHERE name = '".$Pseudo."' AND password = '".$MotDePasse."'");
                    // si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                    // si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                    if(mysqli_num_rows($Requete) == 0) {
                        echo '<p style="color:#FA0008;">Le pseudo ou le mot de passe est incorrect, compte pas trouvé.</p>';
                    } else {
                        // on ouvre la session avec $_SESSION:
                        $_SESSION['pseudo'] = $Pseudo; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                        echo "Vous êtes à présent connecté !";
                        header('Location: apresLogin.php');
                        exit();
                    }
                }
            }
        }
    }
    ?>
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
