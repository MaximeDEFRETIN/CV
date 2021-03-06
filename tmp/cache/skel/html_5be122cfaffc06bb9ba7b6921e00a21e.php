<?php

/*
 * Squelette : ../prive/formulaires/configurer_langue.html
 * Date :      Sun, 01 Dec 2019 12:09:33 GMT
 * Compile :   Wed, 05 Feb 2020 15:32:27 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/configurer_langue.html
// Temps de compilation total: 1.454 ms
//

function html_5be122cfaffc06bb9ba7b6921e00a21e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">
<h3 class=\'titrem\'><img src="' .
interdire_scripts(chemin_image('langue-24.png')) .
'" class="cadre-icone" />' .
_T('public|spip|ecrire:info_langue_principale') .
'&nbsp;:&nbsp;' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_langue_site', null),true)) .
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
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
	<form method=\'post\' action=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'\'><div>
		
		' .
		'<div>' .
	form_hidden(@$Pile[0]['action']) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>
	  <div class="editer-groupe">
			<div class="explication">
			' .
	inserer_attribut(_T('public|spip|ecrire:texte_selection_langue_principale'),'class','spip') .
	'
			</div>
	  	' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'changer_langue_site') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<div class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
	    	<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('public|spip|ecrire:info_langue_principale') .
	'</label>
				' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
				' .
	(($t2 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'_langues', null))))!=='' ?
			('<select name="changer_langue_site" id="changer_langue_site">
				' . $t2 . '
				</select>') :
			'') .
	'
	    </div>
	  </div>
	  ' .
	'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>');

	return analyse_resultat_skel('html_5be122cfaffc06bb9ba7b6921e00a21e', $Cache, $page, '../prive/formulaires/configurer_langue.html');
}
?>