<?php

/*
 * Squelette : ../plugins/auto/info_spip/v0.11.1/infos_spip/html/sgbd.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Wed, 05 Feb 2020 16:19:23 GMT
 * Boucles :   _espace_prive
 */ 

function BOUCLE_espace_privehtml_c539e58e0ae81eb0f8da61f1b0bbf9cf(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = (((table_valeur(@$Pile[0], (string)'exec', null) == 'info_config')) ?' ' :'');

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_espace_prive';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
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
		array('../plugins/auto/info_spip/v0.11.1/infos_spip/html/sgbd.html','html_c539e58e0ae81eb0f8da61f1b0bbf9cf','_espace_prive',4,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_espace_prive']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat('
', $Numrows['_espace_prive']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_espace_prive @ ../plugins/auto/info_spip/v0.11.1/infos_spip/html/sgbd.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/info_spip/v0.11.1/infos_spip/html/sgbd.html
// Temps de compilation total: 3.102 ms
//

function html_c539e58e0ae81eb0f8da61f1b0bbf9cf($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = BOUCLE_espace_privehtml_c539e58e0ae81eb0f8da61f1b0bbf9cf($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'
<!-- ' .
		_T('info_spip:sgbd_nom') .
		' -->
   ' .
		vide($Pile['vars'][$_zzz=(string)'bdd'] = interdire_scripts(filtre_explode_dist(match(file_get_contents(eval('return '.'_FILE_CONNECT'.';')),'spip_connect_db((.*));'),','))) .
		'
	' .
		vide($Pile['vars'][$_zzz=(string)'bdd_host'] = table_valeur(filtre_explode_dist(table_valeur(table_valeur($Pile["vars"], (string)'bdd', null),'0'),'\''),'1')) .
		'
	' .
		vide($Pile['vars'][$_zzz=(string)'bdd_port'] = table_valeur(filtre_explode_dist(table_valeur(table_valeur($Pile["vars"], (string)'bdd', null),'1'),'\''),'1')) .
		'
	' .
		vide($Pile['vars'][$_zzz=(string)'bdd_nom'] = table_valeur(filtre_explode_dist(table_valeur(table_valeur($Pile["vars"], (string)'bdd', null),'4'),'\''),'1')) .
		'
	' .
		vide($Pile['vars'][$_zzz=(string)'bdd_type'] = table_valeur(filtre_explode_dist(table_valeur(table_valeur($Pile["vars"], (string)'bdd', null),'5'),'\''),'1')) .
		'
	' .
		vide($Pile['vars'][$_zzz=(string)'bdd_prefixe'] = table_valeur(filtre_explode_dist(table_valeur(table_valeur($Pile["vars"], (string)'bdd', null),'6'),'\''),'1')) .
		'
<div class="fieldset sgbd_fieldset" id="' .
		replace(array_pop(filtre_explode_dist('../plugins/auto/info_spip/v0.11.1/infos_spip/html/sgbd.html','/')),'.html','') .
		'">
	<h3 class="legend titrem">' .
		_T('info_spip:sgbd_fieldset_label') .
		'</h3>
</div>

<div class="champ contenu_sgbd_serveur">
	<div class="label visible">' .
		_T('info_spip:sgbd_serveur_label') .
		'</div>
	<div dir=\'' .
		lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
		'\' class=\'sgbd_nom span\'>' .
		((($a = sgbd_get_infos('host')) OR (is_string($a) AND strlen($a))) ? $a : table_valeur($Pile["vars"], (string)'bdd_host', null)) .
		'</div>
</div>

<div class="champ contenu_sgbd_port">
	<div class="label visible">' .
		_T('info_spip:sgbd_port_label') .
		'</div>
	<div dir=\'' .
		lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
		'\' class=\'sgbd_nom span\'>' .
		((($a = sgbd_get_infos('port')) OR (is_string($a) AND strlen($a))) ? $a : table_valeur($Pile["vars"], (string)'bdd_port', null)) .
		'</div>
</div>

<div class="champ contenu_sgbd_type">
	<div class="label visible">' .
		_T('info_spip:sgbd_type_label') .
		'</div>
	<div dir=\'' .
		lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
		'\' class=\'sgbd_type span\'>' .
		((($a = sgbd_get_infos('type')) OR (is_string($a) AND strlen($a))) ? $a : table_valeur($Pile["vars"], (string)'bdd_type', null)) .
		'</div>
</div>

<div class="champ contenu_sgbd_version">
	<div class="label visible">' .
		_T('info_spip:sgbd_version_label') .
		'</div>
	<div dir=\'' .
		lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
		'\' class=\'sgbd_version span\'>' .
		sgbd_get_infos('version') .
		'</div>
</div>

<div class="champ contenu_sgbd_nom">
	<div class="label visible">' .
		_T('info_spip:sgbd_nom_label') .
		'</div>
	<div dir=\'' .
		lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
		'\' class=\'sgbd_nom span\'>' .
		((($a = sgbd_get_infos('db')) OR (is_string($a) AND strlen($a))) ? $a : table_valeur($Pile["vars"], (string)'bdd_nom', null)) .
		'</div>
</div>

<div class="champ contenu_sgbd_prefixe">
	<div class="label visible">' .
		_T('info_spip:sgbd_prefixe_label') .
		'</div>
	<div dir=\'' .
		lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
		'\' class=\'sgbd_prefixe span\'>' .
		((($a = sgbd_get_infos('prefixe')) OR (is_string($a) AND strlen($a))) ? $a : table_valeur($Pile["vars"], (string)'bdd_prefixe', null)) .
		'</div>
</div>

<div class="champ contenu_sgbd_charset">
	<div class="label visible">' .
		_T('info_spip:sgbd_charset_label') .
		'</div>
	<div dir=\'' .
		lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
		'\' class=\'sgbd_charset span\'>' .
		sgbd_character_set_name('') .
		'</div>
</div>

<div class="champ contenu_sgbd_collation">
	<div class="label visible">' .
		_T('info_spip:sgbd_collation_label') .
		'</div>
	<div dir=\'' .
		lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
		'\' class=\'sgbd_collation span\'>' .
		sgbd_collation_name('') .
		'</div>
</div>

')) :
		('
')) .
'
');

	return analyse_resultat_skel('html_c539e58e0ae81eb0f8da61f1b0bbf9cf', $Cache, $page, '../plugins/auto/info_spip/v0.11.1/infos_spip/html/sgbd.html');
}
?>