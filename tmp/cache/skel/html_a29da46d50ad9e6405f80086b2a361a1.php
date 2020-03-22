<?php

/*
 * Squelette : plugins/auto/metasplus/v2.3.2/metasplus_identifier_contexte.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Fri, 21 Feb 2020 08:57:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/metasplus/v2.3.2/metasplus_identifier_contexte.html
// Temps de compilation total: 0.238 ms
//

function html_a29da46d50ad9e6405f80086b2a361a1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = interdire_scripts(serialize(metasplus_identifier_contexte(url_absolue(entites_html(sinon(table_valeur(@$Pile[0], (string)'url', null), self()),true)))));

	return analyse_resultat_skel('html_a29da46d50ad9e6405f80086b2a361a1', $Cache, $page, 'plugins/auto/metasplus/v2.3.2/metasplus_identifier_contexte.html');
}
?>