<?php

/*
 * Squelette : plugins/auto/spip_proprio/v1.70.5/public/test_proprietaire.html
 * Date :      Wed, 05 Feb 2020 17:17:50 GMT
 * Compile :   Wed, 05 Feb 2020 17:18:57 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/spip_proprio/v1.70.5/public/test_proprietaire.html
// Temps de compilation total: 2.319 ms
//

function html_20c1b085bbdb6d12ea41f34d423d5963($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'docmode', null),true) == 'zpip')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('structure') . ', array_merge('.var_export($Pile[0],1).',array(\'type\' => ' . argumenter_squelette('doc_pubbaner') . ',
	\'composition\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'composition', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'page', null),true))),true))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/spip_proprio/v1.70.5/public/test_proprietaire.html\',\'html_20c1b085bbdb6d12ea41f34d423d5963\',\'\',3,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'docmode', null),true) == 'zpip')) ?'' :' '))))!=='' ?
		($t1 . (	'
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
	spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
	'" lang="' .
	spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
	'" dir="' .
	lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
	'">
<head>
<title>' .
	_T('spipproprio:testing_page_titre') .
	(($t2 = strval(interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])))))!=='' ?
			(' - ' . $t2) :
			'') .
	'</title>
' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'docmode', null),true) == 'brut')) ?'' :' '))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/spip_proprio/v1.70.5/public/test_proprietaire.html\',\'html_20c1b085bbdb6d12ea41f34d423d5963\',\'\',3,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'docmode', null),true) == 'brut')) ?' ' :''))))!=='' ?
			($t2 . '<'.'?php header("X-Spip-Filtre: insert_head_css_conditionnel"); ?'.'>'. pipeline('insert_head','<!-- insert_head -->')) :
			'') .
	'
<meta name="robots" content="none" />
</head>
<body class="page_sommaire">
<div class="page">
	' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'docmode', null),true) == 'brut')) ?'' :' '))))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/spip_proprio/v1.70.5/public/test_proprietaire.html\',\'html_20c1b085bbdb6d12ea41f34d423d5963\',\'\',10,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/nav') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/spip_proprio/v1.70.5/public/test_proprietaire.html\',\'html_20c1b085bbdb6d12ea41f34d423d5963\',\'\',11,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	')) :
			'') .
	'
	<div class="main">
		<div class="wrapper hfeed">
		<div class="content hentry" id="content">
		' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('contenu/test_proprietaire') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/spip_proprio/v1.70.5/public/test_proprietaire.html\',\'html_20c1b085bbdb6d12ea41f34d423d5963\',\'\',17,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		</div><!--.content-->
		</div><!--.wrapper-->
	</div><!--.main-->
	' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'docmode', null),true) == 'brut')) ?'' :' '))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/footer') . ', array_merge('.var_export($Pile[0],1).',array(\'self\' => ' . argumenter_squelette(self()) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/spip_proprio/v1.70.5/public/test_proprietaire.html\',\'html_20c1b085bbdb6d12ea41f34d423d5963\',\'\',17,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'') .
	'
	' .
	(($t2 = strval(executer_balise_dynamique('PROPRIETAIRE',
	array('footer'),
	array('plugins/auto/spip_proprio/v1.70.5/public/test_proprietaire.html','html_20c1b085bbdb6d12ea41f34d423d5963','',18,$GLOBALS['spip_lang']))))!=='' ?
			('<br class="nettoyeur" /><p style="text-align:left;font-size:0.76em;">' . $t2 . '</p>') :
			'') .
	'
</div><!--#page-->
</body>
</html>')) :
		'') .
'
');

	return analyse_resultat_skel('html_20c1b085bbdb6d12ea41f34d423d5963', $Cache, $page, 'plugins/auto/spip_proprio/v1.70.5/public/test_proprietaire.html');
}
?>