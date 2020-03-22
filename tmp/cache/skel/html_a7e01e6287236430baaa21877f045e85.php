<?php

/*
 * Squelette : ../plugins-dist/organiseur/prive/squelettes/inclure/configurer_messagerie.html
 * Date :      Mon, 10 Feb 2020 16:50:07 GMT
 * Compile :   Thu, 27 Feb 2020 08:57:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/organiseur/prive/squelettes/inclure/configurer_messagerie.html
// Temps de compilation total: 0.203 ms
//

function html_a7e01e6287236430baaa21877f045e85($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_MESSAGERIE_AGENDA',
	array(),
	array('../plugins-dist/organiseur/prive/squelettes/inclure/configurer_messagerie.html','html_a7e01e6287236430baaa21877f045e85','',2,$GLOBALS['spip_lang'])) .
'
</div>
');

	return analyse_resultat_skel('html_a7e01e6287236430baaa21877f045e85', $Cache, $page, '../plugins-dist/organiseur/prive/squelettes/inclure/configurer_messagerie.html');
}
?>