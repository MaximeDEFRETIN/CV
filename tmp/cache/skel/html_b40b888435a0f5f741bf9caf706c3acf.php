<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_adresse.html
 * Date :      Wed, 05 Feb 2020 17:19:06 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_adresse.html
// Temps de compilation total: 0.528 ms
//

function html_b40b888435a0f5f741bf9caf706c3acf($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_editer formulaire_editer_adresse formulaire_editer_adresse_' .
table_valeur(@$Pile[0], (string)'who', null) .
' ajax' .
(($t1 = strval(table_valeur(@$Pile[0], (string)'who', null)))!=='' ?
		(' ' . $t1) :
		'') .
'\' id=\'formulaire_editer_proprietaire_config_adresse\'>
	<br class=\'bugajaxie\' />
	<h3 class=\'titrem\'>' .
_T('spipproprio:adresse_legend') .
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
_T('spipproprio:adresse_comment') .
'</p>
	<ul class="editer-groupe">
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'adresse_rue'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="adresse_rue">' .
_T('spipproprio:rue_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'adresse_rue')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'adresse_rue\' id=\'adresse_rue\' value="' .
table_valeur(@$Pile[0], (string)'adresse_rue', null) .
'" />
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'adresse_code_postal'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="adresse_code_postal">' .
_T('spipproprio:code_postal_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'adresse_code_postal')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'adresse_code_postal\' id=\'adresse_code_postal\' value="' .
table_valeur(@$Pile[0], (string)'adresse_code_postal', null) .
'" />
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'adresse_ville'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="adresse_ville">' .
_T('spipproprio:ville_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'adresse_ville')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'adresse_ville\' id=\'adresse_ville\' value="' .
table_valeur(@$Pile[0], (string)'adresse_ville', null) .
'" />
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'adresse_pays'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="adresse_pays">' .
_T('spipproprio:pays_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'adresse_pays')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'adresse_pays\' id=\'adresse_pays\' value="' .
table_valeur(@$Pile[0], (string)'adresse_pays', null) .
'" />
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'adresse_telephone'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="adresse_telephone">' .
_T('spipproprio:telephone_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'adresse_telephone')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'adresse_telephone\' id=\'adresse_telephone\' value="' .
table_valeur(@$Pile[0], (string)'adresse_telephone', null) .
'" />
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'adresse_telecopie'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="adresse_telecopie">' .
_T('spipproprio:telecopie_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'adresse_telecopie')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'adresse_telecopie\' id=\'adresse_telecopie\' value="' .
table_valeur(@$Pile[0], (string)'adresse_telecopie', null) .
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

	return analyse_resultat_skel('html_b40b888435a0f5f741bf9caf706c3acf', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_adresse.html');
}
?>