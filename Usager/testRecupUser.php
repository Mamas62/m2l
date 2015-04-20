<?php

$bdd = new PDO('mysql:host=localhost;dbname=mrbs;charset=utf8', 'root', '');

$requete_user=$bdd->query('SELECT name, password FROM mrbs_users');


$tab_user=Array();
$i=0;
$j=0;

while($donnee = $requete_user->fetch())
{
	$tab_user[$i][0]=$donnee['name'];
	$tab_user[$i][1]=$donnee['password'];
	$i++;
}



$nom='cheminl';
$pwd=md5("passe",false);
$existe=false;

while($tab_user as $user)
{
	
	if (!strcmp($user[0],$nom ) && !strcmp($user[1],$pwd))
	{
		echo("trouvé");
		$existe=true;
	}
	
	

}
if($existe==false);
{
	echo ("Il y a une erreur dans la saisie du login ou du mot de passe");
}


?>