<?php

/*
 * Squelette : squelettes/inclure/rubriques.html
 * Date :      Thu, 30 Jan 2020 14:04:45 GMT
 * Compile :   Wed, 05 Feb 2020 17:17:02 GMT
 * Boucles :   _re, _test_expose, _sous_rubriques, _rubriques
 */ 

function BOUCLE_rehtml_dbcca1f7317636f87a1780ef6fcd2c66(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_sous_rubriques']) ? $Numrows['_sous_rubriques'] : array());
	$t0 = (($t1 = BOUCLE_sous_rubriqueshtml_dbcca1f7317636f87a1780ef6fcd2c66($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
                        <ul>
                            ' . $t1 . '
                        </ul>
                    ') :
		'');
	$Numrows['_sous_rubriques'] = ($save_numrows);
	return $t0;
}


function BOUCLE_test_exposehtml_dbcca1f7317636f87a1780ef6fcd2c66(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_test_expose';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', sql_quote($Pile[$SP]['id_parent'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/rubriques.html','html_dbcca1f7317636f87a1780ef6fcd2c66','_test_expose',17,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (calcul_exposer($Pile[$SP]['id_rubrique'], 'id_rubrique', $Pile[0], 0, 'id_rubrique', '') ? ' ' : '');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_test_expose @ squelettes/inclure/rubriques.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_sous_rubriqueshtml_dbcca1f7317636f87a1780ef6fcd2c66(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sous_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_parent",
		"rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.date",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.date DESC');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT 0')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/rubriques.html','html_dbcca1f7317636f87a1780ef6fcd2c66','_sous_rubriques',15,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (($t1 = BOUCLE_test_exposehtml_dbcca1f7317636f87a1780ef6fcd2c66($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'
                                <li><a href="' .
		vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
		'"' .
		(calcul_exposer($Pile[$SP]['id_rubrique'], 'id_rubrique', $Pile[0], 0, 'id_rubrique', '')  ?
				(' class="' . 'on' . '"') :
				'') .
		'>' .
		interdire_scripts(couper(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'80')) .
		'</a>' .
		BOUCLE_rehtml_dbcca1f7317636f87a1780ef6fcd2c66($Cache, $Pile, $doublons, $Numrows, $SP) .
		'	</li>
                            ')) :
		'');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_sous_rubriques @ squelettes/inclure/rubriques.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_rubriqueshtml_dbcca1f7317636f87a1780ef6fcd2c66(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.date",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.date DESC');
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', 0));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/rubriques.html','html_dbcca1f7317636f87a1780ef6fcd2c66','_rubriques',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                <li>
                    <a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'"' .
(calcul_exposer($Pile[$SP]['id_rubrique'], 'id_rubrique', $Pile[0], 0, 'id_rubrique', '')  ?
		(' class="' . 'on' . '"') :
		'') .
'>' .
interdire_scripts(couper(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'80')) .
'</a>
                    ' .
(($t1 = BOUCLE_sous_rubriqueshtml_dbcca1f7317636f87a1780ef6fcd2c66($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
                        <ul>
                            ' . $t1 . '
                        </ul>
                    ') :
		'') .
'
                </li>
            ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_rubriques @ squelettes/inclure/rubriques.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inclure/rubriques.html
// Temps de compilation total: 2.021 ms
//

function html_dbcca1f7317636f87a1780ef6fcd2c66($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = BOUCLE_rubriqueshtml_dbcca1f7317636f87a1780ef6fcd2c66($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
    <div class="menu menu_rubriques">
        <h2>' .
		_T('public|spip|ecrire:rubriques') .
		'</h2>
        <ul>
            ') . $t1 . '
        </ul>
    </div>
') :
		''));

	return analyse_resultat_skel('html_dbcca1f7317636f87a1780ef6fcd2c66', $Cache, $page, 'squelettes/inclure/rubriques.html');
}
?>