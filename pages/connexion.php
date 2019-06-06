
<?php
	if (isset($_GET['envoyer']))
	{

		extract($_GET,EXTR_OVERWRITE);
    $log = new AdminDB($cnx);
		$admin = $log->getAdmin($username, $mp);
			var_dump($admin);
			if(is_null($admin)){
        print "<br/>Données incorrectes";
    	}
	    else {
	        $_SESSION['admin']=$username;
					//header('location: index.php?page=./pages/disco.php');
	        unset($_SESSION['page']);

	        print "<meta http-equiv=\"refresh\": Content=\"0;URL=./admin/index.php?page=index.php\">";
			}
	}

?>
<h3>Connexion </h3>
	<form method="get" action="<?php print $_SERVER['PHP_SELF']; ?>" >
	<table>
		<tbody>
			<tr>
				<td> <label for="pseudo"> Pseudo: </label>  </td>
				<td> <input id="pseudo" name="username" type="text" class="formu" required> </td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td> <label for="motpasse"> Mot de passe: </label> </td>
				<td> <input id="motpasse" name="mp" type="password" class="formu" required> </td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
		</tbody>
	</table>
	<input type="submit" name="envoyer" value="connexion" class="formu">
