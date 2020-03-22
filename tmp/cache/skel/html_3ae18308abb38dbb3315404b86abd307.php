<?php

/*
 * Squelette : ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_articles.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Sun, 08 Mar 2020 10:15:28 GMT
 * Boucles :   _articles
 */ 

function BOUCLE_articleshtml_3ae18308abb38dbb3315404b86abd307(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_articles']) ? $Pile[0]['debut_articles'] : null), 5);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "articles", "?","",array (
  'criteres' => 
  array (
    'statut' => true,
  ),
  'debut_nom' => '\'_articles\'',
),"id_article");
	}
	
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles';
		$command['from'] = array('articles' => 'spip_articles','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array('resultats' => array('articles','id','id_article'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("articles.id_article",
		"articles.date",
		"$rech_select",
		"articles.titre",
		"articles.texte",
		"articles.descriptif",
		"articles.chapo",
		"articles.lang");
	$command['where'] = 
			array(
			array('=', 'articles.statut', sql_quote(@$Pile[0]['statut'], '','varchar(10) NOT NULL DEFAULT \'0\'')), $rech_where?$rech_where:'', 
			array('>', 'articles.id_rubrique', '"0"'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_articles.html','html_3ae18308abb38dbb3315404b86abd307','_articles',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_articles']['compteur_boucle'] = 0;
	$Numrows['_articles']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_articles']) ? $Pile[0]['debut_articles'] : _request('debut_articles');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_articles'] = quete_debut_pagination('id_article',$Pile[0]['@id_article'] = substr($debut_boucle,1),5,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_articles']['total']-1)/(5))*(5)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_articles']['total'] : $debut_boucle + 4), $Numrows['_articles']['total'] - 1);
	$Numrows['_articles']['grand_total'] = $Numrows['_articles']['total'];
	$Numrows['_articles']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_articles']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_articles']['compteur_boucle'] = $debut_boucle;
	
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_articles']['compteur_boucle']++;
		if ($Numrows['_articles']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_articles']['compteur_boucle']-1 > $fin_boucle) break;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
<li class=\'item\'>
<label for=\'article-' .
$Pile[$SP]['id_article'] .
'\'>' .
_T('corbeille:selectionner') .
'</label>
<input type=\'checkbox\' name=\'elements[]\' id="article-' .
$Pile[$SP]['id_article'] .
'" value=\'' .
$Pile[$SP]['id_article'] .
'\'' .
((in_any($Pile[$SP]['id_article'],interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'elements', null),true))))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
'/>
<h4>' .
(($t1 = strval(interdire_scripts(((($a = supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre')))))!=='' ?
		((	'#' .
	$Pile[$SP]['id_article'] .
	' - ') . $t1) :
		'') .
'</h4>
<small>' .
interdire_scripts(affdate(normaliser_date($Pile[$SP]['date']))) .
(($t1 = strval(interdire_scripts(heures(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		(' ' . $t1) :
		'') .
':' .
interdire_scripts(minutes(normaliser_date($Pile[$SP]['date']))) .
'</small>
- ' .
interdire_scripts(filtre_introduction_dist($Pile[$SP]['descriptif'], (strlen($Pile[$SP]['descriptif']))
		? ''
		: $Pile[$SP]['chapo'] . "\n\n" . $Pile[$SP]['texte'], 500, $connect, null)) .
'
<p class=\'actions\'><a href=\'' .
generer_url_ecrire('article',(	'id_article=' .
	$Pile[$SP]['id_article'])) .
'\'>' .
_T('corbeille:voir_detail') .
'</a></p>
</li>
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles @ ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_articles.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_articles.html
// Temps de compilation total: 3.376 ms
//

function html_3ae18308abb38dbb3315404b86abd307($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_articleshtml_3ae18308abb38dbb3315404b86abd307($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="liste corbeille-articles">
' .
		(($t3 = strval(singulier_ou_pluriel((isset($Numrows['_articles']['grand_total'])
			? $Numrows['_articles']['grand_total'] : $Numrows['_articles']['total']),'corbeille:articles_corbeille_un','corbeille:articles_corbeille_tous')))!=='' ?
				('<h3 class="titrem">' . $t3 . '</h3>') :
				'') .
		'
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_articles"]["grand_total"],
 		'_articles',
		isset($Pile[0]['debut_articles'])?$Pile[0]['debut_articles']:intval(_request('debut_articles')),
		5, true, '', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
<ul class=\'liste-items checkables\'>
') . $t1 . (	'
</ul>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_articles"]["grand_total"],
 		'_articles',
		isset($Pile[0]['debut_articles'])?$Pile[0]['debut_articles']:intval(_request('debut_articles')),
		5, true, 'prive', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		'');

	return analyse_resultat_skel('html_3ae18308abb38dbb3315404b86abd307', $Cache, $page, '../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_articles.html');
}
?>