<?php

/*
 * Squelette : ../plugins/auto/agenda/v3.39.4/prive/objets/liste/evenements-post.html
 * Date :      Sun, 09 Feb 2020 10:04:14 GMT
 * Compile :   Thu, 27 Feb 2020 09:07:39 GMT
 * Boucles :   _last, _debut, _un
 */ 

function BOUCLE_lasthtml_d14d01eefe2542b5d2bb8e2609244610(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_article']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['id_mot']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = (@$Pile[0]['id_evenement_source']))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'evenements';
		$command['id'] = '_last';
		$command['from'] = array('evenements' => 'spip_evenements','L1' => 'spip_articles','L2' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array("evenements.id_evenement");
		$command['select'] = array("evenements.date_debut",
		"evenements.id_evenement");
		$command['orderby'] = array('evenements.date_debut DESC');
		$command['join'] = array('L1' => array('evenements','id_article'), 'L2' => array('evenements','id_objet','id_evenement','L2.objet='.sql_quote('evenement')));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('REGEXP', 'evenements.statut', "'.*'"), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : ((is_array(@$Pile[0]['id_article'])) ? sql_in('evenements.id_article',sql_quote($in)) : 
			array('=', 'evenements.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('L1.id_rubrique',sql_quote($in1)) : 
			array('=', 'L1.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_mot'])?count(@$Pile[0]['id_mot']):strlen(@$Pile[0]['id_mot'])) ? '' : ((is_array(@$Pile[0]['id_mot'])) ? sql_in('L2.id_mot',sql_quote($in2)) : 
			array('=', 'L2.id_mot', sql_quote(@$Pile[0]['id_mot'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_evenement_source'])?count(@$Pile[0]['id_evenement_source']):strlen(@$Pile[0]['id_evenement_source'])) ? '' : ((is_array(@$Pile[0]['id_evenement_source'])) ? sql_in('evenements.id_evenement_source',sql_quote($in3)) : 
			array('=', 'evenements.id_evenement_source', sql_quote(@$Pile[0]['id_evenement_source'], '','bigint(21) NOT NULL')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/agenda/v3.39.4/prive/objets/liste/evenements-post.html','html_d14d01eefe2542b5d2bb8e2609244610','_last',10,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .
vide($Pile['vars'][$_zzz=(string)'id_evenement'] = $Pile[$SP]['id_evenement']));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_last @ ../plugins/auto/agenda/v3.39.4/prive/objets/liste/evenements-post.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_debuthtml_d14d01eefe2542b5d2bb8e2609244610(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_article']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['id_mot']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = (@$Pile[0]['id_evenement_source']))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'evenements';
		$command['id'] = '_debut';
		$command['from'] = array('evenements' => 'spip_evenements','L1' => 'spip_articles','L2' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array("evenements.id_evenement");
		$command['select'] = array("evenements.date_debut",
		"evenements.id_evenement");
		$command['orderby'] = array('evenements.date_debut');
		$command['join'] = array('L1' => array('evenements','id_article'), 'L2' => array('evenements','id_objet','id_evenement','L2.objet='.sql_quote('evenement')));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('OR', 
			array('AND', 
			array('=', 'horaire', sql_quote('oui')), 
			array('>', 'evenements.date_debut', sql_quote(table_valeur($Pile["vars"], (string)'date_debut', null)))), 
			array('AND', 
			array('!=', 'horaire', sql_quote('oui')), 
			array('>', 'evenements.date_debut', sql_quote(date('Y-m-d 23:59:59', strtotime(table_valeur($Pile["vars"], (string)'date_debut', null))))))), 
			array('REGEXP', 'evenements.statut', "'.*'"), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : ((is_array(@$Pile[0]['id_article'])) ? sql_in('evenements.id_article',sql_quote($in)) : 
			array('=', 'evenements.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('L1.id_rubrique',sql_quote($in1)) : 
			array('=', 'L1.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_mot'])?count(@$Pile[0]['id_mot']):strlen(@$Pile[0]['id_mot'])) ? '' : ((is_array(@$Pile[0]['id_mot'])) ? sql_in('L2.id_mot',sql_quote($in2)) : 
			array('=', 'L2.id_mot', sql_quote(@$Pile[0]['id_mot'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_evenement_source'])?count(@$Pile[0]['id_evenement_source']):strlen(@$Pile[0]['id_evenement_source'])) ? '' : ((is_array(@$Pile[0]['id_evenement_source'])) ? sql_in('evenements.id_evenement_source',sql_quote($in3)) : 
			array('=', 'evenements.id_evenement_source', sql_quote(@$Pile[0]['id_evenement_source'], '','bigint(21) NOT NULL')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/agenda/v3.39.4/prive/objets/liste/evenements-post.html','html_d14d01eefe2542b5d2bb8e2609244610','_debut',7,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
vide($Pile['vars'][$_zzz=(string)'id_evenement'] = $Pile[$SP]['id_evenement']));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_debut @ ../plugins/auto/agenda/v3.39.4/prive/objets/liste/evenements-post.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_unhtml_d14d01eefe2542b5d2bb8e2609244610(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_article']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['id_mot']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = (@$Pile[0]['id_evenement_source']))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'evenements';
		$command['id'] = '_un';
		$command['from'] = array('evenements' => 'spip_evenements','L1' => 'spip_articles','L2' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array("evenements.id_evenement");
		$command['select'] = array("evenements.id_evenement");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('evenements','id_article'), 'L2' => array('evenements','id_objet','id_evenement','L2.objet='.sql_quote('evenement')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('REGEXP', 'evenements.statut', "'.*'"), 
			array('=', 'evenements.id_evenement', sql_quote(@$Pile[0]['id_evenement'], '','bigint(21) NOT NULL AUTO_INCREMENT')), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : ((is_array(@$Pile[0]['id_article'])) ? sql_in('evenements.id_article',sql_quote($in)) : 
			array('=', 'evenements.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('L1.id_rubrique',sql_quote($in1)) : 
			array('=', 'L1.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_mot'])?count(@$Pile[0]['id_mot']):strlen(@$Pile[0]['id_mot'])) ? '' : ((is_array(@$Pile[0]['id_mot'])) ? sql_in('L2.id_mot',sql_quote($in2)) : 
			array('=', 'L2.id_mot', sql_quote(@$Pile[0]['id_mot'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_evenement_source'])?count(@$Pile[0]['id_evenement_source']):strlen(@$Pile[0]['id_evenement_source'])) ? '' : ((is_array(@$Pile[0]['id_evenement_source'])) ? sql_in('evenements.id_evenement_source',sql_quote($in3)) : 
			array('=', 'evenements.id_evenement_source', sql_quote(@$Pile[0]['id_evenement_source'], '','bigint(21) NOT NULL')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/agenda/v3.39.4/prive/objets/liste/evenements-post.html','html_d14d01eefe2542b5d2bb8e2609244610','_un',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'

	' .
vide($Pile['vars'][$_zzz=(string)'id_evenement'] = $Pile[$SP]['id_evenement']));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_un @ ../plugins/auto/agenda/v3.39.4/prive/objets/liste/evenements-post.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/agenda/v3.39.4/prive/objets/liste/evenements-post.html
// Temps de compilation total: 1.431 ms
//

function html_d14d01eefe2542b5d2bb8e2609244610($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars'][$_zzz=(string)'date_debut'] = interdire_scripts(agenda_dateplus(affdate(entites_html(sinon(table_valeur(@$Pile[0], (string)'date_debut', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'date', null),true))),true),'Y-m-d 00:00:00'),'-1'))) .
(($t1 = BOUCLE_unhtml_d14d01eefe2542b5d2bb8e2609244610($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
	' .
	(($t2 = BOUCLE_debuthtml_d14d01eefe2542b5d2bb8e2609244610($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			$t2 :
			((	'
		' .
		BOUCLE_lasthtml_d14d01eefe2542b5d2bb8e2609244610($Cache, $Pile, $doublons, $Numrows, $SP) .
		'
	'))) .
	'
'))) .
'
' .
recuperer_fond( 'prive/objets/liste/evenements' , array_merge($Pile[0],array('debut_liste_evt' => interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'debut_liste_evt', null), (table_valeur($Pile["vars"], (string)'id_evenement', null) ? (	'@' .
			table_valeur($Pile["vars"], (string)'id_evenement', null)):'')),true)) ,
	'id_evenement' => interdire_scripts(eval('return '.'null'.';')) )), array('compil'=>array('../plugins/auto/agenda/v3.39.4/prive/objets/liste/evenements-post.html','html_d14d01eefe2542b5d2bb8e2609244610','',15,$GLOBALS['spip_lang'])), _request('connect')) .
'
');

	return analyse_resultat_skel('html_d14d01eefe2542b5d2bb8e2609244610', $Cache, $page, '../plugins/auto/agenda/v3.39.4/prive/objets/liste/evenements-post.html');
}
?>