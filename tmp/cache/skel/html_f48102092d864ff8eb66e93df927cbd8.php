<?php

/*
 * Squelette : ../plugins/auto/escal_V4/prive/squelettes/navigation/configurer_escal.html
 * Date :      Fri, 20 Dec 2019 11:26:32 GMT
 * Compile :   Thu, 27 Feb 2020 09:12:12 GMT
 * Boucles :   _navigation_cfg, _nav
 */ 

function BOUCLE_navigation_cfghtml_f48102092d864ff8eb66e93df927cbd8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(interdire_scripts(filtre_explode_dist(filtre_end(filtre_explode_dist(safehtml($Pile[$SP]['valeur']),'!')),':')));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_navigation_cfg';
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
		array('../plugins/auto/escal_V4/prive/squelettes/navigation/configurer_escal.html','html_f48102092d864ff8eb66e93df927cbd8','_navigation_cfg',12,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
        ' .
(($t1 = strval(lien_ou_expose(parametre_url(safehtml(generer_url_ecrire(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true)))),'cfg',interdire_scripts(trim(safehtml($Pile[$SP]['valeur'])))),_T(trim(concat('escal:cfg_page_',interdire_scripts(safehtml($Pile[$SP]['valeur']))))))))!=='' ?
		((	'<li class="item' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'cfg', null), 'accueil'),true) == interdire_scripts(trim(safehtml($Pile[$SP]['valeur']))))) ?' ' :''))))!=='' ?
			($t2 . 'on') :
			'') .
	'"  style="padding:2px 0 2px 10px;">
    ') . $t1 . '
</li>') :
		'') .
'
        ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_navigation_cfg @ ../plugins/auto/escal_V4/prive/squelettes/navigation/configurer_escal.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_navhtml_f48102092d864ff8eb66e93df927cbd8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(interdire_scripts(filtre_explode_dist(eval('return '.'_ESCAL_PAGES_CONFIG'.';'),'|')));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_nav';
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
		array('../plugins/auto/escal_V4/prive/squelettes/navigation/configurer_escal.html','html_f48102092d864ff8eb66e93df927cbd8','_nav',7,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<div class="liste">
' .
(($t1 = strval(interdire_scripts((((count(filtre_explode_dist(safehtml($Pile[$SP]['valeur']),'!')) > '1')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	(($t2 = strval(_T(trim(concat('escal:cfg_page_',interdire_scripts(filtre_reset(filtre_explode_dist(safehtml($Pile[$SP]['valeur']),'!'))))))))!=='' ?
			('<h5>' . $t2 . '</h5>') :
			''))) :
		'') .
'
<ul class="liste-items">
        ' .
BOUCLE_navigation_cfghtml_f48102092d864ff8eb66e93df927cbd8($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</ul>
</div>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_nav @ ../plugins/auto/escal_V4/prive/squelettes/navigation/configurer_escal.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/escal_V4/prive/squelettes/navigation/configurer_escal.html
// Temps de compilation total: 1.650 ms
//

function html_f48102092d864ff8eb66e93df927cbd8($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
_T('escal:doc_site_escal') .
'

<div class="sous_navigation">
' .
BOUCLE_navhtml_f48102092d864ff8eb66e93df927cbd8($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</div>');

	return analyse_resultat_skel('html_f48102092d864ff8eb66e93df927cbd8', $Cache, $page, '../plugins/auto/escal_V4/prive/squelettes/navigation/configurer_escal.html');
}
?>