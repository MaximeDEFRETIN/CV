<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/top/spip_proprio_proprietaire.html
 * Date :      Wed, 05 Feb 2020 17:19:36 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/top/spip_proprio_proprietaire.html
// Temps de compilation total: 0.067 ms
//

function html_473937117f5671a8e4c3c3b865dd51d3($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = barre_onglets('spip_proprio','spip_proprio_proprietaire');

	return analyse_resultat_skel('html_473937117f5671a8e4c3c3b865dd51d3', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/top/spip_proprio_proprietaire.html');
}
?>