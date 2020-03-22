<?php

/*
 * Squelette : ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_breves.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Sun, 08 Mar 2020 10:15:29 GMT
 * Boucles :   _breves
 */ 

function BOUCLE_breveshtml_03fd0bbca909c856160309ef0b9ea7f0(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_breves']) ? $Pile[0]['debut_breves'] : null), 5);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "breves", "?","",array (
  'criteres' => 
  array (
    'statut' => true,
  ),
  'debut_nom' => '\'_breves\'',
),"id_breve");
	}
	
	if (!isset($command['table'])) {
		$command['table'] = 'breves';
		$command['id'] = '_breves';
		$command['from'] = array('breves' => 'spip_breves','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['orderby'] = array('breves.date_heure DESC');
		$command['join'] = array('resultats' => array('breves','id','id_breve'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("breves.id_breve",
		"breves.date_heure",
		"$rech_select",
		"breves.titre",
		"breves.date_heure AS date",
		"breves.texte",
		"breves.lang");
	$command['where'] = 
			array(
			array('=', 'breves.statut', sql_quote(@$Pile[0]['statut'], '','varchar(6) NOT NULL DEFAULT \'0\'')), $rech_where?$rech_where:'');
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_breves.html','html_03fd0bbca909c856160309ef0b9ea7f0','_breves',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_breves']['compteur_boucle'] = 0;
	$Numrows['_breves']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_breves']) ? $Pile[0]['debut_breves'] : _request('debut_breves');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_breves'] = quete_debut_pagination('id_breve',$Pile[0]['@id_breve'] = substr($debut_boucle,1),5,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_breves']['total']-1)/(5))*(5)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_breves']['total'] : $debut_boucle + 4), $Numrows['_breves']['total'] - 1);
	$Numrows['_breves']['grand_total'] = $Numrows['_breves']['total'];
	$Numrows['_breves']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_breves']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_breves']['compteur_boucle'] = $debut_boucle;
	
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_breves']['compteur_boucle']++;
		if ($Numrows['_breves']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_breves']['compteur_boucle']-1 > $fin_boucle) break;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
<li class=\'item\'>
<label for=\'breve-' .
$Pile[$SP]['id_breve'] .
'\'>' .
_T('corbeille:selectionner') .
'</label><input type=\'checkbox\' name=\'elements[]\' id="breve-' .
$Pile[$SP]['id_breve'] .
'" value=\'' .
$Pile[$SP]['id_breve'] .
'\'' .
((in_any($Pile[$SP]['id_breve'],interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'elements', null),true))))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
'/>
<h4>' .
(($t1 = strval(interdire_scripts(((($a = supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre')))))!=='' ?
		((	'#' .
	$Pile[$SP]['id_breve'] .
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
interdire_scripts(filtre_introduction_dist('', $Pile[$SP]['texte'], 300, $connect, null)) .
'
<p class=\'actions\'>[<a href=\'' .
generer_url_ecrire('breve',(	'id_breve=' .
	$Pile[$SP]['id_breve'])) .
'\'>' .
_T('corbeille:voir_detail') .
'</a>]</p>
</li>
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_breves @ ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_breves.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_breves.html
// Temps de compilation total: 0.829 ms
//

function html_03fd0bbca909c856160309ef0b9ea7f0($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_breveshtml_03fd0bbca909c856160309ef0b9ea7f0($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="liste corbeille-breves">
' .
		(($t3 = strval(singulier_ou_pluriel((isset($Numrows['_breves']['grand_total'])
			? $Numrows['_breves']['grand_total'] : $Numrows['_breves']['total']),'corbeille:breves_corbeille_un','corbeille:breves_corbeille_tous')))!=='' ?
				('<h3 class="titrem">' . $t3 . '</h3>') :
				'') .
		'
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_breves"]["grand_total"],
 		'_breves',
		isset($Pile[0]['debut_breves'])?$Pile[0]['debut_breves']:intval(_request('debut_breves')),
		5, true, '', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
<ul class=\'liste-items checkables\'>
') . $t1 . (	'
</ul>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_breves"]["grand_total"],
 		'_breves',
		isset($Pile[0]['debut_breves'])?$Pile[0]['debut_breves']:intval(_request('debut_breves')),
		5, true, '', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		'');

	return analyse_resultat_skel('html_03fd0bbca909c856160309ef0b9ea7f0', $Cache, $page, '../plugins/auto/corbeille/v3.1.2/prive/listes/corbeille_breves.html');
}
?>