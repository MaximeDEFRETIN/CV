<?php

/*
 * Squelette : ../plugins-dist/statistiques/prive/squelettes/contenu/stats_referers.html
 * Date :      Mon, 10 Feb 2020 16:50:18 GMT
 * Compile :   Mon, 02 Mar 2020 13:38:17 GMT
 * Boucles :   _expose, _sous, _statsr
 */ 

function BOUCLE_exposehtml_d1d86be9a22bdb5fe87af58161e1f7af(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		array('../plugins-dist/statistiques/prive/squelettes/contenu/stats_referers.html','html_d1d86be9a22bdb5fe87af58161e1f7af','_expose',2,$GLOBALS['spip_lang'])
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
'<a class=\'annule_filtre ajax\' href="' .
parametre_url(self(),'id_article','') .
'" title="' .
attribut_html(_T('public|spip|ecrire:info_tout_afficher')) .
'">' .
interdire_scripts(inserer_attribut(filtre_balise_img_dist(chemin_image('fermer-16.png')),'alt',_T('public|spip|ecrire:info_tout_afficher'))) .
'</a>
	' .
_T('statistiques:titre_liens_entrants') .
' ' .
_T('public|spip|ecrire:info_pour') .
'
	<h2 class=\'objet_titre\'><a href=\'' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'\'>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></h2>
	<a href="' .
generer_url_ecrire('stats_visites',(	'id_article=' .
	$Pile[$SP]['id_article'])) .
'">' .
_T('statistiques:titre_page_statistiques_visites') .
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
		spip_log(intval(1000*$timer)."ms BOUCLE_expose @ ../plugins-dist/statistiques/prive/squelettes/contenu/stats_referers.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_soushtml_d1d86be9a22bdb5fe87af58161e1f7af(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'referers'))));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_sous';
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
		array('../plugins-dist/statistiques/prive/squelettes/contenu/stats_referers.html','html_d1d86be9a22bdb5fe87af58161e1f7af','_sous',37,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
									<li><a href="' .
interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'referer')) .
'">' .
interdire_scripts((table_valeur($Pile[$SP]['valeur'], 'keywords') ? (($t2 = strval(interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'keywords'))))!=='' ?
			('&laquo;&nbsp;' . $t2 . '&nbsp;&raquo;') :
			''):interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'path')))) .
'</a>
										' .
(($t1 = strval(interdire_scripts((((table_valeur($Pile[$SP]['valeur'], 'visites') > '1')) ?' ' :''))))!=='' ?
		($t1 . (	'(' .
	interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'visites')) .
	')')) :
		'') .
'
										' .
(($t1 = strval(interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'referes'))))!=='' ?
		('<br />' . $t1) :
		'') .
'
									</li>
								');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_sous @ ../plugins-dist/statistiques/prive/squelettes/contenu/stats_referers.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_statsrhtml_d1d86be9a22bdb5fe87af58161e1f7af(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'stats_referers';

	$command['source'] = array(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'limit', null), '100'),true)), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'jour', null), ''),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_article', null),true)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_statsr';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
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
		array('../plugins-dist/statistiques/prive/squelettes/contenu/stats_referers.html','html_d1d86be9a22bdb5fe87af58161e1f7af','_statsr',20,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_statsr']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				<li class="item referer" onclick="if(event.button===0){$(this).toggleClass(\'open\').find(\'.referer-detail\').toggle(\'fast\');}">
						<h3>
							<span class="visites">' .
(($t1 = strval(interdire_scripts(trim(trim(singulier_ou_pluriel(safehtml(table_valeur($Pile[$SP]['valeur'], 'visites')),'info_visite','statistiques:info_visites'),':')))))!=='' ?
		((($t2 = strval(interdire_scripts(number_format(safehtml(table_valeur($Pile[$SP]['valeur'], 'visites')),'0','','&nbsp;'))))!=='' ?
			($t2 . ' ') :
			'') . $t1) :
		'') .
'</span>
							' .
(($t1 = strval(interdire_scripts((((safehtml($Pile[$SP]['cle']) == '(email)')) ?' ' :''))))!=='' ?
		($t1 . (	'
								' .
	interdire_scripts(safehtml($Pile[$SP]['cle'])) .
	'
							')) :
		'') .
(($t1 = strval(interdire_scripts((((safehtml($Pile[$SP]['cle']) == '(email)')) ?'' :' '))))!=='' ?
		($t1 . (	'
								<a href="' .
	interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'url'))) .
	'" onclick="event.stopPropagation();">' .
	interdire_scripts(safehtml($Pile[$SP]['cle'])) .
	(($t2 = strval(interdire_scripts(vigneter_referer(safehtml(table_valeur($Pile[$SP]['valeur'], 'url'))))))!=='' ?
			('<span class="miniature"><img src=\'' . $t2 . '\' width="120" height="90" /></span>') :
			'') .
	'</a>' .
	(($t2 = strval(interdire_scripts(((safehtml(table_valeur($Pile[$SP]['valeur'], 'visites_racine'))) ?' ' :''))))!=='' ?
			($t2 . (	'(' .
		interdire_scripts(number_format(safehtml(table_valeur($Pile[$SP]['valeur'], 'visites_racine')),'0','','&nbsp;')) .
		')')) :
			'') .
	'</h3>
							')) :
		'') .
'

						</h3>
						' .
(($t1 = BOUCLE_soushtml_d1d86be9a22bdb5fe87af58161e1f7af($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
							<div class="referer-detail none-js">
								<ul>
								' . $t1 . '
								</ul>
							</div>
						') :
		'') .
'
				</li>
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_statsr @ ../plugins-dist/statistiques/prive/squelettes/contenu/stats_referers.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/statistiques/prive/squelettes/contenu/stats_referers.html
// Temps de compilation total: 30.596 ms
//

function html_d1d86be9a22bdb5fe87af58161e1f7af($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces((((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('voirstats')?" ":"")) AND (interdire_scripts(invalideur_session($Cache, ((include_spip('inc/config')?lire_config('activer_referers','oui',false):'') == 'oui'))))) ?' ' :''))) .
'
' .
BOUCLE_exposehtml_d1d86be9a22bdb5fe87af58161e1f7af($Cache, $Pile, $doublons, $Numrows, $SP) .
'

<div class="onglets_simple clearfix">
	<ul>
		<li>' .
lien_ou_expose(generer_url_ecrire('stats_referers','jour=\'\''),_T('public|spip|ecrire:info_tout_afficher'),interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'jour', null), ''),true)) ?'' :' ')),'ajax') .
'</li>
		' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_article', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'
		<li>' .
	lien_ou_expose(generer_url_ecrire('stats_referers','jour=jour'),ucfirst(_T('public|spip|ecrire:date_aujourdhui')),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'jour', null), ''),true) == 'jour')),'ajax') .
	'</li>
		<li>' .
	lien_ou_expose(generer_url_ecrire('stats_referers','jour=veille'),ucfirst(_T('public|spip|ecrire:date_hier')),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'jour', null), ''),true) == 'veille')),'ajax') .
	'</li>
		')) :
		'') .
'
	</ul>
</div>
' .
(($t1 = BOUCLE_statsrhtml_d1d86be9a22bdb5fe87af58161e1f7af($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<h1>' .
		_T('statistiques:onglet_origine_visites') .
		' (' .
		$Numrows['_statsr']['total'] .
		' ' .
		singulier_ou_pluriel($Numrows['_statsr']['total'],'info_site','info_sites') .
		')</h1>
	<div class="liste">
		' .
		(($t3 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'jour', null), ''),true) == 'jour')) ?' ' :''))))!=='' ?
				('<h2>' . $t3 . (	ucfirst(_T('public|spip|ecrire:date_aujourdhui')) .
			'</h2>')) :
				'') .
		'
		' .
		(($t3 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'jour', null), ''),true) == 'veille')) ?' ' :''))))!=='' ?
				('<h2>' . $t3 . (	ucfirst(_T('public|spip|ecrire:date_hier')) .
			'</h2>')) :
				'') .
		'
		<ul class="liste-items referers">
			') . $t1 . '
		</ul>
	</div>
') :
		((	'
	<h1>' .
	_T('statistiques:onglet_origine_visites') .
	'</h1>
	' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'jour', null), ''),true) == 'jour')) ?' ' :''))))!=='' ?
			('<h2>' . $t2 . (	ucfirst(_T('public|spip|ecrire:date_aujourdhui')) .
		'</h2>')) :
			'') .
	'
	' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'jour', null), ''),true) == 'veille')) ?' ' :''))))!=='' ?
			('<h2>' . $t2 . (	ucfirst(_T('public|spip|ecrire:date_hier')) .
		'</h2>')) :
			'') .
	'
'))) .
'
<p class="action plus"><a href="' .
parametre_url(self(),'limit',interdire_scripts(plus(entites_html(sinon(table_valeur(@$Pile[0], (string)'limit', null), '100'),true),'200'))) .
'" class="ajax">+++</a></p>
');

	return analyse_resultat_skel('html_d1d86be9a22bdb5fe87af58161e1f7af', $Cache, $page, '../plugins-dist/statistiques/prive/squelettes/contenu/stats_referers.html');
}
?>