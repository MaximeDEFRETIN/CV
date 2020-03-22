<?php

/*
 * Squelette : ../plugins/auto/info_spip/v0.11.1/infos_spip/html/applicatif.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Wed, 05 Feb 2020 16:19:23 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/info_spip/v0.11.1/infos_spip/html/applicatif.html
// Temps de compilation total: 0.653 ms
//

function html_4db9853857e7fe5524ecd19281d1265d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

<!-- Information applicative -->
<div class="fieldset applicatif_fieldset" id="' .
replace(array_pop(filtre_explode_dist('../plugins/auto/info_spip/v0.11.1/infos_spip/html/applicatif.html','/')),'.html','') .
'">
	<h3 class="legend titrem">' .
_T('info_spip:applicatif_fieldset_label') .
'</h3>
</div>

<div class="champ contenu_applicatif_path">
	<div class="label visible">' .
_T('info_spip:applicatif_path_label') .
'</div>' .
vide($Pile['vars'][$_zzz=(string)'applicatif_path'] = interdire_scripts(eval('return '.'$_SERVER[\'SCRIPT_FILENAME\']'.';'))) .
'<div dir=\'' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'\' class=\'applicatif_path span\'>' .
replace(table_valeur($Pile["vars"], (string)'applicatif_path', null),'ecrire/index.php','') .
'</div>
</div>

<div class="champ contenu_applicatif_port">
	<div class="label visible">' .
_T('info_spip:applicatif_port_label') .
'</div>
	<div dir=\'' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'\' class=\'applicatif_port span\'>' .
interdire_scripts(eval('return '.'$_SERVER[\'SERVER_PORT\']'.';')) .
'</div>
</div>

<div class="champ contenu_applicatif_logiciel">
	<div class="label visible">' .
_T('info_spip:applicatif_logiciel_label') .
'</div>
	<div dir=\'' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'\' class=\'applicatif_logiciel span\'>' .
interdire_scripts(eval('return '.'$_SERVER[\'SERVER_SOFTWARE\']'.';')) .
'</div>
</div>

<div class="champ contenu_applicatif_nom">
	<div class="label visible">' .
_T('info_spip:applicatif_nom_label') .
'</div>
	<div dir=\'' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'\' class=\'applicatif_nom span\'>' .
interdire_scripts(eval('return '.'$_SERVER[\'SERVER_NAME\']'.';')) .
'</div>
</div>

');

	return analyse_resultat_skel('html_4db9853857e7fe5524ecd19281d1265d', $Cache, $page, '../plugins/auto/info_spip/v0.11.1/infos_spip/html/applicatif.html');
}
?>