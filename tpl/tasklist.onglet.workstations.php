<?php

	//Récupération de la liste des postes de travail
	$disabled = ($user->rights->workstation->all->lire) ? 0 : 1;
	
	$TWorkstation = array_merge( array(-1=>'Tous') , TWorkstation::getWorstations($PDOdb));
    
	//pre($TWorkstation,true);exit;
	$form = new TFormCore;
	$selectWorkstation = $form->combo('','search_workstation',$TWorkstation,'',1,'','','form-control');
	
	//Affichage des filtres
	?>
		
			<?php print $selectWorkstation; ?>
		
	
