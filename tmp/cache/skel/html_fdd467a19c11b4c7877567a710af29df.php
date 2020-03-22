<?php

/*
 * Squelette : ../plugins/auto/pages/v1.4.0/formulaires/editer_identifiant_page.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Sun, 08 Mar 2020 10:05:11 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/pages/v1.4.0/formulaires/editer_identifiant_page.html
// Temps de compilation total: 1.717 ms
//

function html_fdd467a19c11b4c7877567a710af29df($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_dater formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">
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
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
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
	'</div>')) :
		'') .
'
		<ul class="editer-groupe">
			' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'champ_page') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
'<li class="editer editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				<label for="champ_' .
table_valeur($Pile["vars"], (string)'name', null) .
'">' .
_T('pages:label_champ_page') .
'</label>
				' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
				<span' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'class="affiche"') :
		'') .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?' ' :''))))!=='' ?
		($t1 . 'style="display:none;"') :
		'') .
'>
					' .
interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) OR (is_string($a) AND strlen($a))) ? $a : (	'<em>' .
	_T('pagesbis:info_aucun_champ_page') .
	'</em>'))) .
'
				</span>
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
				<span class="toggle_box_link"' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?' ' :''))))!=='' ?
			($t2 . 'style="display:none;"') :
			'') .
	'>
					&#91;<a href="#"
						onclick="var f=jQuery(this).parents(\'form\').eq(0);f.find(\'li .input\').show(\'fast\').siblings(\'span\').hide(\'fast\');f.find(\'.boutons\').show(\'fast\');f.find(\'input.page\').eq(0).focus();return false;">' .
	_T('public|spip|ecrire:bouton_changer') .
	'</a>&#93;
				</span>
				<span class="input"' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?'' :' '))))!=='' ?
			($t2 . 'style="display:none;"') :
			'') .
	'>
					<input type="text" class="text page" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="champ_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
	'" size="40"/>
				</span>
	')) :
		'') .
'
			</li>
		</ul>
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
	' .
	'
	<!--extra-->
	<p class=\'boutons\'' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?'' :' '))))!=='' ?
			($t2 . 'style="display:none;"') :
			'') .
	'>
			<span class=\'image_loading\'>&nbsp;</span>
			<input type=\'submit\' class=\'over\' name=\'changer\' value=\'' .
	_T('public|spip|ecrire:bouton_changer') .
	'\' />
			<input type=\'submit\' class=\'submit\' name=\'annuler\' value=\'' .
	_T('public|spip|ecrire:bouton_annuler') .
	'\' />
			<input type=\'submit\' class=\'submit\' name=\'changer\' value=\'' .
	_T('public|spip|ecrire:bouton_changer') .
	'\' />
		</p>
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_fdd467a19c11b4c7877567a710af29df', $Cache, $page, '../plugins/auto/pages/v1.4.0/formulaires/editer_identifiant_page.html');
}
?>