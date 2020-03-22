<?php

/*
 * Squelette : ../prive/squelettes/navigation/configurer.html
 * Date :      Mon, 10 Feb 2020 16:50:03 GMT
 * Compile :   Thu, 27 Feb 2020 08:56:57 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/configurer.html
// Temps de compilation total: 0.333 ms
//

function html_531929654c14dac04f90f071821dde9b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'nav'] = recuperer_fond( 'prive/squelettes/inclure/menu-navigation' , array_merge($Pile[0],array('menu' => 'menu_configuration' ,
	'bloc' => 'navigation' )), array('compil'=>array('../prive/squelettes/navigation/configurer.html','html_531929654c14dac04f90f071821dde9b','',0,$GLOBALS['spip_lang'])), _request('connect'))) .
((match(table_valeur($Pile["vars"], (string)'nav', null),'execfound'))  ?
		(' ' . (	'
' .
	table_valeur($Pile["vars"], (string)'nav', null) .
	boite_ouvrir(wrap(_T('avis_attention'),'<h4>'), 'info') .
	'
<p>' .
	_T('public|spip|ecrire:texte_inc_config') .
	'</p>
' .
	boite_fermer() .
	'
')) :
		''));

	return analyse_resultat_skel('html_531929654c14dac04f90f071821dde9b', $Cache, $page, '../prive/squelettes/navigation/configurer.html');
}
?>