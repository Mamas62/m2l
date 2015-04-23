<?php
session_start();
if (!isset($_SESSION['pseudo'])) {
	header ('Location: ../Login.php');
	exit();
}
         // ---
         if(empty($_GET['idPersonne'])) {
            $id ='' ;
         }
         else{
         // Recuperer l'iD de la personne à modifiée
            $id = $_GET["idPersonne"] ;
         }
        // ---
        if(empty($_GET['levelPersonne'])) {
            $level2 ='' ;
        }
        else{
        // Recuperer le level de la personne à modifiée
        $level2 = $_GET["levelPersonne"] ;
        }
        // ---
        if(empty($_GET['namePersonne'])) {
            $name2 = '' ;
        }
        else{
        // Recuperer le nom de la personne à modifiée
        $name2 = $_GET["namePersonne"] ;
        }        
        // ---
        if(empty($_GET['emailPersonne'])) {
            $email2 = '' ;
        }
        else{
        // Recuperer l'email de la personne à modifiée
        $email2 = $_GET["emailPersonne"] ;
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
        <h2>Modification d'un utilisateur</h2>
        
        <FORM ACTION="../Administrateur/usagers.php">
        <INPUT TYPE="SUBMIT" VALUE="Retour"></FORM>
        
     </div>

    <form name="insertion" method="POST">
      <table border="0" align="center" cellspacing="2" cellpadding="2">
        <tr align="center">
          <td>Nom :</td>
          <td><input type="text" name="name" value="<?php echo($name2)?>"></td>
        </tr>
        <tr align="center">
          <td>Adresse courriel :</td>
          <td><input type="text" name="email" value="<?php echo($email2)?>"></td>
        </tr>
        <tr align="center">
          <td>Mot de passe : </td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr align="center">
          <td>Retaper mot de passe :</td>
          <td><input type="password" name="password2"></td>
        </tr>
        <tr align="center">
            <td>Droits :</td>
            <td>
                <?php
                if ($level2 == 2){
                    echo('<select name="level" >
             <option value="2">Admin</option>
             <option value="0">User</option>
        </select>');
                }
                else{
        echo('<select name="level" >
             <option value="0">User</option>
             <option value="2">Admin</option>
        </select>');
                }
                ?>
            </td>
        </tr>
        

        <tr align="center">
          <td colspan="2"><input type="submit" value="Modifier"></td>
        </tr>
      </table>
    </form>
        <div class="col-md-12 text-center">
    
        <?php
             
      if(empty($_POST['name'])) {
            echo '<p style="color:#FA0008;">Le champ Nom est vide.</p>';
        }
      else {
            if(empty($_POST['email'])) {
            echo '<p style="color:#FA0008;">Le champ Adresse courriel est vide.</p>';
            }
            else{
                if(empty($_POST['password'])) {
                echo '<p style="color:#FA0008;">Le champ Mot de passe est vide.</p>';
                }
                else{
                    if(empty($_POST['password2'])) {
                    echo '<p style="color:#FA0008;">Le champ Retaper mot de passe est vide.</p>';
                    }
                    else {
                        //récupération des valeurs des champs:
                        //nom:
                        $name = $_POST["name"] ;
                        //adresse courriel:
                        $email = $_POST["email"] ;
                        //mot de passe:
                        $password = md5($_POST["password"]) ;
                        //mot de passe 2:
                        $password2  = md5($_POST["password2"]) ;
                        //droits:
                        $level = $_POST["level"] ;
                        
                        //on se connecte à la base de données:
                        $mysqli = mysqli_connect("localhost", "root", "", "mrbs");
                        
                        if ($password == $password2){
                            
                        $marequete = "UPDATE mrbs_users SET id = '".$id."', level = '".$level."', name = '".$name."', password = '".$password."', email = '".$email."' WHERE id = '".$id."' ";
                        
                        $sql = mysqli_query($mysqli,$marequete);
                               
                        //affichage des résultats, pour savoir si l'insertion a marchée:
                        if($sql)
                        {
                          echo '<p style="color:#40A468;">Modification correctement effectuée.</p>';
                        }
                        else
                        {
                          echo '<p style="color:#FA0008;">Modification échouée.</p>';
                        }
                        
                        }
                        else {
                            echo '<p style="color:#FA0008;">Les mots de passe sont différents.</p>';
                        }
                        
                    }
                }
            }
      }
      
    ?>
            
            </div>
    
</body>
</html>