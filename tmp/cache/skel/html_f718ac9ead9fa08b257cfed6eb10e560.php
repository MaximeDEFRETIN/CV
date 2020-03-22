<?php

/*
 * Squelette : ../plugins-dist/urls_etendues/formulaires/configurer_urls_arbo.html
 * Date :      Mon, 10 Feb 2020 16:50:09 GMT
 * Compile :   Sun, 08 Mar 2020 10:09:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/urls_etendues/formulaires/configurer_urls_arbo.html
// Temps de compilation total: 0.991 ms
//

function html_f718ac9ead9fa08b257cfed6eb10e560($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">
<h3 class=\'titrem\'>' .
_T('urls:titre_type_arbo') .
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
	' .
vide($Pile['vars'][$_zzz=(string)'fl'] = 'urls') .
'<form method=\'post\' action=\'' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'\'><div>
		
		' .
	'<div>' .
	form_hidden(@$Pile[0]['action']) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>
		<div class="editer-groupe">
			' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'URLS_ARBO_MIN') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<div class="editer long_label editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">' .
_T('urls:label_urls_nb_min_car') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'<input type="text" class="text" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), (defined('_URLS_ARBO_MIN')?constant('_URLS_ARBO_MIN'):''))) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'"/>
				<p class="explication">' .
_T('urls:texte_urls_nb_min_car') .
'</p>
			</div>
			' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'URLS_ARBO_MAX') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<div class="editer long_label editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">' .
_T('urls:label_urls_nb_max_car') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'<input type="text" class="text" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), (defined('_URLS_ARBO_MAX')?constant('_URLS_ARBO_MAX'):''))) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'"/>
				<p class="explication">' .
_T('urls:texte_urls_nb_max_car') .
'</p>
			</div>
			' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'url_arbo_sep_id') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<div class="editer long_label editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">' .
_T('urls:label_url_sep_id') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'<input type="text" class="text" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), (defined('_url_arbo_sep_id')?constant('_url_arbo_sep_id'):''))) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'"/>
			</div>
			' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'url_arbo_minuscules') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<div class="editer long_label editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'
				' .
vide($Pile['vars'][$_zzz=(string)'val'] = '1') .
'<div class="choix">
					<input type="radio" class="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), (defined('_url_arbo_minuscules')?constant('_url_arbo_minuscules'):'')),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' />
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'">' .
_T('urls:label_url_minuscules_1') .
'</label>
				</div>
				' .
vide($Pile['vars'][$_zzz=(string)'val'] = '0') .
'<div class="choix">
					<input type="radio" class="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), (defined('_url_arbo_minuscules')?constant('_url_arbo_minuscules'):'')),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' />
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'">' .
_T('urls:label_url_minuscules_0') .
'</label>
				</div>
			</div>
		</div>
	  ' .
'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'submit\' value=\'' .
_T('public|spip|ecrire:bouton_enregistrer') .
'\' /></p>
	</div></form>
</div>
');

	return analyse_resultat_skel('html_f718ac9ead9fa08b257cfed6eb10e560', $Cache, $page, '../plugins-dist/urls_etendues/formulaires/configurer_urls_arbo.html');
}
?>