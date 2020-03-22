<?php

/*
 * Squelette : ../prive/squelettes/top/aide.html
 * Date :      Mon, 10 Feb 2020 16:50:04 GMT
 * Compile :   Thu, 27 Feb 2020 09:09:55 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/aide.html
// Temps de compilation total: 0.089 ms
//

function html_6794cae632a12d4dd26a91c255ade697($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1>' .
_T('public|spip|ecrire:info_aide_en_ligne') .
'</h1>
' .
interdire_scripts((is_string('pleine_largeur')?vide($GLOBALS['largeur_ecran']='pleine_largeur'):(isset($GLOBALS['largeur_ecran'])?$GLOBALS['largeur_ecran']:''))));

	return analyse_resultat_skel('html_6794cae632a12d4dd26a91c255ade697', $Cache, $page, '../prive/squelettes/top/aide.html');
}
?>