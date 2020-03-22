<?php

/*
 * Squelette : squelettes/sitemap.xml.html
 * Date :      Mon, 02 Mar 2020 13:57:09 GMT
 * Compile :   Thu, 05 Mar 2020 14:45:16 GMT
 * Boucles :   _r, _a_trad, _a, _b, _objets
 */ 

function BOUCLE_rhtml_d30808ae9e5ff2cc3e749e0d5da48e83(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'annee', null),true)) ?'' :' '));

	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_r';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.date",
		"rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array('rubriques.date DESC');
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''));
		$command['join'] = array();
		$command['limit'] = '0,1000';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sitemap.xml.html','html_d30808ae9e5ff2cc3e749e0d5da48e83','_r',32,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
<url>
	' .
(($t1 = strval(url_absolue(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))))))!=='' ?
		('<loc>' . $t1 . '</loc>') :
		'') .
'
</url>
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_r @ squelettes/sitemap.xml.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_a_tradhtml_d30808ae9e5ff2cc3e749e0d5da48e83(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_a_trad';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.lang",
		"articles.id_article",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
			array('OR', 
			array('AND', 
			array('=', 'articles.id_trad', 0), 
			array('=', 'articles.id_article', sql_quote($Pile[$SP]['id_article'], '', ''))), 
			array('AND', 
			array('>', 'articles.id_trad', 0), 
			array('=', 'articles.id_trad', sql_quote($Pile[$SP]['id_trad'], '', '')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sitemap.xml.html','html_d30808ae9e5ff2cc3e749e0d5da48e83','_a_trad',43,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		<xhtml:link rel="alternate" hreflang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" href="' .
url_absolue(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true)))) .
'" />
	');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_a_trad @ squelettes/sitemap.xml.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ahtml_d30808ae9e5ff2cc3e749e0d5da48e83(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['annee']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_a';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_trad",
		"articles.id_article",
		"articles.date_modif",
		"articles.date",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array('articles.date_modif DESC', 'articles.date DESC');
		$command['join'] = array();
		$command['limit'] = '0,2000';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), (!(is_array(@$Pile[0]['annee'])?count(@$Pile[0]['annee']):strlen(@$Pile[0]['annee'])) ? '' : ((is_array(@$Pile[0]['annee'])) ? sql_in('YEAR(articles.date)',sql_quote($in)) : 
			array('=', 'YEAR(articles.date)', sql_quote(@$Pile[0]['annee'], '','datetime NOT NULL DEFAULT \'0000-00-00 00:00:00\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sitemap.xml.html','html_d30808ae9e5ff2cc3e749e0d5da48e83','_a',40,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
<url>
	' .
(($t1 = strval(url_absolue(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))))))!=='' ?
		('<loc>' . $t1 . '</loc>') :
		'') .
'
	' .
BOUCLE_a_tradhtml_d30808ae9e5ff2cc3e749e0d5da48e83($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	' .
(($Pile[$SP]['date_modif'] > table_valeur($Pile["vars"], (string)'recent', null)) ? (($t2 = strval(date_iso($Pile[$SP]['date_modif'])))!=='' ?
			('<lastmod>' . $t2 . '</lastmod>') :
			''):'') .
'
</url>
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_a @ squelettes/sitemap.xml.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_bhtml_d30808ae9e5ff2cc3e749e0d5da48e83(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['annee']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'breves';
		$command['id'] = '_b';
		$command['from'] = array('breves' => 'spip_breves');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("breves.date_heure",
		"breves.id_breve",
		"breves.lang",
		"breves.titre");
		$command['orderby'] = array('breves.date_heure DESC');
		$command['join'] = array();
		$command['limit'] = '0,1000';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('breves.statut','publie,prop','publie',''), (!(is_array(@$Pile[0]['annee'])?count(@$Pile[0]['annee']):strlen(@$Pile[0]['annee'])) ? '' : ((is_array(@$Pile[0]['annee'])) ? sql_in('YEAR(breves.date_heure)',sql_quote($in)) : 
			array('=', 'YEAR(breves.date_heure)', sql_quote(@$Pile[0]['annee'], '','datetime NOT NULL DEFAULT \'0000-00-00 00:00:00\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sitemap.xml.html','html_d30808ae9e5ff2cc3e749e0d5da48e83','_b',52,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (($t1 = strval(url_absolue(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_breve'], 'breve', '', '', true))))))!=='' ?
		('
<url><loc>' . $t1 . '</loc></url>') :
		'');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_b @ squelettes/sitemap.xml.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_objetshtml_d30808ae9e5ff2cc3e749e0d5da48e83(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(lister_tables_objets_sql(''));

	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'annee', null),true)) ?'' :' '));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_objets';
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
		array('squelettes/sitemap.xml.html','html_d30808ae9e5ff2cc3e749e0d5da48e83','_objets',56,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
vide($Pile['vars'][$_zzz=(string)'fond'] = concat('sitemap-',interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'table_objet'))))) .
((trouver_fond(table_valeur($Pile["vars"], (string)'fond', null)))  ?
		(' ' . recuperer_fond( table_valeur($Pile["vars"], (string)'fond', null) , array(), array('etoile'=>true,'compil'=>array('squelettes/sitemap.xml.html','html_d30808ae9e5ff2cc3e749e0d5da48e83','_objets',58,$GLOBALS['spip_lang'])), _request('connect'))) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_objets @ squelettes/sitemap.xml.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/sitemap.xml.html
// Temps de compilation total: 8.178 ms
//

function html_d30808ae9e5ff2cc3e749e0d5da48e83($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header(' . _q('Content-Type: text/xml; charset=utf-8') . '); ?'.'><?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">


<url>
	<loc>' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/</loc>
	<changefreq>hourly</changefreq>
</url>


' .
BOUCLE_rhtml_d30808ae9e5ff2cc3e749e0d5da48e83($Cache, $Pile, $doublons, $Numrows, $SP) .
'


' .
vide($Pile['vars'][$_zzz=(string)'recent'] = date('Y-m-d H:i:s',strtotime('-1 day'))) .
'
' .
BOUCLE_ahtml_d30808ae9e5ff2cc3e749e0d5da48e83($Cache, $Pile, $doublons, $Numrows, $SP) .
'


' .
BOUCLE_bhtml_d30808ae9e5ff2cc3e749e0d5da48e83($Cache, $Pile, $doublons, $Numrows, $SP) .
'


' .
BOUCLE_objetshtml_d30808ae9e5ff2cc3e749e0d5da48e83($Cache, $Pile, $doublons, $Numrows, $SP) .
'

</urlset>');

	return analyse_resultat_skel('html_d30808ae9e5ff2cc3e749e0d5da48e83', $Cache, $page, 'squelettes/sitemap.xml.html');
}
?>