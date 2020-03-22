<?php

/*
 * Squelette : ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-mois.html
 * Date :      Mon, 10 Feb 2020 16:50:18 GMT
 * Compile :   Fri, 28 Feb 2020 14:11:50 GMT
 * Boucles :   _statsm
 */ 

function BOUCLE_statsmhtml_1aad3e581f0d7e6a8ac68df4a6470154(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'stats_visites';

	$command['source'] = array('mois', table_valeur($Pile["vars"], (string)'duree', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_article', null),true)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_statsm';
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
		array('../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-mois.html','html_1aad3e581f0d7e6a8ac68df4a6470154','_statsm',15,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_statsm']['compteur_boucle'] = 0;
	$Numrows['_statsm']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_statsm']['compteur_boucle']++;
		$t0 .= (
'
			<tr class="c_' .
interdire_scripts(substr(affdate(safehtml($Pile[$SP]['cle']),'l'),'0','3')) .
((($Numrows['_statsm']['compteur_boucle'] == $Numrows['_statsm']['total']))  ?
		(' ' . 'c_today') :
		'') .
'">
				<th title="' .
interdire_scripts(affdate(safehtml($Pile[$SP]['cle']),'Y/m/01')) .
'">' .
interdire_scripts(affdate_mois_annee(safehtml($Pile[$SP]['cle']))) .
'</th>
				<td class="val">' .
interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'visites'))) .
'</td>
				<td class="mean">' .
interdire_scripts(round(safehtml(table_valeur($Pile[$SP]['valeur'], 'moyenne')))) .
'</td>
				<td class="prev">' .
interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'prevision'))) .
'</td>
			</tr>
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_statsm @ ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-mois.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-mois.html
// Temps de compilation total: 0.473 ms
//

function html_1aad3e581f0d7e6a8ac68df4a6470154($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'duree'] = interdire_scripts(duree_affiche(entites_html(sinon(table_valeur(@$Pile[0], (string)'duree', null), '0'),true),'mois'))) .
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
(($t1 = strval(intval(div(table_valeur($Pile["vars"], (string)'duree', null),'30.41'))))!=='' ?
		('<span class="duree">' . $t1 . (	' ' .
	_T('public|spip|ecrire:date_mois') .
	'</span>')) :
		'') .
' |
	<a href="#" class="noajax" onclick="jQuery(\'.statistiques_visites_mensuelles .visites\').show(); jQuery(\'.statistiques_visites_mensuelles .graphResult-wrap, .statistiques_visites_mensuelles .graphInfo\').hide(); return false;">' .
_T('statistiques:info_tableaux') .
'</a> |
	<a href="#" class="noajax" onclick="jQuery(\'.statistiques_visites_mensuelles .visites\').hide(); jQuery(\'.statistiques_visites_mensuelles .graphResult-wrap, .statistiques_visites_mensuelles .graphInfo\').show(); return false;">' .
_T('statistiques:info_graphiques') .
'</a>
</div>


' .
(($t1 = BOUCLE_statsmhtml_1aad3e581f0d7e6a8ac68df4a6470154($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<table class=\'visites\' id=\'visites_mensuelles\'>
		<caption>' .
		_T('statistiques:visites_mensuelles') .
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

	return analyse_resultat_skel('html_1aad3e581f0d7e6a8ac68df4a6470154', $Cache, $page, '../plugins-dist/statistiques/prive/squelettes/inclure/stats-visites-mois.html');
}
?>