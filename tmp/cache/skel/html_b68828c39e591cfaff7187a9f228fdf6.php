<?php

/*
 * Squelette : ../plugins/auto/agenda/v3.39.4/formulaires/configurer_agenda.html
 * Date :      Sun, 09 Feb 2020 10:04:14 GMT
 * Compile :   Thu, 27 Feb 2020 09:12:08 GMT
 * Boucles :   _dmois, _nmois
 */ 

function BOUCLE_dmoishtml_b68828c39e591cfaff7187a9f228fdf6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['enum'] = array();
	$command['enum'][] = '2';
	$command['enum'][] = '12';

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_dmois';
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
		array('../plugins/auto/agenda/v3.39.4/formulaires/configurer_agenda.html','html_b68828c39e591cfaff7187a9f228fdf6','_dmois',132,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
										' .
vide($Pile['vars'][$_zzz=(string)'val'] = (	'debut_mois_' .
	interdire_scripts(safehtml($Pile[$SP]['valeur'])))) .
'<option value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_mois_passe'),array('mois' => ucfirst(_T(concat('date_mois_',interdire_scripts(safehtml($Pile[$SP]['valeur']))))))) .
'</option>
									');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_dmois @ ../plugins/auto/agenda/v3.39.4/formulaires/configurer_agenda.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_nmoishtml_b68828c39e591cfaff7187a9f228fdf6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['enum'] = array();
	$command['enum'][] = '1';
	$command['enum'][] = '12';

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_nmois';
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
		array('../plugins/auto/agenda/v3.39.4/formulaires/configurer_agenda.html','html_b68828c39e591cfaff7187a9f228fdf6','_nmois',143,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
										' .
vide($Pile['vars'][$_zzz=(string)'val'] = interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
'<option value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>' .
singulier_ou_pluriel(table_valeur($Pile["vars"], (string)'val', null),'agenda:info_1_mois','agenda:info_nb_mois') .
'</option>
									');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_nmois @ ../plugins/auto/agenda/v3.39.4/formulaires/configurer_agenda.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/agenda/v3.39.4/formulaires/configurer_agenda.html
// Temps de compilation total: 4.069 ms
//

function html_b68828c39e591cfaff7187a9f228fdf6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="ajax formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">
	<h3 class="titrem">' .
_T('configureragenda:titre_configuration') .
'</h3>
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
vide($Pile['vars'][$_zzz=(string)'fl'] = 'configureragenda') .
'<ul class="editer-groupe">
			' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'synchro_statut') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = '1') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer pleine_largeur editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'
				<input type="hidden" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="0" />
				' .
vide($Pile['vars'][$_zzz=(string)'val'] = '1') .
'<div class="choix">
					<input type="checkbox" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="checkbox" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(((table_valeur($Pile["vars"], (string)'val', null) == interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true))))  ?
		(' ' . 'checked="checked"') :
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
vide($Pile['vars'][$_zzz=(string)'name'] = 'notifier_insitituer') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = '0') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer pleine_largeur editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'
				<input type="hidden" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="0" />
				' .
vide($Pile['vars'][$_zzz=(string)'val'] = '1') .
'<div class="choix">
					<input type="checkbox" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="checkbox" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(((table_valeur($Pile["vars"], (string)'val', null) == interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true))))  ?
		(' ' . 'checked="checked"') :
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
vide($Pile['vars'][$_zzz=(string)'name'] = 'effacer_evenements_passes') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = '0') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer pleine_largeur editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'
				<input type="hidden" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="0" />
				' .
vide($Pile['vars'][$_zzz=(string)'val'] = '1') .
'<div class="choix">
					<input type="checkbox" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="checkbox" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(((table_valeur($Pile["vars"], (string)'val', null) == interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true))))  ?
		(' ' . 'checked="checked"') :
		'') .
' />
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'">' .
_T('configureragenda:legend_nettoyage_agenda') .
' (' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null))) .
')</label>
					<ul class="editer-groupe editer-suite">
						' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'delai_effacer_evenements_passes') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = '365') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer long_label editer_' .
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
'<input type="text" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="text" value="' .
interdire_scripts(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null))) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" ' .
(((' ') AND (table_valeur($Pile["vars"], (string)'obli', null)))  ?
		(' ' . 'required=\'required\'') :
		'') .
'/>
						</li>
						<li class="pleine-largeur">
							<div class="notice">' .
_T('configureragenda:avertissement_effacer_evenements') .
'</div>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<fieldset>
			<h3 class="titrem">' .
_T('configureragenda:titre_affichage_agenda_public') .
'</h3>
			<ul class="editer-groupe">
				<!--EX01-->
				' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'titre') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = _T('agenda:titre_sur_l_agenda')) .
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
'<input type="text" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="text" value="' .
interdire_scripts(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null))) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" ' .
(((' ') AND (table_valeur($Pile["vars"], (string)'obli', null)))  ?
		(' ' . 'required=\'required\'') :
		'') .
'/>
				</li>
				' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'descriptif') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = '') .
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
'<textarea name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="textarea">
						' .
interdire_scripts(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null))) .
'</textarea>
				</li>
				' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'articlepardefaut') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = '') .
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
'<input type="text" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="text" value="' .
interdire_scripts(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null))) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" ' .
(((' ') AND (table_valeur($Pile["vars"], (string)'obli', null)))  ?
		(' ' . 'required=\'required\'') :
		'') .
'/>
				</li>
				' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'url_evenement') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = 'evenement') .
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
vide($Pile['vars'][$_zzz=(string)'val'] = 'evenement') .
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
vide($Pile['vars'][$_zzz=(string)'val'] = 'article') .
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
(!(defined('_AGENDA_INSERT_HEAD_CSS'))  ?
		(' ' . (	'
				' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'insert_head_css') .
	vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
	vide($Pile['vars'][$_zzz=(string)'defaut'] = '1') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
					<span class=\'erreur_message\'>' . $t2 . '</span>
					') :
			'') .
	'
					<input type="hidden" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" value="0" />
					' .
	vide($Pile['vars'][$_zzz=(string)'val'] = '1') .
	'<div class="choix">
						<input type="checkbox" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" class="checkbox" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_' .
	table_valeur($Pile["vars"], (string)'val', null) .
	'" value="' .
	table_valeur($Pile["vars"], (string)'val', null) .
	'"' .
	(((table_valeur($Pile["vars"], (string)'val', null) == interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true))))  ?
			(' ' . 'checked="checked"') :
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
				')) :
		'') .
'
				<li class="fieldset sub-fieldset">
					<fieldset>
						<legend>' .
_T('configureragenda:legend_presentation_agenda') .
'</legend>
						<ul class="editer-groupe">
							' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'affichage_debut') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = '') .
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
vide($Pile['vars'][$_zzz=(string)'val'] = 'date_jour') .
'<option value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_',table_valeur($Pile["vars"], (string)'val', null))) .
'</option>
									' .
vide($Pile['vars'][$_zzz=(string)'val'] = 'date_veille') .
'<option value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_',table_valeur($Pile["vars"], (string)'val', null))) .
'</option>
									' .
vide($Pile['vars'][$_zzz=(string)'val'] = 'debut_semaine') .
'<option value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_',table_valeur($Pile["vars"], (string)'val', null))) .
'</option>
									' .
vide($Pile['vars'][$_zzz=(string)'val'] = 'debut_semaine_prec') .
'<option value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_',table_valeur($Pile["vars"], (string)'val', null))) .
'</option>
									' .
vide($Pile['vars'][$_zzz=(string)'val'] = 'debut_mois') .
'<option value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_',table_valeur($Pile["vars"], (string)'val', null))) .
'</option>
									' .
vide($Pile['vars'][$_zzz=(string)'val'] = 'debut_mois_prec') .
'<option value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_',table_valeur($Pile["vars"], (string)'val', null))) .
'</option>
									' .
vide($Pile['vars'][$_zzz=(string)'val'] = 'debut_mois_1') .
'<option value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>' .
_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_',table_valeur($Pile["vars"], (string)'val', null))) .
'</option>
									' .
BOUCLE_dmoishtml_b68828c39e591cfaff7187a9f228fdf6($Cache, $Pile, $doublons, $Numrows, $SP) .
'
								</select>
							</li>
							' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'affichage_duree') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = '1') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer long_label editer_' .
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
BOUCLE_nmoishtml_b68828c39e591cfaff7187a9f228fdf6($Cache, $Pile, $doublons, $Numrows, $SP) .
'
								</select>
							</li>
						</ul>
					</fieldset>
				</li>

			</ul>
		</fieldset>

	  ' .
'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span>
			<input type=\'submit\' name="cancel" class=\'submit\' value=\'' .
attribut_html(_T('public|spip|ecrire:bouton_annuler')) .
'\' />
			<input type=\'submit\' class=\'submit\' value=\'' .
attribut_html(_T('public|spip|ecrire:bouton_enregistrer')) .
'\' /></p>
	</div></form>
</div>
<style>
	.sub-fieldset {
		margin-left: 10em !important;
	}
	.choix .editer-suite {
		margin-left: 8.5em !important;
		display: none;
	}
	input.checkbox:checked+label+.editer-suite {
		display: block !important;
	}
</style>');

	return analyse_resultat_skel('html_b68828c39e591cfaff7187a9f228fdf6', $Cache, $page, '../plugins/auto/agenda/v3.39.4/formulaires/configurer_agenda.html');
}
?>