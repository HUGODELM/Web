<h3> Réservation </h3>
<?php
$vue = new ConcertDB($cnx);
$res= new ReservationDB($cnx);
$liste = array();
$liste = null;
$liste = $vue->getConcert();
$nombre = count($liste);
//var_dump($liste);
if (isset($_GET['reserver'])){
  extract($_GET,EXTR_OVERWRITE);
  $Cli= new AdminDB($cnx);
  $client=$Cli->getId($_SESSION['admin']);
  //echo 'num: '.$num;
  //echo 'nbr: '.$nbr;
  //echo 'id: '.$client[0]['id_c'];
  if($num<=$nombre){
    $res->insertionReservConc($num,$nbr,$client[0]['id_c']);
  }
  else{
    echo "Numéro du concert invalide";
  }
}
?>
<table class="tab" border="4">
    <tr>
        <th>Numéro</th>
        <th>Ville</th>
        <th>Lieu</th>
        <th>Date</th>
    </tr>
    <?php
    for($i=0;$i<$nombre;$i++){
      ?>
      <tr>
          <td><?php echo $liste[$i]['id_concert'];?></td>
          <td><?php echo $liste[$i]['ville'];?></td>
          <td><?php echo $liste[$i]['lieu'];?> </td>
          <td><?php echo $liste[$i]['date'];?></td>
      </tr>
    <?php
  }
    ?>
</table><br><br>
<form method="get" action="<?php print $_SERVER['PHP_SELF']; ?>" >
<label> Numéro du concert: </label>
<input id="num" name="num" type="number" class="formu" required><br>
<label> Nombre de place: </label>
<input id="nbr" name="nbr" type="number" class="formu" required><br>
<input type="submit" name="reserver" value="Réserver un concert" class="formu">
