<hgroup>
    <h3>Page communautaire</h3>
</hgroup>
<?php
$vue = new ConcertDB($cnx);
$liste = array();
$liste = null;
$liste = $vue->getConcert();
$nbr = count($liste);
var_dump($liste);
if (isset($_GET['insert'])){
  $vue->insertConcert();
}
?>
<h2 id="titre">Lieu de concert en Europe et principalement en Belgique</h2>

    <table class="tab" border="4">
        <tr>
            <th class="ecart">Ville</th>
            <th class="ecart">Lieu</th>
            <th class="ecart">Date</th>
        </tr>
        <?php
        for ($i = 0; $i < $nbr; $i++) {
          //echo $liste[$i][0];
    ?>
    <tr>
        <td><span contenteditable="true" name="ville" class="ecart" id="<?php print $liste[$i][0]; ?>">
                <?php print $liste[$i][1]; ?></span>
        </td>
        <td><span contenteditable="true" name="lieu" class="ecart" id="<?php print $liste[$i][0]; ?>">
                <?php print $liste[$i][2]; ?></span>
        </td>
        <td><span contenteditable="true" name="date" class="ecart" id="<?php print $liste[$i][0]; ?>">
                <?php print $liste[$i][3]; ?></span>
        </td>
    </tr>
    <?php
}
?>
</table><br><br>
    <form method="get" action="<?php print $_SERVER['PHP_SELF']; ?>" >
    <input type="submit" name="insert" value="Ajouter un concert" class="formu">
