<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/top/spip_proprio.html
 * Date :      Wed, 05 Feb 2020 17:19:36 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:27 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/top/spip_proprio.html
// Temps de compilation total: 0.080 ms
//

function html_88b23f75fc80205b01061aff387ade3c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = barre_onglets('spip_proprio','spip_proprio');

	return analyse_resultat_skel('html_88b23f75fc80205b01061aff387ade3c', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/top/spip_proprio.html');
}
?>