<?php
	$vue =new DiscoDB($cnx);
	$liste = array();
	$liste = null;
	$liste = $vue->getDisque();
	$nbr = count($liste);
?>
<fieldset>
		<ul >
			<table cellpadding="7px">
				<tbody>
					<tr>
						<td class="alb"> <li> <a href="https://fr.wikipedia.org/wiki/Pretties_for_You" target="_blank"> <?php  print $liste[0]['nom_disque']; print ' (';print $liste[0]['année']; print(')'); ?></a></li> </td>
						<td class="alb"><li><a href="https://fr.wikipedia.org/wiki/Lace_and_Whiskey" target="_blank">   <?php  print $liste[9]['nom_disque']; print ' (';print $liste[9]['année']; print(')'); ?> </a></li></td>
						<td class="alb"><li><a href="https://fr.wikipedia.org/wiki/Hey_Stoopid" target="_blank"> <?php  print $liste[18]['nom_disque']; print ' (';print $liste[18]['année']; print(')'); ?></a> </li></td>
					</tr>
					<tr>
						<td class="alb"><li><a href="https://fr.wikipedia.org/wiki/Easy_Action" target="_blank"> <?php  print $liste[1]['nom_disque']; print ' (';print $liste[1]['année']; print(')'); ?>  </a></li></td>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/From_the_Inside_(album_d%27Alice_Cooper)" target="_blank"> <?php  print $liste[10]['nom_disque']; print ' (';print $liste[10]['année']; print(')'); ?> </a> </li> </td>
						<td class="alb"> <li> <a href="https://fr.wikipedia.org/wiki/The_Last_Temptation_(album_d%27Alice_Cooper)" target="_blank"><?php  print $liste[19]['nom_disque']; print ' (';print $liste[19]['année']; print(')'); ?> </a> </li> </td>
					</tr>
					<tr>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/Love_It_to_Death" target="_blank"> <?php  print $liste[2]['nom_disque']; print ' (';print $liste[2]['année']; print(')'); ?> </a></li> </td>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/Flush_the_Fashion" target="_blank"> <?php  print $liste[11]['nom_disque']; print ' (';print $liste[11]['année']; print(')'); ?> </a></li> </td>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/Brutal_Planet" target="_blank"><?php  print $liste[20]['nom_disque']; print ' (';print $liste[20]['année']; print(')'); ?>  </a></li> </td>
					</tr>
					<tr>
						<td class="alb"> <li> <a href="https://fr.wikipedia.org/wiki/Killer_(album_d%27Alice_Cooper)" target="_blank"><?php  print $liste[3]['nom_disque']; print ' (';print $liste[3]['année']; print(')'); ?> </a></li> </td>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/Special_Forces_(album)" target="_blank"><?php  print $liste[12]['nom_disque']; print ' (';print $liste[12]['année']; print(')'); ?> </a> </li> </td>
						<td class="alb"> <li> <a href="https://fr.wikipedia.org/wiki/Dragontown" target="_blank"><?php  print $liste[21]['nom_disque']; print ' (';print $liste[21]['année']; print(')'); ?> </a></li> </td>
					</tr>
					<tr>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/School%27s_Out" target="_blank"><?php  print $liste[4]['nom_disque']; print ' (';print $liste[4]['année']; print(')'); ?> </a> </li> </td>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/Zipper_Catches_Skin" target="_blank"><?php  print $liste[13]['nom_disque']; print ' (';print $liste[13]['année']; print(')'); ?> </a> </li> </td>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/The_Eyes_of_Alice_Cooper" target="_blank"><?php  print $liste[22]['nom_disque']; print ' (';print $liste[22]['année']; print(')'); ?>  </a></li> </td>
					</tr>
					<tr>
						<td class="alb"> <li> <a href="https://fr.wikipedia.org/wiki/Billion_Dollar_Babies" target="_blank"><?php  print $liste[5]['nom_disque']; print ' (';print $liste[5]['année']; print(')'); ?> </a></li> </td>
						<td class="alb"> <li> <a href="https://fr.wikipedia.org/wiki/DaDa" target="_blank"><?php  print $liste[14]['nom_disque']; print ' (';print $liste[14]['année']; print(')'); ?> </li> </td>
						<td class="alb"> <li> <a href="https://fr.wikipedia.org/wiki/Dirty_Diamonds" target="_blank"><?php  print $liste[23]['nom_disque']; print ' (';print $liste[23]['année']; print(')'); ?> </a> </li> </td>
					</tr>
					<tr>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/Muscle_of_Love" target="_blank"> <?php  print $liste[6]['nom_disque']; print ' (';print $liste[6]['année']; print(')'); ?> </a> </li> </td>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/Constrictor_(album)" target="_blank"><?php  print $liste[15]['nom_disque']; print ' (';print $liste[15]['année']; print(')'); ?> </a> </li> </td>
						<td class="alb"> <li> <a href="https://fr.wikipedia.org/wiki/Along_Came_a_Spider" target="_blank"><?php  print $liste[24]['nom_disque']; print ' (';print $liste[24]['année']; print(')'); ?> </a> </li> </td>
					</tr>
					<tr>
						<td class="alb"> <li> <a href="https://fr.wikipedia.org/wiki/Welcome_to_My_Nightmare" target="_blank"><?php  print $liste[7]['nom_disque']; print ' (';print $liste[7]['année']; print(')'); ?>  </a></li> </td>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/Raise_Your_Fist_and_Yell" target="_blank"><?php  print $liste[16]['nom_disque']; print ' (';print $liste[16]['année']; print(')'); ?>  </a></li> </td>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/Welcome_2_My_Nightmare" target="_blank"> <?php  print $liste[25]['nom_disque']; print ' (';print $liste[25]['année']; print(')'); ?> </a></li> </td>
					</tr>
					<tr>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/Alice_Cooper_Goes_to_Hell" target="_blank"> <?php  print $liste[8]['nom_disque']; print ' (';print $liste[8]['année']; print(')'); ?></a></li> </td>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/Trash_(album)" target="_blank"><?php  print $liste[17]['nom_disque']; print ' (';print $liste[17]['année']; print(')'); ?></a> </li> </td>
						<td class="alb"> <li><a href="https://fr.wikipedia.org/wiki/Paranormal_(album)" target="_blank"> <?php  print $liste[26]['nom_disque']; print ' (';print $liste[26]['année']; print(')'); ?></a></li> </td>
					</tr>
				</tbody>
			</table>
		</ul>
	</fieldset>
