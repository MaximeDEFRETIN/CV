<?php

/*
 * Squelette : ../prive/squelettes/top/configurer_langage.html
 * Date :      Sun, 01 Dec 2019 12:09:33 GMT
 * Compile :   Thu, 06 Feb 2020 16:17:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/configurer_langage.html
// Temps de compilation total: 0.145 ms
//

function html_854a90e2cd04f40be08282672ecfeeee($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = barre_onglets('infos_perso','configurer_langage');

	return analyse_resultat_skel('html_854a90e2cd04f40be08282672ecfeeee', $Cache, $page, '../prive/squelettes/top/configurer_langage.html');
}
?>