<?php

/*
 * Squelette : ../plugins/auto/pages/v1.4.0/prive/objets/editer/identifiant_page.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Sun, 08 Mar 2020 10:05:10 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/pages/v1.4.0/prive/objets/editer/identifiant_page.html
// Temps de compilation total: 2.119 ms
//

function html_3d3dc171bc37fdb2dce957cb477a0799($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_EDITER_IDENTIFIANT_PAGE',
	array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_article', null),true))),
	array('../plugins/auto/pages/v1.4.0/prive/objets/editer/identifiant_page.html','html_3d3dc171bc37fdb2dce957cb477a0799','',2,$GLOBALS['spip_lang'])) .
'</div>
');

	return analyse_resultat_skel('html_3d3dc171bc37fdb2dce957cb477a0799', $Cache, $page, '../plugins/auto/pages/v1.4.0/prive/objets/editer/identifiant_page.html');
}
?>