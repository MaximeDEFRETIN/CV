<?php

/*
 * Squelette : ../plugins/auto/svpstats/v0.3.2/prive/squelettes/inclure/info_stats.html
 * Date :      Fri, 20 Dec 2019 11:26:32 GMT
 * Compile :   Fri, 13 Mar 2020 21:03:54 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/svpstats/v0.3.2/prive/squelettes/inclure/info_stats.html
// Temps de compilation total: 0.514 ms
//

function html_89f8d27f2057ba9dbd05d39726987afa($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir(filtre_balise_img_dist(find_in_path('svpstats_logo-24.png'),'','cadre-icone'), 'simple') .
'
	' .
vide($Pile['vars'][$_zzz=(string)'periode'] = filtre_svpstats_periode_actualisation_stats('')) .
((table_valeur($Pile["vars"], (string)'periode', null))  ?
		(' ' . _T('svpstats:info_boite_statistiques', array('periode' => table_valeur($Pile["vars"], (string)'periode', null)))) :
		'') .
'
	' .
bouton_action(_T('svpstats:bouton_actualiser_stats'),invalideur_session($Cache, generer_action_auteur('actualiser_stats','tout',invalideur_session($Cache, self()))),'','',_T('svpstats:bulle_actualiser_stats')) .
'
' .
boite_fermer() .
'
');

	return analyse_resultat_skel('html_89f8d27f2057ba9dbd05d39726987afa', $Cache, $page, '../plugins/auto/svpstats/v0.3.2/prive/squelettes/inclure/info_stats.html');
}
?>