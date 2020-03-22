<?php

/*
 * Squelette : ../prive/squelettes/contenu/configurer_preferences.html
 * Date :      Sun, 01 Dec 2019 12:09:33 GMT
 * Compile :   Thu, 06 Feb 2020 16:17:49 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/configurer_preferences.html
// Temps de compilation total: 0.779 ms
//

function html_90554b3f9ae8c1153bc85d5e5f5637d6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- <h1 class="grostitre">' .
_T('public|spip|ecrire:icone_mes_preferences') .
'</h1> -->
<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_PREFERENCES',
	array(),
	array('../prive/squelettes/contenu/configurer_preferences.html','html_90554b3f9ae8c1153bc85d5e5f5637d6','',3,$GLOBALS['spip_lang'])) .
'
</div>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_PREFERENCES_MENUS',
	array(),
	array('../prive/squelettes/contenu/configurer_preferences.html','html_90554b3f9ae8c1153bc85d5e5f5637d6','',7,$GLOBALS['spip_lang'])) .
'
</div>');

	return analyse_resultat_skel('html_90554b3f9ae8c1153bc85d5e5f5637d6', $Cache, $page, '../prive/squelettes/contenu/configurer_preferences.html');
}
?>