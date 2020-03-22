<?php

/*
 * Squelette : ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-populaires.html
 * Date :      Mon, 10 Feb 2020 16:50:18 GMT
 * Compile :   Fri, 28 Feb 2020 14:11:50 GMT
 * Boucles :   _derniers, _pluspop, _plusvisites
 */ 

function BOUCLE_derniershtml_824a021d1576e78002d1d1b8cf0dc3be(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_derniers';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.id_rubrique",
		"articles.visites",
		"articles.popularite",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array();
		$command['limit'] = '0,10';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
			array('>', 'articles.popularite', "'0'"), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-populaires.html','html_824a021d1576e78002d1d1b8cf0dc3be','_derniers',15,$GLOBALS['spip_lang'])
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
				<li value="' .
plus(array_search($Pile[$SP]['id_article'],table_valeur($Pile["vars"], (string)'c', null)),'1') .
'"' .
(calcul_exposer($Pile[$SP]['id_article'], 'id_article', $Pile[0], $Pile[$SP]['id_rubrique'], 'id_article', '')  ?
		(' class="' . 'on' . '"') :
		'') .
'><a href="' .
parametre_url(self(),'id_article',$Pile[$SP]['id_article']) .
'#contenu" class="ajax"
							title="' .
attribut_html(_T('statistiques:info_popularite_3', array('visites' => interdire_scripts($Pile[$SP]['visites']),
'popularite' => ceil($Pile[$SP]['popularite'])))) .
'">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
			');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_derniers @ ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-populaires.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_pluspophtml_824a021d1576e78002d1d1b8cf0dc3be(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();
	$in = array();
	if (!(is_array($a = (table_valeur($Pile["vars"], (string)'c', null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_pluspop';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.id_rubrique",
		"articles.visites",
		"articles.popularite",
		"articles.titre",
		"articles.lang");
		$command['join'] = array();
		$command['limit'] = '0,30';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!sql_quote($in) OR sql_quote($in)==="''") ? 0 : ('FIELD(articles.id_article,' . sql_quote($in) . ')')));
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), sql_in('articles.id_article',sql_quote($in)), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-populaires.html','html_824a021d1576e78002d1d1b8cf0dc3be','_pluspop',8,$GLOBALS['spip_lang'])
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
			<li' .
(calcul_exposer($Pile[$SP]['id_article'], 'id_article', $Pile[0], $Pile[$SP]['id_rubrique'], 'id_article', '')  ?
		(' class="' . 'on' . '"') :
		'') .
'><a href="' .
parametre_url(self(),'id_article',$Pile[$SP]['id_article']) .
'#contenu" class="ajax"
						title="' .
attribut_html(_T('statistiques:info_popularite_3', array('visites' => interdire_scripts($Pile[$SP]['visites']),
'popularite' => ceil($Pile[$SP]['popularite'])))) .
'">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
		');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_pluspop @ ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-populaires.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_plusvisiteshtml_824a021d1576e78002d1d1b8cf0dc3be(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_plusvisites';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.visites",
		"articles.id_article",
		"articles.id_rubrique",
		"articles.popularite",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.visites DESC');
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
			array('>', 'articles.popularite', "'0'"));
		$command['join'] = array();
		$command['limit'] = '0,30';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-populaires.html','html_824a021d1576e78002d1d1b8cf0dc3be','_plusvisites',32,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				<li value="' .
plus(array_search($Pile[$SP]['id_article'],table_valeur($Pile["vars"], (string)'c', null)),'1') .
'"' .
(calcul_exposer($Pile[$SP]['id_article'], 'id_article', $Pile[0], $Pile[$SP]['id_rubrique'], 'id_article', '')  ?
		(' class="' . 'on' . '"') :
		'') .
'><a href="' .
parametre_url(self(),'id_article',$Pile[$SP]['id_article']) .
'#contenu" class="ajax"
							title="' .
attribut_html(_T('statistiques:info_popularite_3', array('visites' => interdire_scripts($Pile[$SP]['visites']),
'popularite' => ceil($Pile[$SP]['popularite'])))) .
'">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
			');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_plusvisites @ ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-populaires.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-populaires.html
// Temps de compilation total: 1.105 ms
//

function html_824a021d1576e78002d1d1b8cf0dc3be($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'c'] = classement_populaires('article')) .
boite_ouvrir('', 'note') .
'<div class="stats-articles">
	<div class="unit size1of2">

	<p>' .
_T('statistiques:info_visites_plus_populaires') .
'</p>
	' .
(($t1 = BOUCLE_pluspophtml_824a021d1576e78002d1d1b8cf0dc3be($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
		<ol class=\'classement\'>
		' . $t1 . (	'
		</ol>
		' .
		(($t3 = BOUCLE_derniershtml_824a021d1576e78002d1d1b8cf0dc3be($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
				('
			<p class="center">[...]</p>
			<ol class=\'classement\'>
			' . $t3 . '
			</ol>
		') :
				'') .
		'
	')) :
		'') .
'


	</div>
	<div class="unit lastUnit">

		<p>' .
_T('statistiques:info_affichier_visites_articles_plus_visites') .
'</p>
		' .
vide($Pile['vars'][$_zzz=(string)'c'] = classement_populaires('article')) .
(($t1 = BOUCLE_plusvisiteshtml_824a021d1576e78002d1d1b8cf0dc3be($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
			<ol class=\'classement\'>
			' . $t1 . '
			</ol>
		') :
		'') .
'

		<br class="nettoyeur" />
		<hr />
		<h4>' .
_T('statistiques:info_comment_lire_tableau') .
'</h4>
		<p>' .
_T('statistiques:texte_comment_lire_tableau') .
'</p>

	</div>
</div>
' .
boite_fermer() .
'
');

	return analyse_resultat_skel('html_824a021d1576e78002d1d1b8cf0dc3be', $Cache, $page, '../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-populaires.html');
}
?>