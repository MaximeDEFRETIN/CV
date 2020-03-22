<?php

/*
 * Squelette : squelettes/favicon.ico.html
 * Date :      Mon, 02 Mar 2020 13:57:11 GMT
 * Compile :   Mon, 02 Mar 2020 19:17:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/favicon.ico.html
// Temps de compilation total: 0.154 ms
//

function html_d93730c499151573143fb9a9e670bb2f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header(' . _q('Content-Type: image/x-icon') . '); ?'.'>' .
((($a = charge_scripts('favicon.ico',false)) OR (is_string($a) AND strlen($a))) ? $a : charge_scripts('spip.ico',false)) .
'
');

	return analyse_resultat_skel('html_d93730c499151573143fb9a9e670bb2f', $Cache, $page, 'squelettes/favicon.ico.html');
}
?>