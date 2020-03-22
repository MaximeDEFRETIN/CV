<?php

/*
 * Squelette : ../plugins/auto/escal_V4/prive/squelettes/contenu/configurer_escal.html
 * Date :      Fri, 20 Dec 2019 11:26:32 GMT
 * Compile :   Thu, 27 Feb 2020 09:12:12 GMT
 * Boucles :   _version
 */ 

function BOUCLE_versionhtml_aadf6b459a3b29f0375dbe49ecd0cccf(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'paquets';
		$command['id'] = '_version';
		$command['from'] = array('paquets' => 'spip_paquets');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("paquets.version");
		$command['orderby'] = array('paquets.version DESC');
		$command['where'] = 
			array(
			array('=', 'paquets.prefixe', "'ESCAL'"));
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/escal_V4/prive/squelettes/contenu/configurer_escal.html','html_aadf6b459a3b29f0375dbe49ecd0cccf','_version',7,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('escal:version_maj');
	$l2 = _T('escal:version_ok');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
(($t1 = strval(interdire_scripts((((replace($Pile[$SP]['version'],'0') > interdire_scripts(filtre_info_plugin_dist("escal", "version")))) ?' ' :''))))!=='' ?
		($t1 . (	'
		<h5>' .
	$l1 .
	' ' .
	ltrim(preg_replace('/\\.0*/','.',interdire_scripts($Pile[$SP]['version'])),'0') .
	'</h5>
	')) :
		'') .
'
	' .
(($t1 = strval(interdire_scripts((((replace($Pile[$SP]['version'],'0') > interdire_scripts(filtre_info_plugin_dist("escal", "version")))) ?'' :' '))))!=='' ?
		($t1 . (	'
		<h5>' .
	$l2 .
	'</h5>
	')) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_version @ ../plugins/auto/escal_V4/prive/squelettes/contenu/configurer_escal.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/escal_V4/prive/squelettes/contenu/configurer_escal.html
// Temps de compilation total: 2.328 ms
//

function html_aadf6b459a3b29f0375dbe49ecd0cccf($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', 'escal')?" ":"")))))!=='' ?
		($t1 . ')') :
		'') .
'

<h1 class="grostitre">' .
_T('escal:configurer_escal') .
'</h1>

<h3>' .
_T('escal:version_actuelle') .
' ' .
interdire_scripts(filtre_info_plugin_dist("escal", "version")) .
'</h3>

' .
BOUCLE_versionhtml_aadf6b459a3b29f0375dbe49ecd0cccf($Cache, $Pile, $doublons, $Numrows, $SP) .
'




' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'cfg', null), 'accueil'),true) == 'accueil')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	boite_ouvrir(interdire_scripts(filtre_balise_img_dist(chemin_image('escal24.png'),'','cadre-icone')), 'info') .
	_T('escal:texte_accueil') .
	'	

' .
	boite_fermer() .
	'
')) :
		'') .
'

' .
vide($Pile['vars'][$_zzz=(string)'configurer'] = (($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type-page', null),true))))!=='' ?
			($t2 . (	'_' .
		interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'cfg', null), 'accueil'),true)))) :
			'')) .
'
	' .
(($t1 = strval(executer_balise_dynamique('FORMULAIRE_',
	array(table_valeur($Pile["vars"], (string)'configurer', null)),
	array('../plugins/auto/escal_V4/prive/squelettes/contenu/configurer_escal.html','html_aadf6b459a3b29f0375dbe49ecd0cccf','',20,$GLOBALS['spip_lang']))))!=='' ?
		('<div class=\'ajax\'>' . $t1 . '</div>') :
		''));

	return analyse_resultat_skel('html_aadf6b459a3b29f0375dbe49ecd0cccf', $Cache, $page, '../plugins/auto/escal_V4/prive/squelettes/contenu/configurer_escal.html');
}
?>