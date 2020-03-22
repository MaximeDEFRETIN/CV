<?php

/*
 * Squelette : ../plugins-dist/dump/prive/squelettes/contenu/restaurer.html
 * Date :      Sun, 22 Mar 2020 15:51:49 GMT
 * Compile :   Sun, 22 Mar 2020 16:23:39 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/dump/prive/squelettes/contenu/restaurer.html
// Temps de compilation total: 2.511 ms
//

function html_fbbd3a253f0760bd0acfa5abe3f621dc($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('sauvegarder')?" ":""))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'fin'] = interdire_scripts(dump_verifie_sauvegarde_finie(entites_html(table_valeur(@$Pile[0], (string)'status', null),true)))) .
(!(table_valeur($Pile["vars"], (string)'fin', null))  ?
		(' ' . (	'
	<h1 class="grostitre">' .
	_T('dump:texte_restaurer_base') .
	'</h1>

	' .
	boite_ouvrir('', 'notice') .
	vide($Pile['vars'][$_zzz=(string)'dir_dump'] = concat('<i>',joli_repertoire(dump_repertoire('')),'</i>')) .
	'<p>' .
	_T('dump:texte_restaurer_sauvegarde', array('dossier' => table_valeur($Pile["vars"], (string)'dir_dump', null))) .
	'</p>
	' .
	boite_fermer() .
	'

	<div class="ajax">
		' .
	executer_balise_dynamique('FORMULAIRE_RESTAURER',
	array(),
	array('../plugins-dist/dump/prive/squelettes/contenu/restaurer.html','html_fbbd3a253f0760bd0acfa5abe3f621dc','',12,$GLOBALS['spip_lang'])) .
	'
	</div>
')) :
		'') .
((table_valeur($Pile["vars"], (string)'fin', null))  ?
		(' ' . (	'

	' .
	boite_ouvrir('', 'success') .
	vide($Pile['vars'][$_zzz=(string)'archive'] = concat(concat('<br /><b>',interdire_scripts(joli_repertoire(dump_nom_sauvegarde(entites_html(table_valeur(@$Pile[0], (string)'status', null),true))))),'</b>')) .
	'

	<p>
	' .
	_T('dump:info_restauration_finie', array('archive' => table_valeur($Pile["vars"], (string)'archive', null))) .
	'
	' .
	_T('dump:info_sauvegarde_reussi_03') .
	' ' .
	_T('dump:info_sauvegarde_reussi_04') .
	'
	</p>

	' .
	boite_fermer() .
	'

	' .
	(($t2 = strval(interdire_scripts(dump_afficher_tables_restaurees_erreurs(entites_html(table_valeur(@$Pile[0], (string)'status', null),true)))))!=='' ?
			(boite_ouvrir('', 'error') . $t2 . (	'
	' .
		boite_fermer() .
		'

	')) :
			'') .
	'

')) :
		''));

	return analyse_resultat_skel('html_fbbd3a253f0760bd0acfa5abe3f621dc', $Cache, $page, '../plugins-dist/dump/prive/squelettes/contenu/restaurer.html');
}
?>