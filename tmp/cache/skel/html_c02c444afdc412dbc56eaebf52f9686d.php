<?php

/*
 * Squelette : ../prive/squelettes/contenu/visiteurs.html
 * Date :      Sun, 22 Mar 2020 15:55:59 GMT
 * Compile :   Sun, 22 Mar 2020 16:27:11 GMT
 * Boucles :   _st
 */ 

function BOUCLE_sthtml_c02c444afdc412dbc56eaebf52f9686d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'statuts', null));
	$command['sourcemode'] = 'table';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = (count(table_valeur($Pile["vars"], (string)'statuts', null)) > '1');

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_st';
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
		array('../prive/squelettes/contenu/visiteurs.html','html_c02c444afdc412dbc56eaebf52f9686d','_st',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		<li>' .
lien_ou_expose(parametre_url(self(),'statut',interdire_scripts($Pile[$SP]['valeur'])),interdire_scripts(traduire_statut_auteur($Pile[$SP]['valeur'])),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'statut', null), ''),true) == interdire_scripts($Pile[$SP]['valeur']))),'ajax') .
'</li>
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_st @ ../prive/squelettes/contenu/visiteurs.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/contenu/visiteurs.html
// Temps de compilation total: 2.797 ms
//

function html_c02c444afdc412dbc56eaebf52f9686d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('public|spip|ecrire:info_visiteurs') .
'</h1>

' .
vide($Pile['vars'][$_zzz=(string)'statuts'] = auteurs_lister_statuts('visiteurs','0')) .
(!(count(table_valeur($Pile["vars"], (string)'statuts', null)))  ?
		(' ' . vide($Pile['vars'][$_zzz=(string)'statuts'] = array('0' => 'zzzz'))) :
		'') .
'
' .
(($t1 = BOUCLE_sthtml_c02c444afdc412dbc56eaebf52f9686d($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="onglets_simple clearfix">
	<ul>
		<li>' .
		lien_ou_expose(parametre_url(self(),'statut',''),_T('public|spip|ecrire:info_tout_afficher'),interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'statut', null), ''),true)) ?'' :' ')),'ajax') .
		'</li>
		') . $t1 . '
	</ul>
</div>
') :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
<a href="' .
	parametre_url(self(),'id_auteur','') .
	'">' .
	_T('public|spip|ecrire:icone_tous_visiteur') .
	'</a>
')) :
		'') .
'
' .
executer_balise_dynamique('FORMULAIRE_RECHERCHE_ECRIRE',
	array(self(),'ajax'),
	array('../prive/squelettes/contenu/visiteurs.html','html_c02c444afdc412dbc56eaebf52f9686d','',17,$GLOBALS['spip_lang'])) .
'<div class=\'nettoyeur\'></div>

' .
vide($Pile['vars'][$_zzz=(string)'filtre'] = interdire_scripts(invalideur_session($Cache, filtre_explode_dist(((table_valeur($GLOBALS["visiteur_session"], (string)'statut', null) == '0minirezo') ? 'poubelle':'prepa|poubelle|refuse'),'|')))) .
(($t1 = strval(((($a = recuperer_fond( 'prive/objets/liste/visiteurs' , array_merge($Pile[0],array('nb' => '30' ,
	'filtre_statut_articles' => table_valeur($Pile["vars"], (string)'filtre', null) ,
	'statut' => interdire_scripts((in_any(entites_html(table_valeur(@$Pile[0], (string)'statut', null),true),table_valeur($Pile["vars"], (string)'statuts', null)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'statut', null),true)):table_valeur($Pile["vars"], (string)'statuts', null))) )), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('../prive/squelettes/contenu/visiteurs.html','html_c02c444afdc412dbc56eaebf52f9686d','',20,$GLOBALS['spip_lang'])), _request('connect'))) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'recherche', null),true) ? wrap(_T('info_recherche_auteur_zero',array('cherche_auteur' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'recherche', null),true)))),'<h3>'):'')))))!=='' ?
		($t1 . '
') :
		'') .
'
' .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creer', 'auteur')?" ":""))))!=='' ?
		($t1 . (	'
	' .
	filtre_icone_verticale_dist(generer_url_ecrire('auteur_edit','new=oui'),_T('public|spip|ecrire:icone_creer_nouvel_auteur'),'auteur','new','right') .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_c02c444afdc412dbc56eaebf52f9686d', $Cache, $page, '../prive/squelettes/contenu/visiteurs.html');
}
?>