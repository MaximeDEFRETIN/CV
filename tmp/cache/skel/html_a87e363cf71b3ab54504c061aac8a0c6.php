<?php

/*
 * Squelette : ../plugins-dist/plan/prive/squelettes/inclure/plan-rubriques.html
 * Date :      Mon, 10 Feb 2020 16:50:21 GMT
 * Compile :   Thu, 27 Feb 2020 09:07:26 GMT
 * Boucles :   _objets, _lister, _rubriques
 */ 

function BOUCLE_objetshtml_a87e363cf71b3ab54504c061aac8a0c6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(plan_lister_objets_rubrique(''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_objets';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		"env");
		$command['orderby'] = array('cle');
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
		array('../plugins-dist/plan/prive/squelettes/inclure/plan-rubriques.html','html_a87e363cf71b3ab54504c061aac8a0c6','_objets',20,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
						' .
(($t1 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)) ?'' :' ')) OR (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'objet', null),true) == interdire_scripts(safehtml($Pile[$SP]['valeur'])))))) ?' ' :''))))!=='' ?
		($t1 . (	'
							' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'prive/squelettes/inclure/plan-' .
		interdire_scripts(safehtml($Pile[$SP]['valeur'])))) . ', array_merge('.var_export($Pile[0],1).',array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP-2]['id_rubrique']) . ',
	\'lister\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'lister', null)) . ',
	\'conteneur\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'conteneur', null)) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/plan/prive/squelettes/inclure/plan-rubriques.html\',\'html_a87e363cf71b3ab54504c061aac8a0c6\',\'\',22,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
						')) :
		'') .
'
					');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_objets @ ../plugins-dist/plan/prive/squelettes/inclure/plan-rubriques.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_listerhtml_a87e363cf71b3ab54504c061aac8a0c6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((in_any(entites_html(table_valeur(@$Pile[0], (string)'lister', null),true),array('rubrique', 'tout'))) ?' ' :''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_lister';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
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
		"CONDITION",
		$command,
		array('../plugins-dist/plan/prive/squelettes/inclure/plan-rubriques.html','html_a87e363cf71b3ab54504c061aac8a0c6','_lister',19,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					' .
BOUCLE_objetshtml_a87e363cf71b3ab54504c061aac8a0c6($Cache, $Pile, $doublons, $Numrows, $SP) .
'
					' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/plan-rubriques') . ', array_merge('.var_export($Pile[0],1).',array(\'id_parent\' => ' . argumenter_squelette($Pile[$SP-1]['id_rubrique']) . ',
	\'id_rubrique\' => ' . argumenter_squelette('') . ',
	\'lister\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'lister', null)) . ',
	\'conteneur\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'conteneur', null)) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/plan/prive/squelettes/inclure/plan-rubriques.html\',\'html_a87e363cf71b3ab54504c061aac8a0c6\',\'\',26,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
				');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_lister @ ../plugins-dist/plan/prive/squelettes/inclure/plan-rubriques.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_rubriqueshtml_a87e363cf71b3ab54504c061aac8a0c6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_parent']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array((!(is_array(@$Pile[0]['id_parent'])?count(@$Pile[0]['id_parent']):strlen(@$Pile[0]['id_parent'])) ? '' : ((is_array(@$Pile[0]['id_parent'])) ? sql_in('rubriques.id_parent',sql_quote($in)) : 
			array('=', 'rubriques.id_parent', sql_quote(@$Pile[0]['id_parent'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('rubriques.id_rubrique',sql_quote($in1)) : 
			array('=', 'rubriques.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL AUTO_INCREMENT')))), 
			array('REGEXP', 'rubriques.statut', "'.*'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/plan/prive/squelettes/inclure/plan-rubriques.html','html_a87e363cf71b3ab54504c061aac8a0c6','_rubriques',5,$GLOBALS['spip_lang'])
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
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'conteneur', null),true) == 'non')) ?'' :' '))))!=='' ?
		($t1 . (	'
			<li id="rubrique-' .
	$Pile[$SP]['id_rubrique'] .
	'"
				class="item' .
	(($t2 = strval(interdire_scripts(((in_any(entites_html(table_valeur(@$Pile[0], (string)'lister', null),true),array('rubrique', 'tout'))) ?'' :' '))))!=='' ?
			(' ' . $t2 . 'jstree-closed') :
			'') .
	'"
				data-objet=\'rubrique\'>
				<a
					href="' .
	generer_url_entite($Pile[$SP]['id_rubrique'],'rubrique') .
	'"
					' .
	(($t2 = strval(interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'lang', null),true) == spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']))) ?'' :' ') ? spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']):''))))!=='' ?
			('hreflang="' . $t2 . '"') :
			'') .
	'
					title="' .
	(($t2 = strval(_T(objet_info('rubrique','texte_objet'))))!=='' ?
			($t2 . (	' ' .
		$Pile[$SP]['id_rubrique'])) :
			'') .
	'">
						<strong>' .
	interdire_scripts(((($a = couper(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'100')) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre'))) .
	'</strong>
				</a>
')) :
		'') .
'
				' .
BOUCLE_listerhtml_a87e363cf71b3ab54504c061aac8a0c6($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'conteneur', null),true) == 'non')) ?'' :' '))))!=='' ?
		($t1 . ' </li> ') :
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
		spip_log(intval(1000*$timer)."ms BOUCLE_rubriques @ ../plugins-dist/plan/prive/squelettes/inclure/plan-rubriques.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/plan/prive/squelettes/inclure/plan-rubriques.html
// Temps de compilation total: 11.955 ms
//

function html_a87e363cf71b3ab54504c061aac8a0c6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars'][$_zzz=(string)'lister'] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'lister', null),true) == 'rubrique') ? '':interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lister', null),true))))) .
vide($Pile['vars'][$_zzz=(string)'conteneur'] = interdire_scripts((in_any(entites_html(table_valeur(@$Pile[0], (string)'lister', null),true),array('tout', 'rubrique')) ? 'oui':'non'))) .
(($t1 = BOUCLE_rubriqueshtml_a87e363cf71b3ab54504c061aac8a0c6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'conteneur', null),true) == 'non')) ?'' :' '))))!=='' ?
				($t3 . ' <ul class="menu-items rubriques"> ') :
				'') .
		'
		') . $t1 . (	'
' .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'conteneur', null),true) == 'non')) ?'' :' '))))!=='' ?
				($t3 . ' </ul> ') :
				'') .
		'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_a87e363cf71b3ab54504c061aac8a0c6', $Cache, $page, '../plugins-dist/plan/prive/squelettes/inclure/plan-rubriques.html');
}
?>