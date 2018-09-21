<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];

switch($action){
	case 'selectionnerMoisUtilisateur':{
		$lesMois=$pdo->getToutLesMoisDisponibles();
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		$lesUtilisateur=$pdo->getNomVisiteur();
		include("vues/v_listeMoisUtilisateur.php");
		break;
	}
	
	
	case 'voirFicheFrais':{
		$leMois = $_REQUEST['lstMois']; 
		$idUtilisateur = $_REQUEST['utilisateur'];
		
		$lUtilisateur = $pdo->getInfosVisiteurId($idUtilisateur);
		
		$lesMois=$pdo->getToutLesMoisDisponibles();
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		$lesUtilisateur=$pdo->getNomVisiteur();
		include("vues/v_listeMoisUtilisateur.php");
		
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($lUtilisateur['id'],$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($lUtilisateur['id'],$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($lUtilisateur['id'],$leMois);
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		include("vues/v_validerEtatFrais.php");
		break;
	}
	
	
	case 'validerMajFraisForfait':{
		
		$leMois = $_REQUEST['lstMois']; 
		$idUtilisateur = $_REQUEST['utilisateur'];
		$lUtilisateur = $pdo->getInfosVisiteurId($idUtilisateur);
		
		$lesFrais = $_REQUEST['lesFrais'];
		
		
		
		
		
		if(lesQteFraisValides($lesFrais)){
	  	 	$pdo->majFraisForfait($lUtilisateur['id'],$leMois,$lesFrais);
		}
		else{
			ajouterErreur("Les valeurs des frais doivent être numériques");
			include("vues/v_erreurs.php");
		}
		
		
		$lesMois=$pdo->getToutLesMoisDisponibles();
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		$lesUtilisateur=$pdo->getNomVisiteur();
		include("vues/v_listeMoisUtilisateur.php");
		
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($lUtilisateur['id'],$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($lUtilisateur['id'],$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($lUtilisateur['id'],$leMois);
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		
		
		
		include("vues/v_validerEtatFrais.php");
		break;
		
		
		
		
	  break;
	}
}



?>