<?php

/*
 * Squelette : ../plugins/auto/info_spip/v0.11.1/prive/squelettes/navigation/info_config.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Wed, 05 Feb 2020 16:19:23 GMT
 * Boucles :   _module_info
 */ 

function BOUCLE_module_infohtml_1cf72e604620685e2e0c101824d3455b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(lister_noisettes_info_spip('html'));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_module_info';
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
		array('../plugins/auto/info_spip/v0.11.1/prive/squelettes/navigation/info_config.html','html_1cf72e604620685e2e0c101824d3455b','_module_info',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
(($t1 = strval(interdire_scripts(((in_array(safehtml($Pile[$SP]['valeur']),table_valeur($Pile["vars"], (string)'info_config', null))) ?' ' :''))))!=='' ?
		($t1 . (	'
	<li class="item ' .
	interdire_scripts(safehtml($Pile[$SP]['valeur'])) .
	'"><a href="#' .
	interdire_scripts(safehtml($Pile[$SP]['valeur'])) .
	'" class="bando2_' .
	interdire_scripts(safehtml($Pile[$SP]['valeur'])) .
	'">' .
	interdire_scripts(nommer_noisettes_info_spip(safehtml($Pile[$SP]['valeur']))) .
	'</a></li>')) :
		'') .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_module_info @ ../plugins/auto/info_spip/v0.11.1/prive/squelettes/navigation/info_config.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/info_spip/v0.11.1/prive/squelettes/navigation/info_config.html
// Temps de compilation total: 0.806 ms
//

function html_1cf72e604620685e2e0c101824d3455b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'info_config'] = interdire_scripts((include_spip('inc/config')?lire_config('info_spip/modules',null,false):''))) .
'
' .
(($t1 = BOUCLE_module_infohtml_1cf72e604620685e2e0c101824d3455b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
	<div class="navigation">
		<ul class="liste_items sous_navigation">
	' . $t1 . '
		</ul>
	</div>
') :
		'') .
'
');

	return analyse_resultat_skel('html_1cf72e604620685e2e0c101824d3455b', $Cache, $page, '../plugins/auto/info_spip/v0.11.1/prive/squelettes/navigation/info_config.html');
}
?>