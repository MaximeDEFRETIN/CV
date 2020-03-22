<?php

/*
 * Squelette : ../plugins/auto/info_spip/v0.11.1/infos_spip/html/extensions_php.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Wed, 05 Feb 2020 16:19:23 GMT
 * Boucles :   _extensions
 */ 

function BOUCLE_extensionshtml_0d91dab0a4405174e5e8f3313266df28(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(lister_extensions_php(''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_extensions';
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
		array('../plugins/auto/info_spip/v0.11.1/infos_spip/html/extensions_php.html','html_0d91dab0a4405174e5e8f3313266df28','_extensions',24,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_extensions']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t1 = (
'<span class="item">' .
interdire_scripts(trim(safehtml($Pile[$SP]['valeur']))) .
'</span>');
		$t0 .= ((strlen($t1) && strlen($t0)) ? ', ' : '') . $t1;
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_extensions @ ../plugins/auto/info_spip/v0.11.1/infos_spip/html/extensions_php.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/info_spip/v0.11.1/infos_spip/html/extensions_php.html
// Temps de compilation total: 0.979 ms
//

function html_0d91dab0a4405174e5e8f3313266df28($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

<div class="fieldset php_fieldset" id="' .
replace(array_pop(filtre_explode_dist('../plugins/auto/info_spip/v0.11.1/infos_spip/html/extensions_php.html','/')),'.html','') .
'">
	<h3 class="legend titrem">' .
_T('info_spip:php_fieldset_label') .
'</h3>
</div>

' .
(($t1 = strval(interdire_scripts(eval('return '.'phpversion()'.';'))))!=='' ?
		((	'<div class="champ contenu_php_version">
	<div class="label visible">' .
	_T('info_spip:php_version_label') .
	'</div>
	<div dir=\'' .
	lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
	'\' class=\'php_version span\'>') . $t1 . '</div>
</div>') :
		'') .
'

' .
(($t1 = strval(interdire_scripts(eval('return '.'ini_get(\'memory_limit\')'.';'))))!=='' ?
		((	'<div class="champ contenu_php_memory">
	<div class="label visible">' .
	_T('info_spip:php_memory_label') .
	'</div>
	<div dir=\'' .
	lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
	'\' class=\'php_memory span\'>') . $t1 . '</div>
</div>') :
		'') .
'

' .
(($t1 = strval(interdire_scripts(eval('return '.'date_default_timezone_get()'.';'))))!=='' ?
		((	'<div class="champ contenu_php_timezone">
	<div class="label visible">' .
	_T('info_spip:php_timezone_label') .
	'</div>
	<div dir=\'' .
	lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
	'\' class=\'php_timezone span\'>') . $t1 . '</div>
</div>') :
		'') .
'

' .
(($t1 = BOUCLE_extensionshtml_0d91dab0a4405174e5e8f3313266df28($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<!-- ' .
		_T('info_spip:extensions_php_nom') .
		' -->
<div class="fieldset extensions_php_fieldset">
	<h3 class="legend titrem">' .
		singulier_ou_pluriel($Numrows['_extensions']['total'],_T('info_spip:info_1_extension_php'),_T('info_spip:info_nb_extensions_php')) .
		'</h3>
</div>

<div class="champ contenu_extensions_php">
	<div class="label visible">' .
		_T('info_spip:extensions_php_label') .
		'</div>
	<div dir=\'' .
		lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
		'\' class=\'applicatif_port span\'>
	') . $t1 . '
	</div>
</div>
') :
		'') .
'

');

	return analyse_resultat_skel('html_0d91dab0a4405174e5e8f3313266df28', $Cache, $page, '../plugins/auto/info_spip/v0.11.1/infos_spip/html/extensions_php.html');
}
?>