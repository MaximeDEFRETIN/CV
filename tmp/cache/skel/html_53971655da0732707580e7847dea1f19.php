<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_legales.html
 * Date :      Wed, 05 Feb 2020 17:19:07 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_legales.html
// Temps de compilation total: 0.679 ms
//

function html_53971655da0732707580e7847dea1f19($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_editer formulaire_editer_infos_legales formulaire_editer_infos_legales_' .
table_valeur(@$Pile[0], (string)'who', null) .
' ajax' .
(($t1 = strval(table_valeur(@$Pile[0], (string)'who', null)))!=='' ?
		(' ' . $t1) :
		'') .
'\' id=\'formulaire_editer_proprietaire_config_infos_legales\'>
	<br class=\'bugajaxie\' />
	<h3 class=\'titrem\'>' .
_T('spipproprio:legal_legend') .
'</h3>
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
	<form method=\'post\' action=\'' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'\'><div>
		
		' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>' .
'<p class=\'explication\'>' .
_T('spipproprio:legal_comment') .
'</p>
	<ul class="editer-groupe">
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'capital_social'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="capital_social">' .
_T('spipproprio:capital_social_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'legal_capital')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'capital_social\' id=\'capital_social\' value="' .
table_valeur(@$Pile[0], (string)'capital_social', null) .
'" />
			<span class=\'explication\'>' .
_T('spipproprio:capital_social_comment') .
'</span>
		</li>

		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'legal_forme'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="legal_forme">' .
_T('spipproprio:forme_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'legal_forme')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'legal_forme\' id=\'legal_forme\' value="' .
table_valeur(@$Pile[0], (string)'legal_forme', null) .
'" />
			<span class=\'explication\'>' .
_T('spipproprio:forme_comment') .
'</span>
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'legal_abbrev'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="legal_abbrev">' .
_T('spipproprio:abbreviation_genre_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'legal_abbrev')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'legal_abbrev\' id=\'legal_abbrev\' value="' .
table_valeur(@$Pile[0], (string)'legal_abbrev', null) .
'" style="width: 100px; display: inline; float: left;" />
			<select class="fondl" name="legal_genre" id="legal_genre" style="width: 100px; margin-left: 1em;">
				<option value="fem"' .
(((table_valeur(@$Pile[0], (string)'legal_genre', null) == 'fem'))  ?
		(' ' . ' selected="selected"') :
		'') .
'>' .
_T('spipproprio:feminin') .
'</option>
				<option value="hom"' .
(((table_valeur(@$Pile[0], (string)'legal_genre', null) == 'hom'))  ?
		(' ' . ' selected="selected"') :
		'') .
'>' .
_T('spipproprio:masculin') .
'</option>
			</select>
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'enregistrement_organisme'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="enregistrement_organisme">' .
_T('spipproprio:enregistrement_organisme_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'enregistrement_organisme')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'enregistrement_organisme\' id=\'enregistrement_organisme\' value="' .
table_valeur(@$Pile[0], (string)'enregistrement_organisme', null) .
'" />
			<span class=\'explication\'>' .
_T('spipproprio:enregistrement_organisme_comment') .
'</span>
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'enregistrement_abbrev'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="enregistrement_abbrev">' .
_T('spipproprio:abbreviation_genre_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'enregistrement_abbrev')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'enregistrement_abbrev\' id=\'enregistrement_abbrev\' value="' .
table_valeur(@$Pile[0], (string)'enregistrement_abbrev', null) .
'" style="width: 100px; display: inline; float: left;" />
			<select class="fondl" name="enregistrement_genre" id="enregistrement_genre" style="width: 100px; margin-left: 1em;">
				<option value="fem"' .
(((table_valeur(@$Pile[0], (string)'enregistrement_genre', null) == 'fem'))  ?
		(' ' . ' selected="selected"') :
		'') .
'>' .
_T('spipproprio:feminin') .
'</option>
				<option value="hom"' .
(((table_valeur(@$Pile[0], (string)'enregistrement_genre', null) == 'hom'))  ?
		(' ' . ' selected="selected"') :
		'') .
'>' .
_T('spipproprio:masculin') .
'</option>
			</select>
		</li>

		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'enregistrement_numero'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="enregistrement_numero">' .
_T('spipproprio:enregistrement_numero_label') .
'&nbsp;:</label>
			' .
recuperer_fond( 'formulaires/inc-numero_enregistrement' , array_merge($Pile[0],array('type_enregistrement' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'proposer_enregistrement', null),true)) )), array('compil'=>array('../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_legales.html','html_53971655da0732707580e7847dea1f19','',46,$GLOBALS['spip_lang'])), _request('connect')) .
'
		</li>

	</ul>
	  ' .
'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'submit\' value=\'' .
_T('public|spip|ecrire:bouton_enregistrer') .
'\' /></p>
	</div></form>
</div>');

	return analyse_resultat_skel('html_53971655da0732707580e7847dea1f19', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_legales.html');
}
?>