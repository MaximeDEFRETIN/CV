<?php

/*
 * Squelette : ../plugins-dist/statistiques/prive/squelettes/inclure/admin_effacer_stats.html
 * Date :      Mon, 10 Feb 2020 16:50:18 GMT
 * Compile :   Thu, 27 Feb 2020 09:08:37 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/statistiques/prive/squelettes/inclure/admin_effacer_stats.html
// Temps de compilation total: 0.163 ms
//

function html_27a0f123e055ada8d8b5dfef63db363c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('detruire')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'

	' .
	boite_ouvrir(wrap(_T('texte_effacer_statistiques'),'<h3>'), 'notice', 'titrem') .
	'<p>' .
	_T('statistiques:texte_admin_effacer_stats') .
	'</p>
		<p><strong>' .
	_T('public|spip|ecrire:avis_suppression_base') .
	'</strong></p>
		<p>' .
	_T('statistiques:texte_admin_effacer_toutes_stats') .
	'</p>
	' .
	boite_pied() .
	'
		' .
	bouton_action(_T('statistiques:bouton_effacer_statistiques'),generer_url_ecrire('base_delete_stats')) .
	'
		' .
	bouton_action(_T('statistiques:bouton_effacer_referers'),generer_url_ecrire('base_delete_referers')) .
	'
	' .
	boite_fermer() .
	'

')) :
		'');

	return analyse_resultat_skel('html_27a0f123e055ada8d8b5dfef63db363c', $Cache, $page, '../plugins-dist/statistiques/prive/squelettes/inclure/admin_effacer_stats.html');
}
?>