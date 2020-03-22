<?php

/*
 * Squelette : ../plugins/auto/simplog/v1.4.4/prive/squelettes/inclure/inc-caption.html
 * Date :      Fri, 20 Dec 2019 11:26:28 GMT
 * Compile :   Sun, 08 Mar 2020 10:15:40 GMT
 * Boucles :   _filtre_gravite
 */ 

function BOUCLE_filtre_gravitehtml_2ae70c58d6d63fb08a17210a68619297(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['liste'] = array();
	$command['liste'][] = 'hs';
	$command['liste'][] = 'alerte';
	$command['liste'][] = 'critique';
	$command['liste'][] = 'erreur';
	$command['liste'][] = 'warning';
	$command['liste'][] = '!info';
	$command['liste'][] = 'info';
	$command['liste'][] = 'debug';

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_filtre_gravite';
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
		array('../plugins/auto/simplog/v1.4.4/prive/squelettes/inclure/inc-caption.html','html_2ae70c58d6d63fb08a17210a68619297','_filtre_gravite',22,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('simplog:colonne_gravite');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				<option class="" value="' .
interdire_scripts(safehtml($Pile[$SP]['valeur'])) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'gravite', null),true) == interdire_scripts(safehtml($Pile[$SP]['valeur'])))) ?' ' :''))))!=='' ?
		($t1 . ' selected="selected"') :
		'') .
'>
					' .
(($t1 = strval(interdire_scripts(safehtml($Pile[$SP]['valeur']))))!=='' ?
		((	strtolower($l1) .
	'&nbsp;') . $t1) :
		'') .
'
				</option>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_filtre_gravite @ ../plugins/auto/simplog/v1.4.4/prive/squelettes/inclure/inc-caption.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/simplog/v1.4.4/prive/squelettes/inclure/inc-caption.html
// Temps de compilation total: 1.775 ms
//

function html_2ae70c58d6d63fb08a17210a68619297($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<div class="caption">
	<div class="log unit size2of5">
		' .
_T('simplog:fichier', array('fichier' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'log', null),true)))) .
'
	</div>
	<div class="action unit size1of5">
		' .
(($t1 = strval(interdire_scripts(filtre_balise_img_dist(chemin_image('update-16.png'),_T('simplog:clic_rafraichir'),'rafraichir'))))!=='' ?
		((	'<a href="' .
	parametre_url(self(),'hasard',rand('1','10000000')) .
	'" title="' .
	_T('simplog:clic_rafraichir') .
	'" class="ajax">') . $t1 . '</a>') :
		'') .
'
		' .
bouton_action(interdire_scripts(inserer_attribut(filtre_balise_img_dist(chemin_image('telecharger-16.png'),_T('public|spip|ecrire:bouton_telecharger')),'title',_T('public|spip|ecrire:bouton_telecharger'))),invalideur_session($Cache, generer_action_auteur('telecharger_log',interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'fichier', null),true)))))) .
'
		' .
bouton_action(interdire_scripts(inserer_attribut(filtre_balise_img_dist(chemin_image('supprimer-16.png'),ucfirst(_T('public|spip|ecrire:lien_supprimer'))),'title',ucfirst(_T('public|spip|ecrire:lien_supprimer')))),invalideur_session($Cache, generer_action_auteur('supprimer_log',interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'fichier', null),true))))),'',_T('simplog:message_fichier_suppression')) .
'
	</div>
	<div class="filtre unit size2of5 lastunit">
	' .
(($t1 = BOUCLE_filtre_gravitehtml_2ae70c58d6d63fb08a17210a68619297($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
		<form method="GET" action="' .
		self() .
		'" onChange="this.submit(); return true;">
			' .
		form_hidden(parametre_url(self(),'gravite','')) .
		'
			<select name="gravite" id="filtre_gravite">
				<option value=""' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'gravite', null),true)) ?'' :' '))))!=='' ?
				($t3 . ' selected="selected"') :
				'') .
		'>' .
		_T('simplog:filtre_gravite_aucun') .
		'</option>
	') . $t1 . '
			</select>
		</form>
	') :
		'') .
'
	</div>
</div>
');

	return analyse_resultat_skel('html_2ae70c58d6d63fb08a17210a68619297', $Cache, $page, '../plugins/auto/simplog/v1.4.4/prive/squelettes/inclure/inc-caption.html');
}
?>