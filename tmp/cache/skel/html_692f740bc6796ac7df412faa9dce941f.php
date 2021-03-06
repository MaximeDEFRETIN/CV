<?php

/*
 * Squelette : ../prive/objets/infos/inc-auteur-rubriques.html
 * Date :      Sun, 01 Dec 2019 12:09:32 GMT
 * Compile :   Wed, 05 Feb 2020 15:31:32 GMT
 * Boucles :   _restreint
 */ 

function BOUCLE_restreinthtml_692f740bc6796ac7df412faa9dce941f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(in_array(@$Pile[0]['statut'],filtre_explode_dist((defined('_STATUT_AUTEUR_RUBRIQUE')?constant('_STATUT_AUTEUR_RUBRIQUE'):''),',')));

	$command['pagination'] = array((isset($Pile[0]['debut_restreint']) ? $Pile[0]['debut_restreint'] : null), 10);
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_restreint';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_auteur', sql_quote(@$Pile[0]['id_auteur'], '','bigint(21) NOT NULL DEFAULT 0')), 
			array('REGEXP', 'rubriques.statut', "'.*'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/infos/inc-auteur-rubriques.html','html_692f740bc6796ac7df412faa9dce941f','_restreint',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_restreint']['compteur_boucle'] = 0;
	$Numrows['_restreint']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_restreint']) ? $Pile[0]['debut_restreint'] : _request('debut_restreint');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_restreint'] = quete_debut_pagination('id_rubrique',$Pile[0]['@id_rubrique'] = substr($debut_boucle,1),10,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_restreint']['total']-1)/(10))*(10)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_restreint']['total'] : $debut_boucle + 9), $Numrows['_restreint']['total'] - 1);
	$Numrows['_restreint']['grand_total'] = $Numrows['_restreint']['total'];
	$Numrows['_restreint']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_restreint']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_restreint']['compteur_boucle'] = $debut_boucle;
	
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_restreint']['compteur_boucle']++;
		if ($Numrows['_restreint']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_restreint']['compteur_boucle']-1 > $fin_boucle) break;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				<li class="item rubrique"><a href="' .
generer_url_entite($Pile[$SP]['id_rubrique'],'rubrique') .
'">' .
(($t1 = strval(interdire_scripts(filtre_balise_img_dist(chemin_image('rubrique-16.png')))))!=='' ?
		($t1 . ' ') :
		'') .
interdire_scripts(((($a = supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre'))) .
'</a></li>
			');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_restreint @ ../prive/objets/infos/inc-auteur-rubriques.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/objets/infos/inc-auteur-rubriques.html
// Temps de compilation total: 3.420 ms
//

function html_692f740bc6796ac7df412faa9dce941f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_restreinthtml_692f740bc6796ac7df412faa9dce941f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div class=\'liste_rubriques_restreintes\'>
		' .
		_T('public|spip|ecrire:info_auteur_gere_rubriques') .
		'
		<ul class="liste-items rubriques">
			') . $t1 . (	'
		</ul>
		' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_restreint"]["grand_total"],
 		'_restreint',
		isset($Pile[0]['debut_restreint'])?$Pile[0]['debut_restreint']:intval(_request('debut_restreint')),
		10, true, 'prive', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
	</div>
')) :
		((	'
' .
	(($t2 = strval(interdire_scripts((((@$Pile[0]['statut'] == '0minirezo')) ?' ' :''))))!=='' ?
			($t2 . (	'
	' .
		(($t3 = strval(((@$Pile[0]['id_auteur'] == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) ? _T('public|spip|ecrire:info_auteur_gere_toutes_rubriques_2'):_T('public|spip|ecrire:info_auteur_gere_toutes_rubriques'))))!=='' ?
				('<p>' . $t3 . '</p>') :
				'') .
		'
')) :
			'') .
	'
'))) .
'
</div>');

	return analyse_resultat_skel('html_692f740bc6796ac7df412faa9dce941f', $Cache, $page, '../prive/objets/infos/inc-auteur-rubriques.html');
}
?>