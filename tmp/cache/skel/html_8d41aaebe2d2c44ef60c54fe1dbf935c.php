<?php

/*
 * Squelette : squelettes/inclure/header.html
 * Date :      Mon, 02 Mar 2020 13:57:20 GMT
 * Compile :   Mon, 02 Mar 2020 14:03:20 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inclure/header.html
// Temps de compilation total: 0.753 ms
//

function html_8d41aaebe2d2c44ef60c54fe1dbf935c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<header class="clearfix header">
    ' .
interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'home', null), 'non'),true) == 'oui') ? (	'<h1 class="spip_logo_site">' .
	filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'224','96')) .
	interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
	'</h1>
    '):(	'<strong class="h1 spip_logo_site"><a rel="start home" href="' .
	spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
	'/" title="' .
	_T('public|spip|ecrire:accueil_site') .
	'">' .
	filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'224','96')) .
	interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
	'</a></strong>
    '))) .
(($t1 = strval(interdire_scripts(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0]))))!=='' ?
		('<p id="slogan">' . $t1 . '</p>') :
		'') .
'
</header>');

	return analyse_resultat_skel('html_8d41aaebe2d2c44ef60c54fe1dbf935c', $Cache, $page, 'squelettes/inclure/header.html');
}
?>