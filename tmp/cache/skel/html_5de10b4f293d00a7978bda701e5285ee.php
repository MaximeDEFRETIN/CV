<?php

/*
 * Squelette : ../plugins/auto/saisies/v3.33.0/saisies/checkbox.html
 * Date :      Fri, 20 Dec 2019 11:26:28 GMT
 * Compile :   Fri, 21 Feb 2020 08:30:41 GMT
 * Boucles :   _checkbox_groupes, _groupes, _checkbox
 */ 

function BOUCLE_checkbox_groupeshtml_5de10b4f293d00a7978bda701e5285ee(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(interdire_scripts($Pile[$SP-1]['valeur']));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_checkbox_groupes';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
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
		array('../plugins/auto/saisies/v3.33.0/saisies/checkbox.html','html_5de10b4f293d00a7978bda701e5285ee','_checkbox_groupes',59,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_checkbox_groupes']['compteur_boucle'] = 0;
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_checkbox_groupes']['compteur_boucle']++;
		$t0 .= (
'
	<div class="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true)) .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true))))!=='' ?
		(' ' . $t1 . (	'_' .
	interdire_scripts(safehtml($Pile[$SP]['cle'])))) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
		(' ' . $t1) :
		'') .
'">' .
vide($Pile['vars'][$_zzz=(string)'id'] = (	'champ_' .
	interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
	'_' .
	md5(concat($Numrows['_checkbox_groupes']['compteur_boucle'],'-',interdire_scripts(safehtml($Pile[$SP]['cle'])))))) .
'
		<input type="checkbox" name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'[]" class="checkbox checkbox_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" id="' .
table_valeur($Pile["vars"], (string)'id', null) .
'"' .
(($t1 = strval(interdire_scripts(((in_array(safehtml($Pile[$SP]['cle']),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), sinon(table_valeur($Pile["vars"], (string)'valeur', null), table_valeur($Pile["vars"], (string)'defaut', null))),true)))) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'checked="checked"') :
		'') .
' value="' .
interdire_scripts(safehtml($Pile[$SP]['cle'])) .
'"' .
(($t1 = strval(interdire_scripts(((in_array(safehtml($Pile[$SP]['cle']),table_valeur($Pile["vars"], (string)'disabled', null))) ?' ' :''))))!=='' ?
		($t1 . ' disabled="disabled"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'describedby', null),true))))!=='' ?
		(' aria-describedby="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'attributs', null))))!=='' ?
		(' ' . $t1) :
		'') .
' />
		' .
(($t1 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'disable_avec_post', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'disable_avec_post', null),true) != 'non')))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . (	'
			' .
	(($t2 = strval(interdire_scripts(((in_array(safehtml($Pile[$SP]['cle']),table_valeur($Pile["vars"], (string)'defaut', null))) ?' ' :''))))!=='' ?
			($t2 . (	'
			<input type="hidden" name="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
		'[]" value="' .
		interdire_scripts(safehtml($Pile[$SP]['cle'])) .
		'" />
			')) :
			'') .
	'
		')) :
		'') .
'
		<label for="' .
table_valeur($Pile["vars"], (string)'id', null) .
'"' .
(($t1 = strval(interdire_scripts(((in_array(safehtml($Pile[$SP]['cle']),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), sinon(table_valeur($Pile["vars"], (string)'valeur', null), table_valeur($Pile["vars"], (string)'defaut', null))),true)))) ?' ' :''))))!=='' ?
		($t1 . 'class="on"') :
		'') .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'attribut_title', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	' title="' .
	interdire_scripts(safehtml($Pile[$SP]['cle'])) .
	'"')) :
		'') .
'>' .
interdire_scripts(safehtml($Pile[$SP]['valeur'])) .
'</label>
	</div>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_checkbox_groupes @ ../plugins/auto/saisies/v3.33.0/saisies/checkbox.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_groupeshtml_5de10b4f293d00a7978bda701e5285ee(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(is_array($Pile[$SP]['valeur']));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_groupes';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
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
		"CONDITION",
		$command,
		array('../plugins/auto/saisies/v3.33.0/saisies/checkbox.html','html_5de10b4f293d00a7978bda701e5285ee','_groupes',56,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_groupes']['compteur_boucle'] = 0;
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_groupes']['compteur_boucle']++;
		$t0 .= (
'
<div class="choix-groupe">
	<em class="label">' .
interdire_scripts($Pile[$SP-1]['cle']) .
'</em>
	' .
BOUCLE_checkbox_groupeshtml_5de10b4f293d00a7978bda701e5285ee($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</div>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_groupes @ ../plugins/auto/saisies/v3.33.0/saisies/checkbox.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_checkboxhtml_5de10b4f293d00a7978bda701e5285ee(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'data', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_checkbox';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
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
		array('../plugins/auto/saisies/v3.33.0/saisies/checkbox.html','html_5de10b4f293d00a7978bda701e5285ee','_checkbox',54,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'

' .
(($t1 = BOUCLE_groupeshtml_5de10b4f293d00a7978bda701e5285ee($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'


<div class="' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true)) .
	(($t2 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true))))!=='' ?
			(' ' . $t2 . (	'_' .
		interdire_scripts($Pile[$SP]['cle']))) :
			'') .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
			(' ' . $t2) :
			'') .
	'">' .
	vide($Pile['vars'][$_zzz=(string)'id'] = (	'champ_' .
		interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
		'_' .
		md5(concat($Numrows['_groupes']['compteur_boucle'],'-',interdire_scripts($Pile[$SP]['cle']))))) .
	'
	<input type="checkbox" name="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'[]" class="checkbox checkbox_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'id', null) .
	'"' .
	(($t2 = strval(interdire_scripts(((in_array($Pile[$SP]['cle'],interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), sinon(table_valeur($Pile["vars"], (string)'valeur', null), table_valeur($Pile["vars"], (string)'defaut', null))),true)))) ?' ' :''))))!=='' ?
			(' ' . $t2 . 'checked="checked"') :
			'') .
	' value="' .
	interdire_scripts($Pile[$SP]['cle']) .
	'"' .
	(($t2 = strval(interdire_scripts(((in_array($Pile[$SP]['cle'],table_valeur($Pile["vars"], (string)'disabled', null))) ?' ' :''))))!=='' ?
			($t2 . ' disabled="disabled"') :
			'') .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'describedby', null),true))))!=='' ?
			(' aria-describedby="' . $t2 . '"') :
			'') .
	(($t2 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'attributs', null))))!=='' ?
			(' ' . $t2) :
			'') .
	' />
	' .
	(($t2 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'disable_avec_post', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'disable_avec_post', null),true) != 'non')))) ?' ' :'')) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		(($t3 = strval(interdire_scripts(((in_array($Pile[$SP]['cle'],table_valeur($Pile["vars"], (string)'defaut', null))) ?' ' :''))))!=='' ?
				($t3 . (	'
		<input type="hidden" name="' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
			'[]" value="' .
			interdire_scripts($Pile[$SP]['cle']) .
			'" />
		')) :
				'') .
		'
	')) :
			'') .
	'
	<label for="' .
	table_valeur($Pile["vars"], (string)'id', null) .
	'"' .
	(($t2 = strval(interdire_scripts(((in_array($Pile[$SP]['cle'],interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), sinon(table_valeur($Pile["vars"], (string)'valeur', null), table_valeur($Pile["vars"], (string)'defaut', null))),true)))) ?' ' :''))))!=='' ?
			($t2 . 'class="on"') :
			'') .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'attribut_title', null),true)) ?' ' :''))))!=='' ?
			($t2 . (	' title="' .
		interdire_scripts($Pile[$SP]['cle']) .
		'"')) :
			'') .
	'>' .
	interdire_scripts($Pile[$SP]['valeur']) .
	'</label>
</div>
'))) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_checkbox @ ../plugins/auto/saisies/v3.33.0/saisies/checkbox.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v3.33.0/saisies/checkbox.html
// Temps de compilation total: 8.322 ms
//

function html_5de10b4f293d00a7978bda701e5285ee($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'


' .
vide($Pile['vars'][$_zzz=(string)'data'] = interdire_scripts(saisies_chaine2tableau(sinon(table_valeur(@$Pile[0], (string)'data', null), interdire_scripts(table_valeur(@$Pile[0], (string)'datas', null)))))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'defaut'] = interdire_scripts(saisies_chaine2tableau(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true)))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts(saisies_valeur2tableau(entites_html(table_valeur(@$Pile[0], (string)'valeur', null),true)))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'disabled'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))) .
(((table_valeur($Pile["vars"], (string)'disabled', null) == 'disabled'))  ?
		(' ' . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'disabled'] = array_keys(table_valeur($Pile["vars"], (string)'data', null))))) :
		'') .
'
' .
((is_string(table_valeur($Pile["vars"], (string)'disabled', null)))  ?
		(' ' . (	'
	' .
	(!(strlen(table_valeur($Pile["vars"], (string)'disabled', null)))  ?
			(' ' . (	' ' .
		vide($Pile['vars'][$_zzz=(string)'disabled'] = array()))) :
			'') .
	'
	' .
	((table_valeur($Pile["vars"], (string)'disabled', null))  ?
			(' ' . (	' ' .
		vide($Pile['vars'][$_zzz=(string)'disabled'] = filtre_push(array(),table_valeur($Pile["vars"], (string)'disabled', null))))) :
			'') .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((strlen(entites_html(table_valeur(@$Pile[0], (string)'disable_choix', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'disabled'] = interdire_scripts(filtre_explode_dist(entites_html(table_valeur(@$Pile[0], (string)'disable_choix', null),true),','))))) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'tout_selectionner', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	<div class="' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true)) .
	(($t2 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true))))!=='' ?
			(' ' . $t2 . '_tout_selectionner ') :
			'') .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
			(' ' . $t2 . ' ') :
			'') .
	'none-nojs">
		<input type="checkbox" name="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'_tout" class="checkbox" id="champ_' .
	interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
	'_tout" value="on" onChange="if (jQuery(this).prop(\'checked\')==true) jQuery(this).parent(\'div\').parent().find(\'input\').prop(\'checked\',true); else jQuery(this).parent(\'div\').parent().find(\'input\').prop(\'checked\',false);"/>
		<label for="champ_' .
	interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
	'_tout"' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'label_class', null),true))))!=='' ?
			(' class="' . $t2 . '"') :
			'') .
	'>' .
	_T('saisies:tout_selectionner') .
	'</label>
	</div>
')) :
		'') .
'

' .
(($t1 = BOUCLE_checkboxhtml_5de10b4f293d00a7978bda701e5285ee($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'

' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'choix_alternatif', null),true)) ?' ' :''))))!=='' ?
				($t3 . (	'
<div class="' .
			(($t4 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true))))!=='' ?
					($t4 . ' ') :
					'') .
			'choix_alternatif' .
			(($t4 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'choix', null),true)) ?' ' :''))))!=='' ?
					($t4 . (($t5 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'choix', null),true))))!=='' ?
						(' ' . $t5 . '_alternatif') :
						'')) :
					'') .
			(($t4 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
					(' ' . $t4) :
					'') .
			'">
    <input name="' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
			'[choix_alternatif]" id="' .
			(($t4 = strval(interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true)))))!=='' ?
					('champ_' . $t4 . '_choix_alternatif') :
					'') .
			'"' .
			(($t4 = strval(interdire_scripts(saisies_trouver_choix_alternatif(table_valeur(@$Pile[0], (string)'data', null),table_valeur($Pile["vars"], (string)'valeur', null)))))!=='' ?
					(' value="' . $t4 . '"') :
					'') .
			' />

    <label for="' .
			(($t4 = strval(interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true)))))!=='' ?
					('champ_' . $t4 . '_choix_alternatif') :
					'') .
			'"' .
			(($t4 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'label_class', null),true))))!=='' ?
					(' class="' . $t4 . '"') :
					'') .
			'>
         ' .
			interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix_alternatif_label', null), _T('saisies:option_choix_alternatif_label_defaut')),true)) .
			'
    </label>
    ' .
			(($t4 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'choix_alternatif_explication', null),true))))!=='' ?
					('<p class="explication">
      ' . $t4 . '
    </p>') :
					'') .
			'
</div>
')) :
				'') .
		'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((intval(entites_html(table_valeur(@$Pile[0], (string)'maximum_choix', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
<script type="text/javascript">
	$(\'input.checkbox_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'\').on(\'change\', function() {
		if($(\'input.checkbox_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	':checked\').length > ' .
	interdire_scripts(intval(entites_html(table_valeur(@$Pile[0], (string)'maximum_choix', null),true))) .
	') {
			this.checked = false;
		}
	});
</script>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_5de10b4f293d00a7978bda701e5285ee', $Cache, $page, '../plugins/auto/saisies/v3.33.0/saisies/checkbox.html');
}
?>