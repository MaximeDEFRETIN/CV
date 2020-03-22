<?php

/*
 * Squelette : ../plugins/auto/article_accueil/v1.2.2/inclure/inc-article_accueil.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Sun, 08 Mar 2020 10:18:04 GMT
 * Boucles :   _article
 */ 

function BOUCLE_articlehtml_b5191aa074513c97bd75dcf1187e39a4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_statuts', null),true))))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_article';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.statut",
		"articles.id_article",
		"articles.lang",
		"articles.titre AS titre_rang",
		"articles.titre");
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!sql_quote($in) OR sql_quote($in)==="''") ? 0 : ('FIELD(articles.statut,' . sql_quote($in) . ')')));
	$command['where'] = 
			array(
			array('=', 'articles.id_article', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_article_accueil', null),true)), '', 'bigint(21) NOT NULL AUTO_INCREMENT')), sql_in('articles.statut',sql_quote($in)), @$Pile[0]["where"]);
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/article_accueil/v1.2.2/inclure/inc-article_accueil.html','html_b5191aa074513c97bd75dcf1187e39a4','_article',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					<td class=\'statut\'>' .
interdire_scripts(filtre_puce_statut_dist($Pile[$SP]['statut'],'article')) .
'</td>
					<td class=\'titre principale\'>
						<a href="' .
generer_url_entite($Pile[$SP]['id_article'],'article') .
'"
							' .
(($t1 = strval(interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'lang', null),true) == spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']))) ?'' :' ') ? spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']):''))))!=='' ?
		('hreflang="' . $t1 . '"') :
		'') .
'
							title="' .
attribut_html(_T('public|spip|ecrire:info_numero_abbreviation')) .
' ' .
$Pile[$SP]['id_article'] .
'">
							' .
(($t1 = strval(recuperer_numero($Pile[$SP]['titre_rang'])))!=='' ?
		($t1 . '. ') :
		'') .
'<strong>' .
interdire_scripts(((($a = trim(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre'))) .
'</strong>
						</a>
					</td>
					<td class=\'id\'>' .
$Pile[$SP]['id_article'] .
'</td>
	');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_article @ ../plugins/auto/article_accueil/v1.2.2/inclure/inc-article_accueil.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/article_accueil/v1.2.2/inclure/inc-article_accueil.html
// Temps de compilation total: 1.956 ms
//

function html_b5191aa074513c97bd75dcf1187e39a4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="article_accueil-titre">
	<div class="liste-objets article-accueil">
		<table class=\'spip liste\'>
			<tbody>
				<tr class="row_odd">
	' .
(($t1 = BOUCLE_articlehtml_b5191aa074513c97bd75dcf1187e39a4($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . '
	') :
		((	'
					<td class=\'titre principale\'>
						' .
	_T('article_accueil:aucun_article_accueil') .
	'
					</td>
	'))) .
'
				</tr>
			</tbody>
		</table>
	</div>
</div>
');

	return analyse_resultat_skel('html_b5191aa074513c97bd75dcf1187e39a4', $Cache, $page, '../plugins/auto/article_accueil/v1.2.2/inclure/inc-article_accueil.html');
}
?>