<?php

/*
 * Squelette : ../plugins/auto/info_spip/v0.11.1/prive/style_prive_plugin_info_spip.html
 * Date :      Wed, 05 Feb 2020 17:19:10 GMT
 * Compile :   Thu, 27 Feb 2020 08:55:15 GMT
 * Boucles :   _module_info
 */ 

function BOUCLE_module_infohtml_fa6a2be6cee09489e678dca95ace9c24(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(lister_noisettes_info_spip('html'));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_module_info';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
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
		array('../plugins/auto/info_spip/v0.11.1/prive/style_prive_plugin_info_spip.html','html_fa6a2be6cee09489e678dca95ace9c24','_module_info',136,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
(($t1 = strval(interdire_scripts(((in_array(safehtml($Pile[$SP]['valeur']),table_valeur($Pile["vars"], (string)'info_config', null))) ?' ' :''))))!=='' ?
		($t1 . (	'
.navigation_avec_icones .bando2_' .
	interdire_scripts(safehtml($Pile[$SP]['valeur'])) .
	' {
	background-image: url(' .
	interdire_scripts(((($a = chemin_image(interdire_scripts(concat(safehtml($Pile[$SP]['valeur']),'-16.png')))) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(chemin_image('info_spip-16.png')))) .
	');
}')) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_module_info @ ../plugins/auto/info_spip/v0.11.1/prive/style_prive_plugin_info_spip.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/info_spip/v0.11.1/prive/style_prive_plugin_info_spip.html
// Temps de compilation total: 1.150 ms
//

function html_fa6a2be6cee09489e678dca95ace9c24($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>/*
Valeurs par defaut :
' .
vide($Pile['vars'][$_zzz=(string)'claire'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_claire', null), 'edf3fe'),true)))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'claire', null)))!=='' ?
		('claire: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'foncee'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_foncee', null), '3874b0'),true)))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'foncee', null)))!=='' ?
		('foncee: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'left'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','left','right'))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'left', null)))!=='' ?
		('left: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'right'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','right','left'))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'right', null)))!=='' ?
		('right: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'rtl'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','','_rtl'))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'rtl', null)))!=='' ?
		('rtl: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'dir'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','ltr','rtl'))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'dir', null)))!=='' ?
		('dir: ' . $t1 . ';') :
		'') .
'

' .
vide($Pile['vars'][$_zzz=(string)'font-size'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'font-size', null), '0.8125em'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'font-size', null)))!=='' ?
		('font-size: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'line-height'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'line-height', null), '1.385em'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'line-height', null)))!=='' ?
		('line-height: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'margin-bottom'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'margin-bottom', null), table_valeur($Pile["vars"], (string)'line-height', null)),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'margin-bottom', null)))!=='' ?
		('margin-bottom: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'text-indent'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'text-indent', null), '50px'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'text-indent', null)))!=='' ?
		('text-indent: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'font-family'] = interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'font-family', null), 'Helvetica, Arial, sans-serif'))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'font-family', null)))!=='' ?
		('font-family: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'background-color'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'background-color', null), '#F8F7F3'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'background-color', null)))!=='' ?
		('background-color : ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'color'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'color', null), '#000000'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'color', null)))!=='' ?
		('color: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'color_success'] = '#c6d880') .
vide($Pile['vars'][$_zzz=(string)'color_notice'] = '#ffd83f') .
vide($Pile['vars'][$_zzz=(string)'color_warning'] = '#df454f') .
vide($Pile['vars'][$_zzz=(string)'color_info'] = '#c5e41c') .
'*/
body.info_config #contenu table {
	width: 100%;
}
body.info_config #contenu .fiche_objet #wysiwyg .champ {
	margin-bottom: 1em;
	overflow: hidden;
	padding-top: 0.5em;
	border-top: 1px solid ' .
table_valeur($Pile["vars"], (string)'claire', null) .
';
}
body.info_config #contenu .fiche_objet #wysiwyg .champ .label.visible {
	display: block;
	width: 30%;
	margin-top:0;
	float: left;
	font-weight: bold;
	color: ' .
table_valeur($Pile["vars"], (string)'color', null) .
';
}
body.info_config #contenu .fiche_objet #wysiwyg .champ .span {
	display:block;
	width: 69%;
	float: right;
}
body.info_config #contenu .fiche_objet #wysiwyg .fieldset {
	margin-top: 2em;
}
body.info_config #contenu .fiche_objet #wysiwyg .fieldset + .liste-objets {
	margin-top: 1em;
}
body.info_config #contenu .fiche_objet #wysiwyg .fieldset .titrem {
	display: block;
	font-weight: bold;
	padding: 7px 5px 7px 10px;
	border-top: 1px solid ' .
table_valeur($Pile["vars"], (string)'color', null) .
';
	background-color: ' .
table_valeur($Pile["vars"], (string)'background-color', null) .
';
	color: ' .
table_valeur($Pile["vars"], (string)'foncee', null) .
';
}


body.accueil #navigation .box.type_site .inner {
	background-color: #ffffff;
	border: 1px solid #cccccc;
}
body.accueil #navigation .box.type_site.type_site_07prod .inner,
body.accueil #navigation .box.type_site.type_site_06prep .inner {
	background-color: ' .
(($t1 = strval(filtrer('couleur_saturation',replace(table_valeur($Pile["vars"], (string)'color_success', null),'#',''),'1')))!=='' ?
		('#' . $t1) :
		'') .
';
	color: ' .
(($t1 = strval(filtrer('couleur_extreme',filtrer('couleur_saturation',replace(table_valeur($Pile["vars"], (string)'color_success', null),'#',''),'1'))))!=='' ?
		('#' . $t1) :
		'') .
';
}
body.accueil #navigation .box.type_site.type_site_05rec .inner,
body.accueil #navigation .box.type_site.type_site_04test .inner {
	background-color: ' .
(($t1 = strval(filtrer('couleur_saturation',replace(table_valeur($Pile["vars"], (string)'color_notice', null),'#',''),'1')))!=='' ?
		('#' . $t1) :
		'') .
';
	color: ' .
(($t1 = strval(filtrer('couleur_extreme',filtrer('couleur_saturation',replace(table_valeur($Pile["vars"], (string)'color_notice', null),'#',''),'1'))))!=='' ?
		('#' . $t1) :
		'') .
';
}
body.accueil #navigation .box.type_site.type_site_03inte .inner,
body.accueil #navigation .box.type_site.type_site_02dev .inner {
	background-color: ' .
(($t1 = strval(filtrer('couleur_saturation',replace(table_valeur($Pile["vars"], (string)'color_warning', null),'#',''),'1')))!=='' ?
		('#' . $t1) :
		'') .
';
	color: ' .
(($t1 = strval(filtrer('couleur_extreme',filtrer('couleur_saturation',replace(table_valeur($Pile["vars"], (string)'color_warning', null),'#',''),'1'))))!=='' ?
		('#' . $t1) :
		'') .
';
}
body.accueil #navigation .box.type_site.type_site_01local .inner {
	background-color: ' .
(($t1 = strval(filtrer('couleur_saturation',replace(table_valeur($Pile["vars"], (string)'color_info', null),'#',''),'1')))!=='' ?
		('#' . $t1) :
		'') .
';
	color: ' .
(($t1 = strval(filtrer('couleur_extreme',filtrer('couleur_saturation',replace(table_valeur($Pile["vars"], (string)'color_info', null),'#',''),'1'))))!=='' ?
		('#' . $t1) :
		'') .
';
}
.box.type_site .inner .bd {
	display: none;
}


body.accueil #navigation .box.info.type_site {
	margin: 2em 0;
}
body.accueil #navigation .box.info.type_site .inner {
	background: none repeat scroll 0 0 #fcfcfc;
	position: relative;
	border: 2px solid ' .
table_valeur($Pile["vars"], (string)'claire', null) .
';
	color: ' .
table_valeur($Pile["vars"], (string)'color', null) .
';
}
body.accueil #navigation .box.info.type_site .inner .hd {
	padding: 0.7em 10px;
}
body.accueil #navigation .box.info.type_site .inner .hd h3 {
	margin-bottom: 0;
	padding: 0;
}

body.accueil #navigation .box.info.type_site .cadre-icone {
	left: 10px;
	position: absolute;
	top: -16px;
	z-index: 1;
	border:0 none;
	margin: 0;
	padding: 0;
}
' .
vide($Pile['vars'][$_zzz=(string)'info_config'] = interdire_scripts((include_spip('inc/config')?lire_config('info_spip/modules',null,false):''))) .
'
' .
(($t1 = BOUCLE_module_infohtml_fa6a2be6cee09489e678dca95ace9c24($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
' . $t1 . '
') :
		'') .
'
');

	return analyse_resultat_skel('html_fa6a2be6cee09489e678dca95ace9c24', $Cache, $page, '../plugins/auto/info_spip/v0.11.1/prive/style_prive_plugin_info_spip.html');
}
?>