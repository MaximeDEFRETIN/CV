<?php

/*
 * Squelette : squelettes/auteur.html
 * Date :      Mon, 02 Mar 2020 13:57:11 GMT
 * Compile :   Fri, 06 Mar 2020 06:45:58 GMT
 * Boucles :   _articles, _auteurs, _principale
 */ 

function BOUCLE_articleshtml_ce97d1249b67fffb20134bd49b8a9e29(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_articles']) ? $Pile[0]['debut_articles'] : null), 10);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.popularite",
		"articles.id_article",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.popularite DESC');
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
			array('=', 'L1.id_auteur', sql_quote($Pile[$SP]['id_auteur'], '','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/auteur.html','html_ce97d1249b67fffb20134bd49b8a9e29','_articles',35,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_articles']['compteur_boucle'] = 0;
	$Numrows['_articles']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_articles']) ? $Pile[0]['debut_articles'] : _request('debut_articles');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_articles'] = quete_debut_pagination('id_article',$Pile[0]['@id_article'] = substr($debut_boucle,1),10,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_articles']['total']-1)/(10))*(10)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_articles']['total'] : $debut_boucle + 9), $Numrows['_articles']['total'] - 1);
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
                                <ol><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></ol>
                                ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles @ squelettes/auteur.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_auteurshtml_ce97d1249b67fffb20134bd49b8a9e29(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_auteurs']) ? $Pile[0]['debut_auteurs'] : null), 20);
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_auteurs';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens','L2' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array("auteurs.id_auteur");
		$command['select'] = array("auteurs.nom",
		"auteurs.id_auteur");
		$command['orderby'] = array('auteurs.nom');
		$command['where'] = 
			array(
quete_condition_statut('L2.statut','!','publie',''), 
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''));
		$command['join'] = array('L1' => array('auteurs','id_auteur'), 'L2' => array('L1','id_article','id_objet','L1.objet='.sql_quote('article')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/auteur.html','html_ce97d1249b67fffb20134bd49b8a9e29','_auteurs',59,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_auteurs']['compteur_boucle'] = 0;
	$Numrows['_auteurs']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_auteurs']) ? $Pile[0]['debut_auteurs'] : _request('debut_auteurs');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_auteurs'] = quete_debut_pagination('id_auteur',$Pile[0]['@id_auteur'] = substr($debut_boucle,1),20,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_auteurs']['total']-1)/(20))*(20)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_auteurs']['total'] : $debut_boucle + 19), $Numrows['_auteurs']['total'] - 1);
	$Numrows['_auteurs']['grand_total'] = $Numrows['_auteurs']['total'];
	$Numrows['_auteurs']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_auteurs']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_auteurs']['compteur_boucle'] = $debut_boucle;
	
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_auteurs']['compteur_boucle']++;
		if ($Numrows['_auteurs']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_auteurs']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
                        <li><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_auteur'], 'auteur', '', '', true))) .
'"' .
(calcul_exposer($Pile[$SP]['id_auteur'], 'id_auteur', $Pile[0], '', 'id_auteur', '')  ?
		(' class="' . 'on' . '"') :
		'') .
'>' .
interdire_scripts(couper(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0]),'80')) .
'</a></li>
                        ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_auteurs @ squelettes/auteur.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_principalehtml_ce97d1249b67fffb20134bd49b8a9e29(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_principale';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens','L2' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array("auteurs.id_auteur");
		$command['select'] = array("auteurs.id_auteur",
		"auteurs.lang",
		"auteurs.nom",
		"auteurs.bio",
		"auteurs.url_site",
		"auteurs.nom_site",
		"auteurs.email");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('auteurs','id_auteur'), 'L2' => array('L1','id_article','id_objet','L1.objet='.sql_quote('article')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('L2.statut','!','publie',''), 
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('=', 'auteurs.id_auteur', sql_quote(@$Pile[0]['id_auteur'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/auteur.html','html_ce97d1249b67fffb20134bd49b8a9e29','_principale',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie6"> <![endif]-->
<!--[if IE 7 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie7"> <![endif]-->
<!--[if IE 8 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js"> <!--<![endif]-->
<head>
    <script type=\'text/javascript\'>/*<![CDATA[*/(function(H){H.className=H.className.replace(/\\bno-js\\b/,\'js\')})(document.documentElement);/*]]>*/</script>
    <title>' .
(($t1 = strval(interdire_scripts(textebrut(couper(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0]),'80')))))!=='' ?
		($t1 . ' - ') :
		'') .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</title>
    ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head') . ', array(\'robots\' => ' . argumenter_squelette('none') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/auteur.html\',\'html_ce97d1249b67fffb20134bd49b8a9e29\',\'\',11,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
    <link rel="alternate" type="application/rss+xml" title="' .
interdire_scripts(textebrut(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0]))) .
'" href="' .
interdire_scripts(parametre_url(generer_url_public('backend', ''),'id_auteur',$Pile[$SP]['id_auteur'])) .
'" />
</head>
<body class="pas_surlignable page_auteur">
    <div class="page">
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/auteur.html\',\'html_ce97d1249b67fffb20134bd49b8a9e29\',\'\',16,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/nav') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes/auteur.html\',\'html_ce97d1249b67fffb20134bd49b8a9e29\',\'\',17,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
        <div class="main">
            
            <div class="wrapper">
                <div class="content" id="content">
                    <p class="arbo"><a href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/">' .
_T('public|spip|ecrire:accueil_site') .
'</a> &gt; ' .
_T('public|spip|ecrire:info_auteurs') .
(($t1 = strval(interdire_scripts(couper(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0]),'80'))))!=='' ?
		(' &gt; <strong class="on">' . $t1 . '</strong>') :
		'') .
'</p>
                    <div class="vcard">
                    <div class="cartouche">
                        ' .
filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'224','*')) .
'
                        <h1 class="fn">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) .
'</h1>
                    </div>

                    ' .
(($t1 = strval(interdire_scripts(propre($Pile[$SP]['bio'], $connect, $Pile[0]))))!=='' ?
		((	'<div class="texte note">') . $t1 . '</div>') :
		'') .
'
                    ' .
(($t1 = strval(calculer_url($Pile[$SP]['url_site'],'','url', $connect)))!=='' ?
		((	'<p class="hyperlien">' .
	_T('public|spip|ecrire:voir_en_ligne') .
	' : <a href="') . $t1 . (	'" class="url org spip_out">' .
	interdire_scripts(((($a = typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : couper(calculer_url($Pile[$SP]['url_site'],'','url', $connect),'80'))) .
	'</a></p>')) :
		'') .
'
                    </div>

                    
                    ' .
(($t1 = BOUCLE_articleshtml_ce97d1249b67fffb20134bd49b8a9e29($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
                        <div class="menu">
                            ' .
		filtre_pagination_dist($Numrows["_articles"]["grand_total"],
 		'_articles',
		isset($Pile[0]['debut_articles'])?$Pile[0]['debut_articles']:intval(_request('debut_articles')),
		10, false, '', '', array()) .
		'
                            <h2>' .
		_T('public|spip|ecrire:articles_auteur') .
		' (' .
		(isset($Numrows['_articles']['grand_total'])
			? $Numrows['_articles']['grand_total'] : $Numrows['_articles']['total']) .
		')</h2>
                            <ul class="spip">
                                ') . $t1 . (	'
                            </ul>
                            ' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_articles"]["grand_total"],
 		'_articles',
		isset($Pile[0]['debut_articles'])?$Pile[0]['debut_articles']:intval(_request('debut_articles')),
		10, true, '', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
                        </div>
                    ')) :
		'') .
'

                    ' .
executer_balise_dynamique('FORMULAIRE_ECRIRE_AUTEUR',
	array($Pile[$SP]['id_auteur'],@$Pile[0]['id_article'],$Pile[$SP]['email']),
	array('squelettes/auteur.html','html_ce97d1249b67fffb20134bd49b8a9e29','_principale',48,$GLOBALS['spip_lang'])) .
'

                    ' .
(($t1 = strval(interdire_scripts(calculer_notes())))!=='' ?
		('<div class="notes"><hr />' . $t1 . '</div>') :
		'') .
'

                </div><!--.content-->
            </div><!--.wrapper-->
            <div class="aside">
                ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/navsub') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/auteur.html\',\'html_ce97d1249b67fffb20134bd49b8a9e29\',\'\',55,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
                

                
                ' .
(($t1 = BOUCLE_auteurshtml_ce97d1249b67fffb20134bd49b8a9e29($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
                <div class="menu">
                    ' .
		filtre_pagination_dist($Numrows["_auteurs"]["grand_total"],
 		'_auteurs',
		isset($Pile[0]['debut_auteurs'])?$Pile[0]['debut_auteurs']:intval(_request('debut_auteurs')),
		20, false, '', '', array()) .
		'
                    <h2>' .
		_T('public|spip|ecrire:info_auteurs') .
		'</h2>
                    <ul>
                        ') . $t1 . (	'
                    </ul>
                    ' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_auteurs"]["grand_total"],
 		'_auteurs',
		isset($Pile[0]['debut_auteurs'])?$Pile[0]['debut_auteurs']:intval(_request('debut_auteurs')),
		20, true, '', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
                </div>
                ')) :
		'') .
'
            </div><!--.aside-->
        </div><!--.main-->
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/footer') . ', array_merge('.var_export($Pile[0],1).',array(\'self\' => ' . argumenter_squelette(self()) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes/auteur.html\',\'html_ce97d1249b67fffb20134bd49b8a9e29\',\'\',73,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
    </div><!--.page-->
</body>
</html>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_principale @ squelettes/auteur.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/auteur.html
// Temps de compilation total: 318.195 ms
//

function html_ce97d1249b67fffb20134bd49b8a9e29($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = BOUCLE_principalehtml_ce97d1249b67fffb20134bd49b8a9e29($Cache, $Pile, $doublons, $Numrows, $SP);

	return analyse_resultat_skel('html_ce97d1249b67fffb20134bd49b8a9e29', $Cache, $page, 'squelettes/auteur.html');
}
?>