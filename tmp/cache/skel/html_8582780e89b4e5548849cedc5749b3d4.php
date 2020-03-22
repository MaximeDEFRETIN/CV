<?php

/*
 * Squelette : ../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Wed, 05 Feb 2020 16:19:23 GMT
 * Boucles :   _nom_dist, _dist, _nom_actif, _actif, _nom_inactif, _inactif
 */ 

function BOUCLE_nom_disthtml_8582780e89b4e5548849cedc5749b3d4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'plugins';
		$command['id'] = '_nom_dist';
		$command['from'] = array('plugins' => 'spip_plugins');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("plugins.nom");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'plugins.prefixe', sql_quote($Pile[$SP]['prefixe'], '','varchar(30) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html','html_8582780e89b4e5548849cedc5749b3d4','_nom_dist',20,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= interdire_scripts(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0]));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_nom_dist @ ../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_disthtml_8582780e89b4e5548849cedc5749b3d4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'paquets'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'paquets';
		$command['id'] = '_dist';
		$command['from'] = array('paquets' => 'spip_paquets');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("paquets.prefixe",
		"paquets.version",
		"paquets.version_base",
		"paquets.id_paquet");
		$command['orderby'] = array('paquets.prefixe');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'paquets.constante', "'_DIR_PLUGINS_DIST'"), 
			array(sql_in('paquets.id_paquet', $doublons[$doublons_index[]= ('paquets')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html','html_8582780e89b4e5548849cedc5749b3d4','_dist',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_dist']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_paquet']; // doublons

		$t0 .= (
'
		<tr>
			<td class="prefixe secondaire">' .
interdire_scripts($Pile[$SP]['prefixe']) .
'</td>
			<td class="version secondaire">' .
interdire_scripts(denormaliser_version($Pile[$SP]['version'])) .
'</td>
			<td class="version_base secondaire">' .
interdire_scripts($Pile[$SP]['version_base']) .
'</td>
			<td class="nom principal">' .
BOUCLE_nom_disthtml_8582780e89b4e5548849cedc5749b3d4($Cache, $Pile, $doublons, $Numrows, $SP) .
' </td>
		</tr>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_dist @ ../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_nom_actifhtml_8582780e89b4e5548849cedc5749b3d4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'plugins';
		$command['id'] = '_nom_actif';
		$command['from'] = array('plugins' => 'spip_plugins');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("plugins.nom");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'plugins.prefixe', sql_quote($Pile[$SP]['prefixe'], '','varchar(30) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html','html_8582780e89b4e5548849cedc5749b3d4','_nom_actif',46,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= interdire_scripts(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0]));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_nom_actif @ ../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_actifhtml_8582780e89b4e5548849cedc5749b3d4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'paquets'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'paquets';
		$command['id'] = '_actif';
		$command['from'] = array('paquets' => 'spip_paquets');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("paquets.prefixe",
		"paquets.version",
		"paquets.version_base",
		"paquets.id_paquet");
		$command['orderby'] = array('paquets.prefixe');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'paquets.actif', "'oui'"), 
			array(sql_in('paquets.id_paquet', $doublons[$doublons_index[]= ('paquets')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html','html_8582780e89b4e5548849cedc5749b3d4','_actif',28,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_actif']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_paquet']; // doublons

		$t0 .= (
'
		<tr>
			<td class="prefixe secondaire">' .
interdire_scripts($Pile[$SP]['prefixe']) .
'</td>
			<td class="version secondaire">' .
interdire_scripts(denormaliser_version($Pile[$SP]['version'])) .
'</td>
			<td class="version_base secondaire">' .
interdire_scripts($Pile[$SP]['version_base']) .
'</td>
			<td class="nom principal">' .
BOUCLE_nom_actifhtml_8582780e89b4e5548849cedc5749b3d4($Cache, $Pile, $doublons, $Numrows, $SP) .
' </td>
		</tr>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_actif @ ../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_nom_inactifhtml_8582780e89b4e5548849cedc5749b3d4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'plugins';
		$command['id'] = '_nom_inactif';
		$command['from'] = array('plugins' => 'spip_plugins');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("plugins.nom");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'plugins.prefixe', sql_quote($Pile[$SP]['prefixe'], '','varchar(30) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html','html_8582780e89b4e5548849cedc5749b3d4','_nom_inactif',72,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= interdire_scripts(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0]));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_nom_inactif @ ../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_inactifhtml_8582780e89b4e5548849cedc5749b3d4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'paquets'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'paquets';
		$command['id'] = '_inactif';
		$command['from'] = array('paquets' => 'spip_paquets');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("paquets.prefixe",
		"paquets.version",
		"paquets.version_base",
		"paquets.id_paquet");
		$command['orderby'] = array('paquets.prefixe');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'paquets.actif', "'non'"), 
			array('=', 'paquets.constante', "'_DIR_PLUGINS'"), 
			array(sql_in('paquets.id_paquet', $doublons[$doublons_index[]= ('paquets')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html','html_8582780e89b4e5548849cedc5749b3d4','_inactif',54,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_inactif']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_paquet']; // doublons

		$t0 .= (
'
		<tr>
			<td class="prefixe secondaire">' .
interdire_scripts($Pile[$SP]['prefixe']) .
'</td>
			<td class="version secondaire">' .
interdire_scripts(denormaliser_version($Pile[$SP]['version'])) .
'</td>
			<td class="version_base secondaire">' .
interdire_scripts($Pile[$SP]['version_base']) .
'</td>
			<td class="nom principal">' .
BOUCLE_nom_inactifhtml_8582780e89b4e5548849cedc5749b3d4($Cache, $Pile, $doublons, $Numrows, $SP) .
' </td>
		</tr>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_inactif @ ../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html
// Temps de compilation total: 3.116 ms
//

function html_8582780e89b4e5548849cedc5749b3d4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = BOUCLE_disthtml_8582780e89b4e5548849cedc5749b3d4($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="liste-objets plugins_dist">
	<table class="spip liste">
	<caption><strong class="caption">' .
		singulier_ou_pluriel($Numrows['_dist']['total'],_T('info_spip:info_1_plugin_dist'),_T('info_spip:info_nb_plugins_dist')) .
		'</strong></caption>
		<thead>
			<tr>
				<th class="prefixe secondaire">' .
		_T('info_spip:plugins_prefixe_label') .
		'</th>
				<th class="version secondaire">' .
		_T('info_spip:plugins_version_label') .
		'</th>
				<th class="version_base secondaire">' .
		_T('info_spip:plugins_version_base_label') .
		'</th>
				<th class="nom principal">' .
		_T('info_spip:plugins_nom_label') .
		'</th>
			</tr>
		</thead>
		<tbody>
') . $t1 . '
		</tbody>
	</table>
</div>
') :
		'') .
'

' .
(($t1 = BOUCLE_actifhtml_8582780e89b4e5548849cedc5749b3d4($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="liste-objets plugins_actif">
	<table class="spip liste">
	<caption><strong class="caption">' .
		singulier_ou_pluriel($Numrows['_actif']['total'],_T('info_spip:info_1_plugin_actif'),_T('info_spip:info_nb_plugins_actifs')) .
		'</strong></caption>
		<thead>
			<tr>
				<th class="prefixe secondaire">' .
		_T('info_spip:plugins_prefixe_label') .
		'</th>
				<th class="version secondaire">' .
		_T('info_spip:plugins_version_label') .
		'</th>
				<th class="version_base secondaire">' .
		_T('info_spip:plugins_version_base_label') .
		'</th>
				<th class="nom principal">' .
		_T('info_spip:plugins_nom_label') .
		'</th>
			</tr>
		</thead>
		<tbody>
') . $t1 . '
		</tbody>
	</table>
</div>
') :
		'') .
'

' .
(($t1 = BOUCLE_inactifhtml_8582780e89b4e5548849cedc5749b3d4($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="liste-objets plugins_inactif">
	<table class="spip liste">
	<caption><strong class="caption">' .
		singulier_ou_pluriel($Numrows['_inactif']['total'],_T('info_spip:info_1_plugin_inactif'),_T('info_spip:info_nb_plugins_inactifs')) .
		'</strong></caption>
		<thead>
			<tr>
				<th class="prefixe secondaire">' .
		_T('info_spip:plugins_prefixe_label') .
		'</th>
				<th class="version secondaire">' .
		_T('info_spip:plugins_version_label') .
		'</th>
				<th class="version_base secondaire">' .
		_T('info_spip:plugins_version_base_label') .
		'</th>
				<th class="nom principal">' .
		_T('info_spip:plugins_nom_label') .
		'</th>
			</tr>
		</thead>
		<tbody>
') . $t1 . '
		</tbody>
	</table>
</div>
') :
		'') .
'
');

	return analyse_resultat_skel('html_8582780e89b4e5548849cedc5749b3d4', $Cache, $page, '../plugins/auto/info_spip/v0.11.1/prive/objets/liste/info_paquets.html');
}
?>