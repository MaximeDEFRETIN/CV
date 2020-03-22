<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/navigation/spip_proprio.html
 * Date :      Wed, 05 Feb 2020 17:19:35 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:27 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/navigation/spip_proprio.html
// Temps de compilation total: 0.155 ms
//

function html_2ad8d49abf2cd311571680db21699f00($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir((	interdire_scripts(filtre_balise_img_dist(chemin_image('idisk-dir-24.png'),'','cadre-icone')) .
	'
	' .
	_T('spipproprio:proprietaire_titre_page') .
	'
'), 'simple right') .
'
	' .
_T('spipproprio:proprietaire_texte') .
'
' .
boite_fermer());

	return analyse_resultat_skel('html_2ad8d49abf2cd311571680db21699f00', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/navigation/spip_proprio.html');
}
?>