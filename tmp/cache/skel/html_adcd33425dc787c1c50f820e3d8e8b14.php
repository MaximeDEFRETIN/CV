<?php

/*
 * Squelette : ../plugins-dist/sites/prive/squelettes/navigation/site_edit.html
 * Date :      Sun, 01 Dec 2019 12:09:37 GMT
 * Compile :   Thu, 06 Feb 2020 16:28:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/sites/prive/squelettes/navigation/site_edit.html
// Temps de compilation total: 0.026 ms
//

function html_adcd33425dc787c1c50f820e3d8e8b14($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '';

	return analyse_resultat_skel('html_adcd33425dc787c1c50f820e3d8e8b14', $Cache, $page, '../plugins-dist/sites/prive/squelettes/navigation/site_edit.html');
}
?>