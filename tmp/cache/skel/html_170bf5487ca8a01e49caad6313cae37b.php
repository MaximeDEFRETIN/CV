<?php

/*
 * Squelette : ../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html
 * Date :      Sat, 25 Jan 2020 13:04:28 GMT
 * Compile :   Thu, 27 Feb 2020 09:12:24 GMT
 * Boucles :   _groupes1, _groupes2, _groupes3, _groupes4, _groupes5, _choix_image1, _choix_image2
 */ 

function BOUCLE_groupes1html_170bf5487ca8a01e49caad6313cae37b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'affichage';
	$in[]= 'trombino';
	$in[]= 'type_rubrique';
	$in[]= 'Agenda_couleur';
	if (!isset($command['table'])) {
		$command['table'] = 'groupes_mots';
		$command['id'] = '_groupes1';
		$command['from'] = array('groupes_mots' => 'spip_groupes_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("CASE (0+groupes_mots.titre) WHEN 0 THEN 1 ELSE 0 END AS sinum",
		"0+groupes_mots.titre AS num1",
		"groupes_mots.titre");
		$command['orderby'] = array('sinum', 'num1', 'groupes_mots.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(sql_in('groupes_mots.titre',sql_quote($in),'NOT'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html','html_170bf5487ca8a01e49caad6313cae37b','_groupes1',95,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
                      			<option value="' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'"' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) ? 'selected="selected"':'')) .
'>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</option>
                    		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_groupes1 @ ../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_groupes2html_170bf5487ca8a01e49caad6313cae37b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'affichage';
	$in[]= 'trombino';
	$in[]= 'type_rubrique';
	$in[]= 'Agenda_couleur';
	if (!isset($command['table'])) {
		$command['table'] = 'groupes_mots';
		$command['id'] = '_groupes2';
		$command['from'] = array('groupes_mots' => 'spip_groupes_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("CASE (0+groupes_mots.titre) WHEN 0 THEN 1 ELSE 0 END AS sinum",
		"0+groupes_mots.titre AS num1",
		"groupes_mots.titre");
		$command['orderby'] = array('sinum', 'num1', 'groupes_mots.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(sql_in('groupes_mots.titre',sql_quote($in),'NOT'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html','html_170bf5487ca8a01e49caad6313cae37b','_groupes2',107,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		                        <option value="' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'"' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) ? 'selected="selected"':'')) .
'>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</option>
		                    ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_groupes2 @ ../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_groupes3html_170bf5487ca8a01e49caad6313cae37b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'affichage';
	$in[]= 'trombino';
	$in[]= 'type_rubrique';
	$in[]= 'Agenda_couleur';
	if (!isset($command['table'])) {
		$command['table'] = 'groupes_mots';
		$command['id'] = '_groupes3';
		$command['from'] = array('groupes_mots' => 'spip_groupes_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("CASE (0+groupes_mots.titre) WHEN 0 THEN 1 ELSE 0 END AS sinum",
		"0+groupes_mots.titre AS num1",
		"groupes_mots.titre");
		$command['orderby'] = array('sinum', 'num1', 'groupes_mots.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(sql_in('groupes_mots.titre',sql_quote($in),'NOT'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html','html_170bf5487ca8a01e49caad6313cae37b','_groupes3',119,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		                        <option value="' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'"' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) ? 'selected="selected"':'')) .
'>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</option>
		                    ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_groupes3 @ ../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_groupes4html_170bf5487ca8a01e49caad6313cae37b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'affichage';
	$in[]= 'trombino';
	$in[]= 'type_rubrique';
	$in[]= 'Agenda_couleur';
	if (!isset($command['table'])) {
		$command['table'] = 'groupes_mots';
		$command['id'] = '_groupes4';
		$command['from'] = array('groupes_mots' => 'spip_groupes_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("CASE (0+groupes_mots.titre) WHEN 0 THEN 1 ELSE 0 END AS sinum",
		"0+groupes_mots.titre AS num1",
		"groupes_mots.titre");
		$command['orderby'] = array('sinum', 'num1', 'groupes_mots.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(sql_in('groupes_mots.titre',sql_quote($in),'NOT'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html','html_170bf5487ca8a01e49caad6313cae37b','_groupes4',131,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		                        <option value="' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'"' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) ? 'selected="selected"':'')) .
'>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</option>
		                    ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_groupes4 @ ../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_groupes5html_170bf5487ca8a01e49caad6313cae37b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'affichage';
	$in[]= 'trombino';
	$in[]= 'type_rubrique';
	$in[]= 'Agenda_couleur';
	if (!isset($command['table'])) {
		$command['table'] = 'groupes_mots';
		$command['id'] = '_groupes5';
		$command['from'] = array('groupes_mots' => 'spip_groupes_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("CASE (0+groupes_mots.titre) WHEN 0 THEN 1 ELSE 0 END AS sinum",
		"0+groupes_mots.titre AS num1",
		"groupes_mots.titre");
		$command['orderby'] = array('sinum', 'num1', 'groupes_mots.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(sql_in('groupes_mots.titre',sql_quote($in),'NOT'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html','html_170bf5487ca8a01e49caad6313cae37b','_groupes5',143,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		                        <option value="' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'"' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) ? 'selected="selected"':'')) .
'>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</option>
		                    ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_groupes5 @ ../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_choix_image1html_170bf5487ca8a01e49caad6313cae37b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'glob';

	$command['source'] = array('../squelettes/images/pointeurs/{*.cur,*.ani}');

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_choix_image1';
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
		array('../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html','html_170bf5487ca8a01e49caad6313cae37b','_choix_image1',193,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
										' .
vide($Pile['vars'][$_zzz=(string)'val1'] = interdire_scripts(replace(safehtml($Pile[$SP]['valeur']),'../squelettes/'))) .
'<option
                        style="background:url(\'' .
find_in_path(table_valeur($Pile["vars"], (string)'val1', null)) .
'\') no-repeat; padding-left:30px; height:35px;"
                        value="' .
table_valeur($Pile["vars"], (string)'val1', null) .
'"' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == table_valeur($Pile["vars"], (string)'val1', null)) ? 'selected="selected"':'')) .
'>
                      ' .
interdire_scripts(safehtml($Pile[$SP]['valeur'])) .
'
                      </option>
									');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_choix_image1 @ ../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_choix_image2html_170bf5487ca8a01e49caad6313cae37b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'glob';

	$command['source'] = array('../squelettes/images/pointeurs/{*.cur,*.ani}');

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_choix_image2';
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
		array('../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html','html_170bf5487ca8a01e49caad6313cae37b','_choix_image2',206,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
										' .
vide($Pile['vars'][$_zzz=(string)'val2'] = interdire_scripts(replace(safehtml($Pile[$SP]['valeur']),'../squelettes/'))) .
'<option
                        style="background:url(\'' .
find_in_path(table_valeur($Pile["vars"], (string)'val2', null)) .
'\') no-repeat; padding-left:30px; height:35px;"
                        value="' .
table_valeur($Pile["vars"], (string)'val2', null) .
'"' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == table_valeur($Pile["vars"], (string)'val2', null)) ? 'selected="selected"':'')) .
'>
                      ' .
interdire_scripts(safehtml($Pile[$SP]['valeur'])) .
'
                      </option>
									');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_choix_image2 @ ../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html
// Temps de compilation total: 5.434 ms
//

function html_170bf5487ca8a01e49caad6313cae37b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- Elements -->
    <div class="formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'">

    <h3 class="titrem">' .
interdire_scripts(filtre_balise_img_dist(chemin_image('configelements.png'),'','cadre-icone')) .
_T('escal:elements') .
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
'">
    <div>
    ' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>' .
'<!-------------------------------------------------------------------------------->
<!-- Choisir la présence ou l\'absence d\'un élément sur toutes les pages du site -->
<!-------------------------------------------------------------------------------->
<div class="explication">' .
_T('escal:elements_explication') .
'</div>

<ul>
<!-- bouton d\'accessibilté -->
            <li class="editer ' .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
                    <label><strong>' .
_T('escal:accessibilite') .
'</strong></label>
                    <br />
                    <div class="explication">
                    ' .
_T('escal:accessibilite_explication') .
'
            ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'accessibilite') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                    ') :
		'') .
'<span class="choix droite">
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui" value="oui"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui">' .
_T('public|spip|ecrire:item_oui') .
'</label>
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non" value="non"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non">' .
_T('public|spip|ecrire:item_non') .
'</label>
                    </span>
              <br /><br />
                    ' .
_T('escal:accessibilite_logo') .
'
             ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'logoaccess') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                    ') :
		'') .
'<span class="choix droite">
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_blanc" value="blanc"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'blanc')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_blanc">' .
_T('escal:blanc') .
'</label>
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_noir" value="noir"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'blanc')) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_noir">' .
_T('escal:noir') .
'</label>
                    </span>
              <br /><br />
                    </div>
             </li>
<!-- mots-clés -->
	<li class="editer ' .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		<label><strong>' .
_T('escal:mots_clefs') .
'</strong></label>
			<br />
			<div class="explication">
			' .
_T('escal:affichage_mots_cles') .
'

			<br /><br />

			<div style="margin-left: 50px;">
				' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'motsclesune') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:affichage_mots_cles_une') .
'              
					' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
					') :
		'') .
'<span class="choix droite">
						<input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui" value="oui"
							' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui">' .
_T('public|spip|ecrire:item_oui') .
'</label>
						<input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non" value="non"
							' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non">' .
_T('public|spip|ecrire:item_non') .
'</label>
					</span>
				<br /><br />
				' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'motsclesrubrique') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:affichage_mots_cles_rubrique') .
'              
					' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
					') :
		'') .
'<span class="choix droite">
						<input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui" value="oui"
							' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui">' .
_T('public|spip|ecrire:item_oui') .
'</label>
						<input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non" value="non"
							' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non">' .
_T('public|spip|ecrire:item_non') .
'</label>
					</span>
				<br /><br />
				' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'motsclesarticles') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:affichage_mots_cles_article') .
'              
					' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
					') :
		'') .
'<span class="choix droite">
						<input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui" value="oui"
							' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui">' .
_T('public|spip|ecrire:item_oui') .
'</label>
						<input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non" value="non"
							' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non">' .
_T('public|spip|ecrire:item_non') .
'</label>
					</span>
			</div>
			<br /><br />

			' .
_T('escal:noisettes_multi_choix') .
' <br /><br />
			<div style="margin-left: 50px;">
				' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'motscles1') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:noisettes_multi_groupe1') .
'
                    	' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                    	') :
		'') .
'<span class="choix droite">
                    	<select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" size="1">
                      		<option value="">' .
_T('escal:noisettes_multi_choix2') .
'</option>
                    		' .
BOUCLE_groupes1html_170bf5487ca8a01e49caad6313cae37b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
                    	</select>
                    	</span>
					<div class="nettoyeur"></div>
				' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'motscles2') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:noisettes_multi_groupe2') .
'
	                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
	                    ') :
		'') .
'<span class="choix droite">
	                    <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" size="1">
		                    <option value="">' .
_T('escal:noisettes_multi_non') .
'</option>
		                    ' .
BOUCLE_groupes2html_170bf5487ca8a01e49caad6313cae37b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	                    </select>
	                    </span>
	            		<div class="nettoyeur"></div>
				' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'motscles3') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:noisettes_multi_groupe3') .
'
	                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
	                    ') :
		'') .
'<span class="choix droite">
	                    <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" size="1">
		                    <option value="">' .
_T('escal:noisettes_multi_non') .
'</option>
		                    ' .
BOUCLE_groupes3html_170bf5487ca8a01e49caad6313cae37b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		                    </select>
	                    </span>
	            		<div class="nettoyeur"></div>
				' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'motscles4') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:noisettes_multi_groupe4') .
'
	                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
	                    ') :
		'') .
'<span class="choix droite">
	                    <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" size="1">
		                    <option value="">' .
_T('escal:noisettes_multi_non') .
'</option>
		                    ' .
BOUCLE_groupes4html_170bf5487ca8a01e49caad6313cae37b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	                    </select>
	                    </span>
					<div class="nettoyeur"></div>
				' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'motscles5') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:noisettes_multi_groupe5') .
'
	                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
	                    ') :
		'') .
'<span class="choix droite">
	                    <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" size="1">
		                    <option value="">' .
_T('escal:noisettes_multi_non') .
'</option>
		                    ' .
BOUCLE_groupes5html_170bf5487ca8a01e49caad6313cae37b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	                    </select>
	                    </span>
	            		<div class="nettoyeur"></div>
                    </div>
                    
			</div>
	</li>

     
<!-- favicon -->
            <li class="editer ' .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
                    <label><strong>' .
_T('escal:favicon') .
'</strong></label>
                    <br />
                    <div class="explication">
            ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'favicon') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                    ') :
		'') .
'<span class="choix" >
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_favicon" value="favicon"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'favicon')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' ' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_favicon">' .
_T('escal:favicon_choix1') .
'</label>
                            <br /> <br />
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_logosite" value="logosite"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'logosite')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_logosite">' .
_T('escal:favicon_choix2') .
'</label>
                            <br /> <br />
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_faviconlibre" value="faviconlibre"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'faviconlibre')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_faviconlibre">' .
_T('escal:favicon_choix3') .
'</label>
                    </span>
            ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'titrefavicon') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                    ') :
		'') .
'<span class="choix" style="width:100%">
                             <input type="texte" style="width:98%" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'"
                             value="' .
table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null) .
'"  />
                    </span>
              
                    </div>
             </li>

<!-- pointeur -->
            <li class="editer ' .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
                    <label><strong>' .
_T('escal:pointeur') .
'</strong></label>
                    <br />
                    <div class="explication">
                    ' .
_T('escal:pointeur_explication') .
'
                    <br /><br />
            ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'pointeurbody') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:pointeur_general') .
'
                <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="select" id="imgbandeau">
                      <option value="">' .
_T('escal:pointeur_defaut') .
'</option>
                    ' .
BOUCLE_choix_image1html_170bf5487ca8a01e49caad6313cae37b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
								</select>
            ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'pointeura') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:pointeur_liens') .
'
                <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="select" id="imgbandeau">
                      <option value="">' .
_T('escal:pointeur_defaut') .
'</option>
                    ' .
BOUCLE_choix_image2html_170bf5487ca8a01e49caad6313cae37b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
								</select>
									</div>
             </li>
             
<!-- bord latéral des pages -->
            <li class="editer ' .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
                    <label><strong>' .
_T('escal:bord_pages') .
'</strong></label>
                    <br />
                    <div class="explication">
            ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'ombres') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                    ') :
		'') .
'<span class="choix">
                            
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non" value="non"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'non')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' ' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' />
                            <label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non">Non</label>
                            
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui" value="oui"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' />
                            <label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui">Oui</label>
                    </span>
                    <br /><br />
			' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'couleurombre') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bord_pages_couleur') .
'
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
                    <input type="texte"  class="palette" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)):'#000000')) .
'"  /> 
                    <br /><br />  
			' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'decalombre') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bord_pages_decalage') .
'
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
                    <input type="texte" style="width: 30px" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)):'5')) .
'"  />px
                    <br /><br />
			' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'degradeombre') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bord_pages_force') .
'
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
                    <input type="texte" style="width: 30px"  name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)):'10')) .
'"  />px   
                    <br /><br />
                    ' .
_T('escal:bord_pages_nb') .
'                                 
                    </div>
             </li>

<!-- bloc "espace" -->

            <li class="editer ' .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
                    <label><strong>' .
_T('escal:barre_outils') .
'</strong></label>
                    <br />
                    <div class="explication">
                    ' .
_T('escal:barre_outils_explication1') .
'<br />
            ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'espace') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                    ') :
		'') .
'<span class="choix droite">
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_haut" value="haut"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'haut')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_haut">' .
_T('escal:barre_outils_dessus') .
'</label>

                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_bas" value="bas"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'bas')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' ' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_blanc">' .
_T('escal:barre_outils_dessous') .
'</label>

                    </span>
                    <br /><br />
                    ' .
_T('escal:barre_outils_explication2') .
'<br />
            ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'fixespace') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                    ') :
		'') .
'<span class="choix droite">
                             <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui" value="oui"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui">' .
_T('public|spip|ecrire:item_oui') .
'</label>

                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non" value="non"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non">' .
_T('public|spip|ecrire:item_non') .
'</label>
                    </span>
                    <br /><br />                    
            ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'idlight') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:barre_outils_identification') .
'
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                    ') :
		'') .
'<span class="choix droite">
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui" value="oui"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'non')) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui">' .
_T('public|spip|ecrire:item_oui') .
'</label>

                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non" value="non"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'non')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non">' .
_T('public|spip|ecrire:item_non') .
'</label>
                    </span>
                    <div class="nettoyeur"></div>
                    </div>
             </li>
             
<!-- formulaire de recherche -->
            <li class="editer ' .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
                    <label><strong>' .
_T('escal:form_recherche') .
'</strong></label>
                    <br />
            <div class="explication">
            ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'formrecherche') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:form_recherche_place') .
'
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                    ') :
		'') .
'<span class="choix droite">
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_espace" value="espace"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'espace')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' ' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_espace">' .
_T('escal:form_recherche_item1') .
'</label>
                            <br />
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_colgauche" value="colgauche"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'colgauche')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_colgauche">' .
_T('escal:form_recherche_item2') .
'</label>
                            <br />
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_coldroite" value="coldroite"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'coldroite')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_coldroite">' .
_T('escal:form_recherche_item3') .
'</label>
                            <br />
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non" value="non"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'non')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_coldroite">' .
_T('escal:form_recherche_item4') .
'</label>
                     </span>
            <div class="nettoyeur"></div>
            </div>
            </li>


    </ul>


<!-------------------------------------------------------------------------------->
<!-- Stockage des donnees  ------------------------------------------------------->
<!-------------------------------------------------------------------------------->

    <input type="hidden" name="_meta_casier" value="escal/config" />
    <br /><br />
	<p class="boutons"><span class=\'image_loading\'>&nbsp;</span>
  <input type="submit" name="enregistrer" class="submit" value="' .
_T('public|spip|ecrire:bouton_valider') .
'" />
	</p>
  </div>
    </form>
    </div>
');

	return analyse_resultat_skel('html_170bf5487ca8a01e49caad6313cae37b', $Cache, $page, '../plugins/auto/escal_V4/formulaires/configurer_escal_elements.html');
}
?>