<?php

/*
 * Squelette : ../prive/squelettes/contenu/configurer_langage.html
 * Date :      Sun, 01 Dec 2019 12:09:33 GMT
 * Compile :   Thu, 06 Feb 2020 16:17:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/configurer_langage.html
// Temps de compilation total: 0.539 ms
//

function html_5e2d41d5ad4ef5f9c73866340c1e6d06($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- <h1 class="grostitre">' .
_T('public|spip|ecrire:icone_ma_langue') .
'</h1> -->
' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_LANGAGE',
	array(),
	array('../prive/squelettes/contenu/configurer_langage.html','html_5e2d41d5ad4ef5f9c73866340c1e6d06','',2,$GLOBALS['spip_lang'])));

	return analyse_resultat_skel('html_5e2d41d5ad4ef5f9c73866340c1e6d06', $Cache, $page, '../prive/squelettes/contenu/configurer_langage.html');
}
?>