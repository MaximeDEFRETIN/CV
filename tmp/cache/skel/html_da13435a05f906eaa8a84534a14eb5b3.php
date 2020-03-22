<?php

/*
 * Squelette : ../plugins-dist/statistiques/prive/squelettes/top/stats_referers.html
 * Date :      Mon, 10 Feb 2020 16:50:18 GMT
 * Compile :   Mon, 02 Mar 2020 13:38:17 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/statistiques/prive/squelettes/top/stats_referers.html
// Temps de compilation total: 0.201 ms
//

function html_da13435a05f906eaa8a84534a14eb5b3($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('activer_referers','oui',false):'') == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	interdire_scripts((is_string('pleine_largeur')?vide($GLOBALS['largeur_ecran']='pleine_largeur'):(isset($GLOBALS['largeur_ecran'])?$GLOBALS['largeur_ecran']:''))) .
	barre_onglets('statistiques','stats_referers'))) :
		'');

	return analyse_resultat_skel('html_da13435a05f906eaa8a84534a14eb5b3', $Cache, $page, '../plugins-dist/statistiques/prive/squelettes/top/stats_referers.html');
}
?>