<?php
$vue =new DiscoDB($cnx);
$liste = array();
$liste = null;
$liste = $vue->getDisque();
$nbr = count($liste);
?>
		<table class="tab" border="4">
			<tr>
					<th>Num</th>
					<th>album</th>
					<th>année</th>
			</tr>
			<?php
			for($i=0;$i<$nbr;$i++)
			{
				?>
					<td>
							<a href="index.php?page=/<?php echo $liste[$i]['lien'];?>"><?php print $liste[$i]['id_disque']; ?></a>
					</td>
					<td>
				 			<a href="index.php?page=/<?php echo $liste[$i]['lien'];?>"><?php print $liste[$i]['nom_disque'];?> </a>
					</td>
					<td>
				  		<a href="index.php?page=/<?php echo $liste[$i]['lien'];?>"><?php print $liste[$i]['année'];?> </a>
					</td>
				</tr>
				<?php
			}
			?>
		</table><br>
