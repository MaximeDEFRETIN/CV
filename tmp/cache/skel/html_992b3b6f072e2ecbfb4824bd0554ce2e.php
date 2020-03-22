<?php

/*
 * Squelette : plugins/auto/metasplus_v2/metasplus_identifier_contexte.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Mon, 02 Mar 2020 14:03:20 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/metasplus_v2/metasplus_identifier_contexte.html
// Temps de compilation total: 0.096 ms
//

function html_992b3b6f072e2ecbfb4824bd0554ce2e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = interdire_scripts(serialize(metasplus_identifier_contexte(url_absolue(entites_html(sinon(table_valeur(@$Pile[0], (string)'url', null), self()),true)))));

	return analyse_resultat_skel('html_992b3b6f072e2ecbfb4824bd0554ce2e', $Cache, $page, 'plugins/auto/metasplus_v2/metasplus_identifier_contexte.html');
}
?>