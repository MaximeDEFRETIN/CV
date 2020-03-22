<?php

/*
 * Squelette : ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_signatures.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Sun, 08 Mar 2020 10:15:29 GMT
 * Boucles :   _signatures
 */ 

function BOUCLE_signatureshtml_ae609d0f1810e77e62320072872a9802(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_signatures']) ? $Pile[0]['debut_signatures'] : null), 5);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "signatures", "?","",array (
  'criteres' => 
  array (
    'statut' => true,
  ),
  'debut_nom' => '\'_signatures\'',
),"id_signature");
	}
	
	if (!isset($command['table'])) {
		$command['table'] = 'signatures';
		$command['id'] = '_signatures';
		$command['from'] = array('signatures' => 'spip_signatures','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['orderby'] = array('signatures.date_time DESC');
		$command['join'] = array('resultats' => array('signatures','id','id_signature'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("signatures.id_signature",
		"signatures.date_time",
		"$rech_select",
		"signatures.nom_email",
		"signatures.ad_email",
		"signatures.date_time AS date",
		"signatures.message");
	$command['where'] = 
			array(
			array('=', 'signatures.statut', sql_quote(@$Pile[0]['statut'], '','varchar(10) NOT NULL DEFAULT \'0\'')), $rech_where?$rech_where:'');
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_signatures.html','html_ae609d0f1810e77e62320072872a9802','_signatures',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_signatures']['compteur_boucle'] = 0;
	$Numrows['_signatures']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_signatures']) ? $Pile[0]['debut_signatures'] : _request('debut_signatures');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_signatures'] = quete_debut_pagination('id_signature',$Pile[0]['@id_signature'] = substr($debut_boucle,1),5,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_signatures']['total']-1)/(5))*(5)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_signatures']['total'] : $debut_boucle + 4), $Numrows['_signatures']['total'] - 1);
	$Numrows['_signatures']['grand_total'] = $Numrows['_signatures']['total'];
	$Numrows['_signatures']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_signatures']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_signatures']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('corbeille:selectionner');
	$l2 = _T('public|spip|ecrire:info_sans_titre');
	$l3 = _T('corbeille:voir_detail');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_signatures']['compteur_boucle']++;
		if ($Numrows['_signatures']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_signatures']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
<li class=\'item\'>
<label for=\'signature-' .
$Pile[$SP]['id_signature'] .
'\'>' .
$l1 .
'</label><input type=\'checkbox\' name=\'elements[]\' id="signature-' .
$Pile[$SP]['id_signature'] .
'" value=\'' .
$Pile[$SP]['id_signature'] .
'\'' .
((in_any($Pile[$SP]['id_signature'],interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'elements', null),true))))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
'/>
<h4>' .
(($t1 = strval(interdire_scripts(((($a = liens_nofollow(safehtml($Pile[$SP]['nom_email']))) OR (is_string($a) AND strlen($a))) ? $a : $l2))))!=='' ?
		((	'#' .
	$Pile[$SP]['id_signature'] .
	' - ') . $t1) :
		'') .
'</h4>
<small>' .
interdire_scripts(liens_nofollow(safehtml($Pile[$SP]['ad_email']))) .
' ' .
interdire_scripts(affdate(normaliser_date($Pile[$SP]['date']))) .
(($t1 = strval(interdire_scripts(heures(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		(' ' . $t1) :
		'') .
':' .
interdire_scripts(minutes(normaliser_date($Pile[$SP]['date']))) .
'</small>
- ' .
interdire_scripts(liens_nofollow(safehtml($Pile[$SP]['message']))) .
'
<p class=\'actions\'>[<a href=\'' .
generer_url_ecrire('controler_petition',(	'debut_signature=@' .
	$Pile[$SP]['id_signature'])) .
'\'>' .
$l3 .
'</a>]</p>
</li>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_signatures @ ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_signatures.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_signatures.html
// Temps de compilation total: 7.324 ms
//

function html_ae609d0f1810e77e62320072872a9802($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_signatureshtml_ae609d0f1810e77e62320072872a9802($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="liste corbeille-signatures">
' .
		(($t3 = strval(singulier_ou_pluriel((isset($Numrows['_signatures']['grand_total'])
			? $Numrows['_signatures']['grand_total'] : $Numrows['_signatures']['total']),'corbeille:signatures_corbeille_un','corbeille:signatures_corbeille_tous')))!=='' ?
				('<h3 class="titrem">' . $t3 . '</h3>') :
				'') .
		'
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_signatures"]["grand_total"],
 		'_signatures',
		isset($Pile[0]['debut_signatures'])?$Pile[0]['debut_signatures']:intval(_request('debut_signatures')),
		5, true, '', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
<ul class=\'liste-items checkables\'>
') . $t1 . (	'
</ul>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_signatures"]["grand_total"],
 		'_signatures',
		isset($Pile[0]['debut_signatures'])?$Pile[0]['debut_signatures']:intval(_request('debut_signatures')),
		5, true, '', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		'');

	return analyse_resultat_skel('html_ae609d0f1810e77e62320072872a9802', $Cache, $page, '../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_signatures.html');
}
?>