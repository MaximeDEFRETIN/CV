<?php

/*
 * Squelette : ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-data.html
 * Date :      Mon, 10 Feb 2020 16:50:18 GMT
 * Compile :   Fri, 28 Feb 2020 14:11:50 GMT
 * Boucles :   _expose
 */ 

function BOUCLE_exposehtml_ea77d4ffe74672ec10b7eae88992f7f6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_expose';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL AUTO_INCREMENT')), 
			array('REGEXP', 'articles.statut', "'.*'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-data.html','html_ea77d4ffe74672ec10b7eae88992f7f6','_expose',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
' .
boite_ouvrir('', 'note') .
'<a class=\'annule_filtre\' href="' .
parametre_url(self(),'id_article','') .
'" title="' .
attribut_html(_T('public|spip|ecrire:info_tout_afficher')) .
'">' .
interdire_scripts(inserer_attribut(filtre_balise_img_dist(chemin_image('fermer-16.png')),'alt',_T('public|spip|ecrire:info_tout_afficher'))) .
'</a>
	' .
_T('statistiques:titre_page_statistiques_visites') .
' ' .
_T('public|spip|ecrire:info_pour') .
'
	<h2 class=\'objet_titre\'><a href=\'' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'\'>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></h2>
	<a href="' .
generer_url_ecrire('stats_referers',(	'id_article=' .
	$Pile[$SP]['id_article'])) .
'">' .
_T('statistiques:titre_liens_entrants') .
'</a>
' .
boite_fermer() .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_expose @ ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-data.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-data.html
// Temps de compilation total: 7.254 ms
//

function html_ea77d4ffe74672ec10b7eae88992f7f6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir((	interdire_scripts(filtre_balise_img_dist(chemin_image('statistique-24.png'),'','cadre-icone')) .
	'<h1>' .
	_T('statistiques:titre_evolution_visite') .
	'</h1>'), 'simple stats') .
'
' .
BOUCLE_exposehtml_ea77d4ffe74672ec10b7eae88992f7f6($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/stats-visites-jours') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-data.html\',\'html_ea77d4ffe74672ec10b7eae88992f7f6\',\'\',11,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/stats-visites-mois') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-data.html\',\'html_ea77d4ffe74672ec10b7eae88992f7f6\',\'\',12,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>

' .
boite_fermer() .
'

');

	return analyse_resultat_skel('html_ea77d4ffe74672ec10b7eae88992f7f6', $Cache, $page, '../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-data.html');
}
?>