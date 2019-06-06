<?php //traitement du formulaire
if(isset($_GET['envoyer']))
{
      extract($_GET,EXTR_OVERWRITE);
      $log = new AdminDB($cnx);
      $admin =$log->insertAdmin($name,$prenom,$age,$pseudo,$mp);
    /*  print 'Bonjour '
      print $pseudo
      print ', merci de votre inscription, veuillez maintenant vous connecté'*/
}
?>
<h3>Formulaire d'inscription</h3>
<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" >

	<table>
		<tbody>
			<tr>
				<td> <label for="nom"> Nom: </label> </td>
				<td> <input id="nom" name="name" type="text" class="formu" required> <br> </td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td> <label for="prenom"> Prénom: </label>  </td>
				<td> <input id="prenom" name="prenom" type="text" class="formu" required> </td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td> <label for="pseudo"> Pseudo: </label>  </td>
				<td> <input id="pseudo" name="pseudo" type="text" class="formu" required> </td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td> <label for="age"> Age: </label> </td>
				<td> <input id="age" name="age" type="number" class="formu" required> </td>
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
			<tr>
				<td><br></td>
			</tr>
		</tbody>
	</table>
	<input type="submit" name="envoyer" value="s'insrcrire" class="formu">
