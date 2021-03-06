<?php

/*
 * Squelette : ../plugins-dist/medias/prive/squelettes/inclure/mediatheque-galerie.html
 * Date :      Mon, 10 Feb 2020 16:50:14 GMT
 * Compile :   Sun, 08 Mar 2020 10:23:42 GMT
 * Boucles :   _poids_total, _liens, _galerie
 */ 

function BOUCLE_poids_totalhtml_6d72fc33bbc6a3aa206a465eb6e4434a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_article']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['id_breve']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = (@$Pile[0]['id_document']))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	$in4 = array();
	if (!(is_array($a = (@$Pile[0]['media']))))
		$in4[]= $a;
	else $in4 = array_merge($in4, $a);
	$in5 = array();
	if (!(is_array($a = (@$Pile[0]['extension']))))
		$in5[]= $a;
	else $in5 = array_merge($in5, $a);
	$in6 = array();
	if (!(is_array($a = (@$Pile[0]['distant']))))
		$in6[]= $a;
	else $in6 = array_merge($in6, $a);
	$in7 = array();
	if (!(is_array($a = (@$Pile[0]['brise']))))
		$in7[]= $a;
	else $in7 = array_merge($in7, $a);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "documents", "?","",array (
  'lien' => true,
  'criteres' => 
  array (
    'id_document' => true,
  ),
),"id_document");
	}
	
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_poids_total';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_documents_liens','L3' => 'spip_documents_liens','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('documents','id_document'), 'L2' => array('documents','id_document'), 'L3' => array('documents','id_document'), 'resultats' => array('documents','id','id_document'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("documents.id_document",
		"$rech_select",
		"documents.taille");
	$command['where'] = 
			array(
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('L1.id_objet',sql_quote($in)) : 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : 
			array('=', 'L1.objet', sql_quote('rubrique'))), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : ((is_array(@$Pile[0]['id_article'])) ? sql_in('L2.id_objet',sql_quote($in1)) : 
			array('=', 'L2.id_objet', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : 
			array('=', 'L2.objet', sql_quote('article'))), (!(is_array(@$Pile[0]['id_breve'])?count(@$Pile[0]['id_breve']):strlen(@$Pile[0]['id_breve'])) ? '' : ((is_array(@$Pile[0]['id_breve'])) ? sql_in('L3.id_objet',sql_quote($in2)) : 
			array('=', 'L3.id_objet', sql_quote(@$Pile[0]['id_breve'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_breve'])?count(@$Pile[0]['id_breve']):strlen(@$Pile[0]['id_breve'])) ? '' : 
			array('=', 'L3.objet', sql_quote('breve'))), (!(is_array(@$Pile[0]['id_document'])?count(@$Pile[0]['id_document']):strlen(@$Pile[0]['id_document'])) ? '' : ((is_array(@$Pile[0]['id_document'])) ? sql_in('documents.id_document',sql_quote($in3)) : 
			array('=', 'documents.id_document', sql_quote(@$Pile[0]['id_document'], '','bigint(21) NOT NULL AUTO_INCREMENT')))), $rech_where?$rech_where:'', (!(is_array(@$Pile[0]['media'])?count(@$Pile[0]['media']):strlen(@$Pile[0]['media'])) ? '' : ((is_array(@$Pile[0]['media'])) ? sql_in('documents.media',sql_quote($in4)) : 
			array('=', 'documents.media', sql_quote(@$Pile[0]['media'], '','varchar(10) NOT NULL DEFAULT \'file\'')))), (!(is_array(@$Pile[0]['extension'])?count(@$Pile[0]['extension']):strlen(@$Pile[0]['extension'])) ? '' : ((is_array(@$Pile[0]['extension'])) ? sql_in('documents.extension',sql_quote($in5)) : 
			array('=', 'documents.extension', sql_quote(@$Pile[0]['extension'], '','varchar(10) NOT NULL DEFAULT \'\'')))), (!(is_array(@$Pile[0]['distant'])?count(@$Pile[0]['distant']):strlen(@$Pile[0]['distant'])) ? '' : ((is_array(@$Pile[0]['distant'])) ? sql_in('documents.distant',sql_quote($in6)) : 
			array('=', 'documents.distant', sql_quote(@$Pile[0]['distant'], '','varchar(3) DEFAULT \'non\'')))), (!(is_array(@$Pile[0]['brise'])?count(@$Pile[0]['brise']):strlen(@$Pile[0]['brise'])) ? '' : ((is_array(@$Pile[0]['brise'])) ? sql_in('documents.brise',sql_quote($in7)) : 
			array('=', 'documents.brise', sql_quote(@$Pile[0]['brise'], '','tinyint(4) DEFAULT \'0\'')))), 
			array('REGEXP', 'documents.statut', sql_quote(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'statut', null), '.*'),true)), '', 'char')), (@$Pile[0]["orphelins"])?'documents.id_document NOT IN (
SELECT DISTINCT id_document
FROM spip_documents_liens as oooo)':'', 
			array('REGEXP', 'documents.titre', sql_quote(interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'sanstitre', null),true) ? '^$':'.*')), '', 'char')), 
			array('REGEXP', 'documents.id_vignette', sql_quote(interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'sansvignette', null),true) ? '^0':'.*')), '', 'char')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/prive/squelettes/inclure/mediatheque-galerie.html','html_6d72fc33bbc6a3aa206a465eb6e4434a','_poids_total',4,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= vide($Pile['vars'][$_zzz=(string)'poids_total'] = plus(table_valeur($Pile["vars"], (string)'poids_total', null),interdire_scripts($Pile[$SP]['taille'])));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_poids_total @ ../plugins-dist/medias/prive/squelettes/inclure/mediatheque-galerie.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_lienshtml_6d72fc33bbc6a3aa206a465eb6e4434a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'documents_liens';
		$command['id'] = '_liens';
		$command['from'] = array('documents_liens' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array("objet",
		"id_objet");
		$command['select'] = array("objet",
		"id_objet",
		"documents_liens.id_objet",
		"documents_liens.objet");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'documents_liens.id_document', sql_quote($Pile[$SP]['id_document'], '','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/prive/squelettes/inclure/mediatheque-galerie.html','html_6d72fc33bbc6a3aa206a465eb6e4434a','_liens',68,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_liens']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t1 = (
'
			' .
generer_lien_entite($Pile[$SP]['id_objet'],interdire_scripts($Pile[$SP]['objet'])) .
'
			');
		$t0 .= ((strlen($t1) && strlen($t0)) ? '<br />' : '') . $t1;
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_liens @ ../plugins-dist/medias/prive/squelettes/inclure/mediatheque-galerie.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_galeriehtml_6d72fc33bbc6a3aa206a465eb6e4434a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_article']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['id_breve']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = (@$Pile[0]['id_document']))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	$in4 = array();
	if (!(is_array($a = (@$Pile[0]['media']))))
		$in4[]= $a;
	else $in4 = array_merge($in4, $a);
	$in5 = array();
	if (!(is_array($a = (@$Pile[0]['extension']))))
		$in5[]= $a;
	else $in5 = array_merge($in5, $a);
	$in6 = array();
	if (!(is_array($a = (@$Pile[0]['distant']))))
		$in6[]= $a;
	else $in6 = array_merge($in6, $a);
	$in7 = array();
	if (!(is_array($a = (@$Pile[0]['brise']))))
		$in7[]= $a;
	else $in7 = array_merge($in7, $a);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "documents", "?","",array (
  'lien' => true,
  'criteres' => 
  array (
    'id_document' => true,
  ),
),"id_document");
	}
	
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_galerie']))?$Pile[0]['sens'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('sens'.'_galerie'))?session_get('sens'.'_galerie'):(is_array($s='inverse')?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	$command['pagination'] = array((isset($Pile[0]['debut_galerie']) ? $Pile[0]['debut_galerie'] : null), (($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '10'),true)))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_galerie';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_documents_liens','L3' => 'spip_documents_liens','resultats' => 'spip_resultats','L4' => 'spip_types_documents');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['join'] = array('L1' => array('documents','id_document'), 'L2' => array('documents','id_document'), 'L3' => array('documents','id_document'), 'resultats' => array('documents','id','id_document'), 'L4' => array('documents','extension'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("documents.id_document",
		"$rech_select",
		"".tri_champ_select($tri)."",
		"documents.media",
		"documents.distant",
		"documents.fichier",
		"documents.statut",
		"documents.titre",
		"L4.mime_type",
		"documents.extension",
		"documents.largeur",
		"documents.hauteur",
		"documents.taille",
		"documents.date",
		"documents.descriptif",
		"documents.credits");
	$command['orderby'] = array(tri_champ_order($tri,$command['from']).$senstri);
	$command['where'] = 
			array(
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('L1.id_objet',sql_quote($in)) : 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : 
			array('=', 'L1.objet', sql_quote('rubrique'))), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : ((is_array(@$Pile[0]['id_article'])) ? sql_in('L2.id_objet',sql_quote($in1)) : 
			array('=', 'L2.id_objet', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : 
			array('=', 'L2.objet', sql_quote('article'))), (!(is_array(@$Pile[0]['id_breve'])?count(@$Pile[0]['id_breve']):strlen(@$Pile[0]['id_breve'])) ? '' : ((is_array(@$Pile[0]['id_breve'])) ? sql_in('L3.id_objet',sql_quote($in2)) : 
			array('=', 'L3.id_objet', sql_quote(@$Pile[0]['id_breve'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_breve'])?count(@$Pile[0]['id_breve']):strlen(@$Pile[0]['id_breve'])) ? '' : 
			array('=', 'L3.objet', sql_quote('breve'))), (!(is_array(@$Pile[0]['id_document'])?count(@$Pile[0]['id_document']):strlen(@$Pile[0]['id_document'])) ? '' : ((is_array(@$Pile[0]['id_document'])) ? sql_in('documents.id_document',sql_quote($in3)) : 
			array('=', 'documents.id_document', sql_quote(@$Pile[0]['id_document'], '','bigint(21) NOT NULL AUTO_INCREMENT')))), $rech_where?$rech_where:'', (!(is_array(@$Pile[0]['media'])?count(@$Pile[0]['media']):strlen(@$Pile[0]['media'])) ? '' : ((is_array(@$Pile[0]['media'])) ? sql_in('documents.media',sql_quote($in4)) : 
			array('=', 'documents.media', sql_quote(@$Pile[0]['media'], '','varchar(10) NOT NULL DEFAULT \'file\'')))), (!(is_array(@$Pile[0]['extension'])?count(@$Pile[0]['extension']):strlen(@$Pile[0]['extension'])) ? '' : ((is_array(@$Pile[0]['extension'])) ? sql_in('documents.extension',sql_quote($in5)) : 
			array('=', 'documents.extension', sql_quote(@$Pile[0]['extension'], '','varchar(10) NOT NULL DEFAULT \'\'')))), (!(is_array(@$Pile[0]['distant'])?count(@$Pile[0]['distant']):strlen(@$Pile[0]['distant'])) ? '' : ((is_array(@$Pile[0]['distant'])) ? sql_in('documents.distant',sql_quote($in6)) : 
			array('=', 'documents.distant', sql_quote(@$Pile[0]['distant'], '','varchar(3) DEFAULT \'non\'')))), (!(is_array(@$Pile[0]['brise'])?count(@$Pile[0]['brise']):strlen(@$Pile[0]['brise'])) ? '' : ((is_array(@$Pile[0]['brise'])) ? sql_in('documents.brise',sql_quote($in7)) : 
			array('=', 'documents.brise', sql_quote(@$Pile[0]['brise'], '','tinyint(4) DEFAULT \'0\'')))), 
			array('REGEXP', 'documents.statut', sql_quote(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'statut', null), '.*'),true)), '', 'char')), (@$Pile[0]["orphelins"])?'documents.id_document NOT IN (
SELECT DISTINCT id_document
FROM spip_documents_liens as oooo)':'', 
			array('REGEXP', 'documents.titre', sql_quote(interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'sanstitre', null),true) ? '^$':'.*')), '', 'char')), 
			array('REGEXP', 'documents.id_vignette', sql_quote(interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'sansvignette', null),true) ? '^0':'.*')), '', 'char')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/prive/squelettes/inclure/mediatheque-galerie.html','html_6d72fc33bbc6a3aa206a465eb6e4434a','_galerie',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_galerie']['compteur_boucle'] = 0;
	$Numrows['_galerie']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_galerie']) ? $Pile[0]['debut_galerie'] : _request('debut_galerie');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_galerie'] = quete_debut_pagination('id_document',$Pile[0]['@id_document'] = substr($debut_boucle,1),(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '10'),true)))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_galerie']['total']-1)/((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '10'),true)))) ? $a : 10)))*((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '10'),true)))) ? $a : 10))));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_galerie']['total'] : $debut_boucle+(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '10'),true)))) ? $a : 10) - 1), $Numrows['_galerie']['total'] - 1);
	$Numrows['_galerie']['grand_total'] = $Numrows['_galerie']['total'];
	$Numrows['_galerie']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_galerie']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_galerie']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('medias:fichier_manquant');
	$l2 = _T('medias:fichier_distant');
	$l3 = _T('public|spip|ecrire:info_sans_titre');
	$l4 = _T('public|spip|ecrire:bouton_modifier');
	$l5 = _T('medias:bouton_supprimer');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_galerie']['compteur_boucle']++;
		if ($Numrows['_galerie']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_galerie']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
	<tr class="' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'media', null),true)) ?'' :' '))))!=='' ?
		($t1 . (($t2 = strval(interdire_scripts($Pile[$SP]['media'])))!=='' ?
			(' media-' . $t2) :
			'')) :
		'') .
'" id="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'iddoc', null), 'media'),true)) .
$Pile[$SP]['id_document'] .
'">
		<td class=\'infos\'>
		' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['distant'] == 'oui')) ?'' :' '))))!=='' ?
		($t1 . vide($Pile['vars'][$_zzz=(string)'missing'] = interdire_scripts(((file_exists(get_spip_doc($Pile[$SP]['fichier']))) ?'' :' ')))) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'media', null),true)) ?'' :' ')) AND (interdire_scripts(($Pile[$SP]['media'] != 'file')))) ?' ' :''))))!=='' ?
		($t1 . interdire_scripts(inserer_attribut(inserer_attribut(filtre_balise_img_dist(chemin_image((	'media-' .
		interdire_scripts(concat($Pile[$SP]['media'],'-32.png'))))),'alt',_T((	'medias:media_' .
			interdire_scripts($Pile[$SP]['media'])))),'title',_T((	'medias:media_' .
			interdire_scripts($Pile[$SP]['media'])))))) :
		'') .
'
		' .
((table_valeur($Pile["vars"], (string)'missing', null))  ?
		(' ' . (	'<img src=\'' .
	interdire_scripts(chemin_image('document-manquant-24.png')) .
	'\' width=\'24\' height=\'24\' alt=\'' .
	$l1 .
	'\' />')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['distant'] == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'<img src=\'' .
	interdire_scripts(chemin_image('document-distant-24.png')) .
	'\' width=\'24\' height=\'24\' alt=\'' .
	$l2 .
	'\' />')) :
		'') .
'
		</td>
		<td class="id">
			<strong>' .
$Pile[$SP]['id_document'] .
'</strong>
		</td>
		<td class=\'statut\'>
		' .
medias_puce_statut_document($Pile[$SP]['id_document'],interdire_scripts($Pile[$SP]['statut'])) .
'
		</td>
		<td class="logo">
		' .
vide($Pile['vars'][$_zzz=(string)'fichier'] = interdire_scripts((($Pile[$SP]['distant'] == 'oui') ? interdire_scripts(get_spip_doc($Pile[$SP]['fichier'])):interdire_scripts(basename(get_spip_doc($Pile[$SP]['fichier'])))))) .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['media'] == 'image')) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval(inserer_attribut(filtrer('image_graver',filtrer('image_reduire',quete_logo_document(quete_document($Pile[$SP]['id_document'], ''), '', '', 'apercu', 250, 100, ''), '250', '100')),'alt',interdire_scripts(texte_backend(couper(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'60'))))))!=='' ?
			((	'
			<a href="' .
		vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true))) .
		'" type="' .
		interdire_scripts($Pile[$SP]['mime_type']) .
		'"' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'fichier', null)))!=='' ?
				(' title="' . $t3 . '"') :
				'') .
		'>') . $t2 . '</a>
		') :
			'')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['media'] == 'image')) ?'' :' '))))!=='' ?
		($t1 . (($t2 = strval(inserer_attribut(filtrer('image_graver',filtrer('image_reduire',quete_logo_document(quete_document($Pile[$SP]['id_document'], ''), '', '', 'auto', 250, 100, ''), '250', '100')),'alt',interdire_scripts(texte_backend(couper(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'60'))))))!=='' ?
			((	'<div class="resize-250">
			<a href="' .
		vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true))) .
		'" type="' .
		interdire_scripts($Pile[$SP]['mime_type']) .
		'"' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'fichier', null)))!=='' ?
				(' title="' . $t3 . '"') :
				'') .
		'>') . $t2 . '</a>
		</div>') :
			'')) :
		'') .
'
		<div class="fichier">' .
table_valeur($Pile["vars"], (string)'fichier', null) .
'</div>
		</td>
		<td class="exif">
			' .
(($t1 = strval(interdire_scripts($Pile[$SP]['extension'])))!=='' ?
		('<strong class="extension">' . $t1 . '</strong>') :
		'') .
'
			' .
(($t1 = strval(interdire_scripts(($Pile[$SP]['largeur'] ? (($t2 = strval(interdire_scripts($Pile[$SP]['largeur'])))!=='' ?
			($t2 . (($t3 = strval(interdire_scripts($Pile[$SP]['hauteur'])))!=='' ?
				(' x ' . $t3 . ' pixels') :
				'')) :
			''):''))))!=='' ?
		('<div class="dimensions">' . $t1 . '</div>') :
		'') .
'
			' .
(($t1 = strval(interdire_scripts(taille_en_octets($Pile[$SP]['taille']))))!=='' ?
		('<div class="taille">' . $t1 . '</div>') :
		'') .
'
			' .
(($t1 = strval(interdire_scripts(affdate(normaliser_date($Pile[$SP]['date']),'d/m/Y'))))!=='' ?
		('<div class="date">' . $t1 . '</div>') :
		'') .
'
			' .
pipeline( 'afficher_metas_document' , array('args' => array('quoi' => 'galerie', 'id_document' => $Pile[$SP]['id_document']), 'data' => '') ) .
'
			' .
(($t1 = BOUCLE_lienshtml_6d72fc33bbc6a3aa206a465eb6e4434a($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			' .
		((($Numrows['_liens']['total'] > '1'))  ?
				(' ' . (	'
			<a href=\'#\' onclick="jQuery(this).next().show();$(this).hide();return false;">' .
			singulier_ou_pluriel($Numrows['_liens']['total'],'medias:une_utilisation','medias:des_utilisations') .
			'</a><div style=\'display: none;\'>
			')) :
				'') .
		'
			') . $t1 . (	'
			' .
		((($Numrows['_liens']['total'] > '1'))  ?
				(' ' . '</div>') :
				'') .
		'
			')) :
		'') .
'
		</td>
		<td class="descriptif">
			' .
(($t1 = strval(interdire_scripts(((($a = supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : concat('<i>',$l3,'</i>')))))!=='' ?
		((	'<strong class="titre ">') . $t1 . '</strong>') :
		'') .
'
			' .
(($t1 = strval(interdire_scripts(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]))))!=='' ?
		((	'<div class="descriptif ">') . $t1 . '</div>') :
		'') .
'
			' .
(($t1 = strval(interdire_scripts($Pile[$SP]['credits'])))!=='' ?
		((	'<p class="credits ">') . $t1 . '</p>') :
		'') .
'
		</td>
		<td>
		
		' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'editable', null)))!=='' ?
		($t1 . (	'
		' .
	(($t2 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'document', invalideur_session($Cache, $Pile[$SP]['id_document']))?" ":""))))!=='' ?
			($t2 . (	'&#91;<a href=\'' .
		generer_url_ecrire('document_edit',(	'id_document=' .
			$Pile[$SP]['id_document'])) .
		'\'>' .
		$l4 .
		'</a>&#93;')) :
			'') .
	'
		' .
	(($t2 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('supprimer', 'document', invalideur_session($Cache, $Pile[$SP]['id_document']))?" ":""))))!=='' ?
			('<span class=\'supprimer\'>' . $t2 . (	bouton_action($l5,invalideur_session($Cache, generer_action_auteur('supprimer_document',invalideur_session($Cache, $Pile[$SP]['id_document']),invalideur_session($Cache, self()))),'ajax','','',(($t4 = strval($Pile[$SP]['id_document']))!=='' ?
					((	'(function(){jQuery("#' .
				interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'iddoc', null), 'media'),true))) . $t4 . '").animateRemove();return true;})()') :
					'')) .
		'</span>')) :
			'') .
	'
		')) :
		'') .
'
		' .
pipeline( 'document_desc_actions' , array('args' => array('id_document' => $Pile[$SP]['id_document'], 'position' => 'galerie'), 'data' => '') ) .
'
		</td>
	</tr>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_galerie @ ../plugins-dist/medias/prive/squelettes/inclure/mediatheque-galerie.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/medias/prive/squelettes/inclure/mediatheque-galerie.html
// Temps de compilation total: 23.081 ms
//

function html_6d72fc33bbc6a3aa206a465eb6e4434a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'editable'] = interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'editable', null), 'oui'),true) == 'non')) ?'' :' '))) .
'<div class="galerie' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'media', null), ''),true))))!=='' ?
		(' media-' . $t1) :
		'') .
'">
	' .
vide($Pile['vars'][$_zzz=(string)'poids_total'] = '0') .
BOUCLE_poids_totalhtml_6d72fc33bbc6a3aa206a465eb6e4434a($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	' .
(($t1 = BOUCLE_galeriehtml_6d72fc33bbc6a3aa206a465eb6e4434a($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<h2>' .
		singulier_ou_pluriel((isset($Numrows['_galerie']['grand_total'])
			? $Numrows['_galerie']['grand_total'] : $Numrows['_galerie']['total']),concat('medias:un_',interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'media', null), 'document'),true))),concat('medias:des_',interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'media', null), 'document'),true)),'s')) .
		(($t3 = strval(taille_en_octets(table_valeur($Pile["vars"], (string)'poids_total', null))))!=='' ?
				(' - ' . $t3) :
				'') .
		'</h2>
	<div class=\'pagination tri\'>
		' .
		(($t3 = strval(lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('>',array('>','<')))?'sens':'tri').'_galerie',$s?(strpos('< >','>')-1):'>'),'var_memotri',strncmp('_galerie','session',7)==0?(($s=in_array('>',array('>','<')))?'sens':'tri').'_galerie':''),interdire_scripts(filtre_balise_img_dist(chemin_image('tri-asc-16.png'),_T('public|spip|ecrire:par_tri_croissant'))),$s?(((intval($t=(isset($Pile[0]['sens'.'_galerie']))?$Pile[0]['sens'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('sens'.'_galerie'))?session_get('sens'.'_galerie'):(is_array($s='inverse')?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','>')-1)):((($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')=='>'))))!=='' ?
				($t3 . ' |') :
				'') .
		'
		' .
		(($t3 = strval(lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('<',array('>','<')))?'sens':'tri').'_galerie',$s?(strpos('< >','<')-1):'<'),'var_memotri',strncmp('_galerie','session',7)==0?(($s=in_array('<',array('>','<')))?'sens':'tri').'_galerie':''),interdire_scripts(filtre_balise_img_dist(chemin_image('tri-desc-16.png'),_T('public|spip|ecrire:par_tri_decroissant'))),$s?(((intval($t=(isset($Pile[0]['sens'.'_galerie']))?$Pile[0]['sens'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('sens'.'_galerie'))?session_get('sens'.'_galerie'):(is_array($s='inverse')?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','<')-1)):((($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')=='<'))))!=='' ?
				($t3 . ' |') :
				'') .
		'
		' .
		(($t3 = strval(lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('id_document',array('>','<')))?'sens':'tri').'_galerie',$s?(strpos('< >','id_document')-1):'id_document'),'var_memotri',strncmp('_galerie','session',7)==0?(($s=in_array('id_document',array('>','<')))?'sens':'tri').'_galerie':''),_T('medias:par_id'),$s?(((intval($t=(isset($Pile[0]['sens'.'_galerie']))?$Pile[0]['sens'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('sens'.'_galerie'))?session_get('sens'.'_galerie'):(is_array($s='inverse')?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','id_document')-1)):((($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')=='id_document'))))!=='' ?
				($t3 . ' |') :
				'') .
		'
		' .
		(($t3 = strval(lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('date',array('>','<')))?'sens':'tri').'_galerie',$s?(strpos('< >','date')-1):'date'),'var_memotri',strncmp('_galerie','session',7)==0?(($s=in_array('date',array('>','<')))?'sens':'tri').'_galerie':''),_T('medias:par_date'),$s?(((intval($t=(isset($Pile[0]['sens'.'_galerie']))?$Pile[0]['sens'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('sens'.'_galerie'))?session_get('sens'.'_galerie'):(is_array($s='inverse')?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','date')-1)):((($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')=='date'))))!=='' ?
				($t3 . ' |') :
				'') .
		'
		' .
		(($t3 = strval(lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('taille',array('>','<')))?'sens':'tri').'_galerie',$s?(strpos('< >','taille')-1):'taille'),'var_memotri',strncmp('_galerie','session',7)==0?(($s=in_array('taille',array('>','<')))?'sens':'tri').'_galerie':''),_T('medias:par_taille'),$s?(((intval($t=(isset($Pile[0]['sens'.'_galerie']))?$Pile[0]['sens'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('sens'.'_galerie'))?session_get('sens'.'_galerie'):(is_array($s='inverse')?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','taille')-1)):((($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')=='taille'))))!=='' ?
				($t3 . ' |') :
				'') .
		'
		' .
		(($t3 = strval(lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('largeur',array('>','<')))?'sens':'tri').'_galerie',$s?(strpos('< >','largeur')-1):'largeur'),'var_memotri',strncmp('_galerie','session',7)==0?(($s=in_array('largeur',array('>','<')))?'sens':'tri').'_galerie':''),_T('medias:par_largeur'),$s?(((intval($t=(isset($Pile[0]['sens'.'_galerie']))?$Pile[0]['sens'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('sens'.'_galerie'))?session_get('sens'.'_galerie'):(is_array($s='inverse')?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','largeur')-1)):((($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')=='largeur'))))!=='' ?
				($t3 . ' |') :
				'') .
		'
		' .
		(($t3 = strval(lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('hauteur',array('>','<')))?'sens':'tri').'_galerie',$s?(strpos('< >','hauteur')-1):'hauteur'),'var_memotri',strncmp('_galerie','session',7)==0?(($s=in_array('hauteur',array('>','<')))?'sens':'tri').'_galerie':''),_T('medias:par_hauteur'),$s?(((intval($t=(isset($Pile[0]['sens'.'_galerie']))?$Pile[0]['sens'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('sens'.'_galerie'))?session_get('sens'.'_galerie'):(is_array($s='inverse')?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','hauteur')-1)):((($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')=='hauteur'))))!=='' ?
				($t3 . ' |') :
				'') .
		'
		' .
		(($t3 = strval(lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('titre',array('>','<')))?'sens':'tri').'_galerie',$s?(strpos('< >','titre')-1):'titre'),'var_memotri',strncmp('_galerie','session',7)==0?(($s=in_array('titre',array('>','<')))?'sens':'tri').'_galerie':''),_T('medias:par_titre'),$s?(((intval($t=(isset($Pile[0]['sens'.'_galerie']))?$Pile[0]['sens'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('sens'.'_galerie'))?session_get('sens'.'_galerie'):(is_array($s='inverse')?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','titre')-1)):((($t=(isset($Pile[0]['tri'.'_galerie']))?$Pile[0]['tri'.'_galerie']:((strncmp('_galerie','session',7)==0 AND session_get('tri'.'_galerie'))?session_get('tri'.'_galerie'):'id_document'))?tri_protege_champ($t):'')=='titre'))))!=='' ?
				($t3 . ' |') :
				'') .
		'
		
		' .
		(($t3 = strval(((((isset($Numrows['_galerie']['grand_total'])
			? $Numrows['_galerie']['grand_total'] : $Numrows['_galerie']['total']) > '100')) ?' ' :'')))!=='' ?
				((	_T('medias:label_paginer_par') .
			' ') . $t3 . (	'
			' .
			lien_ou_expose(parametre_url(self(),'pagination',''),'10',interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '10'),true) == '10')),'ajax') .
			'
			' .
			(($t4 = strval(lien_ou_expose(parametre_url(self(),'pagination','50'),'50',interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '10'),true) == '50')),'ajax')))!=='' ?
					('<span class="sep">|</span> ' . $t4) :
					''))) :
				'') .
		'
		' .
		(($t3 = strval(((((isset($Numrows['_galerie']['grand_total'])
			? $Numrows['_galerie']['grand_total'] : $Numrows['_galerie']['total']) > '500')) ?' ' :'')))!=='' ?
				($t3 . (	'
			' .
			(($t4 = strval(lien_ou_expose(parametre_url(self(),'pagination','100'),'100',interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '10'),true) == '100')),'ajax')))!=='' ?
					('<span class="sep">|</span> ' . $t4) :
					'') .
			'
		')) :
				'') .
		'
		' .
		(($t3 = strval(((((isset($Numrows['_galerie']['grand_total'])
			? $Numrows['_galerie']['grand_total'] : $Numrows['_galerie']['total']) > '5000')) ?' ' :'')))!=='' ?
				($t3 . (	'
			' .
			(($t4 = strval(lien_ou_expose(parametre_url(self(),'pagination','500'),'500',interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '10'),true) == '500')),'ajax')))!=='' ?
					('<span class="sep">|</span> ' . $t4) :
					'') .
			'
		')) :
				'') .
		'
	</div>
	' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_galerie"]["grand_total"],
 		'_galerie',
		isset($Pile[0]['debut_galerie'])?$Pile[0]['debut_galerie']:intval(_request('debut_galerie')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '10'),true)))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				('<div class="pagination">' . $t3 . '</div>') :
				'') .
		'
	<table>
	<thead>
		<th></th>
		<th class="id">' .
		_T('medias:id') .
		'</th>
		<th></th>
		<th>' .
		_T('medias:logo') .
		'</th>
		<th>' .
		_T('medias:infos') .
		'</th>
		<th>' .
		_T('medias:descriptif') .
		'</th>
		<th></th>
	</thead>
	') . $t1 . (	'
	</table>
	' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_galerie"]["grand_total"],
 		'_galerie',
		isset($Pile[0]['debut_galerie'])?$Pile[0]['debut_galerie']:intval(_request('debut_galerie')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '10'),true)))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
	' .
		vide($Pile['vars'][$_zzz=(string)'nb_orphelins'] = (isset($Numrows['_galerie']['grand_total'])
			? $Numrows['_galerie']['grand_total'] : $Numrows['_galerie']['total'])))) :
		((	'
	<h2>' .
	_T(concat('medias:aucun_',interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'media', null), 'document'),true)))) .
	'</h2>
	'))) .
'
	' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'orphelins', null),true)) AND (invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('supprimer', 'orphelins', '', interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null))))?" ":"")))) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	recuperer_fond( 'prive/squelettes/inclure/bouton-supprimer-orphelins' , array_merge($Pile[0],array('nb_orphelins' => table_valeur($Pile["vars"], (string)'nb_orphelins', null) )), array('compil'=>array('../plugins-dist/medias/prive/squelettes/inclure/mediatheque-galerie.html','html_6d72fc33bbc6a3aa206a465eb6e4434a','',100,$GLOBALS['spip_lang'])), _request('connect')) .
	'
	')) :
		'') .
'
</div><!--#galerie-->
');

	return analyse_resultat_skel('html_6d72fc33bbc6a3aa206a465eb6e4434a', $Cache, $page, '../plugins-dist/medias/prive/squelettes/inclure/mediatheque-galerie.html');
}
?>