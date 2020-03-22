<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/extra/spip_proprio_hebergeur.html
 * Date :      Wed, 05 Feb 2020 17:19:35 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/extra/spip_proprio_hebergeur.html
// Temps de compilation total: 0.156 ms
//

function html_46cebbf46e29e1821881f65a614ab972($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir('', 'simple') .
'
	' .
_T('spipproprio:pconfig_texte_notes') .
'
	' .
_T('spipproprio:pconfig_texte_ajouts') .
'
' .
boite_fermer() .
'

' .
vide($Pile['vars'][$_zzz=(string)'open'] = boite_ouvrir('', 'raccourcis')) .
unique(table_valeur($Pile["vars"], (string)'open', null)) .
'
' .
filtre_icone_horizontale_dist(generer_url_ecrire('spip_proprio'),_T('spipproprio:proprietaire_titre_page_short'),'idisk-dir-24.png') .
'
' .
(unique(table_valeur($Pile["vars"], (string)'open', null)) ? '':boite_fermer()) .
'

');

	return analyse_resultat_skel('html_46cebbf46e29e1821881f65a614ab972', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/extra/spip_proprio_hebergeur.html');
}
?>