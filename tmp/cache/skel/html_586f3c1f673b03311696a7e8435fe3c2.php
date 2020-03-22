<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_serveur.html
 * Date :      Wed, 05 Feb 2020 17:19:07 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_serveur.html
// Temps de compilation total: 0.340 ms
//

function html_586f3c1f673b03311696a7e8435fe3c2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_editer formulaire_editer_serveur ajax\' id=\'formulaire_editer_proprietaire_config_serveur\'>
	<br class=\'bugajaxie\' />
	<h3 class=\'titrem\'>' .
_T('spipproprio:serveur_legend') .
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
	'</div><ul class="editer-groupe">
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'type_serveur'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="type_serveur">' .
_T('spipproprio:serveur_type_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'type_serveur')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'type_serveur\' id=\'type_serveur\' value="' .
table_valeur(@$Pile[0], (string)'type_serveur', null) .
'" />
			<span class=\'explication\'>' .
_T('spipproprio:serveur_type_comment') .
'</span>
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'os_serveur'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="os_serveur">' .
_T('spipproprio:serveur_os_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'os_serveur')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'os_serveur\' id=\'os_serveur\' value="' .
table_valeur(@$Pile[0], (string)'os_serveur', null) .
'" />
			<span class=\'explication\'>' .
_T('spipproprio:serveur_os_comment') .
'</span>
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'os_serveur_web'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="os_serveur_web">' .
_T('spipproprio:serveur_os_web_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'os_serveur_web')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'os_serveur_web\' id=\'os_serveur_web\' value="' .
table_valeur(@$Pile[0], (string)'os_serveur_web', null) .
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

	return analyse_resultat_skel('html_586f3c1f673b03311696a7e8435fe3c2', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_serveur.html');
}
?>