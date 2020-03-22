<?php

/*
 * Squelette : squelettes/backend.html
 * Date :      Mon, 02 Mar 2020 13:57:08 GMT
 * Compile :   Mon, 02 Mar 2020 18:47:30 GMT
 * Boucles :   _10recents, _tres_recents
 */ 

function BOUCLE_10recentshtml_1eb5a1f50f156b2537ba810598af7be8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();
	$in = array();
	if (!(is_array($a = (@$Pile[0]['lang']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_mot']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['id_auteur']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_10recents';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')), 'L2' => array('articles','id_objet','id_article','L2.objet='.sql_quote('article')));
		$command['limit'] = '0,10';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), (!(is_array(@$Pile[0]['lang'])?count(@$Pile[0]['lang']):strlen(@$Pile[0]['lang'])) ? '' : ((is_array(@$Pile[0]['lang'])) ? sql_in('articles.lang',sql_quote($in)) : 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'], '','varchar(10) NOT NULL DEFAULT \'\'')))), (sql_quote(@$Pile[0]['id_rubrique'], '', 'int NOT NULL') ? sql_in('articles.id_rubrique', calcul_branche_in(sql_quote(@$Pile[0]['id_rubrique'], '', 'int NOT NULL'))) : '1=1'), (!(is_array(@$Pile[0]['id_mot'])?count(@$Pile[0]['id_mot']):strlen(@$Pile[0]['id_mot'])) ? '' : ((is_array(@$Pile[0]['id_mot'])) ? sql_in('L1.id_mot',sql_quote($in1)) : 
			array('=', 'L1.id_mot', sql_quote(@$Pile[0]['id_mot'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_auteur'])?count(@$Pile[0]['id_auteur']):strlen(@$Pile[0]['id_auteur'])) ? '' : ((is_array(@$Pile[0]['id_auteur'])) ? sql_in('L2.id_auteur',sql_quote($in2)) : 
			array('=', 'L2.id_auteur', sql_quote(@$Pile[0]['id_auteur'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/backend.html','html_1eb5a1f50f156b2537ba810598af7be8','_10recents',24,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc-rss-item') . ', array(\'id_article\' => ' . argumenter_squelette($Pile[$SP]['id_article']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/backend.html\',\'html_1eb5a1f50f156b2537ba810598af7be8\',\'\',25,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_10recents @ squelettes/backend.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_tres_recentshtml_1eb5a1f50f156b2537ba810598af7be8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();
	$in = array();
	if (!(is_array($a = (@$Pile[0]['lang']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_mot']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['id_auteur']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_tres_recents';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')), 'L2' => array('articles','id_objet','id_article','L2.objet='.sql_quote('article')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), (!(is_array(@$Pile[0]['lang'])?count(@$Pile[0]['lang']):strlen(@$Pile[0]['lang'])) ? '' : ((is_array(@$Pile[0]['lang'])) ? sql_in('articles.lang',sql_quote($in)) : 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'], '','varchar(10) NOT NULL DEFAULT \'\'')))), (sql_quote(@$Pile[0]['id_rubrique'], '', 'int NOT NULL') ? sql_in('articles.id_rubrique', calcul_branche_in(sql_quote(@$Pile[0]['id_rubrique'], '', 'int NOT NULL'))) : '1=1'), (!(is_array(@$Pile[0]['id_mot'])?count(@$Pile[0]['id_mot']):strlen(@$Pile[0]['id_mot'])) ? '' : ((is_array(@$Pile[0]['id_mot'])) ? sql_in('L1.id_mot',sql_quote($in1)) : 
			array('=', 'L1.id_mot', sql_quote(@$Pile[0]['id_mot'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_auteur'])?count(@$Pile[0]['id_auteur']):strlen(@$Pile[0]['id_auteur'])) ? '' : ((is_array(@$Pile[0]['id_auteur'])) ? sql_in('L2.id_auteur',sql_quote($in2)) : 
			array('=', 'L2.id_auteur', sql_quote(@$Pile[0]['id_auteur'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), 
			array('<', 'TIMESTAMPDIFF(HOUR,articles.date,NOW())/24', "3"), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/backend.html','html_1eb5a1f50f156b2537ba810598af7be8','_tres_recents',28,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc-rss-item') . ', array(\'id_article\' => ' . argumenter_squelette($Pile[$SP]['id_article']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/backend.html\',\'html_1eb5a1f50f156b2537ba810598af7be8\',\'\',29,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_tres_recents @ squelettes/backend.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/backend.html
// Temps de compilation total: 3.757 ms
//

function html_1eb5a1f50f156b2537ba810598af7be8($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header(' . _q((	'Content-type: text/xml' .
	(($t2 = strval(interdire_scripts($GLOBALS['meta']['charset'])))!=='' ?
			('; charset=' . $t2) :
			''))) . '); ?'.'><?xml 
version="1.0"' .
(($t1 = strval(interdire_scripts($GLOBALS['meta']['charset'])))!=='' ?
		(' encoding="' . $t1 . '"') :
		'') .
'?>
<rss version="2.0" 
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
>

<channel' .
(($t1 = strval(spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' xml:lang="' . $t1 . '"') :
		'') .
'>
	<title>' .
interdire_scripts(texte_backend(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])))) .
'</title>
	<link>' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/</link>
	<description>' .
interdire_scripts(texte_backend(supprimer_tags(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0])))) .
'</description>
	<language>' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'</language>
	<generator>SPIP - www.spip.net</generator>

' .
(($t1 = strval(texte_backend(url_absolue(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'144','400')),'src')))))!=='' ?
		((	'	<image>
		<title>' .
	interdire_scripts(texte_backend(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
	'</title>
		<url>') . $t1 . (	'</url>
		<link>' .
	spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
	'/</link>
		' .
	(($t2 = strval(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'144','400')),'height')))!=='' ?
			('<height>' . $t2 . '</height>') :
			'') .
	'
		' .
	(($t2 = strval(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'144','400')),'width')))!=='' ?
			('<width>' . $t2 . '</width>') :
			'') .
	'
	</image>
')) :
		'') .
'

' .
BOUCLE_10recentshtml_1eb5a1f50f156b2537ba810598af7be8($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
BOUCLE_tres_recentshtml_1eb5a1f50f156b2537ba810598af7be8($Cache, $Pile, $doublons, $Numrows, $SP) .
'

</channel>

</rss>
');

	return analyse_resultat_skel('html_1eb5a1f50f156b2537ba810598af7be8', $Cache, $page, 'squelettes/backend.html');
}
?>