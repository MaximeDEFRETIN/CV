<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_createur.html
 * Date :      Wed, 05 Feb 2020 17:19:07 GMT
 * Compile :   Mon, 16 Mar 2020 15:19:00 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_createur.html
// Temps de compilation total: 0.335 ms
//

function html_93498aa8ba51ba80a81a0203936c5a38($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_editer formulaire_editer_createur ajax\' id=\'formulaire_editer_proprietaire_config_infos_createur\'>
	<br class=\'bugajaxie\' />
	<h3 class=\'titrem\'>' .
_T('spipproprio:admin_legend') .
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
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'createur_administrateur'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="createur_administrateur">' .
_T('spipproprio:administrateur_aussi_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'createur_administrateur')))!=='' ?
		('
		    <span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'checkbox\' class=\'checkbox\' name=\'createur_administrateur\' id=\'createur_administrateur\' value="oui"' .
(((table_valeur(@$Pile[0], (string)'createur_administrateur', null) == 'oui'))  ?
		(' ' . ' checked="checked"') :
		'') .
' />
			<span class=\'explication\'>' .
_T('spipproprio:administrateur_aussi_comment') .
'</span>
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

	return analyse_resultat_skel('html_93498aa8ba51ba80a81a0203936c5a38', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_createur.html');
}
?>