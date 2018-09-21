
<h3>Fiche de frais du mois <?php echo $numMois."-".$numAnnee?> pour l'utilisateur <?php echo $lUtilisateur['nom']?> : 
    </h3>
    <div class="encadre">
    <p>
        Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> Montant validé : <?php echo $montantValide?>
              
                     
    </p>
  	<form method="POST"  action="index.php?uc=validerFrais&action=validerMajFraisForfait">
		<input type="hidden" id="lstMois" name = "lstMois" value="<?php echo $leMois?> ">
		<input type="hidden" id="utilisateur" name = "utilisateur" value="<?php echo $lUtilisateur["id"]?> ">
		
		<div class="corpsForm">
          
			<fieldset>
				<legend>Eléments forfaitisés
				</legend>
				<?php
					foreach ($lesFraisForfait as $unFrais)
					{
						$idFrais = $unFrais['idfrais'];
						$libelle = $unFrais['libelle'];
						$quantite = $unFrais['quantite'];
				?>
						<p>
							<label for="idFrais"><?php echo $libelle ?></label>
							<input type="text" id="idFrais" name="lesFrais[<?php echo $idFrais?>]" size="10" maxlength="5" value="<?php echo $quantite?>" >
						</p>
				
				<?php
					}
				?>
			
			
			
			
           
          </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Modifier" size="20" />
      </p> 
      </div>
        
      </form>
  	<table class="listeLegere">
  	   <caption>Elément hors forfait :
       </caption>
             <tr>
                <th class="date">Date</th>
                <th class="libelle">Libellé</th>
                <th class='montant'>Montant</th>                
             </tr>
        <?php      
          foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) 
		  {
			$date = $unFraisHorsForfait['date'];
			$libelle = $unFraisHorsForfait['libelle'];
			$montant = $unFraisHorsForfait['montant'];
		?>
             <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
				<td>Validé</td>
				<td>Refuser</td>
             </tr>
        <?php 
          }
		?>
    </table>
  </div>
  </div>
 













