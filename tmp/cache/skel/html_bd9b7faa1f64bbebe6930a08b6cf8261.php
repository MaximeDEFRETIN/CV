<?php

/*
 * Squelette : ../prive/squelettes/contenu/configurer_avancees.html
 * Date :      Mon, 10 Feb 2020 16:50:04 GMT
 * Compile :   Thu, 27 Feb 2020 08:56:57 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/configurer_avancees.html
// Temps de compilation total: 9.969 ms
//

function html_bd9b7faa1f64bbebe6930a08b6cf8261($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_interactions')?" ":""))) .
'
<h1 class="grostitre">' .
_T('public|spip|ecrire:onglet_fonctions_avances') .
'</h1>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_REDUCTEUR',
	array(),
	array('../prive/squelettes/contenu/configurer_avancees.html','html_bd9b7faa1f64bbebe6930a08b6cf8261','',5,$GLOBALS['spip_lang'])) .
'
</div>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_AVERTISSEUR',
	array(),
	array('../prive/squelettes/contenu/configurer_avancees.html','html_bd9b7faa1f64bbebe6930a08b6cf8261','',9,$GLOBALS['spip_lang'])) .
'
</div>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_PREVISUALISEUR',
	array(),
	array('../prive/squelettes/contenu/configurer_avancees.html','html_bd9b7faa1f64bbebe6930a08b6cf8261','',13,$GLOBALS['spip_lang'])) .
'
</div>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_RELAYEUR',
	array(),
	array('../prive/squelettes/contenu/configurer_avancees.html','html_bd9b7faa1f64bbebe6930a08b6cf8261','',17,$GLOBALS['spip_lang'])) .
'
</div>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_MODERNISEUR',
	array(),
	array('../prive/squelettes/contenu/configurer_avancees.html','html_bd9b7faa1f64bbebe6930a08b6cf8261','',21,$GLOBALS['spip_lang'])) .
'
</div>');

	return analyse_resultat_skel('html_bd9b7faa1f64bbebe6930a08b6cf8261', $Cache, $page, '../prive/squelettes/contenu/configurer_avancees.html');
}
?>