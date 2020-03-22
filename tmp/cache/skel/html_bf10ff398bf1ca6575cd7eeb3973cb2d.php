<?php

/*
 * Squelette : plugins/auto/metasplus/v2.3.2/inclure/metasplus/dist.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Fri, 21 Feb 2020 08:57:07 GMT
 * Boucles :   _auteurs_objet, _mots_objet, _images_objet, _logo_objet, _objet
 */ 

function BOUCLE_auteurs_objethtml_bf10ff398bf1ca6575cd7eeb3973cb2d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'auteurs', null),true)) ?'' :' '));

	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((((include_spip('inc/config')?lire_config('metasplus/masquer_auteurs',null,false):'')) ?'' :' '));

	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_auteurs_objet';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("auteurs.id_auteur");
		$command['select'] = array("auteurs.nom");
		$command['orderby'] = array('auteurs.nom');
		$command['join'] = array('L1' => array('auteurs','id_auteur'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('=', 'L1.objet', sql_quote(@$Pile[0]['objet'], '','varchar(25) NOT NULL DEFAULT \'\'')), 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_objet'], '','bigint(21) NOT NULL DEFAULT 0')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/metasplus/v2.3.2/inclure/metasplus/dist.html','html_bf10ff398bf1ca6575cd7eeb3973cb2d','_auteurs_objet',102,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
vide($Pile['vars'][$_zzz=(string)'auteurs_auto'] = filtre_push(table_valeur($Pile["vars"], (string)'auteurs_auto', null),interdire_scripts(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])))));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_auteurs_objet @ plugins/auto/metasplus/v2.3.2/inclure/metasplus/dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_mots_objethtml_bf10ff398bf1ca6575cd7eeb3973cb2d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'mots', null),true)) ?'' :' '));

	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_mots_objet';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array("mots.id_mot");
		$command['select'] = array("mots.titre");
		$command['orderby'] = array('mots.titre');
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.objet', sql_quote(@$Pile[0]['objet'], '','varchar(25) NOT NULL DEFAULT \'\'')), 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_objet'], '','bigint(21) NOT NULL DEFAULT 0')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/metasplus/v2.3.2/inclure/metasplus/dist.html','html_bf10ff398bf1ca6575cd7eeb3973cb2d','_mots_objet',116,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
vide($Pile['vars'][$_zzz=(string)'mots_auto'] = filtre_push(table_valeur($Pile["vars"], (string)'mots_auto', null),interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])))));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_mots_objet @ plugins/auto/metasplus/v2.3.2/inclure/metasplus/dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_images_objethtml_bf10ff398bf1ca6575cd7eeb3973cb2d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_images_objet']))?$Pile[0]['tri'.'_images_objet']:((strncmp('_images_objet','session',7)==0 AND session_get('tri'.'_images_objet'))?session_get('tri'.'_images_objet'):table_valeur($Pile["vars"], (string)'par', null)))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_images_objet']))?$Pile[0]['sens'.'_images_objet']:((strncmp('_images_objet','session',7)==0 AND session_get('sens'.'_images_objet'))?session_get('sens'.'_images_objet'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_images_objet']))?$Pile[0]['tri'.'_images_objet']:((strncmp('_images_objet','session',7)==0 AND session_get('tri'.'_images_objet'))?session_get('tri'.'_images_objet'):table_valeur($Pile["vars"], (string)'par', null)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_images_objet';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['join'] = array('L1' => array('documents','id_document'));
		$command['having'] = 
			array();
	}
	$command['select'] = array("".tri_champ_select($tri)."",
		"documents.largeur",
		"documents.fichier",
		"documents.titre",
		"documents.descriptif");
	$command['orderby'] = array(tri_champ_order($tri,$command['from']).$senstri, 'documents.largeur DESC');
	$command['where'] = 
			array(
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'L1.objet', sql_quote(@$Pile[0]['objet'], '','varchar(25) NOT NULL DEFAULT \'\'')), 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_objet'], '','bigint(21) NOT NULL DEFAULT 0')), 
			array('=', 'documents.media', "'image'"), 
			array('NOT', 
			array('=', 'documents.extension', "'svg'")), 
			array('NOT', 
			array('=', 'documents.fichier', sql_quote(replace(replace(table_valeur($Pile["vars"], (string)'logos_auto/0/url', null),constant('_NOM_PERMANENTS_ACCESSIBLES')),'\\.\\./'), '', 'text NOT NULL DEFAULT \'\''))));
	$command['limit'] = '0'.','.intval((table_valeur($Pile["vars"], (string)'logos_auto', null) ? '2':'3'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/metasplus/v2.3.2/inclure/metasplus/dist.html','html_bf10ff398bf1ca6575cd7eeb3973cb2d','_images_objet',134,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
vide($Pile['vars'][$_zzz=(string)'logos_auto'] = filtre_push(table_valeur($Pile["vars"], (string)'logos_auto', null),array('url' => interdire_scripts(get_spip_doc($Pile[$SP]['fichier'])), 'alt' => interdire_scripts(couper(((($a = supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]))),'80'))))));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_images_objet @ plugins/auto/metasplus/v2.3.2/inclure/metasplus/dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_logo_objethtml_bf10ff398bf1ca6575cd7eeb3973cb2d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'logos', null),true)) ?'' :' '));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_logo_objet';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
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
		"CONDITION",
		$command,
		array('plugins/auto/metasplus/v2.3.2/inclure/metasplus/dist.html','html_bf10ff398bf1ca6575cd7eeb3973cb2d','_logo_objet',126,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
vide($Pile['vars'][$_zzz=(string)'logo_objet'] = interdire_scripts(quete_logo_objet(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)),'on'))) .
vide($Pile['vars'][$_zzz=(string)'logos_auto'] = (table_valeur($Pile["vars"], (string)'logo_objet', null) ? array(array('url' => table_valeur($Pile["vars"], (string)'logo_objet/chemin', null))):array())) .
vide($Pile['vars'][$_zzz=(string)'par'] = ((floatval(spip_version()) > '3.1') ? 'rang_lien':'largeur')) .
vide($Pile['vars'][$_zzz=(string)'defaut_tri'] = array('rang_lien' => '1', 'largeur' => '-1')) .
BOUCLE_images_objethtml_bf10ff398bf1ca6575cd7eeb3973cb2d($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_logo_objet @ plugins/auto/metasplus/v2.3.2/inclure/metasplus/dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_objethtml_bf10ff398bf1ca6575cd7eeb3973cb2d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)) AND (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)))) ?' ' :''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_objet';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
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
		"CONDITION",
		$command,
		array('plugins/auto/metasplus/v2.3.2/inclure/metasplus/dist.html','html_bf10ff398bf1ca6575cd7eeb3973cb2d','_objet',87,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
vide($Pile['vars'][$_zzz=(string)'og-type_auto'] = 'article') .
vide($Pile['vars'][$_zzz=(string)'dc-type_auto'] = 'Text') .
vide($Pile['vars'][$_zzz=(string)'titre_auto'] = interdire_scripts(concat(generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'titre'),' – ',interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))))) .
vide($Pile['vars'][$_zzz=(string)'desc_auto'] = interdire_scripts(((($a = ((($a = generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'introduction')) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'descriptif')))) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'texte'))))) .
vide($Pile['vars'][$_zzz=(string)'url_auto'] = interdire_scripts(generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'url'))) .
vide($Pile['vars'][$_zzz=(string)'date_auto'] = interdire_scripts(generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'date'))) .
vide($Pile['vars'][$_zzz=(string)'maj_auto'] = interdire_scripts(generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'maj'))) .
vide($Pile['vars'][$_zzz=(string)'langue_auto'] = interdire_scripts(((($a = generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'lang')) OR (is_string($a) AND strlen($a))) ? $a : spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))) .
vide($Pile['vars'][$_zzz=(string)'territoire_auto'] = '') .
'
' .
vide($Pile['vars'][$_zzz=(string)'auteurs_auto'] = array()) .
(($t1 = BOUCLE_auteurs_objethtml_bf10ff398bf1ca6575cd7eeb3973cb2d($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	vide($Pile['vars'][$_zzz=(string)'auteurs_auto'] = interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])))))) .
'


' .
vide($Pile['vars'][$_zzz=(string)'mots_auto'] = array()) .
BOUCLE_mots_objethtml_bf10ff398bf1ca6575cd7eeb3973cb2d($Cache, $Pile, $doublons, $Numrows, $SP) .
'


' .
BOUCLE_logo_objethtml_bf10ff398bf1ca6575cd7eeb3973cb2d($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_objet @ plugins/auto/metasplus/v2.3.2/inclure/metasplus/dist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/metasplus/v2.3.2/inclure/metasplus/dist.html
// Temps de compilation total: 19.069 ms
//

function html_bf10ff398bf1ca6575cd7eeb3973cb2d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'var_mode', null),true) == 'debug') ? '<'.'?php header(' . _q('Content-Type:text/html') . '); ?'.'>':interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'debug', null),true) ? '<'.'?php header(' . _q('Content-Type:text/plain') . '); ?'.'>':'')))) .
'





' .
(($t1 = BOUCLE_objethtml_bf10ff398bf1ca6575cd7eeb3973cb2d($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'



' .
	vide($Pile['vars'][$_zzz=(string)'og-type_auto'] = 'website') .
	vide($Pile['vars'][$_zzz=(string)'dc-type_auto'] = 'Text') .
	vide($Pile['vars'][$_zzz=(string)'titre_auto'] = interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'type-page', null), 'sommaire'),true) == 'sommaire') ? interdire_scripts(concat(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]),' - ',interdire_scripts(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0])))):''))) .
	vide($Pile['vars'][$_zzz=(string)'desc_auto'] = interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'type-page', null), 'sommaire'),true) == 'sommaire') ? interdire_scripts(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0])):''))) .
	vide($Pile['vars'][$_zzz=(string)'url_auto'] = interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'type-page', null), 'sommaire'),true) == 'sommaire') ? spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')):interdire_scripts(generer_url_public(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type-page', null),true)), ''))))) .
	vide($Pile['vars'][$_zzz=(string)'date_auto'] = interdire_scripts(normaliser_date(@$Pile[0]['date']))) .
	vide($Pile['vars'][$_zzz=(string)'maj_auto'] = '') .
	vide($Pile['vars'][$_zzz=(string)'langue_auto'] = spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])) .
	vide($Pile['vars'][$_zzz=(string)'territoire_auto'] = '') .
	vide($Pile['vars'][$_zzz=(string)'auteurs_auto'] = interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
	vide($Pile['vars'][$_zzz=(string)'mots_auto'] = '')))) .
'


' .
(($t1 = strval(interdire_scripts((((((((entites_html(table_valeur(@$Pile[0], (string)'logos', null),true)) ?'' :' ')) AND (((table_valeur($Pile["vars"], (string)'logos_auto', null)) ?'' :' '))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	vide($Pile['vars'][$_zzz=(string)'logos_auto'] = interdire_scripts(((($a = generer_info_entite(interdire_scripts((include_spip('inc/config')?lire_config('metasplus/id_doc_logo',null,false):'')), 'document', 'fichier')) OR (is_string($a) AND strlen($a))) ? $a : supprimer_timestamp(extraire_attribut(
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'src'))))))) :
		'') .
'



' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/metasplus/inc-dist') . ', array(\'titre\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'titre', null), table_valeur($Pile["vars"], (string)'titre_auto', null)),true))) . ',
	\'desc\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'desc', null), table_valeur($Pile["vars"], (string)'desc_auto', null)),true))) . ',
	\'url\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'url', null), table_valeur($Pile["vars"], (string)'url_auto', null)),true))) . ',
	\'date\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'date', null), table_valeur($Pile["vars"], (string)'date_auto', null)),true))) . ',
	\'maj\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'maj', null), table_valeur($Pile["vars"], (string)'maj_auto', null)),true))) . ',
	\'langue\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'langue', null), table_valeur($Pile["vars"], (string)'langue_auto', null)),true))) . ',
	\'territoire\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'territoire', null), table_valeur($Pile["vars"], (string)'territoire_auto', null)),true))) . ',
	\'og-type\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'og-type', null), table_valeur($Pile["vars"], (string)'og-type_auto', null)),true))) . ',
	\'dc-type\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'dc-type', null), table_valeur($Pile["vars"], (string)'dc-type_auto', null)),true))) . ',
	\'logos\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'logos', null), table_valeur($Pile["vars"], (string)'logos_auto', null)),true))) . ',
	\'auteurs\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'auteurs', null), table_valeur($Pile["vars"], (string)'auteurs_auto', null)),true))) . ',
	\'mots\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'mots', null), table_valeur($Pile["vars"], (string)'mots_auto', null)),true))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/metasplus/v2.3.2/inclure/metasplus/dist.html\',\'html_bf10ff398bf1ca6575cd7eeb3973cb2d\',\'\',177,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

' .
'<' . '?php header("X-Spip-Filtre: '.'trim' . '"); ?'.'>');

	return analyse_resultat_skel('html_bf10ff398bf1ca6575cd7eeb3973cb2d', $Cache, $page, 'plugins/auto/metasplus/v2.3.2/inclure/metasplus/dist.html');
}
?>