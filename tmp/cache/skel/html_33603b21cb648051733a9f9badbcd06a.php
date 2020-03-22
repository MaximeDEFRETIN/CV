<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio.html
 * Date :      Wed, 05 Feb 2020 17:19:36 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:27 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio.html
// Temps de compilation total: 0.267 ms
//

function html_33603b21cb648051733a9f9badbcd06a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
interdire_scripts(invalideur_session($Cache, sinon_interdire_acces((table_valeur($GLOBALS["visiteur_session"], (string)'statut', null) == '0minirezo')))) .
'
<h1 class="grostitre">' .
_T('spipproprio:proprietaire_titre_page') .
'</h1>

' .
vide($Pile['vars'][$_zzz=(string)'icone_vide'] = 'rien.gif') .
cadre_depliable(table_valeur($Pile["vars"], (string)'icone_vide', null),_T('spipproprio:pourquoi_ce_plugin'),'0',propre(_T('spipproprio:presentation')),'bloc_presentation') .
'
' .
cadre_depliable(table_valeur($Pile["vars"], (string)'icone_vide', null),_T('spipproprio:utiliser_ce_plugin'),'0',propre(_T('spipproprio:presentation_plugin')),'bloc_presentation_plugin') .
'
' .
cadre_depliable(table_valeur($Pile["vars"], (string)'icone_vide', null),_T('spipproprio:outils_de_communication'),'0',propre(_T('spipproprio:presentation_outils_de_communication')),'bloc_presentation_outils') .
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

');

	return analyse_resultat_skel('html_33603b21cb648051733a9f9badbcd06a', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio.html');
}
?>