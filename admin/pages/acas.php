<?php
if (isset($_GET['valider']))
{
  extract($_GET,EXTR_OVERWRITE);
  $vue =new DiscoDB($cnx);
  $Cli= new AdminDB($cnx);
  $buy= new ReservationDB($cnx);
  $nom='Along came a spider';
  $id=array();
  $achat=array();
  $client=array();
  $id = $vue->getIdDisque($nom);
  $client=$Cli->getId($_SESSION['admin']);
  //var_dump($client);
  //var_dump($id);
  echo $id[0]['id_disque'];
  echo $_SESSION['admin'];
  echo $client[0]['id_c'];
  echo $reservation;
  $achat=$buy->insertionReserv($id[0]['id_disque'],$reservation,$client[0]['id_c']);
  echo $achat[0]['id_c'];
}
?>
<h3> Along came a spider </h3>
<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="GET" >
  <h4 class="achats">prix: 25,1 € </h4>
  <img src="./images/AlongCameASpider.png" alt="album" width="25%" />
  <audio controls src="audio/Vengeance Is Mine.mp3">
    Votre navigateur n'est pas compatible
  </audio><br><br>
  <p>Nombre d'article: </p>
  <input type="number" name="reservation" id="reservation" class="formu"><br><br>
  <input type="submit" name="valider" value="Commander" class="formu" />
</form>
