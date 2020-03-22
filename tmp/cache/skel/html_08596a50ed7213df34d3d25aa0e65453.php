<?php

/*
 * Squelette : ../plugins-dist/statistiques/prive/squelettes/inclure/admin_stats_archiver.html
 * Date :      Mon, 10 Feb 2020 16:50:18 GMT
 * Compile :   Thu, 27 Feb 2020 09:08:37 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/statistiques/prive/squelettes/inclure/admin_stats_archiver.html
// Temps de compilation total: 0.105 ms
//

function html_08596a50ed7213df34d3d25aa0e65453($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'	' .
boite_ouvrir(_T('statistiques:archiver_et_nettoyer'), 'simple') .
'
		<p>' .
_T('statistiques:archiver_description') .
'</p>
	' .
boite_pied() .
'
		' .
bouton_action(_T('public|spip|ecrire:bouton_suivant'),generer_url_ecrire('stats_archiver')) .
'
	' .
boite_fermer());

	return analyse_resultat_skel('html_08596a50ed7213df34d3d25aa0e65453', $Cache, $page, '../plugins-dist/statistiques/prive/squelettes/inclure/admin_stats_archiver.html');
}
?>