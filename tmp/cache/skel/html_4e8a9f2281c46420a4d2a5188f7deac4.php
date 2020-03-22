<?php

/*
 * Squelette : ../plugins/auto/saisies/v3.33.0/saisies/radio.html
 * Date :      Fri, 20 Dec 2019 11:26:28 GMT
 * Compile :   Fri, 21 Feb 2020 08:30:41 GMT
 * Boucles :   _radio
 */ 

function BOUCLE_radiohtml_4e8a9f2281c46420a4d2a5188f7deac4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'data', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_radio';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".cle",
		".valeur");
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
		array('../plugins/auto/saisies/v3.33.0/saisies/radio.html','html_4e8a9f2281c46420a4d2a5188f7deac4','_radio',28,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_radio']['compteur_boucle'] = 0;
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_radio']['compteur_boucle']++;
		$t0 .= (
'
' .
vide($Pile['vars'][$_zzz=(string)'disabled'] = interdire_scripts((is_string(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true)):interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	'disable/' .
			interdire_scripts($Pile[$SP]['cle'])), null),true))))) .
'<div class="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true)) .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true))))!=='' ?
		(' ' . $t1 . (	'_' .
	interdire_scripts($Pile[$SP]['cle']))) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
		(' ' . $t1) :
		'') .
'">
	<input type="radio" name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" class="radio"' .
((' ')  ?
		(' ' . ' ' . (($t2 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true) != 'non')))) ?' ' :'')) ?' ' :''))))!=='' ?
			($t2 . ' required="required"') :
			'')) :
		'') .
' id="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
'_' .
$Numrows['_radio']['compteur_boucle'] .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))),true))),true) == interdire_scripts($Pile[$SP]['cle']))) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'checked="checked"') :
		'') .
' value="' .
interdire_scripts($Pile[$SP]['cle']) .
'"' .
(((table_valeur($Pile["vars"], (string)'disabled', null)) OR (interdire_scripts(in_array($Pile[$SP]['cle'],table_valeur($Pile["vars"], (string)'disable_choix', null)))))  ?
		(' ' . ' disabled="disabled"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'readonly', null),true))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'describedby', null),true))))!=='' ?
		(' aria-describedby="' . $t1 . '"') :
		'') .
' />
	<label for="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
'_' .
$Numrows['_radio']['compteur_boucle'] .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))),true))),true) == interdire_scripts($Pile[$SP]['cle']))) ?' ' :''))))!=='' ?
		($t1 . 'class="on"') :
		'') .
'>' .
interdire_scripts($Pile[$SP]['valeur']) .
'</label>
</div>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_radio @ ../plugins/auto/saisies/v3.33.0/saisies/radio.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v3.33.0/saisies/radio.html
// Temps de compilation total: 3.273 ms
//

function html_4e8a9f2281c46420a4d2a5188f7deac4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'


' .
vide($Pile['vars'][$_zzz=(string)'data'] = interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'data', null), interdire_scripts(table_valeur(@$Pile[0], (string)'datas', null))))) .
vide($Pile['vars'][$_zzz=(string)'data'] = (is_string(table_valeur($Pile["vars"], (string)'data', null)) ? saisies_chaine2tableau(table_valeur($Pile["vars"], (string)'data', null)):table_valeur($Pile["vars"], (string)'data', null))) .
vide($Pile['vars'][$_zzz=(string)'disable_choix'] = array()) .
(($t1 = strval(interdire_scripts(((strlen(entites_html(table_valeur(@$Pile[0], (string)'disable_choix', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	vide($Pile['vars'][$_zzz=(string)'disable_choix'] = interdire_scripts(filtre_explode_dist(trim(entites_html(table_valeur(@$Pile[0], (string)'disable_choix', null),true)),','))))) :
		'') .
'
' .
BOUCLE_radiohtml_4e8a9f2281c46420a4d2a5188f7deac4($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_4e8a9f2281c46420a4d2a5188f7deac4', $Cache, $page, '../plugins/auto/saisies/v3.33.0/saisies/radio.html');
}
?>