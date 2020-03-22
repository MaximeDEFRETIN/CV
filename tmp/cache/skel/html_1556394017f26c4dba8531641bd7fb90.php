<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_textes.html
 * Date :      Wed, 05 Feb 2020 17:19:07 GMT
 * Compile :   Mon, 16 Mar 2020 15:19:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_textes.html
// Temps de compilation total: 0.464 ms
//

function html_1556394017f26c4dba8531641bd7fb90($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'ajax\'>
<div class=\'formulaire_spip formulaire_editer\'>
	<br class=\'bugajaxie\' />
	' .
(($t1 = strval(table_valeur(@$Pile[0], (string)'message_ok', null)))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(table_valeur(@$Pile[0], (string)'message_erreur', null)))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
	<form method=\'post\' action=\'' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'\' enctype=\'multipart/form-data\'><div>
	' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>' .
'<input type="hidden" name="exec" value="spip_proprio_textes" />

	<ul class="editer-groupe">
	    <li class=\'editer obligatoire' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'raccourci'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
		    <label for="raccourci">' .
_T('public|spip|ecrire:module_raccourci') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'raccourci')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type="text" class="text" name="raccourci" id="raccourci" value="' .
table_valeur(@$Pile[0], (string)'raccourci', null) .
'" />
	    </li>
	    <li class=\'editer obligatoire' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'value'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
		    <label for="text_area">' .
_T('public|spip|ecrire:module_texte_affiche') .
'&nbsp;:</label>
			<div class="explication">' .
_T('public|spip|ecrire:texte_enrichir_mise_a_jour') .
'<em>' .
interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('raccourcis','../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_textes.html', $Pile[0]):'')) .
'</em></div>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'value')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<textarea class="textarea" name=\'value\' id=\'text_area\'' .
(($t1 = strval(spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' lang=\'' . $t1 . '\'') :
		'') .
' rows=\'' .
moins(table_valeur(table_valeur(@$Pile[0], (string)'config', null),'lignes_longues'),'5') .
'\' cols=\'40\'' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'config', null),'_browser_caret','')))!=='' ?
		('
			' . $t1) :
		'') .
'>' .
table_valeur(@$Pile[0], (string)'value', null) .
'</textarea>
	    </li>
	</ul>

	<p class="boutons">
		<input type=\'submit\' class=\'fondo\' value=\'' .
_T('public|spip|ecrire:bouton_enregistrer') .
'\' />
		<input type=\'button\' class=\'fondo\' value=\'' .
_T('public|spip|ecrire:bouton_annuler') .
'\' onclick="window.location.href = \'' .
parametre_url(self(),'raccourci','') .
'\';" />
	</p>
	</div></form>
</div>
</div>
' .
propre(_T('spipproprio:ptexte_info_tags')) .
'
' .
propre(_T('spipproprio:ptexte_info_supp')) .
'
');

	return analyse_resultat_skel('html_1556394017f26c4dba8531641bd7fb90', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_textes.html');
}
?>