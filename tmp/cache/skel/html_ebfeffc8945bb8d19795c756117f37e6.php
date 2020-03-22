<?php

/*
 * Squelette : squelettes/contact.html
 * Date :      Mon, 02 Mar 2020 13:57:09 GMT
 * Compile :   Tue, 03 Mar 2020 03:28:41 GMT
 * Boucles :   _principale
 */ 

function BOUCLE_principalehtml_ebfeffc8945bb8d19795c756117f37e6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_principale';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.id_auteur",
		"auteurs.lang",
		"auteurs.email");
		$command['orderby'] = array('auteurs.id_auteur');
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('NOT', 
			array('=', 'auteurs.email', sql_quote(@$Pile[0]['email'], '','tinytext NOT NULL'))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contact.html','html_ebfeffc8945bb8d19795c756117f37e6','_principale',1,$GLOBALS['spip_lang'])
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
_T('public|spip|ecrire:contact') .
' - ' .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</title>
    ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head') . ', array(\'robots\' => ' . argumenter_squelette('none') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/contact.html\',\'html_ebfeffc8945bb8d19795c756117f37e6\',\'\',11,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</head>
<body class="pas_surlignable page_contact">
    <div class="page">
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/contact.html\',\'html_ebfeffc8945bb8d19795c756117f37e6\',\'\',15,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/nav') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes/contact.html\',\'html_ebfeffc8945bb8d19795c756117f37e6\',\'\',16,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
        <div class="main">
            <div class="wrapper">
            <div class="content" id="content">
                <p class="arbo"><a href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/">' .
_T('public|spip|ecrire:accueil_site') .
'</a> &gt; <strong class="on">' .
_T('public|spip|ecrire:contact') .
'</strong></p>
                <div class="cartouche">
                    <h1>' .
_T('public|spip|ecrire:contact') .
'</h1>
                </div>
                ' .
executer_balise_dynamique('FORMULAIRE_ECRIRE_AUTEUR',
	array($Pile[$SP]['id_auteur'],@$Pile[0]['id_article'],$Pile[$SP]['email']),
	array('squelettes/contact.html','html_ebfeffc8945bb8d19795c756117f37e6','_principale',24,$GLOBALS['spip_lang'])) .
'
            </div><!--.content-->
            </div><!--.wrapper-->
            <div class="aside">
                ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/navsub') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/contact.html\',\'html_ebfeffc8945bb8d19795c756117f37e6\',\'\',28,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
            </div><!--.aside-->
        </div><!--.main-->
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/footer') . ', array_merge('.var_export($Pile[0],1).',array(\'self\' => ' . argumenter_squelette(self()) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes/contact.html\',\'html_ebfeffc8945bb8d19795c756117f37e6\',\'\',31,$GLOBALS[\'spip_lang\'])), _request("connect"));
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
		spip_log(intval(1000*$timer)."ms BOUCLE_principale @ squelettes/contact.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/contact.html
// Temps de compilation total: 319.780 ms
//

function html_ebfeffc8945bb8d19795c756117f37e6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_principalehtml_ebfeffc8945bb8d19795c756117f37e6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		(recuperer_fond( '404' , array('erreur' => _T('public|spip|ecrire:aucun_auteur') ), array('compil'=>array('squelettes/contact.html','html_ebfeffc8945bb8d19795c756117f37e6','',36,$GLOBALS['spip_lang'])), _request('connect'))));

	return analyse_resultat_skel('html_ebfeffc8945bb8d19795c756117f37e6', $Cache, $page, 'squelettes/contact.html');
}
?>