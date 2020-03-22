<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_cnil.html
 * Date :      Wed, 05 Feb 2020 17:19:08 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_cnil.html
// Temps de compilation total: 0.266 ms
//

function html_aa0eae634575ed1f0c906c02de8356b4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_editer formulaire_editer_cnil ajax\' id=\'formulaire_editer_proprietaire_config_cnil\'>
	<br class=\'bugajaxie\' />
	<h3 class=\'titrem\'>' .
_T('spipproprio:cnil_legend') .
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
	'</div>' .
'<p class=\'explication\'>' .
_T('spipproprio:cnil_comment') .
'</p>
	<ul class="editer-groupe">
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'date_cnil'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="date_cnil">' .
_T('spipproprio:cnil_date_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'date_cnil')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'date_cnil\' id=\'date_cnil\' value="' .
table_valeur(@$Pile[0], (string)'date_cnil', null) .
'" />
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'numero_cnil'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="numero_cnil">' .
_T('spipproprio:cnil_numero_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'numero_cnil')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'numero_cnil\' id=\'numero_cnil\' value="' .
table_valeur(@$Pile[0], (string)'numero_cnil', null) .
'" />
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

	return analyse_resultat_skel('html_aa0eae634575ed1f0c906c02de8356b4', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_cnil.html');
}
?>