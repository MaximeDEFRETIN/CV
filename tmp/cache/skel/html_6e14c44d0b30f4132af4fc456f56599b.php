<?php

/*
 * Squelette : ../prive/squelettes/contenu/synchro.html
 * Date :      Mon, 10 Feb 2020 16:50:04 GMT
 * Compile :   Fri, 13 Mar 2020 19:56:58 GMT
 * Boucles :   _secteurs
 */ 

function BOUCLE_secteurshtml_6e14c44d0b30f4132af4fc456f56599b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_secteurs';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', 0));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/squelettes/contenu/synchro.html','html_6e14c44d0b30f4132af4fc456f56599b','_secteurs',48,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			<li class="item"><a
							href="' .
interdire_scripts(generer_url_public('backend', (	'id_rubrique=' .
	$Pile[$SP]['id_rubrique']))) .
'"
							title="' .
interdire_scripts(attribut_html(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'">' .
interdire_scripts(filtre_balise_img_dist(chemin_image('rss-16.png'),'RSS')) .
' ' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
		');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_secteurs @ ../prive/squelettes/contenu/synchro.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/contenu/synchro.html
// Temps de compilation total: 26.893 ms
//

function html_6e14c44d0b30f4132af4fc456f56599b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('public|spip|ecrire:icone_suivi_activite') .
'</h1>

' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('suivi_edito',null,false):'') == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(((((strlen((include_spip('inc/config')?lire_config('adresse_suivi',null,false):'')) > '3')) AND (interdire_scripts((strlen((include_spip('inc/config')?lire_config('adresse_suivi_inscription',null,false):'')) > '3')))) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		boite_ouvrir((	interdire_scripts(filtre_balise_img_dist(chemin_image('racine-24.png'),'','cadre-icone')) .
			_T('public|spip|ecrire:ical_titre_mailing')), 'simple') .
		'
		<p>' .
		_T('public|spip|ecrire:info_config_suivi_explication') .
		'</p>
		<p class="center"><a href=\'mailto:' .
		interdire_scripts((include_spip('inc/config')?lire_config('adresse_suivi_inscription',null,false):'')) .
		'\'>' .
		interdire_scripts((include_spip('inc/config')?lire_config('adresse_suivi_inscription',null,false):'')) .
		'</a></p>
		' .
		boite_fermer() .
		'
	')) :
			'') .
	'
')) :
		'') .
'



' .
boite_ouvrir((	interdire_scripts(filtre_balise_img_dist(chemin_image('agenda-24.png'),'','cadre-icone')) .
	_T('public|spip|ecrire:icone_calendrier')), 'simple') .
'
	<p>' .
_T('public|spip|ecrire:calendrier_synchro') .
'</p>
	<p>' .
_T('public|spip|ecrire:ical_info_calendrier') .
'</p>

	' .
boite_ouvrir('', 'raccourcis') .
'<p>' .
_T('public|spip|ecrire:ical_texte_public') .
'</p>
		' .
interdire_scripts(filtre_icone_horizontale_dist(url_absolue(generer_url_public('ical', '')),_T('public|spip|ecrire:ical_methode_http'),'agenda-24.png')) .
'
		' .
interdire_scripts(filtre_icone_horizontale_dist(replace(url_absolue(generer_url_public('ical', '')),'https?:\\/\\/','webcal://'),_T('public|spip|ecrire:ical_methode_webcal'),'agenda-24.png')) .
'
	' .
boite_fermer() .
'

	' .
boite_ouvrir(interdire_scripts(filtre_balise_img_dist(chemin_image('cadenas-24.png'),'','cadre-icone')), 'raccourcis') .
'
		<p>' .
_T('public|spip|ecrire:ical_texte_prive') .
'</p>
		' .
vide($Pile['vars'][$_zzz=(string)'url'] = interdire_scripts(parametre_url(generer_url_public('ical_prive', (	'id_auteur=' .
		interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null))))),'arg',interdire_scripts(invalideur_session($Cache, afficher_low_sec(table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null),'ical')))))) .
filtre_icone_horizontale_dist(url_absolue(table_valeur($Pile["vars"], (string)'url', null)),_T('public|spip|ecrire:ical_methode_http'),'agenda-24.png') .
'
		' .
filtre_icone_horizontale_dist(replace(url_absolue(table_valeur($Pile["vars"], (string)'url', null)),'https?:\\/\\/','webcal://'),_T('public|spip|ecrire:ical_methode_webcal'),'agenda-24.png') .
'
	' .
boite_fermer() .
'

' .
boite_fermer() .
'


' .
boite_ouvrir((	interdire_scripts(filtre_balise_img_dist(chemin_image('synchro-24.png'),'','cadre-icone')) .
	_T('public|spip|ecrire:ical_titre_rss')), 'simple') .
'
	<p>' .
_T('public|spip|ecrire:ical_texte_rss') .
'</p>
	<p>' .
_T('public|spip|ecrire:ical_texte_rss_articles') .
'</p>
	<pre>' .
interdire_scripts(url_absolue(generer_url_public('backend', ''))) .
'</pre>

	<p>' .
_T('public|spip|ecrire:ical_texte_rss_articles2') .
'</p>
	' .
(($t1 = BOUCLE_secteurshtml_6e14c44d0b30f4132af4fc456f56599b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
		<ul class="liste-items">
		' . $t1 . '
		</ul>
	') :
		'') .
'
' .
boite_fermer() .
'



' .
boite_ouvrir((	interdire_scripts(filtre_balise_img_dist(chemin_image('document-24.png'),'','cadre-icone')) .
	_T('public|spip|ecrire:ical_titre_js')), 'simple') .
'
	<p>' .
_T('public|spip|ecrire:ical_texte_js') .
'</p>
	<pre>
&lt;script
	type="text/javascript"
	src="' .
interdire_scripts(url_absolue(generer_url_public('distrib', ''))) .
'">
&lt;/script>
	</pre>
' .
boite_fermer());

	return analyse_resultat_skel('html_6e14c44d0b30f4132af4fc456f56599b', $Cache, $page, '../prive/squelettes/contenu/synchro.html');
}
?>