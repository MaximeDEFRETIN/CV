<?php

/*
 * Squelette : ../plugins/auto/calendriermini/v2.4.1/formulaires/configurer_calendriermini.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Thu, 27 Feb 2020 09:12:08 GMT
 * Boucles :   _jours
 */ 

function BOUCLE_jourshtml_92bd9fec6df1c47136ec9e0100e6bdba(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['enum'] = array();
	$command['enum'][] = '1';
	$command['enum'][] = '7';

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_jours';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins/auto/calendriermini/v2.4.1/formulaires/configurer_calendriermini.html','html_92bd9fec6df1c47136ec9e0100e6bdba','_jours',16,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				' .
vide($Pile['vars'][$_zzz=(string)'val'] = interdire_scripts(moins(safehtml($Pile[$SP]['valeur']),'1'))) .
'<option value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>' .
_T(concat('date_jour_',interdire_scripts(safehtml($Pile[$SP]['valeur'])))) .
'</option>
				');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_jours @ ../plugins/auto/calendriermini/v2.4.1/formulaires/configurer_calendriermini.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/calendriermini/v2.4.1/formulaires/configurer_calendriermini.html
// Temps de compilation total: 1.701 ms
//

function html_92bd9fec6df1c47136ec9e0100e6bdba($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'">
<h3 class="titrem">' .
_T('minical:config_titre_calendriermini') .
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

<form method="post" action="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'"><div>
	' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div><ul>
		' .
vide($Pile['vars'][$_zzz=(string)'fl'] = 'minical') .
vide($Pile['vars'][$_zzz=(string)'name'] = 'jour1') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = '1') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer editer_' .
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
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null))) .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="select" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
				' .
BOUCLE_jourshtml_92bd9fec6df1c47136ec9e0100e6bdba($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			</select>
		</li>
		' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'format_jour') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = 'initiale') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
			<label>' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null))) .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'
			' .
vide($Pile['vars'][$_zzz=(string)'val'] = 'initiale') .
'<div class="choix">
				<input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="radio" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' />
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'">' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_',table_valeur($Pile["vars"], (string)'val', null))) .
' (' .
_T('public|spip|ecrire:date_jour_1_initiale') .
' ' .
_T('public|spip|ecrire:date_jour_2_initiale') .
' ' .
_T('public|spip|ecrire:date_jour_3_initiale') .
' ' .
_T('public|spip|ecrire:date_jour_4_initiale') .
'
					' .
_T('public|spip|ecrire:date_jour_5_initiale') .
' ' .
_T('public|spip|ecrire:date_jour_6_initiale') .
' ' .
_T('public|spip|ecrire:date_jour_7_initiale') .
')</label>
			</div>
			' .
vide($Pile['vars'][$_zzz=(string)'val'] = 'abbr') .
'<div class="choix">
				<input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="radio" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' />
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'">' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_',table_valeur($Pile["vars"], (string)'val', null))) .
' (' .
_T('public|spip|ecrire:date_jour_1_abbr') .
' ' .
_T('public|spip|ecrire:date_jour_2_abbr') .
' ' .
_T('public|spip|ecrire:date_jour_3_abbr') .
' ' .
_T('public|spip|ecrire:date_jour_4_abbr') .
'
									' .
_T('public|spip|ecrire:date_jour_5_abbr') .
' ' .
_T('public|spip|ecrire:date_jour_6_abbr') .
' ' .
_T('public|spip|ecrire:date_jour_7_abbr') .
')</label>
			</div>
		</li>
		' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'affichage_hors_mois') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = '1') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
			<label>' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null))) .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'
			' .
vide($Pile['vars'][$_zzz=(string)'val'] = '1') .
'<div class="choix">
				<input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="radio" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' />
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'">' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_',table_valeur($Pile["vars"], (string)'val', null))) .
'</label>
			</div>
			' .
vide($Pile['vars'][$_zzz=(string)'val'] = '0') .
'<div class="choix">
				<input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="radio" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' />
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'">' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_',table_valeur($Pile["vars"], (string)'val', null))) .
'</label>
			</div>
		</li>
		' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'changement_rapide') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = '1') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
			<label>' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null))) .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'
			' .
vide($Pile['vars'][$_zzz=(string)'val'] = '1') .
'<div class="choix">
				<input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="radio" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' />
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'">' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_',table_valeur($Pile["vars"], (string)'val', null))) .
'</label>
			</div>
			' .
vide($Pile['vars'][$_zzz=(string)'val'] = '0') .
'<div class="choix">
				<input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="radio" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' />
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'">' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_',table_valeur($Pile["vars"], (string)'val', null))) .
'</label>
			</div>
		</li>


	</ul>

	<p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span>
	<input type=\'submit\' class=\'submit\' value=\'' .
_T('public|spip|ecrire:bouton_enregistrer') .
'\' /></p>
</div></form>
</div>');

	return analyse_resultat_skel('html_92bd9fec6df1c47136ec9e0100e6bdba', $Cache, $page, '../plugins/auto/calendriermini/v2.4.1/formulaires/configurer_calendriermini.html');
}
?>