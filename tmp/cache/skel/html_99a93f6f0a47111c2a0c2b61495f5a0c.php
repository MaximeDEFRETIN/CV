<?php

/*
 * Squelette : ../plugins-dist/breves/prive/squelettes/navigation/breve_edit.html
 * Date :      Mon, 10 Feb 2020 16:50:17 GMT
 * Compile :   Sun, 08 Mar 2020 10:04:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/breves/prive/squelettes/navigation/breve_edit.html
// Temps de compilation total: 0.015 ms
//

function html_99a93f6f0a47111c2a0c2b61495f5a0c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '';

	return analyse_resultat_skel('html_99a93f6f0a47111c2a0c2b61495f5a0c', $Cache, $page, '../plugins-dist/breves/prive/squelettes/navigation/breve_edit.html');
}
?>