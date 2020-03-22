<?php

/*
 * Squelette : ../plugins/auto/metasplus_v2/prive/squelettes/contenu/metasplus_previsu.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Thu, 27 Feb 2020 09:03:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/metasplus_v2/prive/squelettes/contenu/metasplus_previsu.html
// Temps de compilation total: 0.928 ms
//

function html_898d7dc0463731a2eb088fb5bf197686($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars'][$_zzz=(string)'cle_objet'] = interdire_scripts(id_table_objet(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)))) .
vide($Pile['vars'][$_zzz=(string)'contexte'] = array('type-page' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'page', null),true)), 'objet' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'id_objet' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)))) .
vide($Pile['vars'][$_zzz=(string)'fond'] = metasplus_selectionner_fond(table_valeur($Pile["vars"], (string)'contexte', null))) .
vide($Pile['vars'][$_zzz=(string)'texte_objet'] = interdire_scripts(_T(objet_info(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true),'texte_objet')))) .
vide($Pile['vars'][$_zzz=(string)'redirect'] = interdire_scripts(generer_url_entite(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true))))) .
'<h1 class="grostitre">' .
_T('metasplus:titre_previsu') .
'</h1>

<p class="notice">Dans cette prévisualisation, les URLs pointent vers le privé, mais rassurez-vous, elles sont correctes dans les pages publiques.</p>

' .
boite_ouvrir('', 'info') .
filtre_icone_verticale_dist(table_valeur($Pile["vars"], (string)'redirect', null),interdire_scripts(_T(objet_info(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true),'texte_retour'))),interdire_scripts(objet_info(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true),'icone_objet')),'','right retour metasplus') .
'
<dl>
	<dt>' .
_T('metasplus:label_previsu_objet') .
' :</dt>
	<dd>
		' .
replace(ucfirst(mb_strtolower(_T('public|spip|ecrire:titre_cadre_numero_objet', array('objet' => table_valeur($Pile["vars"], (string)'texte_objet', null))))),':','') .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)) .
(($t1 = strval(interdire_scripts(generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'titre'))))!=='' ?
		(' : «&nbsp;' . $t1 . '&nbsp;»') :
		'') .
'
	</dd>
	<dt>' .
_T('metasplus:label_previsu_fond') .
' :</dt>
	<dd><code>' .
table_valeur($Pile["vars"], (string)'fond', null) .
'.html</code></dd>
</dl>
' .
boite_fermer() .
'

' .
boite_ouvrir('', 'simple metasplus') .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("coloration_code", "est_actif")) ?'' :' '))))!=='' ?
		($t1 . '<pre><code>') :
		'') .
'
' .
replace(appliquer_filtre(recuperer_fond(table_valeur($Pile["vars"], (string)'fond', null),array('type-page' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'page', null),true)), 'objet' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'id_objet' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), table_valeur($Pile["vars"], (string)'cle_objet', null) => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)))),interdire_scripts((filtre_info_plugin_dist("coloration_code", "est_actif") ? 'coloration_code_color':'htmlentities')),interdire_scripts((filtre_info_plugin_dist("coloration_code", "est_actif") ? 'spip':interdire_scripts(eval('return '.'null'.';'))))),'^\\s+','') .
'
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("coloration_code", "est_actif")) ?'' :' '))))!=='' ?
		($t1 . '</code></pre>') :
		'') .
'
' .
boite_fermer() .
'

<style>
	code.html {display:block;overflow-x:auto}
	.box.simple.metasplus{overflow-x:auto}
</style>');

	return analyse_resultat_skel('html_898d7dc0463731a2eb088fb5bf197686', $Cache, $page, '../plugins/auto/metasplus_v2/prive/squelettes/contenu/metasplus_previsu.html');
}
?>