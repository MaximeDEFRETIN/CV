<?php

/*
 * Squelette : ../plugins-dist/organiseur/prive/squelettes/top/calendrier.html
 * Date :      Mon, 10 Feb 2020 16:50:07 GMT
 * Compile :   Thu, 27 Feb 2020 08:58:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/organiseur/prive/squelettes/top/calendrier.html
// Temps de compilation total: 0.078 ms
//

function html_d5aba4761645981dbf7308d117986312($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = interdire_scripts((is_string('pleine_largeur')?vide($GLOBALS['largeur_ecran']='pleine_largeur'):(isset($GLOBALS['largeur_ecran'])?$GLOBALS['largeur_ecran']:'')));

	return analyse_resultat_skel('html_d5aba4761645981dbf7308d117986312', $Cache, $page, '../plugins-dist/organiseur/prive/squelettes/top/calendrier.html');
}
?>