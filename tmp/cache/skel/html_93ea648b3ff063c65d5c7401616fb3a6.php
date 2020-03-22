<?php

/*
 * Squelette : prive/spip_pass.html
 * Date :      Mon, 10 Feb 2020 16:50:04 GMT
 * Compile :   Sun, 01 Mar 2020 17:05:14 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/spip_pass.html
// Temps de compilation total: 118.018 ms
//

function html_93ea648b3ff063c65d5c7401616fb3a6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<'.'?php header(' . _q((	'Content-Type: text/html; charset=' .
	interdire_scripts($GLOBALS['meta']['charset']))) . '); ?'.'><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'">
<head>
<title>' .
_T('public|spip|ecrire:pass_mot_oublie') .
' - ' .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</title>
<meta http-equiv="Content-Type" content="text/html; charset=' .
interdire_scripts($GLOBALS['meta']['charset']) .
'" />
<meta name="robots" content="none" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="' .
direction_css(find_in_theme('reset.css')) .
'" type="text/css" />
<link rel="stylesheet" href="' .
direction_css(find_in_theme('clear.css')) .
'" type="text/css" />
<link rel="stylesheet" href="' .
direction_css(find_in_theme('minipres.css')) .
'" type="text/css" />
' .
'<'.'?php header("X-Spip-Filtre: insert_head_css_conditionnel"); ?'.'>'. pipeline('insert_head','<!-- insert_head -->') .
'
<meta name="generator" content="SPIP' .
(($t1 = strval(spip_version()))!=='' ?
		(' ' . $t1) :
		'') .
'" />
</head>
<body>

<div id=\'minipres\'>

	<h1>' .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
'</h1>
		
	<div class="formulaire_spip pass">
		' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'p', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'
		  ' .
	executer_balise_dynamique('FORMULAIRE_OUBLI',
	array(),
	array('prive/spip_pass.html','html_93ea648b3ff063c65d5c7401616fb3a6','',11,$GLOBALS['spip_lang'])) .
	'
		')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'p', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
		  ' .
	executer_balise_dynamique('FORMULAIRE_MOT_DE_PASSE',
	array(),
	array('prive/spip_pass.html','html_93ea648b3ff063c65d5c7401616fb3a6','',12,$GLOBALS['spip_lang'])) .
	'
		')) :
		'') .
'
	</div>
	<div class="quitter_fenetre">
	<script type=\'text/javascript\'>/*<![CDATA[*/
	document.write("<a href=\'")
	document.write((window.opener) ? "javascript:close()" : "' .
interdire_scripts(generer_url_public('login', '')) .
'")
	document.write("\' title=\'' .
_T('public|spip|ecrire:pass_quitter_fenetre') .
'\'>' .
_T('public|spip|ecrire:pass_quitter_fenetre') .
'<" + "/a>");
	document.getElementById(\'oubli\').focus()
	/*]]>*/</script>
	<noscript>
		<a href=\'' .
interdire_scripts(parametre_url(generer_url_public('login', ''),'lang',spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']))) .
'\' title=\'' .
_T('public|spip|ecrire:lien_connecter') .
'\'>' .
_T('public|spip|ecrire:lien_connecter') .
'</a>
	</noscript>
	</div>
	
</div><!--#minipres-->

</body>
</html>');

	return analyse_resultat_skel('html_93ea648b3ff063c65d5c7401616fb3a6', $Cache, $page, 'prive/spip_pass.html');
}
?>