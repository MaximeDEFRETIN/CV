<?php

/*
 * Squelette : ../prive/squelettes/contenu/auteur.html
 * Date :      Sun, 01 Dec 2019 12:09:33 GMT
 * Compile :   Wed, 05 Feb 2020 15:31:32 GMT
 * Boucles :   _auteur
 */ 

function BOUCLE_auteurhtml_1d2d728fd57e1cbf0509b9bdcec01138(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'auteur'));

	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_auteur';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.lang",
		"auteurs.nom",
		"auteurs.id_auteur",
		"auteurs.nom AS titre_rang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'auteurs.id_auteur', sql_quote(@$Pile[0]['id_auteur'], '','bigint(21) NOT NULL AUTO_INCREMENT')), 
			array('REGEXP', 'auteurs.statut', "'.*'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/squelettes/contenu/auteur.html','html_1d2d728fd57e1cbf0509b9bdcec01138','_auteur',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
changer_typo(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])) .
'
' .
boite_ouvrir((($t2 = strval(interdire_scripts(((($a = supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre')))))!=='' ?
			((	'
				
	' .
		(($t3 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'auteur', invalideur_session($Cache, $Pile[$SP]['id_auteur']))?" ":""))))!=='' ?
				($t3 . (	'
				
		' .
			(!(afficher_qui_edite($Pile[$SP]['id_auteur'],'auteur'))  ?
					(' ' . (	'
			' .
				filtre_icone_verticale_dist(generer_url_ecrire('auteur_edit',(	'id_auteur=' .
					$Pile[$SP]['id_auteur'])),_T('public|spip|ecrire:admin_modifier_auteur'),'auteur','edit','right ajax preload') .
				'
		')) :
					'') .
			'
		' .
			((afficher_qui_edite($Pile[$SP]['id_auteur'],'auteur'))  ?
					(' ' . (	'
			' .
				filtre_icone_verticale_dist(generer_url_ecrire('auteur_edit',(	'id_auteur=' .
					$Pile[$SP]['id_auteur'])),afficher_qui_edite($Pile[$SP]['id_auteur'],'auteur'),'warning-24','','right edition_deja ajax preload') .
				'
		')) :
					'') .
			'
	')) :
				'') .
		'
	<h1>' .
		(($t3 = strval(recuperer_numero($Pile[$SP]['titre_rang'])))!=='' ?
				($t3 . '. ') :
				'')) . $t2 . (	interdire_scripts(filtre_balise_img_dist(chemin_image('auteur-24.png'),'auteur','cadre-icone')) .
		'</h1>
')) :
			''), 'simple fiche_objet') .
'
' .
changer_typo('') .
'
<!--affiche_milieu-->

' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'email_confirm', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	boite_ouvrir('', 'notice') .
	'<p>' .
	_T('public|spip|ecrire:form_auteur_envoi_mail_confirmation', array('email' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'email_confirm', null),true)))) .
	'</p>' .
	boite_fermer() .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'email_modif', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	boite_ouvrir('', 'success') .
	'<p>' .
	_T('public|spip|ecrire:form_auteur_email_modifie') .
	'</p>' .
	boite_fermer() .
	'
')) :
		'') .
'

<div id="wysiwyg">
	<h2 class="invisible">' .
_T('public|spip|ecrire:previsualisation') .
'</h2>
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/contenu/auteur') . ', array(\'id\' => ' . argumenter_squelette($Pile[$SP]['id_auteur']) . ',
	\'id_auteur\' => ' . argumenter_squelette($Pile[$SP]['id_auteur']) . ',
	\'exec\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true))) . ',
	\'wysiwyg\' => ' . argumenter_squelette('1') . ',
	\'espace_prive\' => ' . argumenter_squelette(@$Pile[0]['espace_prive']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../prive/squelettes/contenu/auteur.html\',\'html_1d2d728fd57e1cbf0509b9bdcec01138\',\'\',13,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div>

' .
pipeline( 'afficher_complement_objet' , array('args' => array('type' => 'auteur', 'id' => $Pile[$SP]['id_auteur']), 'data' => '<div class="nettoyeur"></div>') ) .
boite_fermer() .
'

' .
vide($Pile['vars'][$_zzz=(string)'enfants'] = '') .
pipeline( 'affiche_enfants' , array('args' => array('exec' => table_valeur(@$Pile[0], (string)'exec', null), 'objet' => 'auteur', 'id_objet' => $Pile[$SP]['id_auteur']), 'data' => table_valeur($Pile["vars"], (string)'enfants', null)) ) .
'

' .
(($t1 = strval(interdire_scripts(((intval(entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	'

	' .
	vide($Pile['vars'][$_zzz=(string)'statuts'] = interdire_scripts(invalideur_session($Cache, statuts_articles_visibles(table_valeur($GLOBALS["visiteur_session"], (string)'statut', null))))) .
	((($Pile[$SP]['id_auteur'] == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))))  ?
			(' ' . (	' ' .
		vide($Pile['vars'][$_zzz=(string)'statuts'] = ''))) :
			'') .
	'
	' .
	pipeline( 'affiche_auteurs_interventions' , array('args' => array('id_auteur' => $Pile[$SP]['id_auteur']), 'data' => recuperer_fond( 'prive/objets/liste/articles' , array_merge($Pile[0],array('id_auteur' => $Pile[$SP]['id_auteur'] ,
	'statut' => table_valeur($Pile["vars"], (string)'statuts', null) ,
	'par' => 'date' ,
	'titre' => _T('public|spip|ecrire:info_articles_auteur') )), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('../prive/squelettes/contenu/auteur.html','html_1d2d728fd57e1cbf0509b9bdcec01138','_auteur',0,$GLOBALS['spip_lang'])), _request('connect'))) ) .
	'
')) :
		'') .
'

' .
(((defined('_AJAX')?constant('_AJAX'):''))  ?
		(' ' . (	'
	<script type="text/javascript">/*<![CDATA[*/reloadExecPage(\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true)) .
	'\',\'#navigation,#extra\');/*]]>*/</script>
')) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_auteur @ ../prive/squelettes/contenu/auteur.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/contenu/auteur.html
// Temps de compilation total: 4.709 ms
//

function html_1d2d728fd57e1cbf0509b9bdcec01138($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('voir', 'auteur', invalideur_session($Cache, @$Pile[0]['id_auteur']))?" ":""))) .
'
' .
(($t1 = BOUCLE_auteurhtml_1d2d728fd57e1cbf0509b9bdcec01138($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	((table_valeur(@$Pile[0], (string)'exec', null) == 'auteur_edit') ? recuperer_fond( 'prive/squelettes/contenu/auteur_edit' , array_merge($Pile[0],array('retourajax' => 'oui' )), array('compil'=>array('../prive/squelettes/contenu/auteur.html','html_1d2d728fd57e1cbf0509b9bdcec01138','',0,$GLOBALS['spip_lang'])), _request('connect')):sinon_interdire_acces('','',_T('public|spip|ecrire:info_aucun_auteur'))) .
	'
'))) .
'
');

	return analyse_resultat_skel('html_1d2d728fd57e1cbf0509b9bdcec01138', $Cache, $page, '../prive/squelettes/contenu/auteur.html');
}
?>