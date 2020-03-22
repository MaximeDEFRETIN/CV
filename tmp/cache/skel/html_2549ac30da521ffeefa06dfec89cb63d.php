<?php

/*
 * Squelette : ../prive/squelettes/top/configurer_preferences.html
 * Date :      Sun, 01 Dec 2019 12:09:33 GMT
 * Compile :   Thu, 06 Feb 2020 16:17:49 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/configurer_preferences.html
// Temps de compilation total: 0.125 ms
//

function html_2549ac30da521ffeefa06dfec89cb63d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = barre_onglets('infos_perso','configurer_preferences');

	return analyse_resultat_skel('html_2549ac30da521ffeefa06dfec89cb63d', $Cache, $page, '../prive/squelettes/top/configurer_preferences.html');
}
?>