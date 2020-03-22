<?php

/*
 * Squelette : ../plugins/auto/agenda/v3.39.4/prive/objets/editer/rubrique-agenda.html
 * Date :      Sun, 09 Feb 2020 10:04:14 GMT
 * Compile :   Thu, 27 Feb 2020 09:07:58 GMT
 * Boucles :   _hasrubriquesagenda
 */ 

function BOUCLE_hasrubriquesagendahtml_796dd4e3716cdb575107463ea94f5b04(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_hasrubriquesagenda';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'rubriques.agenda', "1"));
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/agenda/v3.39.4/prive/objets/editer/rubrique-agenda.html','html_796dd4e3716cdb575107463ea94f5b04','_hasrubriquesagenda',13,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		' .
vide($Pile['vars'][$_zzz=(string)'parent_agenda'] = interdire_scripts(agenda_rubrique_actif_explicite(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true)))) .
(((table_valeur($Pile["vars"], (string)'parent_agenda', null)) AND ((((table_valeur($Pile["vars"], (string)'parent_agenda', null) == interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true)))) ?'' :' ')))  ?
		(' ' . (	'
			<p class="explication">' .
	_T('agenda:rubrique_dans_une_rubrique_mode_agenda') .
	'</p>
		')) :
		'') .
'
		');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_hasrubriquesagenda @ ../plugins/auto/agenda/v3.39.4/prive/objets/editer/rubrique-agenda.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/agenda/v3.39.4/prive/objets/editer/rubrique-agenda.html
// Temps de compilation total: 1.611 ms
//

function html_796dd4e3716cdb575107463ea94f5b04($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="editer-groupe">
	' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'agenda') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = '') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<div class="editer editer_' .
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
		<div class="choix">
			' .
vide($Pile['vars'][$_zzz=(string)'val'] = '0') .
'<input type="hidden" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'" />
			' .
vide($Pile['vars'][$_zzz=(string)'val'] = '1') .
'<input type="checkbox" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="checkbox" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'" aria-describedby="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_explication" ' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null)),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' />
			<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'">' .
_T('agenda:rubrique_activer_agenda') .
'</label>
		</div>
		' .
(($t1 = BOUCLE_hasrubriquesagendahtml_796dd4e3716cdb575107463ea94f5b04($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
		<p class="explication">' .
	_T('agenda:aucune_rubrique_mode_agenda') .
	'</p>
		'))) .
'
	</div>
</div>
');

	return analyse_resultat_skel('html_796dd4e3716cdb575107463ea94f5b04', $Cache, $page, '../plugins/auto/agenda/v3.39.4/prive/objets/editer/rubrique-agenda.html');
}
?>