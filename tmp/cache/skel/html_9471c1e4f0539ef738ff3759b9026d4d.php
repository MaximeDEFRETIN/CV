<?php

/*
 * Squelette : ../prive/squelettes/contenu/configurer_langue.html
 * Date :      Sun, 01 Dec 2019 12:09:33 GMT
 * Compile :   Wed, 05 Feb 2020 15:32:27 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/configurer_langue.html
// Temps de compilation total: 0.804 ms
//

function html_9471c1e4f0539ef738ff3759b9026d4d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_langue')?" ":""))) .
'
<h1 class="grostitre">' .
_T('public|spip|ecrire:info_langues') .
'</h1>
<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_LANGUE',
	array(),
	array('../prive/squelettes/contenu/configurer_langue.html','html_9471c1e4f0539ef738ff3759b9026d4d','',4,$GLOBALS['spip_lang'])) .
'
</div>
<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_TRANSCODEUR',
	array(),
	array('../prive/squelettes/contenu/configurer_langue.html','html_9471c1e4f0539ef738ff3759b9026d4d','',7,$GLOBALS['spip_lang'])) .
'
</div>');

	return analyse_resultat_skel('html_9471c1e4f0539ef738ff3759b9026d4d', $Cache, $page, '../prive/squelettes/contenu/configurer_langue.html');
}
?>