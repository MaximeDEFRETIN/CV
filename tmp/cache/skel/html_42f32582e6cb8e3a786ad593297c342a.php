<?php

/*
 * Squelette : ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_sites.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Sun, 08 Mar 2020 10:15:29 GMT
 * Boucles :   _sites
 */ 

function BOUCLE_siteshtml_42f32582e6cb8e3a786ad593297c342a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_sites']) ? $Pile[0]['debut_sites'] : null), 5);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "syndic", "?","",array (
  'criteres' => 
  array (
    'statut' => true,
  ),
  'debut_nom' => '\'_sites\'',
),"id_syndic");
	}
	
	if (!isset($command['table'])) {
		$command['table'] = 'syndic';
		$command['id'] = '_sites';
		$command['from'] = array('syndic' => 'spip_syndic','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['orderby'] = array('syndic.date DESC');
		$command['join'] = array('resultats' => array('syndic','id','id_syndic'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("syndic.id_syndic",
		"syndic.date",
		"$rech_select",
		"syndic.url_site",
		"syndic.nom_site");
	$command['where'] = 
			array(
			array('=', 'syndic.statut', sql_quote(@$Pile[0]['statut'], '','varchar(10) NOT NULL DEFAULT \'0\'')), $rech_where?$rech_where:'');
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_sites.html','html_42f32582e6cb8e3a786ad593297c342a','_sites',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_sites']['compteur_boucle'] = 0;
	$Numrows['_sites']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_sites']) ? $Pile[0]['debut_sites'] : _request('debut_sites');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_sites'] = quete_debut_pagination('id_syndic',$Pile[0]['@id_syndic'] = substr($debut_boucle,1),5,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_sites']['total']-1)/(5))*(5)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_sites']['total'] : $debut_boucle + 4), $Numrows['_sites']['total'] - 1);
	$Numrows['_sites']['grand_total'] = $Numrows['_sites']['total'];
	$Numrows['_sites']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_sites']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_sites']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('corbeille:selectionner');
	$l2 = _T('public|spip|ecrire:info_sans_titre');
	$l3 = _T('corbeille:voir_detail');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_sites']['compteur_boucle']++;
		if ($Numrows['_sites']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_sites']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
<li class=\'item\'>
<label for=\'site-' .
$Pile[$SP]['id_syndic'] .
'\'>' .
$l1 .
'</label><input type=\'checkbox\' name=\'elements[]\' id="site-' .
$Pile[$SP]['id_syndic'] .
'" value=\'' .
$Pile[$SP]['id_syndic'] .
'\'' .
((in_any($Pile[$SP]['id_syndic'],interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'elements', null),true))))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
'/>
<h4>' .
(($t1 = strval(interdire_scripts(((($a = typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : $l2))))!=='' ?
		((	'#' .
	$Pile[$SP]['id_syndic'] .
	' - ') . $t1) :
		'') .
'</h4>
<small>' .
interdire_scripts(affdate(normaliser_date($Pile[$SP]['date']))) .
(($t1 = strval(interdire_scripts(heures(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		(' ' . $t1) :
		'') .
':' .
interdire_scripts(minutes(normaliser_date($Pile[$SP]['date']))) .
'</small>
- ' .
interdire_scripts(filtre_introduction_dist('', @$Pile[0]['texte'], 600, $connect, null)) .
'
<p class=\'actions\'>[<a href=\'' .
generer_url_ecrire('sites',(	'id_syndic=' .
	$Pile[$SP]['id_syndic'])) .
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
		spip_log(intval(1000*$timer)."ms BOUCLE_sites @ ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_sites.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_sites.html
// Temps de compilation total: 1.839 ms
//

function html_42f32582e6cb8e3a786ad593297c342a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_siteshtml_42f32582e6cb8e3a786ad593297c342a($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="liste corbeille-sites">
' .
		(($t3 = strval(singulier_ou_pluriel((isset($Numrows['_sites']['grand_total'])
			? $Numrows['_sites']['grand_total'] : $Numrows['_sites']['total']),'corbeille:sites_corbeille_un','corbeille:sites_corbeille_tous')))!=='' ?
				('<h3 class="titrem">' . $t3 . '</h3>') :
				'') .
		'
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_sites"]["grand_total"],
 		'_sites',
		isset($Pile[0]['debut_sites'])?$Pile[0]['debut_sites']:intval(_request('debut_sites')),
		5, true, '', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
<ul class=\'liste-items checkables\'>
') . $t1 . (	'
</ul>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_sites"]["grand_total"],
 		'_sites',
		isset($Pile[0]['debut_sites'])?$Pile[0]['debut_sites']:intval(_request('debut_sites')),
		5, true, '', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		'');

	return analyse_resultat_skel('html_42f32582e6cb8e3a786ad593297c342a', $Cache, $page, '../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_sites.html');
}
?>