<?php

/*
 * Squelette : squelettes/modeles/plan.html
 * Date :      Mon, 02 Mar 2020 13:57:23 GMT
 * Compile :   Sat, 14 Mar 2020 03:47:21 GMT
 * Boucles :   _articles_racine, _articles, _sous_rubriques, _rubriques, _breves, _sites, _secteurs
 */ 

function BOUCLE_articles_racinehtml_ca865bb3b60e67cef523310d0575c855(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_racine';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+articles.titre AS num",
		"articles.date",
		"articles.id_article",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('num', 'articles.date DESC');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')), ((isset($Pile[0]['id_rubrique'])?(is_array($Pile[0]['id_rubrique'])?count($Pile[0]['id_rubrique']):strlen($Pile[0]['id_rubrique'])):'') ? '' : 'articles.id_rubrique>0'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/modeles/plan.html','html_ca865bb3b60e67cef523310d0575c855','_articles_racine',10,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_articles_racine']['total'] = @intval($iter->count());
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	<li><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
	');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles_racine @ squelettes/modeles/plan.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_articleshtml_ca865bb3b60e67cef523310d0575c855(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+articles.titre AS num",
		"articles.date",
		"articles.id_article",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('num', 'articles.date DESC');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')), ((isset($Pile[0]['id_rubrique'])?(is_array($Pile[0]['id_rubrique'])?count($Pile[0]['id_rubrique']):strlen($Pile[0]['id_rubrique'])):'') ? '' : 'articles.id_rubrique>0'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/modeles/plan.html','html_ca865bb3b60e67cef523310d0575c855','_articles',25,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			<li><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
			');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles @ squelettes/modeles/plan.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_sous_rubriqueshtml_ca865bb3b60e67cef523310d0575c855(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_rubriques']) ? $Numrows['_rubriques'] : array());
	$t0 = (($t1 = BOUCLE_rubriqueshtml_ca865bb3b60e67cef523310d0575c855($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<ul class="spip">
	' . $t1 . '
</ul>
') :
		'');
	$Numrows['_rubriques'] = ($save_numrows);
	return $t0;
}


function BOUCLE_rubriqueshtml_ca865bb3b60e67cef523310d0575c855(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.date",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.date DESC');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/modeles/plan.html','html_ca865bb3b60e67cef523310d0575c855','_rubriques',19,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	<li>
		<strong><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></strong>
		
		' .
(($t1 = BOUCLE_articleshtml_ca865bb3b60e67cef523310d0575c855($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
		<ul class="spip">
			' . $t1 . '
		</ul>
		') :
		'') .
'
		
		' .
BOUCLE_sous_rubriqueshtml_ca865bb3b60e67cef523310d0575c855($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	</li>
	');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_rubriques @ squelettes/modeles/plan.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_breveshtml_ca865bb3b60e67cef523310d0575c855(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'breves';
		$command['id'] = '_breves';
		$command['from'] = array('breves' => 'spip_breves');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("breves.date_heure",
		"breves.id_breve",
		"breves.titre",
		"breves.lang");
		$command['orderby'] = array('breves.date_heure DESC');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('breves.statut','publie,prop','publie',''), 
			array('=', 'breves.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/modeles/plan.html','html_ca865bb3b60e67cef523310d0575c855','_breves',40,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	<li><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_breve'], 'breve', '', '', true))) .
'">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
	');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_breves @ squelettes/modeles/plan.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_siteshtml_ca865bb3b60e67cef523310d0575c855(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'syndic';
		$command['id'] = '_sites';
		$command['from'] = array('syndic' => 'spip_syndic');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("syndic.nom_site",
		"syndic.id_syndic",
		"syndic.url_site");
		$command['orderby'] = array('syndic.nom_site');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('syndic.statut','publie,prop','publie',''), 
			array('=', 'syndic.id_secteur', sql_quote($Pile[$SP]['id_secteur'], '','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/modeles/plan.html','html_ca865bb3b60e67cef523310d0575c855','_sites',50,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<li><a href="' .
generer_url_entite($Pile[$SP]['id_syndic'],'site','','',($connect ? $connect : NULL)) .
'">' .
interdire_scripts(typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0])) .
'</a></li>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_sites @ squelettes/modeles/plan.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_secteurshtml_ca865bb3b60e67cef523310d0575c855(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_secteurs';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.id_secteur",
		"0+rubriques.titre AS num",
		"rubriques.date",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.date DESC');
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', 0));
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
		array('squelettes/modeles/plan.html','html_ca865bb3b60e67cef523310d0575c855','_secteurs',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'

<h2>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h2>


' .
(($t1 = BOUCLE_articles_racinehtml_ca865bb3b60e67cef523310d0575c855($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<h3>' .
		singulier_ou_pluriel($Numrows['_articles_racine']['total'],'public:article','public:articles') .
		'</h3>
<ul class="spip">
	') . $t1 . '
</ul>
') :
		'') .
'

' .
(($t1 = BOUCLE_rubriqueshtml_ca865bb3b60e67cef523310d0575c855($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<ul class="spip">
	' . $t1 . '
</ul>
') :
		'') .
'


' .
(($t1 = BOUCLE_breveshtml_ca865bb3b60e67cef523310d0575c855($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<h3>' .
		_T('breves:breves') .
		'</h3>
<ul class="spip">
	') . $t1 . '
</ul>
') :
		'') .
'


' .
(($t1 = BOUCLE_siteshtml_ca865bb3b60e67cef523310d0575c855($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<h3>' .
		_T('public|spip|ecrire:sites_web') .
		'</h3>
<ul class="spip">
	') . $t1 . '
</ul>
') :
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
		spip_log(intval(1000*$timer)."ms BOUCLE_secteurs @ squelettes/modeles/plan.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/modeles/plan.html
// Temps de compilation total: 26.672 ms
//

function html_ca865bb3b60e67cef523310d0575c855($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
BOUCLE_secteurshtml_ca865bb3b60e67cef523310d0575c855($Cache, $Pile, $doublons, $Numrows, $SP));

	return analyse_resultat_skel('html_ca865bb3b60e67cef523310d0575c855', $Cache, $page, 'squelettes/modeles/plan.html');
}
?>