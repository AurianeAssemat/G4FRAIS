﻿
<h3>Fiche de frais du mois <?php echo $numMois."-".$numAnnee?> : 
    </h3>
    <div class="encadre">
    <p>
        Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> Montant validé : <?php echo $montantValide?>
              
                     
    </p>
  	<table class="listeLegere">
  	   <caption>Eléments forfaitisés </caption>
         <tr>
			<td></td>
			<td>QTE</td>
			<td>PRIX</td>
			<td>TOT</td>
		 </tr>
         <?php
         foreach ( $lesFraisForfait as $unFraisForfait ) 
		 {
			 $idFrais = $unFraisForfait['idfrais'];
			 
			 ?>
			 <tr>
			 <th><?php $libelle = $unFraisForfait['libelle']; 
			 echo $libelle; ?> </th>
			 <td><?php $quantite = $unFraisForfait['quantite'];
			 echo $quantite; ?></td>
			 <td><?php 
			 if($idFrais == 'KM')
			 {
				echo $tarif;
			 }else{
					$montant = $unFraisForfait['montant'];
					echo $montant; 
			 }?></td>
			 <td><?php 
			 if($idFrais == 'KM')
			 {
				echo $tarif * $quantite;
			 }else{
				echo $montant * $quantite;
			 }?></td>
			
			</tr>
		 <?php
        }
		?>
		
    </table>
  	<table class="listeLegere">
  	   <caption>Descriptif des éléments hors forfait -<?php echo $nbJustificatifs ?> justificatifs reçus -
       </caption>
             <tr>
                <th class="date">Date</th>
                <th class="libelle">Libellé</th>
                <th class='montant'>Montant</th>
				<th class='etat'>Etat</th>
             </tr>
        <?php
          foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) 
		  {
			$date = $unFraisHorsForfait['date'];
			$libelle = $unFraisHorsForfait['libelle'];
			$montant = $unFraisHorsForfait['montant'];
			$etat = $unFraisHorsForfait['etat'];
		?>
             <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
				<td><?php echo $etat ?></td>
             </tr>
        <?php 
          }
		?>
    </table>
  </div>
  </div>
 













