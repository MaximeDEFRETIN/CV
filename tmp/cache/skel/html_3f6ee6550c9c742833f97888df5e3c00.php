<?php

/*
 * Squelette : ../plugins/auto/simplog/v1.4.4/prive/style_prive_plugin_simplog.html
 * Date :      Fri, 20 Dec 2019 11:26:28 GMT
 * Compile :   Sun, 08 Mar 2020 10:02:23 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/simplog/v1.4.4/prive/style_prive_plugin_simplog.html
// Temps de compilation total: 0.391 ms
//

function html_3f6ee6550c9c742833f97888df5e3c00($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>' .
vide($Pile['vars'][$_zzz=(string)'claire'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_claire', null), 'edf3fe'),true)))) .
vide($Pile['vars'][$_zzz=(string)'foncee'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_foncee', null), '3874b0'),true)))) .
vide($Pile['vars'][$_zzz=(string)'left'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','left','right'))) .
vide($Pile['vars'][$_zzz=(string)'right'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','right','left'))) .
'/* La caption du tableau qui porte le nom du log, les actions et les filtres */
.simplog .caption {padding-bottom: 2em;}
/* -- le nom du log */
.simplog .caption .log {font-size: 125%; font-style: bold; text-align: left;}
/* -- les actions sur le log */
.simplog .caption .action {text-align: center;}
.simplog .caption .bouton_action_post .submit {background-color: transparent;}
.simplog .caption .bouton_action_post button:hover {cursor: pointer;}
.simplog .caption .action a {padding: 1px 5px; margin-bottom: 3px; margin-top: 3px; background-color: transparent;}
/* -- les filtres sur les enregistrements du log */
.simplog .caption .filtre {text-align: right;}

/* Les boutons de sens de tri (thead) et la pagination (thead et tfoot) */
.simplog .pagination {margin: 0; border: 0; padding: 0.5em; background-color: ' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true),'0.4'))))!=='' ?
		('#' . $t1) :
		'') .
';}
.simplog .pagination .on {background-color: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
'; font-style: normal;}
.simplog .pagination .sep,
.simplog .pagination a {font-style: normal;}

.simplog .navigation,
.simplog .sens {padding: 0;}
.simplog .navigation .pagination {text-align: ' .
table_valeur($Pile["vars"], (string)'left', null) .
';}
.simplog .first_row .navigation {border-right: 0;}
.simplog .sens .pagination {text-align: ' .
table_valeur($Pile["vars"], (string)'right', null) .
';}
.simplog .first_row .sens {border-left: 0;}


');

	return analyse_resultat_skel('html_3f6ee6550c9c742833f97888df5e3c00', $Cache, $page, '../plugins/auto/simplog/v1.4.4/prive/style_prive_plugin_simplog.html');
}
?>