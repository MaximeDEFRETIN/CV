<?php

/*
 * Squelette : ../plugins-dist/urls_etendues/prive/squelettes/contenu/configurer_urls.html
 * Date :      Mon, 10 Feb 2020 16:50:09 GMT
 * Compile :   Sun, 08 Mar 2020 10:09:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/urls_etendues/prive/squelettes/contenu/configurer_urls.html
// Temps de compilation total: 6.186 ms
//

function html_1223f5cb0fe5843e0f26b6f680517cd8($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('urls:icone_configurer_urls') .
'</h1>


' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_URLS',
	array(),
	array('../plugins-dist/urls_etendues/prive/squelettes/contenu/configurer_urls.html','html_1223f5cb0fe5843e0f26b6f680517cd8','',4,$GLOBALS['spip_lang'])) .
'

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_',
	array(interdire_scripts(choisir_form_configuration((include_spip('inc/config')?lire_config('type_urls',null,false):'')))),
	array('../plugins-dist/urls_etendues/prive/squelettes/contenu/configurer_urls.html','html_1223f5cb0fe5843e0f26b6f680517cd8','',7,$GLOBALS['spip_lang'])) .
'</div>');

	return analyse_resultat_skel('html_1223f5cb0fe5843e0f26b6f680517cd8', $Cache, $page, '../plugins-dist/urls_etendues/prive/squelettes/contenu/configurer_urls.html');
}
?>