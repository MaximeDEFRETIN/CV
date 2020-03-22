<?php

/*
 * Squelette : ../prive/squelettes/navigation/synchro.html
 * Date :      Mon, 10 Feb 2020 16:50:03 GMT
 * Compile :   Fri, 13 Mar 2020 19:56:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/synchro.html
// Temps de compilation total: 0.256 ms
//

function html_0a6d73cd952222e5056bcaf0917cd763($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir('', 'info') .
'<p>' .
_T('public|spip|ecrire:ical_info1') .
'</p>
	' .
vide($Pile['vars'][$_zzz=(string)'spipnet'] = interdire_scripts(concat(table_valeur(eval('return '.'$GLOBALS'.';'),'home_server'),'/',interdire_scripts(table_valeur(eval('return '.'$GLOBALS'.';'),'spip_lang')),'_suivi'))) .
'
	<p>' .
_T('public|spip|ecrire:ical_info2', array('spipnet' => table_valeur($Pile["vars"], (string)'spipnet', null))) .
'</p>
' .
boite_fermer());

	return analyse_resultat_skel('html_0a6d73cd952222e5056bcaf0917cd763', $Cache, $page, '../prive/squelettes/navigation/synchro.html');
}
?>