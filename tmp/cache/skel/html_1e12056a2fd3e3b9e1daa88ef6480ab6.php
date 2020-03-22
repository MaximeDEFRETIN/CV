<?php

/*
 * Squelette : ../plugins/auto/simplog/v1.4.4/prive/squelettes/navigation/simplog.html
 * Date :      Fri, 20 Dec 2019 11:26:28 GMT
 * Compile :   Sun, 08 Mar 2020 10:15:36 GMT
 * Boucles :   _logs
 */ 

function BOUCLE_logshtml_1e12056a2fd3e3b9e1daa88ef6480ab6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'glob';

	$command['source'] = array(interdire_scripts(concat(eval('return '.'_DIR_LOG'.';'),'*.log*')));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_logs';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array('valeur');
		$command['where'] = 
			array(
			array('NOT', 
			array('=', 'valeur', "''")));
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
		array('../plugins/auto/simplog/v1.4.4/prive/squelettes/navigation/simplog.html','html_1e12056a2fd3e3b9e1daa88ef6480ab6','_logs',7,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
(($t1 = strval(lien_ou_expose(parametre_url(parametre_url(safehtml(generer_url_ecrire(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true)))),'log',interdire_scripts(basename(safehtml($Pile[$SP]['valeur'])))),'senstri',interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'senstri', null), '0'),true))),interdire_scripts(basename(safehtml($Pile[$SP]['valeur']))),interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'log', null),true) == interdire_scripts(safehtml($Pile[$SP]['valeur'])))))))!=='' ?
		('<li class="item">
			' . $t1 . '
		</li>') :
		'') .
'
        ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_logs @ ../plugins/auto/simplog/v1.4.4/prive/squelettes/navigation/simplog.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/simplog/v1.4.4/prive/squelettes/navigation/simplog.html
// Temps de compilation total: 1.665 ms
//

function html_1e12056a2fd3e3b9e1daa88ef6480ab6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir(interdire_scripts(filtre_balise_img_dist(chemin_image('simplog-24.png'),'','cadre-icone')), 'info') .
_T('simplog:description_simplog') .
'
' .
boite_fermer() .
'

' .
boite_ouvrir(_T('simplog:liste_fic'), 'simple', 'titrem') .
'
	<ul class="liste-items">
        ' .
BOUCLE_logshtml_1e12056a2fd3e3b9e1daa88ef6480ab6($Cache, $Pile, $doublons, $Numrows, $SP) .
'
    </ul>
' .
boite_pied() .
'
    <a href="' .
parametre_url(self(),'hasard',rand('1','10000000')) .
'" class="ajax">
		' .
_T('simplog:actualiser') .
'
	</a>
' .
boite_fermer() .
'
');

	return analyse_resultat_skel('html_1e12056a2fd3e3b9e1daa88ef6480ab6', $Cache, $page, '../plugins/auto/simplog/v1.4.4/prive/squelettes/navigation/simplog.html');
}
?>