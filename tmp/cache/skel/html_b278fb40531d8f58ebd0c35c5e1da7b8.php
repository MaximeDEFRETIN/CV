<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/top/spip_proprio_createur.html
 * Date :      Wed, 05 Feb 2020 17:19:36 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:59 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/top/spip_proprio_createur.html
// Temps de compilation total: 0.054 ms
//

function html_b278fb40531d8f58ebd0c35c5e1da7b8($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = barre_onglets('spip_proprio','spip_proprio_createur');

	return analyse_resultat_skel('html_b278fb40531d8f58ebd0c35c5e1da7b8', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/top/spip_proprio_createur.html');
}
?>