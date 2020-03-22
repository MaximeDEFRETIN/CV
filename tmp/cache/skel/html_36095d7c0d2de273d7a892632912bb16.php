<?php

/*
 * Squelette : ../plugins/auto/info_spip/v0.11.1/infos_spip/html/liste_auteurs_webmestre.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Wed, 05 Feb 2020 16:19:23 GMT
 * Boucles :   _webmestre
 */ 

function BOUCLE_webmestrehtml_36095d7c0d2de273d7a892632912bb16(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_webmestre';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.id_auteur",
		"auteurs.login",
		"auteurs.email",
		"auteurs.nom");
		$command['orderby'] = array('auteurs.id_auteur');
		$command['where'] = 
			array(
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('=', 'auteurs.webmestre', "'oui'"));
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
		array('../plugins/auto/info_spip/v0.11.1/infos_spip/html/liste_auteurs_webmestre.html','html_36095d7c0d2de273d7a892632912bb16','_webmestre',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_webmestre']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		<tr>
			<td class="id secondaire">' .
$Pile[$SP]['id_auteur'] .
'</td>
			<td class="login secondaire">' .
interdire_scripts(((($a = $Pile[$SP]['login']) OR (is_string($a) AND strlen($a))) ? $a : '-')) .
'</td>
			<td class="email secondaire">' .
interdire_scripts(((($a = $Pile[$SP]['email']) OR (is_string($a) AND strlen($a))) ? $a : '-')) .
'</td>' .
vide($Pile['vars'][$_zzz=(string)'url_auteur'] = ((intval(spip_version()) == '2') ? 'auteur_infos':'auteur')) .
'
			<td class="nom principal"><a href="' .
generer_url_ecrire(table_valeur($Pile["vars"], (string)'url_auteur', null),(	'id_auteur=' .
	$Pile[$SP]['id_auteur'])) .
'">' .
interdire_scripts(((($a = supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : '-')) .
'</a></td>
		</tr>
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_webmestre @ ../plugins/auto/info_spip/v0.11.1/infos_spip/html/liste_auteurs_webmestre.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/info_spip/v0.11.1/infos_spip/html/liste_auteurs_webmestre.html
// Temps de compilation total: 1.229 ms
//

function html_36095d7c0d2de273d7a892632912bb16($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
(($t1 = BOUCLE_webmestrehtml_36095d7c0d2de273d7a892632912bb16($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<!-- ' .
		_T('info_spip:liste_auteurs_webmestre_nom') .
		' -->
<div class="fieldset webmestre_fieldset" id="' .
		replace(array_pop(filtre_explode_dist('../plugins/auto/info_spip/v0.11.1/infos_spip/html/liste_auteurs_webmestre.html','/')),'.html','') .
		'">
	<h3 class="legend titrem">' .
		singulier_ou_pluriel($Numrows['_webmestre']['total'],_T('info_spip:info_1_webmestre'),_T('info_spip:info_nb_webmestres')) .
		'</h3>
</div>

<div class="liste-objets">
	<table class="spip liste">
		<thead>
			<tr>
				<th class="id secondaire">' .
		_T('info_spip:auteur_id_label') .
		'</th>
				<th class="login secondaire">' .
		_T('info_spip:auteur_login_label') .
		'</th>
				<th class="email secondaire">' .
		_T('info_spip:auteur_email_label') .
		'</th>
				<th class="nom principal">' .
		_T('info_spip:auteur_nom_label') .
		'</th>
			</tr>
		</thead>
		<tbody>
		') . $t1 . '
		</tbody>
	</table>
</div>
') :
		'') .
'

');

	return analyse_resultat_skel('html_36095d7c0d2de273d7a892632912bb16', $Cache, $page, '../plugins/auto/info_spip/v0.11.1/infos_spip/html/liste_auteurs_webmestre.html');
}
?>