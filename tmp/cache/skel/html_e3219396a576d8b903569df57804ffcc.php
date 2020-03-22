<?php

/*
 * Squelette : plugins/auto/spip_proprio/v1.70.5/modeles/noisette_googlemap.html
 * Date :      Fri, 20 Dec 2019 11:26:30 GMT
 * Compile :   Wed, 05 Feb 2020 17:17:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/spip_proprio/v1.70.5/modeles/noisette_googlemap.html
// Temps de compilation total: 0.463 ms
//

function html_e3219396a576d8b903569df57804ffcc($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'googlemap_string', null),true))))!=='' ?
		((	'<iframe width="' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'width', null), '400'),true)) .
	'" height="' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'height', null), '400'),true)) .
	'" frameborder="' .
	interdire_scripts(((($a = ((entites_html(table_valeur(@$Pile[0], (string)'border', null),true) != '') ? interdire_scripts(concat(entites_html(table_valeur(@$Pile[0], (string)'border', null),true),'px')):'')) OR (is_string($a) AND strlen($a))) ? $a : '0')) .
	'" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.fr/maps?hl=fr&amp;q=') . $t1 . '&amp;z=16&amp;ie=UTF8&amp;output=embed"></iframe>') :
		''));

	return analyse_resultat_skel('html_e3219396a576d8b903569df57804ffcc', $Cache, $page, 'plugins/auto/spip_proprio/v1.70.5/modeles/noisette_googlemap.html');
}
?>