<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/extra/spip_proprio.html
 * Date :      Wed, 05 Feb 2020 17:19:35 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:27 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/extra/spip_proprio.html
// Temps de compilation total: 30.355 ms
//

function html_ea92deabcfc522e979a3ba95ffac8e88($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'open'] = boite_ouvrir('', 'raccourcis')) .
unique(table_valeur($Pile["vars"], (string)'open', null)) .
'
' .
filtre_icone_horizontale_dist(generer_url_ecrire('spip_proprio_tech'),_T('spipproprio:exporter_importer'),'stock_export.png') .
'
' .
(unique(table_valeur($Pile["vars"], (string)'open', null)) ? '':boite_fermer()) .
'
');

	return analyse_resultat_skel('html_ea92deabcfc522e979a3ba95ffac8e88', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/extra/spip_proprio.html');
}
?>