<?php

/*
 * Squelette : ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_forums_publics.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Sun, 08 Mar 2020 10:15:29 GMT
 * Boucles :   _forums_publics
 */ 

function BOUCLE_forums_publicshtml_e2b0db788a0c3c9fc414c8aefaf2808e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_forums_publics']) ? $Pile[0]['debut_forums_publics'] : null), 5);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "forum", "?","",array (
  'criteres' => 
  array (
    'statut' => true,
  ),
  'debut_nom' => '\'_forums_publics\'',
),"id_forum");
	}
	
	if (!isset($command['table'])) {
		$command['table'] = 'forum';
		$command['id'] = '_forums_publics';
		$command['from'] = array('forum' => 'spip_forum','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['orderby'] = array('forum.date_heure DESC');
		$command['join'] = array('resultats' => array('forum','id','id_forum'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("forum.id_forum",
		"forum.date_heure",
		"$rech_select",
		"forum.titre",
		"forum.date_heure AS date",
		"forum.texte");
	$command['where'] = 
			array(
			array('=', 'forum.id_parent', 0), 
			array('=', 'forum.statut', sql_quote(@$Pile[0]['statut'], '','varchar(8) NOT NULL DEFAULT \'0\'')), $rech_where?$rech_where:'');
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_forums_publics.html','html_e2b0db788a0c3c9fc414c8aefaf2808e','_forums_publics',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_forums_publics']['compteur_boucle'] = 0;
	$Numrows['_forums_publics']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_forums_publics']) ? $Pile[0]['debut_forums_publics'] : _request('debut_forums_publics');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_forums_publics'] = quete_debut_pagination('id_forum',$Pile[0]['@id_forum'] = substr($debut_boucle,1),5,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_forums_publics']['total']-1)/(5))*(5)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_forums_publics']['total'] : $debut_boucle + 4), $Numrows['_forums_publics']['total'] - 1);
	$Numrows['_forums_publics']['grand_total'] = $Numrows['_forums_publics']['total'];
	$Numrows['_forums_publics']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_forums_publics']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_forums_publics']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('corbeille:selectionner');
	$l2 = _T('public|spip|ecrire:info_sans_titre');
	$l3 = _T('corbeille:voir_detail');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_forums_publics']['compteur_boucle']++;
		if ($Numrows['_forums_publics']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_forums_publics']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
<li class=\'item\'>
<label for=\'forumpub-' .
$Pile[$SP]['id_forum'] .
'\'>' .
$l1 .
'</label><input type=\'checkbox\' name=\'elements[]\' id="forumpub-' .
$Pile[$SP]['id_forum'] .
'" value=\'' .
$Pile[$SP]['id_forum'] .
'\'' .
((in_any($Pile[$SP]['id_forum'],interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'elements', null),true))))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
'/>
<h4>' .
(($t1 = strval(interdire_scripts(((($a = liens_nofollow(safehtml(typo(interdit_html($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])))) OR (is_string($a) AND strlen($a))) ? $a : $l2))))!=='' ?
		((	'#' .
	$Pile[$SP]['id_forum'] .
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
interdire_scripts(filtre_introduction_dist('', $Pile[$SP]['texte'], 600, $connect, null)) .
'
<p class=\'actions\'>[<a href=\'' .
generer_url_ecrire('controler_forum',(	'debut_forum=@' .
	$Pile[$SP]['id_forum'])) .
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
		spip_log(intval(1000*$timer)."ms BOUCLE_forums_publics @ ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_forums_publics.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_forums_publics.html
// Temps de compilation total: 0.487 ms
//

function html_e2b0db788a0c3c9fc414c8aefaf2808e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_forums_publicshtml_e2b0db788a0c3c9fc414c8aefaf2808e($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="liste corbeille-forum corbeille-forum-publics">
' .
		(($t3 = strval(singulier_ou_pluriel((isset($Numrows['_forums_publics']['grand_total'])
			? $Numrows['_forums_publics']['grand_total'] : $Numrows['_forums_publics']['total']),'corbeille:forums_publics_corbeille_un','corbeille:forums_publics_corbeille_tous')))!=='' ?
				('<h3 class="titrem">' . $t3 . '</h3>') :
				'') .
		'
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_forums_publics"]["grand_total"],
 		'_forums_publics',
		isset($Pile[0]['debut_forums_publics'])?$Pile[0]['debut_forums_publics']:intval(_request('debut_forums_publics')),
		5, true, '', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
<ul class=\'liste-items checkables\'>
') . $t1 . (	'
</ul>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_forums_publics"]["grand_total"],
 		'_forums_publics',
		isset($Pile[0]['debut_forums_publics'])?$Pile[0]['debut_forums_publics']:intval(_request('debut_forums_publics')),
		5, true, '', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		'');

	return analyse_resultat_skel('html_e2b0db788a0c3c9fc414c8aefaf2808e', $Cache, $page, '../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_forums_publics.html');
}
?>