<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_copyright.html
 * Date :      Wed, 05 Feb 2020 17:19:06 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_copyright.html
// Temps de compilation total: 0.341 ms
//

function html_49c7439a2da6b2ca594216bb8ef44cb4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_editer formulaire_editer_copyright formulaire_editer_copyright_' .
table_valeur(@$Pile[0], (string)'who', null) .
' ajax' .
(($t1 = strval(table_valeur(@$Pile[0], (string)'who', null)))!=='' ?
		(' ' . $t1) :
		'') .
'\' id=\'formulaire_editer_proprietaire_config_copyright\'>
	<br class=\'bugajaxie\' />
	<h3 class=\'titrem\'>' .
_T('spipproprio:copyright_legend') .
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
_T('spipproprio:copyright_comment') .
'</p>
	<ul class="editer-groupe">
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'copyright_annee'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="copyright_annee">' .
_T('spipproprio:copyright_annee_label') .
'&nbsp;:</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'copyright_annee')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'copyright_annee\' id=\'copyright_annee\' value="' .
table_valeur(@$Pile[0], (string)'copyright_annee', null) .
'" />
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'copyright_complement'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="copyright_complement">' .
_T('spipproprio:copyright_complement_label') .
'&nbsp;:<span style=\'color: red;\'>*</span></label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'copyright_complement')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input type=\'text\' class=\'text\' name=\'copyright_complement\' id=\'copyright_complement\' value="' .
table_valeur(@$Pile[0], (string)'copyright_complement', null) .
'" />
		</li>
		<li class="editer' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'copyright_comment'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		    <label for="copyright_comment">' .
_T('spipproprio:copyright_comment_label') .
'&nbsp;:<span style=\'color: red;\'>*</span></label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'copyright_comment')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<textarea class=\'textarea\' name=\'copyright_comment\' id=\'copyright_comment\'>' .
table_valeur(@$Pile[0], (string)'copyright_comment', null) .
'</textarea>
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

	return analyse_resultat_skel('html_49c7439a2da6b2ca594216bb8ef44cb4', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/formulaires/proprietaire_copyright.html');
}
?>