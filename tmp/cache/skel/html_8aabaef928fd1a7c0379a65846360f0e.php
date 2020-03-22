<?php

/*
 * Squelette : ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_auteurs.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Sun, 08 Mar 2020 10:15:29 GMT
 * Boucles :   _auteurs
 */ 

function BOUCLE_auteurshtml_8aabaef928fd1a7c0379a65846360f0e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_auteurs']) ? $Pile[0]['debut_auteurs'] : null), 5);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "auteurs", "?","",array (
  'tout' => true,
  'criteres' => 
  array (
    'statut' => true,
  ),
  'debut_nom' => '\'_auteurs\'',
),"id_auteur");
	}
	
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_auteurs';
		$command['from'] = array('auteurs' => 'spip_auteurs','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['orderby'] = array('auteurs.maj DESC');
		$command['join'] = array('resultats' => array('auteurs','id','id_auteur'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("auteurs.id_auteur",
		"auteurs.maj",
		"$rech_select",
		"auteurs.nom",
		"auteurs.bio");
	$command['where'] = 
			array(
			array('=', 'auteurs.statut', sql_quote(@$Pile[0]['statut'], '','varchar(255) NOT NULL DEFAULT \'0\'')), $rech_where?$rech_where:'');
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_auteurs.html','html_8aabaef928fd1a7c0379a65846360f0e','_auteurs',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_auteurs']['compteur_boucle'] = 0;
	$Numrows['_auteurs']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_auteurs']) ? $Pile[0]['debut_auteurs'] : _request('debut_auteurs');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_auteurs'] = quete_debut_pagination('id_auteur',$Pile[0]['@id_auteur'] = substr($debut_boucle,1),5,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_auteurs']['total']-1)/(5))*(5)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_auteurs']['total'] : $debut_boucle + 4), $Numrows['_auteurs']['total'] - 1);
	$Numrows['_auteurs']['grand_total'] = $Numrows['_auteurs']['total'];
	$Numrows['_auteurs']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_auteurs']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_auteurs']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('corbeille:selectionner');
	$l2 = _T('public|spip|ecrire:info_sans_titre');
	$l3 = _T('corbeille:voir_detail');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_auteurs']['compteur_boucle']++;
		if ($Numrows['_auteurs']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_auteurs']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
<li class=\'item\'>
<label for=\'auteur-' .
$Pile[$SP]['id_auteur'] .
'\'>' .
$l1 .
'</label><input type=\'checkbox\' name=\'elements[]\' id="auteur-' .
$Pile[$SP]['id_auteur'] .
'" value=\'' .
$Pile[$SP]['id_auteur'] .
'\'' .
((in_any($Pile[$SP]['id_auteur'],interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'elements', null),true))))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
'/>
<h4>' .
(($t1 = strval(interdire_scripts(((($a = supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : $l2))))!=='' ?
		((	'#' .
	$Pile[$SP]['id_auteur'] .
	' - ') . $t1) :
		'') .
'</h4>
<small>' .
interdire_scripts(affdate(normaliser_date(@$Pile[0]['date']))) .
(($t1 = strval(interdire_scripts(heures(normaliser_date(@$Pile[0]['date'])))))!=='' ?
		(' ' . $t1) :
		'') .
':' .
interdire_scripts(minutes(normaliser_date(@$Pile[0]['date']))) .
'</small>
- ' .
interdire_scripts(propre($Pile[$SP]['bio'], $connect, $Pile[0])) .
'
<p class=\'actions\'>[<a href=\'' .
generer_url_ecrire('auteur',(	'id_auteur=' .
	$Pile[$SP]['id_auteur'])) .
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
		spip_log(intval(1000*$timer)."ms BOUCLE_auteurs @ ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_auteurs.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_auteurs.html
// Temps de compilation total: 4.914 ms
//

function html_8aabaef928fd1a7c0379a65846360f0e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_auteurshtml_8aabaef928fd1a7c0379a65846360f0e($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="liste corbeille-auteurs">
' .
		(($t3 = strval(singulier_ou_pluriel((isset($Numrows['_auteurs']['grand_total'])
			? $Numrows['_auteurs']['grand_total'] : $Numrows['_auteurs']['total']),'corbeille:auteurs_corbeille_un','corbeille:auteurs_corbeille_tous')))!=='' ?
				('<h3 class="titrem">' . $t3 . '</h3>') :
				'') .
		'
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_auteurs"]["grand_total"],
 		'_auteurs',
		isset($Pile[0]['debut_auteurs'])?$Pile[0]['debut_auteurs']:intval(_request('debut_auteurs')),
		5, true, '', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
<ul class=\'liste-items checkables\'>
') . $t1 . (	'
</ul>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_auteurs"]["grand_total"],
 		'_auteurs',
		isset($Pile[0]['debut_auteurs'])?$Pile[0]['debut_auteurs']:intval(_request('debut_auteurs')),
		5, true, '', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		'');

	return analyse_resultat_skel('html_8aabaef928fd1a7c0379a65846360f0e', $Cache, $page, '../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_auteurs.html');
}
?>