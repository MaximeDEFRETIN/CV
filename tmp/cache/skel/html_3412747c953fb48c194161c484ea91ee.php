<?php

/*
 * Squelette : ../plugins-dist/dump/formulaires/restaurer.html
 * Date :      Sun, 22 Mar 2020 15:51:44 GMT
 * Compile :   Sun, 22 Mar 2020 16:23:39 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/dump/formulaires/restaurer.html
// Temps de compilation total: 4.884 ms
//

function html_3412747c953fb48c194161c484ea91ee($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<div class="formulaire_spip formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">

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
	(($t2 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'erreurs/message_confirm', null))))!=='' ?
			('<p class="reponse_formulaire reponse_formulaire_ok">' . $t2 . '</p>') :
			'') .
	'
		
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
	  	' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'choisi') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	vide($Pile['vars'][$_zzz=(string)'obli'] = 'obligatoire') .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'choisi', null),true))))!=='' ?
			((	'<div class="editer editer_' .
		table_valeur($Pile["vars"], (string)'name', null) .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
				(' ' . $t3) :
				'') .
		((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
	    	<label for="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'">' .
		_T('dump:label_nom_fichier_sauvegarde') .
		'</label>
				') . $t2 . (	'
				&#91;<a href="#" onclick="jQuery(\'.editer_fichier,.editer_nom_sauvegarde\').show(\'fast\');jQuery(\'.editer_choisi\').hide(\'fast\');return false;"
				>' .
		_T('public|spip|ecrire:bouton_changer') .
		'</a>&#93;
	    </div>')) :
			'') .
	'
	  	' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'fichier') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	vide($Pile['vars'][$_zzz=(string)'obli'] = 'obligatoire') .
	'<div class="editer pleine_largeur editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'"' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'choisi', null),true)) ?' ' :''))))!=='' ?
			($t2 . 'style=\'display:none;\'') :
			'') .
	'>
	    	<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('dump:label_selectionnez_fichier') .
	'</label>
				' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
				' .
	(($t2 = strval(((($a = recuperer_fond( 'formulaires/inc-lister-sauvegardes' , array_merge($Pile[0],array('name' => 'fichier' ,
	'id' => 'sauvegarde' ,
	'titre' => _T('dump:sauvegardes_existantes') )), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('../plugins-dist/dump/formulaires/restaurer.html','html_3412747c953fb48c194161c484ea91ee','',12,$GLOBALS['spip_lang'])), _request('connect'))) OR (is_string($a) AND strlen($a))) ? $a : _T('dump:info_aucune_sauvegarde_trouvee'))))!=='' ?
			('<div class="choix">
					' . $t2 . '
				</div>') :
			'') .
	'
	    </div>
	  	' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'nom_sauvegarde') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	vide($Pile['vars'][$_zzz=(string)'obli'] = 'obligatoire') .
	'<div class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'"' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'choisi', null),true)) ?' ' :''))))!=='' ?
			($t2 . 'style=\'display:none;\'') :
			'') .
	'>
	    	<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('dump:label_nom_fichier_restaurer') .
	'</label>
				' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
				<input type=\'text\' class=\'text\' name=\'' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'\' id=\'' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'\' value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
	'"
					onfocus="jQuery(\'#dump_0\').attr(\'checked\',\'chedked\');"/>
				<input type="radio" name="zzz" value="" id="dump_0" style="display:none;"/>
	    </div>
	  	' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'tables')))!=='' ?
			((	vide($Pile['vars'][$_zzz=(string)'name'] = 'tout_restaurer') .
		vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
		vide($Pile['vars'][$_zzz=(string)'obli'] = 'obligatoire') .
		'<div class="editer editer_' .
		table_valeur($Pile["vars"], (string)'name', null) .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
				(' ' . $t3) :
				'') .
		((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
	    	<label>' .
		_T('public|spip|ecrire:install_tables_base') .
		'</label>
				' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
				('<span class=\'erreur_message\'>' . $t3 . '</span>') :
				'') .
		'
				<div class="choix">
					<input type="checkbox" name="tout_restaurer" id="tout_restaurer" value="oui"' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'tout_restaurer', null),true)) ?' ' :''))))!=='' ?
				($t3 . 'checked="checked"') :
				'') .
		'
						onclick="$(this).blur();"
						onchange="jQuery(this).prop(\'checked\')?jQuery(\'#liste_tables\').hide(\'fast\'):jQuery(\'#liste_tables\').show(\'fast\');"
					/><label for="tout_restaurer">' .
		_T('dump:tout_restaurer') .
		'</label>
				</div>
				<div id="liste_tables"' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'tout_restaurer', null),true)) ?' ' :''))))!=='' ?
				($t3 . 'style="display:none;"') :
				'') .
		'>
				') . $t2 . '
				</div>
	    </div>') :
			'') .
	'
	  </div>
	  ' .
	'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'submit\' value=\'' .
	_T('dump:bouton_restaurer_base') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>');

	return analyse_resultat_skel('html_3412747c953fb48c194161c484ea91ee', $Cache, $page, '../plugins-dist/dump/formulaires/restaurer.html');
}
?>