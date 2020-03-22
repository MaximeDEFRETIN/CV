<?php

/*
 * Squelette : ../plugins/auto/metasplus/v2.3.2/prive/squelettes/contenu/configurer_metasplus.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Thu, 05 Mar 2020 11:18:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/metasplus/v2.3.2/prive/squelettes/contenu/configurer_metasplus.html
// Temps de compilation total: 0.915 ms
//

function html_b4ce460784b8e3c91ccd1c0aa5d56407($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', 'metasplus')?" ":""))) .
'
<div class="ajax">
' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_METASPLUS',
	array(),
	array('../plugins/auto/metasplus/v2.3.2/prive/squelettes/contenu/configurer_metasplus.html','html_b4ce460784b8e3c91ccd1c0aa5d56407','',3,$GLOBALS['spip_lang'])) .
'
</div>');

	return analyse_resultat_skel('html_b4ce460784b8e3c91ccd1c0aa5d56407', $Cache, $page, '../plugins/auto/metasplus/v2.3.2/prive/squelettes/contenu/configurer_metasplus.html');
}
?>