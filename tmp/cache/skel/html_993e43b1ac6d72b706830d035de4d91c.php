<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/navigation/spip_proprio_proprietaire.html
 * Date :      Wed, 05 Feb 2020 17:19:35 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/navigation/spip_proprio_proprietaire.html
// Temps de compilation total: 1.969 ms
//

function html_993e43b1ac6d72b706830d035de4d91c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir((	interdire_scripts(filtre_balise_img_dist(chemin_image('gnome-http-url-24.png'),'','cadre-icone')) .
	'
	' .
	_T('spipproprio:infos_proprietaire') .
	'
'), 'simple right') .
'
	' .
_T('spipproprio:pconfig_texte', array('type' => 'proprietaire')) .
'
	' .
_T('spipproprio:pconfig_texte_lien_doc') .
'
' .
interdire_scripts(filtre_icone_horizontale_dist(generer_url_public('test_proprietaire', ''),_T('spipproprio:testing_page_public'),'article-24.gif')) .
'
<small>[<a href=\'' .
interdire_scripts(generer_url_public('test_proprietaire', '')) .
'\' target=\'_blank\' title=\'' .
_T('spipproprio:see_doc_in_new_window') .
'\'>' .
_T('spipproprio:new_window') .
'</a>]</small>
' .
boite_fermer());

	return analyse_resultat_skel('html_993e43b1ac6d72b706830d035de4d91c', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/navigation/spip_proprio_proprietaire.html');
}
?>