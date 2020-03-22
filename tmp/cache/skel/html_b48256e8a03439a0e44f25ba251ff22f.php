<?php

/*
 * Squelette : ../plugins/auto/info_spip/v0.11.1/prive/squelettes/contenu/configurer_info_spip.html
 * Date :      Wed, 05 Feb 2020 17:19:37 GMT
 * Compile :   Mon, 16 Mar 2020 15:17:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/info_spip/v0.11.1/prive/squelettes/contenu/configurer_info_spip.html
// Temps de compilation total: 2.787 ms
//

function html_b48256e8a03439a0e44f25ba251ff22f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', 'infospip')?" ":""))) .
'

<h1 class="grostitre">' .
_T('info_spip:titre_page_configurer_info_spip') .
'</h1>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_INFO_SPIP',
	array(),
	array('../plugins/auto/info_spip/v0.11.1/prive/squelettes/contenu/configurer_info_spip.html','html_b48256e8a03439a0e44f25ba251ff22f','',6,$GLOBALS['spip_lang'])) .
'
</div>');

	return analyse_resultat_skel('html_b48256e8a03439a0e44f25ba251ff22f', $Cache, $page, '../plugins/auto/info_spip/v0.11.1/prive/squelettes/contenu/configurer_info_spip.html');
}
?>