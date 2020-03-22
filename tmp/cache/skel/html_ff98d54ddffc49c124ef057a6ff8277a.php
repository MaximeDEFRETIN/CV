<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/top/spip_proprio_textes.html
 * Date :      Wed, 05 Feb 2020 17:19:36 GMT
 * Compile :   Mon, 16 Mar 2020 15:19:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/top/spip_proprio_textes.html
// Temps de compilation total: 0.174 ms
//

function html_ff98d54ddffc49c124ef057a6ff8277a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
interdire_scripts((is_string('pleine_largeur')?vide($GLOBALS['largeur_ecran']='pleine_largeur'):(isset($GLOBALS['largeur_ecran'])?$GLOBALS['largeur_ecran']:''))) .
barre_onglets('spip_proprio','spip_proprio_textes'));

	return analyse_resultat_skel('html_ff98d54ddffc49c124ef057a6ff8277a', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/top/spip_proprio_textes.html');
}
?>