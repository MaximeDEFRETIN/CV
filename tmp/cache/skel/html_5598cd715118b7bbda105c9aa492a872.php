<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/inclure/proprietaire_textes.html
 * Date :      Wed, 05 Feb 2020 17:19:35 GMT
 * Compile :   Mon, 16 Mar 2020 15:19:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/inclure/proprietaire_textes.html
// Temps de compilation total: 3.200 ms
//

function html_5598cd715118b7bbda105c9aa492a872($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'cadre-formulaire-editer\'>
' .
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_TEXTES',
	array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'raccourci', null),true))),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/inclure/proprietaire_textes.html','html_5598cd715118b7bbda105c9aa492a872','',2,$GLOBALS['spip_lang'])) .
'</div>
');

	return analyse_resultat_skel('html_5598cd715118b7bbda105c9aa492a872', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/inclure/proprietaire_textes.html');
}
?>