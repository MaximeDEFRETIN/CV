<?php

/*
 * Squelette : ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-jours.html
 * Date :      Mon, 10 Feb 2020 16:50:18 GMT
 * Compile :   Fri, 28 Feb 2020 14:11:50 GMT
 * Boucles :   _art, _statsj
 */ 

function BOUCLE_arthtml_4b4b1e41ba41d0e9bedf11badb6121e9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_art';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.popularite",
		"articles.visites",
		"articles.id_article",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL AUTO_INCREMENT')), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('articles.statut',sql_quote($in)) : 
			array('=', 'articles.statut', sql_quote(@$Pile[0]['statut'], '','varchar(10) NOT NULL DEFAULT \'0\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-jours.html','html_4b4b1e41ba41d0e9bedf11badb6121e9','_art',43,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				<tr class="odd">
					<th>' .
ucfirst(trim(trim(_T('statistiques:info_popularite_5'),':'))) .
'</th>
					<td class=\'num\'>' .
interdire_scripts(number_format(round($Pile[$SP]['popularite']),'0','','&nbsp;')) .
'</td>
				</tr>
				<tr class="odd">
					<th>' .
ucfirst(trim(trim(_T('public|spip|ecrire:info_total'),':'))) .
'</th>
					<td class=\'num\'>' .
interdire_scripts(number_format(round($Pile[$SP]['visites']),'0','','&nbsp;')) .
'</td>
				</tr>
				<tr class="odd">
					<th></th>
					<td class=\'num\'>' .
(($t1 = strval(plus(array_search($Pile[$SP]['id_article'],table_valeur($Pile["vars"], (string)'c', null)),'1')))!=='' ?
		('<strong>' . $t1 . (	'</strong>' .
	singulier_ou_pluriel(count(table_valeur($Pile["vars"], (string)'c', null)),'info_classement_1','info_classement_2','liste'))) :
		'') .
'</td>
				</tr>
			');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_art @ ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-jours.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_statsjhtml_4b4b1e41ba41d0e9bedf11badb6121e9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'stats_visites';

	$command['source'] = array('jour', table_valeur($Pile["vars"], (string)'duree', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_article', null),true)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_statsj';
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
		array('../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-jours.html','html_4b4b1e41ba41d0e9bedf11badb6121e9','_statsj',20,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_statsj']['compteur_boucle'] = 0;
	$Numrows['_statsj']['total'] = @intval($iter->count());
	
	$l1 = _T('public|spip|ecrire:info_aujourdhui');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_statsj']['compteur_boucle']++;
		$t0 .= (
'
			<tr class="c_' .
interdire_scripts(substr(affdate(safehtml($Pile[$SP]['cle']),'l'),'0','3')) .
((($Numrows['_statsj']['compteur_boucle'] == $Numrows['_statsj']['total']))  ?
		(' ' . 'c_today') :
		'') .
'">
				<th title="' .
interdire_scripts(affdate(safehtml($Pile[$SP]['cle']),'Y/m/d')) .
'">' .
(($Numrows['_statsj']['compteur_boucle'] == $Numrows['_statsj']['total']) ? $l1:(	(($t2 = strval(interdire_scripts(nom_jour(safehtml($Pile[$SP]['cle'])))))!=='' ?
			($t2 . ' ') :
			'') .
	interdire_scripts(affdate_jourcourt(safehtml($Pile[$SP]['cle']))))) .
'</th>
				<td class="val">' .
interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'visites'))) .
'</td>
				<td class="mean">' .
interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'moyenne'))) .
'</td>
				<td class="prev">' .
interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'prevision'))) .
'</td>
			</tr>
			' .
vide($Pile['vars'][$_zzz=(string)'max'] = max(table_valeur($Pile["vars"], (string)'max', null),interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'visites'))))) .
vide($Pile['vars'][$_zzz=(string)'moy'] = interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'moyenne')))) .
vide($Pile['vars'][$_zzz=(string)'lastlast'] = table_valeur($Pile["vars"], (string)'last', null)) .
vide($Pile['vars'][$_zzz=(string)'last'] = interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'visites')))));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_statsj @ ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-jours.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-jours.html
// Temps de compilation total: 3.664 ms
//

function html_4b4b1e41ba41d0e9bedf11badb6121e9($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'c'] = classement_populaires('article')) .
vide($Pile['vars'][$_zzz=(string)'duree'] = interdire_scripts(duree_affiche(entites_html(sinon(table_valeur(@$Pile[0], (string)'duree', null), '0'),true),'jour'))) .
'<div class="pagination">
	<span class="dl">
		' .
vide($Pile['vars'][$_zzz=(string)'args'] = array('id_article' => @$Pile[0]['id_article'], 'duree' => table_valeur($Pile["vars"], (string)'duree', null))) .
'<a href="' .
interdire_scripts(generer_url_public('transmettre', param_low_sec('statistiques',table_valeur($Pile["vars"], (string)'args', null),'','transmettre'))) .
'" class="noajax">' .
_T('statistiques:csv') .
'</a>
	</span>
	|
	' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'duree', null)))!=='' ?
		('<span class="duree">' . $t1 . (	' ' .
	_T('public|spip|ecrire:info_jours') .
	'</span>')) :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'duree', null), '0'),true)) ?'' :' '))))!=='' ?
		($t1 . (	'<a href="' .
	parametre_url(self(),'duree','-1') .
	'" title="' .
	_T('public|spip|ecrire:lien_tout_afficher') .
	'">+</a>')) :
		'') .
'
	|
	<a href="#" class="noajax" onclick="jQuery(\'.statistiques_visites_quotidiennes .visites\').show(); jQuery(\'.statistiques_visites_quotidiennes .graphResult-wrap, .statistiques_visites_quotidiennes .graphInfo\').hide(); return false;">' .
_T('statistiques:info_tableaux') .
'</a> |
	<a href="#" class="noajax" onclick="jQuery(\'.statistiques_visites_quotidiennes .visites\').hide(); jQuery(\'.statistiques_visites_quotidiennes .graphResult-wrap, .statistiques_visites_quotidiennes .graphInfo\').show(); return false;">' .
_T('statistiques:info_graphiques') .
'</a>
</div>
' .
vide($Pile['vars'][$_zzz=(string)'max'] = '0') .
vide($Pile['vars'][$_zzz=(string)'moy'] = '0') .
vide($Pile['vars'][$_zzz=(string)'last'] = '0') .
vide($Pile['vars'][$_zzz=(string)'lastlast'] = '0') .
(($t1 = BOUCLE_statsjhtml_4b4b1e41ba41d0e9bedf11badb6121e9($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'

	<table class=\'spip info visites\' style="width:145px;position:absolute;' .
		lang_dir(@$Pile[0]['lang'], 'right','left') .
		':0px;margin-top:10px;">
		<caption>' .
		_T('statistiques:resume') .
		'</caption>
		<tbody>
			<tr class="odd on">
				<th>' .
		ucfirst(trim(trim(_T('public|spip|ecrire:info_maximum'),':'))) .
		'</th>
				<td class=\'num\'>' .
		number_format(table_valeur($Pile["vars"], (string)'max', null),'0','','&nbsp;') .
		'</td>
			</tr>
			<tr class="odd on">
				<th>' .
		ucfirst(trim(trim(_T('public|spip|ecrire:info_moyenne'),':'))) .
		'</th>
				<td class=\'num\'>' .
		number_format(round(table_valeur($Pile["vars"], (string)'moy', null)),'0','','&nbsp;') .
		'</td>
			</tr>
			<tr class="even">
				<th><a href="' .
		generer_url_ecrire('stats_referers','jour=jour') .
		'"
								title="' .
		attribut_html(trim(trim(_T('statistiques:titre_liens_entrants'),':'))) .
		': ' .
		attribut_html(trim(trim(_T('public|spip|ecrire:info_aujourdhui'),':'))) .
		'">' .
		ucfirst(trim(trim(_T('public|spip|ecrire:info_aujourdhui'),':'))) .
		'</a></th>
				<td class=\'num\'>' .
		number_format(table_valeur($Pile["vars"], (string)'last', null),'0','','&nbsp;') .
		'</td>
			</tr>
			<tr class="even">
				<th><a href="' .
		generer_url_ecrire('stats_referers','jour=veille') .
		'"
								title="' .
		attribut_html(trim(trim(_T('statistiques:titre_liens_entrants'),':'))) .
		': ' .
		attribut_html(trim(trim(_T('public|spip|ecrire:info_hier'),':'))) .
		'">' .
		ucfirst(trim(trim(_T('public|spip|ecrire:info_hier'),':'))) .
		'</a></th>
				<td class=\'num\'>' .
		number_format(table_valeur($Pile["vars"], (string)'lastlast', null),'0','','&nbsp;') .
		'</td>
			</tr>
			' .
		(($t3 = BOUCLE_arthtml_4b4b1e41ba41d0e9bedf11badb6121e9($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
				$t3 :
				((	'
				<tr class="odd">
					<th>' .
			ucfirst(trim(trim(_T('public|spip|ecrire:info_total'),':'))) .
			'</th>
					<td class=\'num\'>' .
			number_format(stats_total(''),'0','','&nbsp;') .
			'</td>
				</tr>
				<tr class="odd">
					<th>' .
			ucfirst(trim(trim(_T('statistiques:info_popularite_2'),':'))) .
			'</th>
					<td class=\'num\'>' .
			interdire_scripts(number_format(round((include_spip('inc/config')?lire_config('popularite_total',null,false):'')),'0','','&nbsp;')) .
			'</td>
				</tr>
			'))) .
		'
		</tbody>
	</table>
	
	<table class=\'visites\' id=\'visites_quotidiennes\'>
		<caption>' .
		_T('statistiques:visites_journalieres') .
		'</caption>
	  <thead>
			<tr class=\'row_first\'>
				<th>' .
		trim(trim(_T('public|spip|ecrire:date'),':')) .
		'</th>
				<th class=\'valeur\'>' .
		trim(trim(_T('statistiques:info_visites'),':')) .
		'</th>
				<th class=\'moyenne\'>' .
		trim(trim(_T('public|spip|ecrire:info_moyenne'),':')) .
		'</th>
				<th class=\'prevision\'>' .
		trim(trim(_T('statistiques:info_previsions'),':')) .
		'</th>
			</tr>
		</thead>
	  <tbody>
		') . $t1 . '
		</tbody>
	</table>


') :
		'') .
'
');

	return analyse_resultat_skel('html_4b4b1e41ba41d0e9bedf11badb6121e9', $Cache, $page, '../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-jours.html');
}
?>