<?php

/*
 * Squelette : ../plugins-dist/aide/prive/squelettes/contenu/aide.html
 * Date :      Mon, 10 Feb 2020 16:50:18 GMT
 * Compile :   Thu, 27 Feb 2020 09:09:55 GMT
 * Boucles :   _menu
 */ 

function BOUCLE_menuhtml_93f857a1e2a28bcb0212ff8a8e86cab1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(interdire_scripts(aide_menu(entites_html(table_valeur(@$Pile[0], (string)'aide', null),true))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_menu';
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
		array('../plugins-dist/aide/prive/squelettes/contenu/aide.html','html_93f857a1e2a28bcb0212ff8a8e86cab1','_menu',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
(($t1 = strval(interdire_scripts((((safehtml(table_valeur($Pile[$SP]['valeur'], '1')) == '1')) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	table_valeur($Pile["vars"], (string)'close', null) .
	'<div class=\'liste\'><h3>' .
	interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], '2'))) .
	'</h3>
			<ul class="liste-items">
			' .
	vide($Pile['vars'][$_zzz=(string)'close'] = '</ul></div>'))) :
		'') .
(($t1 = strval(interdire_scripts((((safehtml(table_valeur($Pile[$SP]['valeur'], '1')) == '2')) ?' ' :''))))!=='' ?
		($t1 . (	'
			' .
	(((table_valeur($Pile["vars"], (string)'next', null) == 'next'))  ?
			(' ' . vide($Pile['vars'][$_zzz=(string)'next'] = interdire_scripts(safehtml($Pile[$SP]['valeur'])))) :
			'') .
	'
			<li class="item' .
	(($t2 = strval(interdire_scripts((((safehtml(table_valeur($Pile[$SP]['valeur'], '2')) == interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'aide', null),true)))) ?' ' :''))))!=='' ?
			($t2 . (	'on' .
		vide($Pile['vars'][$_zzz=(string)'next'] = 'next'))) :
			'') .
	'"><a
							onclick="jQuery(this).closest(\'#cboxLoadedContent\').scrollTop(0);"
							href=\'' .
	parametre_url(self(),'aide',interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], '2')))) .
	'#contenu-aide\' class="ajax">' .
	interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], '3'))) .
	'</a></li>
			' .
	(!(table_valeur($Pile["vars"], (string)'next', null))  ?
			(' ' . vide($Pile['vars'][$_zzz=(string)'prev'] = interdire_scripts(safehtml($Pile[$SP]['valeur'])))) :
			'') .
	'
		')) :
		'') .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_menu @ ../plugins-dist/aide/prive/squelettes/contenu/aide.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/aide/prive/squelettes/contenu/aide.html
// Temps de compilation total: 1.088 ms
//

function html_93f857a1e2a28bcb0212ff8a8e86cab1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div style="float:' .
lang_dir(@$Pile[0]['lang'], 'left','right') .
';width:200px;">
	' .
vide($Pile['vars'][$_zzz=(string)'close'] = '') .
vide($Pile['vars'][$_zzz=(string)'prev'] = '') .
vide($Pile['vars'][$_zzz=(string)'next'] = '') .
'<ul>
	' .
BOUCLE_menuhtml_93f857a1e2a28bcb0212ff8a8e86cab1($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		' .
table_valeur($Pile["vars"], (string)'close', null) .
'</ul>
</div>
' .
(!(table_valeur($Pile["vars"], (string)'next', null))  ?
		(' ' . vide($Pile['vars'][$_zzz=(string)'prev'] = '')) :
		'') .
'
<div class="contenu-aide" id="contenu-aide" lang="' .
interdire_scripts(aide_changer_langue(eval('return '.'_request(\'var_lang_r\')'.';'),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lang_r', null),true)))) .
'" style="position:relative;margin-' .
lang_dir(@$Pile[0]['lang'], 'left','right') .
':220px;">
	' .
interdire_scripts(((($a = filtrer('image_graver', filtrer('image_reduire',aide_extrait_section(entites_html(table_valeur(@$Pile[0], (string)'aide', null),true)),'500'))) OR (is_string($a) AND strlen($a))) ? $a : (	(($t2 = strval(interdire_scripts(filtre_balise_img_dist(chemin_image('logo-spip.png'),'SPIP'))))!=='' ?
			('<div style=\'text-align:center;\'>
			' . $t2 . (	'
			<p style=\'font-variant: small-caps;\'>
			Syst&egrave;me de publication pour l\'Internet
			</p>
		</div>
		<p style=\'text-align:center;\'>
		' .
		vide($Pile['vars'][$_zzz=(string)'doc'] = interdire_scripts(concat(table_valeur(eval('return '.'$GLOBALS'.';'),'home_server'),'/',interdire_scripts(table_valeur(eval('return '.'$GLOBALS'.';'),'spip_lang'))))) .
		_T('public|spip|ecrire:info_copyright_doc', array('spipnet' => table_valeur($Pile["vars"], (string)'doc', null),
'spipnet_affiche' => table_valeur($Pile["vars"], (string)'doc', null))) .
		'
		</p>')) :
			'') .
	'
	'))) .
'
	<p>
		' .
(($t1 = strval(table_valeur(table_valeur($Pile["vars"], (string)'prev', null),'3')))!=='' ?
		((	'<a onclick="jQuery(this).closest(\'#cboxLoadedContent\').scrollTop(0);"
				href="' .
	parametre_url(self(),'aide',table_valeur(table_valeur($Pile["vars"], (string)'prev', null),'2')) .
	'#contenu-aide" class="ajax">&lt; ') . $t1 . '</a> | ') :
		'') .
'
		' .
(($t1 = strval(table_valeur(table_valeur($Pile["vars"], (string)'next', null),'3')))!=='' ?
		((	'<a onclick="jQuery(this).closest(\'#cboxLoadedContent\').scrollTop(0);"
				href="' .
	parametre_url(self(),'aide',table_valeur(table_valeur($Pile["vars"], (string)'next', null),'2')) .
	'#contenu-aide" class="ajax">') . $t1 . ' &gt;</a>') :
		'') .
'
	</p>
</div>


');

	return analyse_resultat_skel('html_93f857a1e2a28bcb0212ff8a8e86cab1', $Cache, $page, '../plugins-dist/aide/prive/squelettes/contenu/aide.html');
}
?>