<?php

/*
 * Squelette : plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Mon, 02 Mar 2020 14:03:20 GMT
 * Boucles :   _normaliser_auteurs, _normaliser_mots, _normaliser_logos, _auteurs_dublincore, _mots_dublincore, _dublincore, _logos_opengraph, _auteurs_opengraph, _mots_opengraph, _article_opengraph, _opengraph, _images_twitter, _twitter
 */ 

function BOUCLE_normaliser_auteurshtml_7ecb170505bba13505effb8ef97a498b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(interdire_scripts(array_filter((is_array(entites_html(table_valeur(@$Pile[0], (string)'auteurs', null),true)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'auteurs', null),true)):interdire_scripts(filtre_explode_dist(entites_html(table_valeur(@$Pile[0], (string)'auteurs', null),true),','))))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_normaliser_auteurs';
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
		array('plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html','html_7ecb170505bba13505effb8ef97a498b','_normaliser_auteurs',36,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
vide($Pile['vars'][$_zzz=(string)'auteurs'] = filtre_push(table_valeur($Pile["vars"], (string)'auteurs', null),interdire_scripts(textebrut(supprimer_tags(html_entity_decode(trim(safehtml($Pile[$SP]['valeur'])))))))));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_normaliser_auteurs @ plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_normaliser_motshtml_7ecb170505bba13505effb8ef97a498b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(interdire_scripts(array_filter((is_array(entites_html(table_valeur(@$Pile[0], (string)'mots', null),true)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'mots', null),true)):interdire_scripts(filtre_explode_dist(entites_html(table_valeur(@$Pile[0], (string)'mots', null),true),','))))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_normaliser_mots';
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
		array('plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html','html_7ecb170505bba13505effb8ef97a498b','_normaliser_mots',43,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
vide($Pile['vars'][$_zzz=(string)'mots'] = filtre_push(table_valeur($Pile["vars"], (string)'mots', null),interdire_scripts(textebrut(supprimer_tags(html_entity_decode(trim(safehtml($Pile[$SP]['valeur'])))))))));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_normaliser_mots @ plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_normaliser_logoshtml_7ecb170505bba13505effb8ef97a498b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(interdire_scripts(array_filter((is_array(entites_html(table_valeur(@$Pile[0], (string)'logos', null),true)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'logos', null),true)):interdire_scripts(filtre_explode_dist(entites_html(table_valeur(@$Pile[0], (string)'logos', null),true),','))))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_normaliser_logos';
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
		array('plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html','html_7ecb170505bba13505effb8ef97a498b','_normaliser_logos',50,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts(array_filter((is_array(safehtml($Pile[$SP]['valeur'])) ? array('url' => interdire_scripts(supprimer_timestamp(safehtml(table_valeur($Pile[$SP]['valeur'], 'url')))), 'alt' => interdire_scripts(textebrut(supprimer_tags(trim(safehtml(table_valeur($Pile[$SP]['valeur'], 'alt'))))))):array('url' => interdire_scripts(supprimer_timestamp(safehtml($Pile[$SP]['valeur'])))))))) .
((find_in_path(table_valeur($Pile["vars"], (string)'valeur/url', null)))  ?
		(' ' . (	'
' .
	vide($Pile['vars'][$_zzz=(string)'logos'] = filtre_push(table_valeur($Pile["vars"], (string)'logos', null),table_valeur($Pile["vars"], (string)'valeur', null))))) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_normaliser_logos @ plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_auteurs_dublincorehtml_7ecb170505bba13505effb8ef97a498b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(table_valeur($Pile["vars"], (string)'auteurs', null));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_auteurs_dublincore';
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
		array('plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html','html_7ecb170505bba13505effb8ef97a498b','_auteurs_dublincore',94,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
(($t1 = strval(interdire_scripts(attribut_html(safehtml($Pile[$SP]['valeur'])))))!=='' ?
		('<meta name="DC.Creator" content="' . $t1 . '" />') :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_auteurs_dublincore @ plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_mots_dublincorehtml_7ecb170505bba13505effb8ef97a498b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(table_valeur($Pile["vars"], (string)'mots', null));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_mots_dublincore';
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
		array('plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html','html_7ecb170505bba13505effb8ef97a498b','_mots_dublincore',97,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
(($t1 = strval(interdire_scripts(attribut_html(safehtml($Pile[$SP]['valeur'])))))!=='' ?
		('<meta name="DC.Subject" content="' . $t1 . '" />') :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_mots_dublincore @ plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_dublincorehtml_7ecb170505bba13505effb8ef97a498b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((include_spip('inc/config')?lire_config('metasplus/dublincore',null,false):''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_dublincore';
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
		array('plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html','html_7ecb170505bba13505effb8ef97a498b','_dublincore',80,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<!-- Dublin Core -->
<link rel="schema.DC" href="https://purl.org/dc/elements/1.1/" />
<link rel="schema.DCTERMS" href="https://purl.org/dc/terms/" />
<meta name="DC.Format" content="text/html" />
' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'dc-type', null)))!=='' ?
		('<meta name="DC.Type" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'lang', null)))!=='' ?
		('<meta name="DC.Language" scheme="rfc1766" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(attribut_html(table_valeur($Pile["vars"], (string)'titre', null))))!=='' ?
		((	'<meta name="DC.Title" lang="' .
	table_valeur($Pile["vars"], (string)'lang', null) .
	'" content="') . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(attribut_html(couper(table_valeur($Pile["vars"], (string)'desc', null),table_valeur($Pile["vars"], (string)'couper', null),'…'))))!=='' ?
		((	'<meta name="DC.Description.Abstract" lang="' .
	table_valeur($Pile["vars"], (string)'lang', null) .
	'" content="') . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(affdate(table_valeur($Pile["vars"], (string)'date', null),'Y-m-d')))!=='' ?
		('<meta name="DC.Date" scheme="DCTERMS.W3CDTF" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(affdate(table_valeur($Pile["vars"], (string)'maj', null),'Y-m-d')))!=='' ?
		('<meta name="DC.Date.Modified" scheme="DCTERMS.W3CDTF" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(url_absolue(table_valeur($Pile["vars"], (string)'url', null))))!=='' ?
		('<meta name="DC.Identifier" scheme="URI" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(attribut_html(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])))))!=='' ?
		('<meta name="DC.Publisher" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))))!=='' ?
		('<meta name="DC.Source" scheme="URI" content="' . $t1 . '" />') :
		'') .
'
' .
BOUCLE_auteurs_dublincorehtml_7ecb170505bba13505effb8ef97a498b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
BOUCLE_mots_dublincorehtml_7ecb170505bba13505effb8ef97a498b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_dublincore @ plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_logos_opengraphhtml_7ecb170505bba13505effb8ef97a498b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(table_valeur($Pile["vars"], (string)'logos', null));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_logos_opengraph';
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
		array('plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html','html_7ecb170505bba13505effb8ef97a498b','_logos_opengraph',126,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
vide($Pile['vars'][$_zzz=(string)'src'] = interdire_scripts(supprimer_timestamp(((($a = extraire_attribut(filtrer('image_graver', filtrer('image_reduire',filtrer('image_recadre',safehtml(table_valeur($Pile[$SP]['valeur'], 'url')),table_valeur($Pile["vars"], (string)'dimensions/opengraph', null),'-','focus'),table_valeur($Pile["vars"], (string)'largeur', null),table_valeur($Pile["vars"], (string)'hauteur', null))),'src')) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'url'))))))) .
((function_exists('finfo_file'))  ?
		(' ' . (	'
' .
	vide($Pile['vars'][$_zzz=(string)'finfo'] = interdire_scripts(finfo_open(eval('return '.'FILEINFO_MIME_TYPE'.';')))) .
	vide($Pile['vars'][$_zzz=(string)'mimetype'] = finfo_file(table_valeur($Pile["vars"], (string)'finfo', null),table_valeur($Pile["vars"], (string)'src', null))))) :
		'') .
'
' .
(($t1 = strval(url_absolue(table_valeur($Pile["vars"], (string)'src', null))))!=='' ?
		('<meta property="og:image" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(largeur(table_valeur($Pile["vars"], (string)'src', null))))!=='' ?
		('<meta property="og:image:width" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(hauteur(table_valeur($Pile["vars"], (string)'src', null))))!=='' ?
		('<meta property="og:image:height" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'mimetype', null)))!=='' ?
		('<meta property="og:image:type" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(attribut_html(couper(safehtml(table_valeur($Pile[$SP]['valeur'], 'alt')),'80')))))!=='' ?
		('<meta property="og:image:alt" content="' . $t1 . '" />') :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_logos_opengraph @ plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_auteurs_opengraphhtml_7ecb170505bba13505effb8ef97a498b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(table_valeur($Pile["vars"], (string)'auteurs', null));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_auteurs_opengraph';
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
		array('plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html','html_7ecb170505bba13505effb8ef97a498b','_auteurs_opengraph',145,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
(($t1 = strval(interdire_scripts(attribut_html(safehtml($Pile[$SP]['valeur'])))))!=='' ?
		('<meta property="article:author" content="' . $t1 . '" />') :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_auteurs_opengraph @ plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_mots_opengraphhtml_7ecb170505bba13505effb8ef97a498b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(table_valeur($Pile["vars"], (string)'mots', null));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_mots_opengraph';
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
		array('plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html','html_7ecb170505bba13505effb8ef97a498b','_mots_opengraph',148,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
(($t1 = strval(interdire_scripts(attribut_html(safehtml($Pile[$SP]['valeur'])))))!=='' ?
		('<meta property="article:tag" content="' . $t1 . '" />') :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_mots_opengraph @ plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_article_opengraphhtml_7ecb170505bba13505effb8ef97a498b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = (table_valeur($Pile["vars"], (string)'og-type', null) == 'article');

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_article_opengraph';
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
		array('plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html','html_7ecb170505bba13505effb8ef97a498b','_article_opengraph',142,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
(($t1 = strval(affdate(table_valeur($Pile["vars"], (string)'date', null),'Y-m-d')))!=='' ?
		('<meta property="article:published_time" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(affdate(table_valeur($Pile["vars"], (string)'maj', null),'Y-m-d')))!=='' ?
		('<meta property="article:modified_time" content="' . $t1 . '" />') :
		'') .
'
' .
BOUCLE_auteurs_opengraphhtml_7ecb170505bba13505effb8ef97a498b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
BOUCLE_mots_opengraphhtml_7ecb170505bba13505effb8ef97a498b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_article_opengraph @ plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_opengraphhtml_7ecb170505bba13505effb8ef97a498b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((include_spip('inc/config')?lire_config('metasplus/opengraph',null,false):''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_opengraph';
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
		array('plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html','html_7ecb170505bba13505effb8ef97a498b','_opengraph',113,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<!-- Open Graph -->
' .
((count(table_valeur($Pile["vars"], (string)'logos', null)))  ?
		(' ' . '
<meta property="og:rich_attachment" content="true" />
') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(attribut_html(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])))))!=='' ?
		('<meta property="og:site_name" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(attribut_html(table_valeur($Pile["vars"], (string)'og-type', null))))!=='' ?
		('<meta property="og:type" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(attribut_html(table_valeur($Pile["vars"], (string)'titre', null))))!=='' ?
		('<meta property="og:title" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'locale', null)))!=='' ?
		('<meta property="og:locale" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(url_absolue(table_valeur($Pile["vars"], (string)'url', null))))!=='' ?
		('<meta property="og:url" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(attribut_html(couper(table_valeur($Pile["vars"], (string)'desc', null),table_valeur($Pile["vars"], (string)'couper', null),'…'))))!=='' ?
		('<meta property="og:description" content="' . $t1 . '" />') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'largeur'] = table_valeur(filtre_explode_dist(table_valeur($Pile["vars"], (string)'dimensions/opengraph', null),':'),'0')) .
vide($Pile['vars'][$_zzz=(string)'hauteur'] = table_valeur(filtre_explode_dist(table_valeur($Pile["vars"], (string)'dimensions/opengraph', null),':'),'1')) .
BOUCLE_logos_opengraphhtml_7ecb170505bba13505effb8ef97a498b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
BOUCLE_article_opengraphhtml_7ecb170505bba13505effb8ef97a498b($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
(($t1 = strval(interdire_scripts((include_spip('inc/config')?lire_config('facebook/cle',null,false):''))))!=='' ?
		('<meta property="fb:app_id" content="' . $t1 . '" />') :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_opengraph @ plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_images_twitterhtml_7ecb170505bba13505effb8ef97a498b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(table_valeur($Pile["vars"], (string)'logos', null));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_images_twitter';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html','html_7ecb170505bba13505effb8ef97a498b','_images_twitter',175,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
vide($Pile['vars'][$_zzz=(string)'src'] = interdire_scripts(supprimer_timestamp(((($a = extraire_attribut(filtrer('image_graver', filtrer('image_reduire',filtrer('image_recadre',safehtml(table_valeur($Pile[$SP]['valeur'], 'url')),table_valeur($Pile["vars"], (string)'dimensions/twitter', null),'-','focus'),table_valeur($Pile["vars"], (string)'largeur', null),table_valeur($Pile["vars"], (string)'hauteur', null))),'src')) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'url'))))))) .
(($t1 = strval(url_absolue(table_valeur($Pile["vars"], (string)'src', null))))!=='' ?
		('<meta name="twitter:image" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(attribut_html(couper(safehtml(table_valeur($Pile[$SP]['valeur'], 'alt')),'80')))))!=='' ?
		('<meta property="twitter:image:alt" content="' . $t1 . '" />') :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_images_twitter @ plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_twitterhtml_7ecb170505bba13505effb8ef97a498b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((include_spip('inc/config')?lire_config('metasplus/twitter',null,false):''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_twitter';
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
		array('plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html','html_7ecb170505bba13505effb8ef97a498b','_twitter',166,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<!-- Twitter Card -->
<meta name="twitter:card" content="' .
(count(table_valeur($Pile["vars"], (string)'logos', null)) ? 'summary_large_image':'summary') .
'" />
' .
(($t1 = strval(attribut_html(table_valeur($Pile["vars"], (string)'titre', null))))!=='' ?
		('<meta name="twitter:title" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(attribut_html(couper(table_valeur($Pile["vars"], (string)'desc', null),table_valeur($Pile["vars"], (string)'couper', null),'…'))))!=='' ?
		('<meta name="twitter:description" content="' . $t1 . '" />') :
		'') .
'
<meta name="twitter:dnt" content="on" />
' .
(($t1 = strval(url_absolue(table_valeur($Pile["vars"], (string)'url', null))))!=='' ?
		('<meta name="twitter:url" content="' . $t1 . '" />') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'largeur'] = table_valeur(filtre_explode_dist(table_valeur($Pile["vars"], (string)'dimensions/twitter', null),':'),'0')) .
vide($Pile['vars'][$_zzz=(string)'hauteur'] = table_valeur(filtre_explode_dist(table_valeur($Pile["vars"], (string)'dimensions/twitter', null),':'),'1')) .
BOUCLE_images_twitterhtml_7ecb170505bba13505effb8ef97a498b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_twitter @ plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html
// Temps de compilation total: 5.021 ms
//

function html_7ecb170505bba13505effb8ef97a498b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
vide($Pile['vars'][$_zzz=(string)'titre'] = interdire_scripts(textebrut(supprimer_tags(html_entity_decode(trim(entites_html(table_valeur(@$Pile[0], (string)'titre', null),true))))))) .
vide($Pile['vars'][$_zzz=(string)'desc'] = interdire_scripts(textebrut(supprimer_tags(html_entity_decode(trim(entites_html(table_valeur(@$Pile[0], (string)'desc', null),true))))))) .
vide($Pile['vars'][$_zzz=(string)'url'] = interdire_scripts(trim(entites_html(table_valeur(@$Pile[0], (string)'url', null),true)))) .
vide($Pile['vars'][$_zzz=(string)'date'] = interdire_scripts(trim(entites_html(table_valeur(@$Pile[0], (string)'date', null),true)))) .
vide($Pile['vars'][$_zzz=(string)'maj'] = interdire_scripts(trim(entites_html(table_valeur(@$Pile[0], (string)'maj', null),true)))) .
vide($Pile['vars'][$_zzz=(string)'lang'] = interdire_scripts(trim(entites_html(table_valeur(@$Pile[0], (string)'langue', null),true)))) .
vide($Pile['vars'][$_zzz=(string)'og-type'] = interdire_scripts(trim(entites_html(table_valeur(@$Pile[0], (string)'og-type', null),true)))) .
vide($Pile['vars'][$_zzz=(string)'dc-type'] = interdire_scripts(trim(entites_html(table_valeur(@$Pile[0], (string)'dc-type', null),true)))) .
vide($Pile['vars'][$_zzz=(string)'territoire'] = interdire_scripts(trim(strtoupper(((entites_html(table_valeur(@$Pile[0], (string)'territoire', null),true) == 'en') ? 'uk':interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'territoire', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'langue', null),true))),true))))))) .
vide($Pile['vars'][$_zzz=(string)'locale'] = interdire_scripts(trim(concat(entites_html(table_valeur(@$Pile[0], (string)'langue', null),true),'_',table_valeur($Pile["vars"], (string)'territoire', null))))) .
vide($Pile['vars'][$_zzz=(string)'couper'] = '200') .
vide($Pile['vars'][$_zzz=(string)'dimensions'] = array('opengraph' => '1200:630', 'twitter' => '506:253')) .
'
' .
vide($Pile['vars'][$_zzz=(string)'auteurs'] = array()) .
BOUCLE_normaliser_auteurshtml_7ecb170505bba13505effb8ef97a498b($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
vide($Pile['vars'][$_zzz=(string)'mots'] = array()) .
BOUCLE_normaliser_motshtml_7ecb170505bba13505effb8ef97a498b($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
vide($Pile['vars'][$_zzz=(string)'logos'] = array()) .
BOUCLE_normaliser_logoshtml_7ecb170505bba13505effb8ef97a498b($Cache, $Pile, $doublons, $Numrows, $SP) .
'


' .
BOUCLE_dublincorehtml_7ecb170505bba13505effb8ef97a498b($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
BOUCLE_opengraphhtml_7ecb170505bba13505effb8ef97a498b($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
BOUCLE_twitterhtml_7ecb170505bba13505effb8ef97a498b($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
'<' . '?php header("X-Spip-Filtre: '.'trim' . '"); ?'.'>');

	return analyse_resultat_skel('html_7ecb170505bba13505effb8ef97a498b', $Cache, $page, 'plugins/auto/metasplus_v2/inclure/metasplus/inc-dist.html');
}
?>