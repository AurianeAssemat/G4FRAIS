<div id="contenu">
      <h2>Renseigner ma fiche de frais du mois <?php echo $numMois."-".$numAnnee ?></h2>
         
      <form method="POST"  action="index.php?uc=gererFrais&action=validerMajFraisForfait">
      <div class="corpsForm">
          
          <fieldset>
            <legend>Eléments forfaitisés
            </legend>
			<?php
				$total=0;
				foreach ($lesFraisForfait as $unFrais)
				{
					$idFrais = $unFrais['idfrais'];
					$libelle = $unFrais['libelle'];
					$montant = $unFrais['montant'];
					$quantite = $unFrais['quantite'];
			?>
					<p>
						<label for="idFrais"><?php echo $libelle ?></label>
						<input type="number" id="idFrais" name="lesFrais[<?php echo $idFrais?>]" size="10" maxlength="3" min="0" max="10000" value="<?php echo $quantite?>" >
						<?php 
						
						echo "*";
						if($idFrais == 'KM')
						{
							$calc = $tarif * $quantite ;
							echo $tarif;
						}else{
							$calc = $montant * $quantite ;
							echo $montant; 
						}
						echo "€ = ".$calc." €";
						
						$total=$total+$calc;

						?>
					</p>
			
			<?php
				}
				echo "Total: ".$total." €";
			?>
			
			
			
			
           
          </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
  