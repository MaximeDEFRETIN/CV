<?php

/*
 * Squelette : ../plugins/auto/metasplus/v2.3.2/formulaires/configurer_metasplus.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Thu, 05 Mar 2020 11:18:13 GMT
 * Boucles :   _doc
 */ 

function BOUCLE_dochtml_001577d544eb10e45fa5d317570fff02(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_doc';
		$command['from'] = array('documents' => 'spip_documents');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("documents.id_document");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'documents.id_document', sql_quote(interdire_scripts((include_spip('inc/config')?lire_config('metasplus/id_doc_logo',null,false):'')), '', 'bigint(21) NOT NULL AUTO_INCREMENT')));
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
		array('../plugins/auto/metasplus/v2.3.2/formulaires/configurer_metasplus.html','html_001577d544eb10e45fa5d317570fff02','_doc',54,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('medias:bouton_enlever_supprimer_document');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .
quete_logo_document(quete_document($Pile[$SP]['id_document'], ''), vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true))), '', '', 0, 0, '') .
'
			' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('supprimer', 'document', invalideur_session($Cache, $Pile[$SP]['id_document']))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
				' .
	invalideur_session($Cache, filtre_icone_horizontale_dist(generer_action_auteur('supprimer_document',invalideur_session($Cache, $Pile[$SP]['id_document']),invalideur_session($Cache, self())),$l1,'image','del')) .
	'
			')) :
		'') .
'
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_doc @ ../plugins/auto/metasplus/v2.3.2/formulaires/configurer_metasplus.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/metasplus/v2.3.2/formulaires/configurer_metasplus.html
// Temps de compilation total: 43.422 ms
//

function html_001577d544eb10e45fa5d317570fff02($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_cfg formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'">

<h3 class=\'titrem\'>' .
_T('metasplus:titre_config_metasplus') .
'</h3>

' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'

<form method="post" action="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'" enctype="multipart/form-data">
<div>

	' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div><div class="editer-groupe">

		
		' .
vide($Pile['vars'][$_zzz=(string)'erreurs_reseaux'] = array_filter(array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'erreurs/dublincore', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'erreurs/opengraph', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'erreurs/twitter', null),true))))) .
vide($Pile['vars'][$_zzz=(string)'erreurs_reseaux'] = join(table_valeur($Pile["vars"], (string)'erreurs_reseaux', null),', ')) .
'<div class="editer editer_reseaux' .
((table_valeur($Pile["vars"], (string)'erreurs_reseaux', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
			<label>' .
_T('metasplus:label_reseaux') .
'</label>
			<div class="choix">
				' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'erreurs/dublincore', null),true))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
				<input type="checkbox" name="dublincore" id=\'dublincore\' class="checkbox" value="on"' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'dublincore', null),true)) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'checked="checked"') :
		'') .
' />
				<label for="dublincore">' .
_T('metasplus:label_dublincore') .
'</label>
			</div>
			<div class="choix">
				' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'erreurs/opengraph', null),true))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
				<input type="checkbox" name="opengraph" id=\'opengraph\' class="checkbox" value="on"' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'opengraph', null),true)) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'checked="checked"') :
		'') .
' />
				<label for="opengraph">' .
_T('metasplus:label_opengraph') .
'</label>
			</div>
			<div class="choix">
				' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'erreurs/twitter', null),true))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
				<input type="checkbox" name="twitter" id=\'twitter\' class="checkbox" value="on"' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'twitter', null),true)) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'checked="checked"') :
		'') .
' />
				<label for="twitter">' .
_T('metasplus:label_twitter') .
'</label>
			</div>
		</div>

		' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'masquer_auteurs') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	'erreurs/' .
		table_valeur($Pile["vars"], (string)'name', null)), null),true))) .
'<div class="editer editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
			<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">' .
_T('metasplus:label_masquer_auteurs') .
'</label>
			<p class="explication">' .
_T('metasplus:explication_masquer_auteurs') .
'</p>
			' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
			<div class="choix">
				<input type="checkbox" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="checkbox" value="on"' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'checked="checked"') :
		'') .
' />
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">' .
_T('metasplus:label_case_masquer_auteurs') .
'</label>
			</div>
		</div>

		' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'id_doc_logo') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	'erreurs/' .
		table_valeur($Pile["vars"], (string)'name', null)), null),true))) .
'<div class="editer editer_id_doc_logo' .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
			<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">' .
_T('metasplus:logo_bis') .
'</label>
			<p class="explication">' .
_T('metasplus:explication_id_doc_logo') .
'</p>
			<input type="hidden" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
'" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
			' .
(($t1 = BOUCLE_dochtml_001577d544eb10e45fa5d317570fff02($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
			<input type="file" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" class="file">
			'))) .
'
		</div>

	</div>
	<p class="boutons">
		<input type="submit" name="_cfg_ok" value="' .
_T('public|spip|ecrire:bouton_enregistrer') .
'" class="submit" />
	</p>
</div>
</form>
</div>
');

	return analyse_resultat_skel('html_001577d544eb10e45fa5d317570fff02', $Cache, $page, '../plugins/auto/metasplus/v2.3.2/formulaires/configurer_metasplus.html');
}
?>