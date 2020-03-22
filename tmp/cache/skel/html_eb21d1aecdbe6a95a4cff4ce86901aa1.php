<?php

/*
 * Squelette : ../plugins/auto/corbeille/v3.1.2/prive/squelettes/contenu/corbeille.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Sun, 08 Mar 2020 10:15:28 GMT
 * Boucles :   _corbeilles
 */ 

function BOUCLE_corbeilleshtml_eb21d1aecdbe6a95a4cff4ce86901aa1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(find_all_in_path('prive/listes/','/corbeille_[^.]*[.]html$'));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_corbeilles';
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
		array('../plugins/auto/corbeille/v3.1.2/prive/squelettes/contenu/corbeille.html','html_eb21d1aecdbe6a95a4cff4ce86901aa1','_corbeilles',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
vide($Pile['vars'][$_zzz=(string)'table'] = interdire_scripts(substr(basename($Pile[$SP]['valeur'],'.html'),'10'))) .
'<div id=\'liste-' .
table_valeur($Pile["vars"], (string)'table', null) .
'\' class=\'ajax\'>
		' .
executer_balise_dynamique('FORMULAIRE_EDITER_CORBEILLE',
	array(table_valeur($Pile["vars"], (string)'table', null)),
	array('../plugins/auto/corbeille/v3.1.2/prive/squelettes/contenu/corbeille.html','html_eb21d1aecdbe6a95a4cff4ce86901aa1','_corbeilles',9,$GLOBALS['spip_lang'])) .
'</div>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_corbeilles @ ../plugins/auto/corbeille/v3.1.2/prive/squelettes/contenu/corbeille.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/corbeille/v3.1.2/prive/squelettes/contenu/corbeille.html
// Temps de compilation total: 19.547 ms
//

function html_eb21d1aecdbe6a95a4cff4ce86901aa1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('corbeille:corbeille') .
'</h1>

' .
executer_balise_dynamique('FORMULAIRE_RECHERCHE_ECRIRE',
	array(self(),'ajax'),
	array('../plugins/auto/corbeille/v3.1.2/prive/squelettes/contenu/corbeille.html','html_eb21d1aecdbe6a95a4cff4ce86901aa1','',3,$GLOBALS['spip_lang'])) .
'<div class="nettoyeur"></div>

' .
BOUCLE_corbeilleshtml_eb21d1aecdbe6a95a4cff4ce86901aa1($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_eb21d1aecdbe6a95a4cff4ce86901aa1', $Cache, $page, '../plugins/auto/corbeille/v3.1.2/prive/squelettes/contenu/corbeille.html');
}
?>