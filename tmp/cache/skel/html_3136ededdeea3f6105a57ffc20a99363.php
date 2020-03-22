<?php

/*
 * Squelette : ../plugins-dist/statistiques/prive/squelettes/top/stats_visites.html
 * Date :      Mon, 10 Feb 2020 16:50:18 GMT
 * Compile :   Fri, 28 Feb 2020 14:11:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/statistiques/prive/squelettes/top/stats_visites.html
// Temps de compilation total: 0.109 ms
//

function html_3136ededdeea3f6105a57ffc20a99363($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
interdire_scripts((is_string('pleine_largeur')?vide($GLOBALS['largeur_ecran']='pleine_largeur'):(isset($GLOBALS['largeur_ecran'])?$GLOBALS['largeur_ecran']:''))) .
barre_onglets('statistiques','stats_visites'));

	return analyse_resultat_skel('html_3136ededdeea3f6105a57ffc20a99363', $Cache, $page, '../plugins-dist/statistiques/prive/squelettes/top/stats_visites.html');
}
?>