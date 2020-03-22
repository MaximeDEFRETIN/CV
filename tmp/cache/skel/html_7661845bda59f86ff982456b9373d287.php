<?php

/*
 * Squelette : plugins-dist/statistiques/prive/bouton/statistiques.html
 * Date :      Mon, 10 Feb 2020 16:50:18 GMT
 * Compile :   Fri, 28 Feb 2020 14:11:17 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins-dist/statistiques/prive/bouton/statistiques.html
// Temps de compilation total: 0.111 ms
//

function html_7661845bda59f86ff982456b9373d287($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'statistiques', null),true))))!=='' ?
		('
	<a href="' . $t1 . (	'" class="spip-admin-boutons"
		id="statistiques">' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'visites', null),true))))!=='' ?
			((	_T('statistiques:info_visites') .
		'&nbsp;') . $t2) :
			'') .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'popularite', null),true))))!=='' ?
			((	';&nbsp;' .
		_T('statistiques:info_popularite_5') .
		'&nbsp;') . $t2) :
			'') .
	'</a>')) :
		'');

	return analyse_resultat_skel('html_7661845bda59f86ff982456b9373d287', $Cache, $page, 'plugins-dist/statistiques/prive/bouton/statistiques.html');
}
?>