<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_textes.html
 * Date :      Wed, 05 Feb 2020 17:19:36 GMT
 * Compile :   Mon, 16 Mar 2020 15:19:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_textes.html
// Temps de compilation total: 0.474 ms
//

function html_e68d3c1ed16eebfdec2052b0aace10ce($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
interdire_scripts(invalideur_session($Cache, sinon_interdire_acces((table_valeur($GLOBALS["visiteur_session"], (string)'statut', null) == '0minirezo')))) .
'
' .
interdire_scripts(eval('return '.'spip_proprio_charger_toutes_les_langues()'.';')) .
'
<h1 class="grostitre">' .
_T('spipproprio:ptexte_titre_page') .
'</h1>

' .
boite_ouvrir((	interdire_scripts(filtre_balise_img_dist(chemin_image('gnome-text-abiword-24.png'),'','cadre-icone')) .
	'
	' .
	_T('spipproprio:ptexte_titre_page') .
	'
'), 'simple right') .
'
	' .
_T('spipproprio:ptexte_texte') .
'
' .
boite_fermer() .
'

' .
boite_ouvrir(wrap(_T('avis_attention'),'<h4>'), 'info') .
'
<p>' .
_T('public|spip|ecrire:texte_inc_config') .
'</p>
' .
boite_fermer() .
'

' .
boite_ouvrir('', 'simple') .
'

' .
vide($Pile['vars'][$_zzz=(string)'icone_vide'] = 'rien.gif') .
cadre_depliable(table_valeur($Pile["vars"], (string)'icone_vide', null),_T('spipproprio:ptexte_info_titre'),'0',propre(_T('spipproprio:ptexte_info_texte')),'ptexte-info') .
'

' .
cadre_depliable(table_valeur($Pile["vars"], (string)'icone_vide', null),_T('spipproprio:ptexte_form_titre'),interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'raccourci', null),true) == '') ? '0':'1')),recuperer_fond( 'prive/squelettes/inclure/proprietaire_textes' , array('raccourci' => interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'raccourci', null), ''),true)) ), array('compil'=>array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_textes.html','html_e68d3c1ed16eebfdec2052b0aace10ce','',0,$GLOBALS['spip_lang'])), _request('connect')),'ptexte-form') .
'

<br class=\'nettoyeur\' />
' .
interdire_scripts(eval('return '.'charger_textes_proprietaire(false)'.';')) .
boite_fermer() .
'
');

	return analyse_resultat_skel('html_e68d3c1ed16eebfdec2052b0aace10ce', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_textes.html');
}
?>