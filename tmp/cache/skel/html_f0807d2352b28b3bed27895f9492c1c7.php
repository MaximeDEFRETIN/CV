<?php

/*
 * Squelette : ../plugins/auto/info_spip/v0.11.1/prive/objets/contenu/info_config.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Wed, 05 Feb 2020 16:19:23 GMT
 * Boucles :   _module_info
 */ 

function BOUCLE_module_infohtml_f0807d2352b28b3bed27895f9492c1c7(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts((include_spip('inc/config')?lire_config('info_spip/modules',null,false):'')));
	$command['sourcemode'] = 'table';
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
		array('../plugins/auto/info_spip/v0.11.1/prive/objets/contenu/info_config.html','html_f0807d2352b28b3bed27895f9492c1c7','_module_info',38,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
((find_in_path(concat('infos_spip/html/',interdire_scripts($Pile[$SP]['valeur']),'.html')))  ?
		(' ' . (	'
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'infos_spip/html/' .
		interdire_scripts($Pile[$SP]['valeur']))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/info_spip/v0.11.1/prive/objets/contenu/info_config.html\',\'html_f0807d2352b28b3bed27895f9492c1c7\',\'\',40,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		''));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_module_info @ ../plugins/auto/info_spip/v0.11.1/prive/objets/contenu/info_config.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/info_spip/v0.11.1/prive/objets/contenu/info_config.html
// Temps de compilation total: 1.710 ms
//

function html_f0807d2352b28b3bed27895f9492c1c7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))))!=='' ?
		((	'<div class="champ contenu_nom_site">
	<div class="label visible">' .
	_T('info_spip:nom_site_label') .
	'</div>
	<div dir=\'' .
	lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
	'\' class=\'nom_site span\'>') . $t1 . '</div>
</div>') :
		'') .
'

' .
(($t1 = strval(spip_version()))!=='' ?
		((	'<div class="champ contenu_logiciel">
	<div class="label visible">' .
	_T('info_spip:logiciel_label') .
	'</div>
	<div dir=\'' .
	lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
	'\' class=\'logiciel span\'>SPIP ') . $t1 . '</div>
</div>') :
		'') .
'

' .
(($t1 = strval(interdire_scripts((((include_spip('inc/config')?lire_config('info_spip/type_site',null,false):'')) ?' ' :''))))!=='' ?
		($t1 . (	'
<div class="champ contenu_type_site">
	<div class="label visible">' .
	_T('info_spip:type_site_label') .
	'</div>
	<div dir=\'' .
	lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
	'\' class=\'type_site span\'>' .
	_T(concat('info_spip:type_site_',interdire_scripts((include_spip('inc/config')?lire_config('info_spip/type_site',null,false):'')))) .
	'</div>
</div>')) :
		'') .
'

' .
(($t1 = strval(date('Y-m-d H:i:s',interdire_scripts(filemtime(eval('return '.'_FILE_CONNECT'.';'))))))!=='' ?
		((	'<div class="champ contenu_date_creation">
	<div class="label visible">' .
	_T('info_spip:date_creation_label') .
	'</div>
	<div dir=\'' .
	lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
	'\' class=\'date_creation span\'>') . $t1 . '</div>
</div>') :
		'') .
'

' .
(($t1 = strval(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))))!=='' ?
		((	'<div class="champ contenu_fo_url">
	<div class="label visible">' .
	_T('info_spip:fo_url_label') .
	'</div>
	<div dir=\'' .
	lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
	'\' class=\'fo_url span\'>') . $t1 . '</div>
</div>') :
		'') .
'

' .
(($t1 = strval(interdire_scripts((include_spip('inc/config')?lire_config('info_spip/bo_url',null,false):''))))!=='' ?
		((	'<div class="champ contenu_bo_url">
	<div class="label visible">' .
	_T('info_spip:bo_url_label') .
	'</div>
	<div dir=\'' .
	lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
	'\' class=\'fo_url span\'>') . $t1 . '</div>
</div>') :
		'') .
'

' .
(($t1 = strval(interdire_scripts($GLOBALS['meta']['charset'])))!=='' ?
		((	'<div class="champ contenu_charset">
	<div class="label visible">' .
	_T('info_spip:charset_label') .
	'</div>
	<div dir=\'' .
	lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
	'\' class=\'charset span\'>') . $t1 . '</div>
</div>') :
		'') .
'

<!-- Informations complémentaires qui peuvent être ajoutées par des modules -->
' .
BOUCLE_module_infohtml_f0807d2352b28b3bed27895f9492c1c7($Cache, $Pile, $doublons, $Numrows, $SP) .
'

');

	return analyse_resultat_skel('html_f0807d2352b28b3bed27895f9492c1c7', $Cache, $page, '../plugins/auto/info_spip/v0.11.1/prive/objets/contenu/info_config.html');
}
?>