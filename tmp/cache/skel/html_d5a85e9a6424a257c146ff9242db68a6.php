<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/formulaires/inc-numero_enregistrement.html
 * Date :      Wed, 05 Feb 2020 17:19:07 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/formulaires/inc-numero_enregistrement.html
// Temps de compilation total: 0.610 ms
//

function html_d5a85e9a6424a257c146ff9242db68a6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'domid'] = (	'_' .
	table_valeur(@$Pile[0], (string)'proposer_enregistrement', null))) .
'
	<input type="hidden" name="num_mode_hidden" id="num_mode_hidden" value="' .
table_valeur(@$Pile[0], (string)'proposer_enregistrement', null) .
'" />

<script type=\'text/javascript\'>/*<!' .
interdire_scripts(eval('return '.'chr(91)'.';')) .
'CDATA' .
interdire_scripts(eval('return '.'chr(91)'.';')) .
'*/
setTimeout(function(){
if (window.jQuery){
jQuery(document).ready(function(){
	' .
(!((table_valeur(@$Pile[0], (string)'proposer_enregistrement', null) == 'auto_fr'))  ?
		(' ' . (	'
	jQuery(\'.num_mode' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	':not(#num_libre' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	')\').hide();
	')) :
		'') .
'
	' .
(((table_valeur(@$Pile[0], (string)'proposer_enregistrement', null) == 'auto_fr'))  ?
		(' ' . (	'
	jQuery(\'.num_mode' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	':not(#num_auto' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	')\').hide();
	')) :
		'') .
'
	if (jQuery(\'.num_mode' .
table_valeur($Pile["vars"], (string)'domid', null) .
':visible\').length>1)
		jQuery(\'.num_mode' .
table_valeur($Pile["vars"], (string)'domid', null) .
':not(#num_auto' .
table_valeur($Pile["vars"], (string)'domid', null) .
')\').hide();
});
}
},10);
/*' .
interdire_scripts(eval('return '.'chr(93)'.';')) .
interdire_scripts(eval('return '.'chr(93)'.';')) .
'>*/</script>

	<div class=\'sourceup\'>
		<a href=\'#num_libre' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\' onclick="if (jQuery(\'#num_libre' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\').is(\':hidden\')) {jQuery(\'div.num_mode' .
table_valeur($Pile["vars"], (string)'domid', null) .
':visible\').slideUp(\'fast\');jQuery(\'#num_libre' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\').slideDown(\'fast\');jQuery(\'#num_mode_hidden\').val(\'libre\');}return false;">' .
_T('spipproprio:bouton_saisie_libre') .
'</a>
		| <a href=\'#num_auto' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\' onclick="if (jQuery(\'#num_auto' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\').is(\':hidden\')) {jQuery(\'div.num_mode' .
table_valeur($Pile["vars"], (string)'domid', null) .
':visible\').slideUp(\'fast\');jQuery(\'#num_auto' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\').slideDown(\'fast\');jQuery(\'#num_mode_hidden\').val(\'auto_fr\');}return false;">' .
_T('spipproprio:bouton_auto_fr') .
'</a>
	</div>
	<hr style="color:#ccc;background-color:#ccc;border:0;" />

' .
'
	<div class=\'num_mode' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\' id=\'num_libre' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\'>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'enregistrement_numero')))!=='' ?
		('
		<span class=\'erreur_message\'>' . $t1 . '</span>
		') :
		'') .
'<input type=\'text\' class=\'text\' name=\'enregistrement_numero\' id=\'enregistrement_numero\' value="' .
table_valeur(@$Pile[0], (string)'enregistrement_numero', null) .
'" />
	<hr style="color:#ccc;background-color:#ccc;border:0;" />
	</div>

' .
'
	<div class=\'num_mode' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\' id=\'num_auto' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\'>
		    <table><tr>

			<td>
			    <label style="float:none;margin:0;padding:0;width:100px">' .
_T('spipproprio:enregistrement_tvaintra_label') .
'&nbsp;:
			    ' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'enregistrement_tvaintra')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'<input type=\'text\' class=\'text\' name=\'enregistrement_tvaintra\' id=\'enregistrement_tvaintra\' value="' .
table_valeur(@$Pile[0], (string)'enregistrement_tvaintra', null) .
'" style="width: 100px;" maxlength="5" title="' .
_T('spipproprio:enregistrement_tvaintra_title') .
'"' .
(($t1 = strval(((($a = (((table_valeur(@$Pile[0], (string)'enregistrement_siren', null) == '')) ?' ' :'')) OR (is_string($a) AND strlen($a))) ? $a : (((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'enregistrement_siren') == '')) ?'' :' '))))!=='' ?
		('
					' . $t1 . ' disabled="disabled"') :
		'') .
' />
				</label>
				<span class=\'explication\'>' .
_T('spipproprio:enregistrement_tvaintra_comment') .
'</span>
			</td>

			<td>
			    <label style="float:none;margin:0;padding:0;width:100px">' .
_T('spipproprio:enregistrement_siren_label') .
'&nbsp;:
			    ' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'enregistrement_siren')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'<input type=\'text\' class=\'text\' name=\'enregistrement_siren\' id=\'enregistrement_siren\' value="' .
table_valeur(@$Pile[0], (string)'enregistrement_siren', null) .
'" style="width: 100px;" maxlength="11" title="' .
_T('spipproprio:enregistrement_siren_title') .
'" />
				</label>
				<span class=\'explication\'>' .
_T('spipproprio:enregistrement_siren_comment') .
'</span>
			</td>

			<td>
			    <label style="float:none;margin:0;padding:0;width:100px">' .
_T('spipproprio:enregistrement_siret_label') .
'&nbsp;:
			    ' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'enregistrement_siret')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'<input type=\'text\' class=\'text\' name=\'enregistrement_siret\' id=\'enregistrement_siret\' value="' .
table_valeur(@$Pile[0], (string)'enregistrement_siret', null) .
'" style="width: 100px;" maxlength="6" title="' .
_T('spipproprio:enregistrement_siret_title') .
'" />
				</label>
				<span class=\'explication\'>' .
_T('spipproprio:enregistrement_siret_comment') .
'</span>
			</td>
			</tr><tr>
			
			<td colspan="3">
			    <label style="float:none;margin:0;padding:0;width:100%">
			    ' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'enregistrement_tva_nonapplicable')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'<input type=\'checkbox\' class=\'checkbox\' name=\'enregistrement_tva_nonapplicable\' id=\'enregistrement_tva_nonapplicable\' value="oui"' .
(((table_valeur(@$Pile[0], (string)'enregistrement_tva_nonapplicable', null) == 'oui'))  ?
		(' ' . ' checked="checked"') :
		'') .
' />
				&nbsp;' .
_T('spipproprio:tva_nonapplicable_label') .
'</label>
				<span class=\'explication\'>' .
_T('spipproprio:tva_nonapplicable_comment') .
'</span>
			</td>

			</tr></table>
	<hr style="color:#ccc;background-color:#ccc;border:0;" />
	</div>
');

	return analyse_resultat_skel('html_d5a85e9a6424a257c146ff9242db68a6', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/formulaires/inc-numero_enregistrement.html');
}
?>