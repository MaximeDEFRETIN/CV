<?php

/*
 * Squelette : ../plugins/auto/article_accueil/v1.2.2/inclure/inc-selecteur_accueil.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Sun, 08 Mar 2020 10:18:04 GMT
 * Boucles :   _art
 */ 

function BOUCLE_arthtml_986652c9a19eb3983dd307cf2d33aa76(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_statuts', null),true))))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_art';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.titre",
		"articles.statut",
		"articles.lang");
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!sql_quote($in) OR sql_quote($in)==="''") ? 0 : ('FIELD(articles.statut,' . sql_quote($in) . ')')));
	$command['where'] = 
			array(
			array('=', 'articles.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'], '', 'bigint(21) NOT NULL DEFAULT \'0\'')), sql_in('articles.statut',sql_quote($in)), @$Pile[0]["where"], 
			array('>', 'articles.id_rubrique', '"0"'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/article_accueil/v1.2.2/inclure/inc-selecteur_accueil.html','html_986652c9a19eb3983dd307cf2d33aa76','_art',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
<div class="choix">
	<input type="radio" name="id_article_accueil" class="radio" id="article_' .
$Pile[$SP]['id_article'] .
'" value="' .
$Pile[$SP]['id_article'] .
'"' .
((($Pile[$SP]['id_article'] == interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_article_accueil', null),true))))  ?
		(' ' . ' ' . 'checked="checked"') :
		'') .
'>
	<label for="article_' .
$Pile[$SP]['id_article'] .
'">' .
(($t1 = strval(interdire_scripts(((($a = trim(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre')))))!=='' ?
		((($t2 = strval(interdire_scripts(filtre_puce_statut_dist($Pile[$SP]['statut'],'article'))))!=='' ?
			($t2 . ' ') :
			'') . $t1 . (($t2 = strval($Pile[$SP]['id_article']))!=='' ?
			(' (' . $t2 . ')') :
			'')) :
		'') .
'</label>
</div>
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_art @ ../plugins/auto/article_accueil/v1.2.2/inclure/inc-selecteur_accueil.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/article_accueil/v1.2.2/inclure/inc-selecteur_accueil.html
// Temps de compilation total: 0.390 ms
//

function html_986652c9a19eb3983dd307cf2d33aa76($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="choix">
	<input type="radio" name="id_article_accueil" class="radio" id="article_0" value="0"' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_article_accueil', null),true)) ?'' :' '))))!=='' ?
		(' ' . $t1 . 'checked="checked"') :
		'') .
'>
	<label for="article_0">' .
_T('article_accueil:aucun_article_accueil') .
'</label>
</div>
' .
BOUCLE_arthtml_986652c9a19eb3983dd307cf2d33aa76($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_986652c9a19eb3983dd307cf2d33aa76', $Cache, $page, '../plugins/auto/article_accueil/v1.2.2/inclure/inc-selecteur_accueil.html');
}
?>