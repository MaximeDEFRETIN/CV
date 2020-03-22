<?php

/*
 * Squelette : ../prive/squelettes/navigation/rubrique_edit.html
 * Date :      Mon, 10 Feb 2020 16:50:03 GMT
 * Compile :   Sun, 08 Mar 2020 10:17:57 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/rubrique_edit.html
// Temps de compilation total: 0.027 ms
//

function html_19dd93bf0515c7d0ca81761367eed40d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '';

	return analyse_resultat_skel('html_19dd93bf0515c7d0ca81761367eed40d', $Cache, $page, '../prive/squelettes/navigation/rubrique_edit.html');
}
?>