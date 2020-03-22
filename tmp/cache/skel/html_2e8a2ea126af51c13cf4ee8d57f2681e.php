<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_idem.html
 * Date :      Wed, 05 Feb 2020 17:19:07 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_idem.html
// Temps de compilation total: 0.530 ms
//

function html_2e8a2ea126af51c13cf4ee8d57f2681e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_editer formulaire_editer_idem formulaire_editer_idem_' .
table_valeur(@$Pile[0], (string)'who', null) .
' ajax\' id=\'formulaire_editer_proprietaire_config_idem\'>
	<br class=\'bugajaxie\' />
	<h3 class=\'titrem\'>' .
_T('spipproprio:infos_idem') .
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
<script type=\'text/javascript\'>/*<!' .
interdire_scripts(eval('return '.'chr(91)'.';')) .
'CDATA' .
interdire_scripts(eval('return '.'chr(91)'.';')) .
'*/
setTimeout(function(){
if (window.jQuery){
jQuery(document).ready(function(){
	var idemselect = $(\'select#idem option:selected\').val();
	if (idemselect==\'non\') {
		if (jQuery(\'.' .
table_valeur(@$Pile[0], (string)'who', null) .
'\').is(\':hidden\')) {
			jQuery(\'.' .
table_valeur(@$Pile[0], (string)'who', null) .
'\').show().slideDown(\'fast\');
		}
	} else {
		if (jQuery(\'.' .
table_valeur(@$Pile[0], (string)'who', null) .
'\').is(\':visible\')) {
			jQuery(\'.' .
table_valeur(@$Pile[0], (string)'who', null) .
'\').slideUp(\'fast\');
			jQuery(\'.' .
table_valeur(@$Pile[0], (string)'who', null) .
'\').hide();
		}
	}
});
}
},10);
/*' .
interdire_scripts(eval('return '.'chr(93)'.';')) .
interdire_scripts(eval('return '.'chr(93)'.';')) .
'>*/</script>
	<form method=\'post\' action=\'' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'\'><div>
		
		' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div><ul class="editer-groupe">
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'idem'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="idem">' .
_T('spipproprio:idem_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'idem')))!=='' ?
		('
		    <span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'
			<select class=\'forml\' name=\'idem\' id=\'idem\'>
				<option value="non"' .
(((table_valeur(@$Pile[0], (string)'idem', null) == 'non'))  ?
		(' ' . ' selected="selected"') :
		'') .
'>...</option>
				' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'who', null),true) == 'proprietaire')) ?'' :' '))))!=='' ?
		($t1 . (	'
				<option value="proprietaire"' .
	(((table_valeur(@$Pile[0], (string)'idem', null) == 'proprietaire'))  ?
			(' ' . ' selected="selected"') :
			'') .
	'>' .
	_T('spipproprio:proprietaire') .
	'</option>
				')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'who', null),true) == 'hebergeur')) ?'' :' '))))!=='' ?
		($t1 . (	'
				<option value="hebergeur"' .
	(((table_valeur(@$Pile[0], (string)'idem', null) == 'hebergeur'))  ?
			(' ' . ' selected="selected"') :
			'') .
	'>' .
	_T('spipproprio:hebergeur') .
	'</option>
				')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'who', null),true) == 'createur')) ?'' :' '))))!=='' ?
		($t1 . (	'
				<option value="createur"' .
	(((table_valeur(@$Pile[0], (string)'idem', null) == 'createur'))  ?
			(' ' . ' selected="selected"') :
			'') .
	'>' .
	_T('spipproprio:createur') .
	'</option>
				')) :
		'') .
'
			</select>
		</li>
	</ul>
	  ' .
'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'submit\' value=\'' .
_T('public|spip|ecrire:bouton_enregistrer') .
'\' /></p>
	</div></form>
</div>');

	return analyse_resultat_skel('html_2e8a2ea126af51c13cf4ee8d57f2681e', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_idem.html');
}
?>