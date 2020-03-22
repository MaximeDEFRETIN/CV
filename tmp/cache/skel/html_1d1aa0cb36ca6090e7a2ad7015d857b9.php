<?php

/*
 * Squelette : ../plugins/auto/agenda/v3.39.4/formulaires/migrer_agenda.html
 * Date :      Sun, 09 Feb 2020 10:04:14 GMT
 * Compile :   Thu, 27 Feb 2020 09:12:08 GMT
 * Boucles :   _gr
 */ 

function BOUCLE_grhtml_1d1aa0cb36ca6090e7a2ad7015d857b9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true));

	if (!isset($command['table'])) {
		$command['table'] = 'groupes_mots';
		$command['id'] = '_gr';
		$command['from'] = array('groupes_mots' => 'spip_groupes_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+groupes_mots.titre AS num",
		"groupes_mots.titre",
		"groupes_mots.id_groupe");
		$command['orderby'] = array('num', 'groupes_mots.titre');
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
		"SQL",
		$command,
		array('../plugins/auto/agenda/v3.39.4/formulaires/migrer_agenda.html','html_1d1aa0cb36ca6090e7a2ad7015d857b9','_gr',78,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:info_numero_abbreviation');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				' .
vide($Pile['vars'][$_zzz=(string)'val'] = $Pile[$SP]['id_groupe']) .
'<div class="choix">
					<input type="checkbox" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
interdire_scripts(eval('return '.'chr(91)'.';')) .
interdire_scripts(eval('return '.'chr(93)'.';')) .
'" class="checkbox" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
((in_any(table_valeur($Pile["vars"], (string)'val', null),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true))))  ?
		(' ' . 'checked="checked"') :
		'') .
' />
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
' (' .
$l1 .
' ' .
$Pile[$SP]['id_groupe'] .
')</label>
				</div>
				');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_gr @ ../plugins/auto/agenda/v3.39.4/formulaires/migrer_agenda.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/agenda/v3.39.4/formulaires/migrer_agenda.html
// Temps de compilation total: 3.078 ms
//

function html_1d1aa0cb36ca6090e7a2ad7015d857b9($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">
	<h3 class="titrem">' .
_T('migreragenda:titre_migrer_agenda') .
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
	'</div>' .
	vide($Pile['vars'][$_zzz=(string)'fl'] = 'migreragenda') .
	'<p class="explication">' .
	_T('migreragenda:explication_migration_agenda_article_1') .
	'</p>
		<p class="explication">' .
	_T('migreragenda:explication_migration_agenda_article_2') .
	'</p>
		<ul class="editer-groupe">
			' .
	(($t2 = strval(filtre_chercher_rubrique_dist('','0',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_parent', null),true)),'article','0','0','0','form_simple')))!=='' ?
			((	'<li class="editer editer_parent' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'id_parent'))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
				<label for="id_parent">' .
		_T('migreragenda:label_rubrique_source') .
		'</label>' .
		(($t3 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'id_parent')))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		'
				') . $t2 . '
	    </li>') :
			'') .
	'
			' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'toute_la_branche') .
	vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
	vide($Pile['vars'][$_zzz=(string)'defaut'] = '') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer pleine_largeur editer_' .
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
				' .
	vide($Pile['vars'][$_zzz=(string)'val'] = 'oui') .
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
	vide($Pile['vars'][$_zzz=(string)'name'] = 'champ_date_debut') .
	vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
	vide($Pile['vars'][$_zzz=(string)'defaut'] = 'date') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer long_label editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
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
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<select name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" class="select" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">
					' .
	vide($Pile['vars'][$_zzz=(string)'val'] = 'date') .
	'<option value="' .
	table_valeur($Pile["vars"], (string)'val', null) .
	'"' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
			($t2 . 'selected="selected"') :
			'') .
	'>' .
	_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_champ_',table_valeur($Pile["vars"], (string)'val', null))) .
	'</option>
					' .
	vide($Pile['vars'][$_zzz=(string)'val'] = 'date_redac') .
	'<option value="' .
	table_valeur($Pile["vars"], (string)'val', null) .
	'"' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
			($t2 . 'selected="selected"') :
			'') .
	'>' .
	_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_champ_',table_valeur($Pile["vars"], (string)'val', null))) .
	'</option>
				</select>
			</li>
			' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'champ_date_fin') .
	vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
	vide($Pile['vars'][$_zzz=(string)'defaut'] = 'date_redac') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer long_label editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
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
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<select name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" class="select" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">
					' .
	vide($Pile['vars'][$_zzz=(string)'val'] = 'date') .
	'<option value="' .
	table_valeur($Pile["vars"], (string)'val', null) .
	'"' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
			($t2 . 'selected="selected"') :
			'') .
	'>' .
	_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_champ_',table_valeur($Pile["vars"], (string)'val', null))) .
	'</option>
					' .
	vide($Pile['vars'][$_zzz=(string)'val'] = 'date_redac') .
	'<option value="' .
	table_valeur($Pile["vars"], (string)'val', null) .
	'"' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
			($t2 . 'selected="selected"') :
			'') .
	'>' .
	_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_champ_',table_valeur($Pile["vars"], (string)'val', null))) .
	'</option>
				</select>
			</li>

			' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'horaire') .
	vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
	vide($Pile['vars'][$_zzz=(string)'defaut'] = 'oui') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer long_label editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<label>' .
	_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null))) .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'
				' .
	vide($Pile['vars'][$_zzz=(string)'val'] = 'oui') .
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
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
			($t2 . 'checked="checked"') :
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
	vide($Pile['vars'][$_zzz=(string)'val'] = 'non') .
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
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
			($t2 . 'checked="checked"') :
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
	vide($Pile['vars'][$_zzz=(string)'name'] = 'groupes_mots') .
	vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
	vide($Pile['vars'][$_zzz=(string)'defaut'] = '') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer long_label editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<label>' .
	_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null))) .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'
	')) :
		'') .
'
				' .
BOUCLE_grhtml_1d1aa0cb36ca6090e7a2ad7015d857b9($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
			</li>
		</ul>
		<p class="explication">' .
	_T('migreragenda:explication_migration_agenda_article_fin') .
	'</p>
		' .
	'
    <!--extra-->
    <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span>
		<input type=\'submit\' class=\'submit\' value=\'' .
	attribut_html(_T('migreragenda:bouton_migrer')) .
	'\' /></p>

		' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'confirmer')))!=='' ?
			('<div class="notice">
			 ' . $t2 . (	'
		</div>
		<p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span>
<input type=\'submit\' class=\'submit\' name=\'confirm\' value=\'' .
		attribut_html(_T('migreragenda:bouton_lancer_migration')) .
		'\' /></p>
		')) :
			'') .
	'
	</div></form>
	')) :
		'') .
'
</div>');

	return analyse_resultat_skel('html_1d1aa0cb36ca6090e7a2ad7015d857b9', $Cache, $page, '../plugins/auto/agenda/v3.39.4/formulaires/migrer_agenda.html');
}
?>