<?php

/*
 * Squelette : ../plugins-dist/medias/modeles/doc.html
 * Date :      Mon, 10 Feb 2020 16:50:15 GMT
 * Compile :   Thu, 27 Feb 2020 08:56:57 GMT
 * Boucles :   _doc
 */ 

function BOUCLE_dochtml_148fdecb197e3aadcd723460191102c8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_doc';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_types_documents');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("documents.mode",
		"documents.id_document",
		"documents.largeur",
		"documents.hauteur",
		"L1.titre AS type_document",
		"documents.taille",
		"documents.media",
		"documents.titre",
		"L1.mime_type",
		"documents.descriptif");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('documents','extension'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'documents.id_document', sql_quote(@$Pile[0]['id_document'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/modeles/doc.html','html_148fdecb197e3aadcd723460191102c8','_doc',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'

' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'mode_force', null), interdire_scripts($Pile[$SP]['mode'])),true) == 'image')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'fichier'] = vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true)))) .
	vide($Pile['vars'][$_zzz=(string)'width'] = interdire_scripts($Pile[$SP]['largeur'])) .
	vide($Pile['vars'][$_zzz=(string)'height'] = interdire_scripts($Pile[$SP]['hauteur'])) .
	vide($Pile['vars'][$_zzz=(string)'url'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lien', null),true))))) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'mode_force', null), interdire_scripts($Pile[$SP]['mode'])),true) == 'image')) ?'' :' '))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'fichier'] = extraire_attribut(quete_logo_document(quete_document($Pile[$SP]['id_document'], ''), '', '', '', 0, 0, ''),'src')) .
	'
	' .
	vide($Pile['vars'][$_zzz=(string)'width'] = extraire_attribut(quete_logo_document(quete_document($Pile[$SP]['id_document'], ''), '', '', '', 0, 0, ''),'width')) .
	'
	' .
	vide($Pile['vars'][$_zzz=(string)'height'] = extraire_attribut(quete_logo_document(quete_document($Pile[$SP]['id_document'], ''), '', '', '', 0, 0, ''),'height')) .
	'
	' .
	vide($Pile['vars'][$_zzz=(string)'url'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'lien', null), vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true)))),true))))) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'largeur', null), '0'),true)) OR (interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'hauteur', null), '0'),true)))) ?' ' :''))))!=='' ?
		('
' . $t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'fichier'] = filtrer('image_graver',filtrer('image_reduire',table_valeur($Pile["vars"], (string)'fichier', null),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'largeur', null), '0'),true)),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'hauteur', null), '0'),true))))) .
	vide($Pile['vars'][$_zzz=(string)'width'] = largeur(table_valeur($Pile["vars"], (string)'fichier', null))) .
	vide($Pile['vars'][$_zzz=(string)'height'] = hauteur(table_valeur($Pile["vars"], (string)'fichier', null))) .
	vide($Pile['vars'][$_zzz=(string)'fichier'] = extraire_attribut(table_valeur($Pile["vars"], (string)'fichier', null),'src')))) :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'title'] = (($t2 = strval(interdire_scripts($Pile[$SP]['type_document'])))!=='' ?
			($t2 . (	' - ' .
		interdire_scripts(taille_en_octets($Pile[$SP]['taille'])))) :
			'')) .
'
' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['media'] == 'image')) ?' ' :''))))!=='' ?
		($t1 . (	' ' .
	vide($Pile['vars'][$_zzz=(string)'title'] = interdire_scripts(((($a = supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : table_valeur($Pile["vars"], (string)'title', null)))))) :
		'') .
'
<dl class=\'spip_document_' .
$Pile[$SP]['id_document'] .
' spip_documents' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'align', null),true))))!=='' ?
		(' spip_documents_' . $t1) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
		(' ' . $t1) :
		'') .
' spip_lien_ok\'' .
(($t1 = strval(interdire_scripts(match(entites_html(table_valeur(@$Pile[0], (string)'align', null),true),'left|right'))))!=='' ?
		('
	style=\'float:' . $t1 . ';\'') :
		'') .
'>
<dt>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'url', null)))!=='' ?
		('<a href="' . $t1 . (	'"' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lien_class', null),true))))!=='' ?
			('
	class="' . $t2 . '"') :
			'') .
	' title=\'' .
	attribut_html(table_valeur($Pile["vars"], (string)'title', null)) .
	'\'' .
	(($t2 = strval(interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'lien', null),true) ? '':(	'type="' .
		interdire_scripts($Pile[$SP]['mime_type']) .
		'"')))))!=='' ?
			('
	' . $t2) :
			'') .
	'>')) :
		'') .
'<img src=\'' .
table_valeur($Pile["vars"], (string)'fichier', null) .
'\' width=\'' .
table_valeur($Pile["vars"], (string)'width', null) .
'\' height=\'' .
table_valeur($Pile["vars"], (string)'height', null) .
'\' alt=\'\' />' .
(table_valeur($Pile["vars"], (string)'url', null) ? '</a>':'') .
'</dt>' .
(($t1 = strval(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))))!=='' ?
		((	'
<dt class=\'' .
	'spip_doc_titre\'' .
	(($t2 = strval(max(min(table_valeur($Pile["vars"], (string)'width', null),'350'),'120')))!=='' ?
			(' style=\'width:' . $t2 . 'px;\'') :
			'') .
	'><strong>') . $t1 . '</strong></dt>') :
		'') .
(($t1 = strval(interdire_scripts(PtoBR(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
		((	'
<dd class=\'' .
	'spip_doc_descriptif\'' .
	(($t2 = strval(max(min(table_valeur($Pile["vars"], (string)'width', null),'350'),'120')))!=='' ?
			(' style=\'width:' . $t2 . 'px;\'') :
			'') .
	'>') . $t1 . (	interdire_scripts(PtoBR(calculer_notes())) .
	'</dd>')) :
		'') .
'
</dl>

');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_doc @ ../plugins-dist/medias/modeles/doc.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/medias/modeles/doc.html
// Temps de compilation total: 45.610 ms
//

function html_148fdecb197e3aadcd723460191102c8($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_dochtml_148fdecb197e3aadcd723460191102c8($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'trim' . '"); ?'.'>');

	return analyse_resultat_skel('html_148fdecb197e3aadcd723460191102c8', $Cache, $page, '../plugins-dist/medias/modeles/doc.html');
}
?>