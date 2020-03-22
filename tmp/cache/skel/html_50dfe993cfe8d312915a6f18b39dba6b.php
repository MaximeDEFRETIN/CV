<?php

/*
 * Squelette : ../plugins/auto/agenda/v3.39.4/prive/squelettes/navigation/configurer_agenda.html
 * Date :      Sun, 09 Feb 2020 10:04:14 GMT
 * Compile :   Thu, 27 Feb 2020 09:12:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/agenda/v3.39.4/prive/squelettes/navigation/configurer_agenda.html
// Temps de compilation total: 0.121 ms
//

function html_50dfe993cfe8d312915a6f18b39dba6b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir(_T('agenda:explication_synchro_flux_ical_titre'), 'info') .
'
' .
_T('agenda:explication_synchro_flux_ical') .
'
' .
boite_fermer() .
'
');

	return analyse_resultat_skel('html_50dfe993cfe8d312915a6f18b39dba6b', $Cache, $page, '../plugins/auto/agenda/v3.39.4/prive/squelettes/navigation/configurer_agenda.html');
}
?>