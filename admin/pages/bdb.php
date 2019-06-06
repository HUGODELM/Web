<?php
if (isset($_GET['valider']))
{
  extract($_GET,EXTR_OVERWRITE);
  $vue =new DiscoDB($cnx);
  $Cli= new AdminDB($cnx);
  $buy= new ReservationDB($cnx);
  $nom='Billion dollar babies';
  $id=array();
  $achat=array();
  $client=array();
  $id = $vue->getIdDisque($nom);
  $client=$Cli->getId($_SESSION['admin']);
  //echo $id[0]['id_disque'];
  //echo $_SESSION['admin'];
  //echo $client[0]['id_c'];
  //echo $reservation;
  $achat=$buy->insertionReserv($id[0]['id_disque'],$reservation,$client[0]['id_c']);
  //echo $achat[0]['id_c'];
}
?>
<h3> Billion dollar babies </h3>
<h4 class="achats">prix: 25,1 € </h4>
<img src="./images/billiondollarbabies.png" alt="album" width="25%" />
<audio controls src="audio/Billion Dollar Babies.mp3">
  Votre navigateur n'est pas compatible
</audio><br><br>
<p>Nombre d'article: </p>
<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="GET" >
  <input type="number" name="reservation" id="reservation" class="formu"><br><br>
  <input type="submit" name="valider" value="Commander" class="formu" />
</form>
