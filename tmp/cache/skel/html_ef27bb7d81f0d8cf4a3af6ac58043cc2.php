<?php

/*
 * Squelette : ../plugins-dist/mots/prive/squelettes/navigation/mot_edit.html
 * Date :      Mon, 10 Feb 2020 16:50:19 GMT
 * Compile :   Thu, 27 Feb 2020 09:07:15 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/mots/prive/squelettes/navigation/mot_edit.html
// Temps de compilation total: 0.046 ms
//

function html_ef27bb7d81f0d8cf4a3af6ac58043cc2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '
';

	return analyse_resultat_skel('html_ef27bb7d81f0d8cf4a3af6ac58043cc2', $Cache, $page, '../plugins-dist/mots/prive/squelettes/navigation/mot_edit.html');
}
?>