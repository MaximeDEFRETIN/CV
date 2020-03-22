<?php

/*
 * Squelette : ../plugins/auto/pages/v1.4.0/prive/squelettes/contenu/pages.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Sun, 08 Mar 2020 10:06:19 GMT
 * Boucles :   _pages_utiles
 */ 

function BOUCLE_pages_utileshtml_c7d3c2e91f7798e3687877ccfef33d20(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(pages_uniques_utiles(''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_pages_utiles';
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
		array('../plugins/auto/pages/v1.4.0/prive/squelettes/contenu/pages.html','html_c7d3c2e91f7798e3687877ccfef33d20','_pages_utiles',27,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_pages_utiles']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<li>
		' .
bouton_action(_T('pages:bouton_generer_page_utile', array('titre' => interdire_scripts(safehtml($Pile[$SP]['valeur'])),
'page' => interdire_scripts(safehtml($Pile[$SP]['cle'])))),invalideur_session($Cache, safehtml(generer_action_auteur('generer_pages_uniques_utiles',interdire_scripts(invalideur_session($Cache, safehtml($Pile[$SP]['cle']))),invalideur_session($Cache, self()))))) .
'
	</li>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_pages_utiles @ ../plugins/auto/pages/v1.4.0/prive/squelettes/contenu/pages.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/pages/v1.4.0/prive/squelettes/contenu/pages.html
// Temps de compilation total: 25.426 ms
//

function html_c7d3c2e91f7798e3687877ccfef33d20($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('voir', '_pages')?" ":""))) .
'
<h1 class="grostitre">' .
_T('pages:toutes_les_pages') .
'</h1>

' .
vide($Pile['vars'][$_zzz=(string)'statuts'] = interdire_scripts(invalideur_session($Cache, statuts_articles_visibles(table_valeur($GLOBALS["visiteur_session"], (string)'statut', null))))) .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'id_auteur', null), ''),true) == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null))))) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'statuts'] = array_merge(table_valeur($Pile["vars"], (string)'statuts', null),array('prepa'))))) :
		'') .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/pages') . ', array_merge('.var_export($Pile[0],1).',array(\'id_rubrique\' => ' . argumenter_squelette('-1') . ',
	\'statut\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'statuts', null)) . ',
	\'id_auteur\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_auteur', null), ''),true))) . ',
	\'nb\' => ' . argumenter_squelette('30') . ',
	\'titre\' => ' . argumenter_squelette(_T('pages:toutes_les_pages')) . ',
	\'sinon\' => ' . argumenter_squelette(_T('pages:aucune_page')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/pages/v1.4.0/prive/squelettes/contenu/pages.html\',\'html_c7d3c2e91f7798e3687877ccfef33d20\',\'\',6,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>

' .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creer', 'page')?" ":""))))!=='' ?
		($t1 . (	'
	' .
	filtre_icone_verticale_dist(parametre_url(parametre_url(parametre_url(generer_url_ecrire('article_edit'),'modele','page'),'new','oui'),'id_rubrique','-1'),_T('pages:creer_page'),'page','new','right') .
	'
')) :
		'') .
'


' .
(($t1 = BOUCLE_pages_utileshtml_c7d3c2e91f7798e3687877ccfef33d20($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<h2>' .
		_T('pages:titre_pages_utiles') .
		'</h2>
<p class="explication">' .
		_T('pages:explication_pages_utiles') .
		'</p>
<ul>
	') . $t1 . (	'
	' .
		((($Numrows['_pages_utiles']['total'] > '1'))  ?
				(' ' . (	'
	<li class="tous">
		' .
			bouton_action(_T('pages:bouton_generer_pages_utiles'),invalideur_session($Cache, generer_action_auteur('generer_pages_uniques_utiles',invalideur_session($Cache, ''),invalideur_session($Cache, self())))) .
			'
	</li>
	')) :
				'') .
		'
</ul>
')) :
		''));

	return analyse_resultat_skel('html_c7d3c2e91f7798e3687877ccfef33d20', $Cache, $page, '../plugins/auto/pages/v1.4.0/prive/squelettes/contenu/pages.html');
}
?>