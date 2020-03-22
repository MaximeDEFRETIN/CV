<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_necessaires.html
 * Date :      Wed, 05 Feb 2020 17:19:07 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_necessaires.html
// Temps de compilation total: 0.838 ms
//

function html_1f6cd15761d104af7a102e71d8d4878a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_editer formulaire_editer_necessaires formulaire_editer_necessaires_' .
table_valeur(@$Pile[0], (string)'who', null) .
' ajax' .
(($t1 = strval(table_valeur(@$Pile[0], (string)'who', null)))!=='' ?
		(' ' . $t1) :
		'') .
'\' id=\'formulaire_editer_proprietaire_config_infos_necessaires\'>
	<br class=\'bugajaxie\' />
	<h3 class=\'titrem\'>' .
_T('spipproprio:infos_legend') .
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
		<li class="editer obligatoire' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
	    	<label for="nom">' .
_T('spipproprio:nom_label') .
'&nbsp;:<span style=\'color: red;\'>*</span></label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'nom\' id=\'nom\' value="' .
table_valeur(@$Pile[0], (string)'nom', null) .
'" />
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'libelle'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="libelle">' .
_T('spipproprio:libelle_label') .
'&nbsp;:<span style=\'color: red;\'>*</span></label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'libelle')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'libelle\' id=\'libelle\' value="' .
table_valeur(@$Pile[0], (string)'libelle', null) .
'" />
			<span class=\'explication\'>' .
_T('spipproprio:libelle_comment') .
'</span>
		</li>
		<li class="editer obligatoire' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'mail'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="mail">' .
_T('spipproprio:mail_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'mail')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'mail\' id=\'mail\' value="' .
table_valeur(@$Pile[0], (string)'mail', null) .
'" />
		</li>
		<li class="editer' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'who', null),true) == 'proprietaire')) ?' ' :''))))!=='' ?
		($t1 . ' obligatoire') :
		'') .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom_responsable'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
	    	<label for="nom_responsable">' .
_T('spipproprio:responsable_nom_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom_responsable')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'nom_responsable\' id=\'nom_responsable\' value="' .
table_valeur(@$Pile[0], (string)'nom_responsable', null) .
'" />
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'fonction_responsable'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
	    	<label for="fonction_responsable">' .
_T('spipproprio:responsable_fonction_label') .
'&nbsp;:<span style=\'color: red;\'>*</span></label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'fonction_responsable')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'fonction_responsable\' id=\'fonction_responsable\' value="' .
table_valeur(@$Pile[0], (string)'fonction_responsable', null) .
'" />
		</li>
' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'who', null),true) == 'proprietaire')) ?' ' :''))))!=='' ?
		($t1 . (	'
		<li class="editer' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'mail_responsable'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
	    	<label for="mail_responsable">' .
	_T('spipproprio:responsable_mail_label') .
	'&nbsp;:</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'mail_responsable')))!=='' ?
			('
			<span class=\'erreur_message\'>' . $t2 . '</span>
			') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'mail_responsable\' id=\'mail_responsable\' value="' .
	table_valeur(@$Pile[0], (string)'mail_responsable', null) .
	'" />
		</li>
		<li class="editer' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'who', null),true) == 'proprietaire')) ?' ' :''))))!=='' ?
			($t2 . ' obligatoire') :
			'') .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'mail_administratif'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
	    	<label for="mail_administratif">' .
	_T('spipproprio:administrateur_mail_label') .
	'&nbsp;:</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'mail_administratif')))!=='' ?
			('
			<span class=\'erreur_message\'>' . $t2 . '</span>
			') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'mail_administratif\' id=\'mail_administratif\' value="' .
	table_valeur(@$Pile[0], (string)'mail_administratif', null) .
	'" />
		</li>
')) :
		'') .
'
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'site_web'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="site_web">' .
_T('spipproprio:site_web_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'site_web')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'site_web\' id=\'site_web\' value="' .
table_valeur(@$Pile[0], (string)'site_web', null) .
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

	return analyse_resultat_skel('html_1f6cd15761d104af7a102e71d8d4878a', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_infos_necessaires.html');
}
?>