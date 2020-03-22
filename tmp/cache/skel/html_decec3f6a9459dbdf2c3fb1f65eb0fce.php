<?php

/*
 * Squelette : ../plugins/auto/info_spip/v0.11.1/infos_spip/html/apache_modules.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Wed, 05 Feb 2020 16:19:23 GMT
 * Boucles :   _modules
 */ 

function BOUCLE_moduleshtml_decec3f6a9459dbdf2c3fb1f65eb0fce(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(lister_modules_apache(''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_modules';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array('valeur');
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
		array('../plugins/auto/info_spip/v0.11.1/infos_spip/html/apache_modules.html','html_decec3f6a9459dbdf2c3fb1f65eb0fce','_modules',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_modules']['total'] = @intval($iter->count());
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
		spip_log(intval(1000*$timer)."ms BOUCLE_modules @ ../plugins/auto/info_spip/v0.11.1/infos_spip/html/apache_modules.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/info_spip/v0.11.1/infos_spip/html/apache_modules.html
// Temps de compilation total: 0.994 ms
//

function html_decec3f6a9459dbdf2c3fb1f65eb0fce($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
(($t1 = BOUCLE_moduleshtml_decec3f6a9459dbdf2c3fb1f65eb0fce($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<!-- ' .
		_T('info_spip:apache_modules_nom') .
		' -->
<div class="fieldset apache_modules_fieldset" id="' .
		replace(array_pop(filtre_explode_dist('../plugins/auto/info_spip/v0.11.1/infos_spip/html/apache_modules.html','/')),'.html','') .
		'">
	<h3 class="legend titrem">' .
		singulier_ou_pluriel($Numrows['_modules']['total'],_T('info_spip:info_1_module_apache'),_T('info_spip:info_nb_modules_apache')) .
		'</h3>
</div>

<div class="champ contenu_apache_modules">
	<div class="label visible">' .
		_T('info_spip:apache_modules_label') .
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

	return analyse_resultat_skel('html_decec3f6a9459dbdf2c3fb1f65eb0fce', $Cache, $page, '../plugins/auto/info_spip/v0.11.1/infos_spip/html/apache_modules.html');
}
?>