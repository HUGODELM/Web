<?php
	if(isset($_POST['valider']))
	{
		//$achat=$_POST['achat'];
		if($_POST['achat']=='CD')
		{
			header('location: index.php?page=./pages/disque.php');
		}
		else
		{
			header('location: index.php?page=./pages/concert.php');
		}
	}
	//echo "vous avez choisis ".$_POST['achat'];
?>
<h3> ACHAT </h3>
<form method="POST" action="<?php print $_SERVER['PHP_SELF']; ?>" >
	<p>Que voulez-vous acheter</p>
	<label for="cd"> cd: </label>
	<input type="radio" name="achat" value="CD" id="cd"><br>
	<label for="conc"> concert: </label>
	<input type="radio" name="achat" value="concert" id="conc"><br><br>
	<input type="submit" name="valider" value="aller sur la page selectionner" class="formu" />
	<br><br>
	<p> </p>
</form>
