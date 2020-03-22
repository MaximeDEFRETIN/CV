<?php

/*
 * Squelette : ../plugins/auto/agenda/v3.39.4/prive/squelettes/contenu/configurer_agenda.html
 * Date :      Sun, 09 Feb 2020 10:04:14 GMT
 * Compile :   Thu, 27 Feb 2020 09:12:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/agenda/v3.39.4/prive/squelettes/contenu/configurer_agenda.html
// Temps de compilation total: 6.359 ms
//

function html_9e298a9bda0cf5e8f56533bd1fac50b4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer_agenda')?" ":""))) .
'
<h1 class="grostitre">' .
_T('agenda:agenda') .
'</h1>
<div class="ajax">' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_AGENDA',
	array(),
	array('../plugins/auto/agenda/v3.39.4/prive/squelettes/contenu/configurer_agenda.html','html_9e298a9bda0cf5e8f56533bd1fac50b4','',3,$GLOBALS['spip_lang'])) .
'</div>
<div class="ajax">' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_CALENDRIERMINI',
	array(),
	array('../plugins/auto/agenda/v3.39.4/prive/squelettes/contenu/configurer_agenda.html','html_9e298a9bda0cf5e8f56533bd1fac50b4','',4,$GLOBALS['spip_lang'])) .
'</div>
<h2>' .
_T('agenda:rubriques') .
'</h2>
<div class="ajax">' .
executer_balise_dynamique('FORMULAIRE_MIGRER_AGENDA',
	array(),
	array('../plugins/auto/agenda/v3.39.4/prive/squelettes/contenu/configurer_agenda.html','html_9e298a9bda0cf5e8f56533bd1fac50b4','',6,$GLOBALS['spip_lang'])) .
'</div>
');

	return analyse_resultat_skel('html_9e298a9bda0cf5e8f56533bd1fac50b4', $Cache, $page, '../plugins/auto/agenda/v3.39.4/prive/squelettes/contenu/configurer_agenda.html');
}
?>