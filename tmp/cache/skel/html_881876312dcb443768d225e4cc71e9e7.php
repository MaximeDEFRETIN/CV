<?php

/*
 * Squelette : ../plugins-dist/breves/formulaires/editer_breve.html
 * Date :      Mon, 10 Feb 2020 16:50:17 GMT
 * Compile :   Sun, 08 Mar 2020 10:04:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/breves/formulaires/editer_breve.html
// Temps de compilation total: 0.842 ms
//

function html_881876312dcb443768d225e4cc71e9e7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_editer formulaire_editer_breve formulaire_editer_breve-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_breve', null), 'nouveau'),true)) .
'\'>
	' .
(($t1 = strval(table_valeur(@$Pile[0], (string)'message_ok', null)))!=='' ?
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
	'</div>' .
	'
	  <input type=\'hidden\' name=\'id_breve\' value=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_breve', null),true)) .
	'\' />
	  <div class="editer-groupe">
	    <div class="editer editer_titre obligatoire' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'titre'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
		    	<label for="titre">' .
	_T('public|spip|ecrire:info_titre') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'titre')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'titre\' id=\'titre\' value="' .
	interdire_scripts(table_valeur(@$Pile[0], (string)'titre', null)) .
	'"
					placeholder="' .
	_T('breves:titre_nouvelle_breve') .
	'" />
	    </div>

	 	' .
	(($t2 = strval(filtre_chercher_rubrique_dist('',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_breve', null),true)),interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true)) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_parent', null),true)))),'breve',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_secteur', null),true)),table_valeur(table_valeur(@$Pile[0], (string)'config', null),'restreint'),'0','form_simple')))!=='' ?
			((	'<div class="editer editer_parent' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'id_parent'))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
				<label for="id_parent">' .
		_T('public|spip|ecrire:entree_interieur_rubrique') .
		'<em class=\'aide\'>' .
		interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('id_parent','../plugins-dist/breves/formulaires/editer_breve.html', $Pile[0]):'')) .
		'</em></label>' .
		(($t3 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'id_parent')))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		'
				') . $t2 . '
	    </div>') :
			'') .
	'
	    
	    <div class="editer editer_texte' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'texte'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
	      		<label for="text_area">' .
	_T('breves:entree_texte_breve') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'texte')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	(($t2 = strval(sinon(table_valeur(@$Pile[0], (string)'_texte_trop_long', null), '')))!=='' ?
			($t2 . '
				') :
			'') .
	'<textarea name=\'texte\' id=\'text_area\' rows=\'' .
	plus(table_valeur(table_valeur(@$Pile[0], (string)'config', null),'lignes'),'2') .
	'\' cols=\'40\'>' .
	table_valeur(@$Pile[0], (string)'texte', null) .
	'</textarea>
	    </div>
	  	<div class="editer editer_liens_sites fieldset">
			<fieldset>
			<h3 class="legend">' .
	_T('public|spip|ecrire:entree_liens_sites') .
	'</h3>
			<div class="editer-groupe">
				<div class="editer editer_lien_titre' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'lien_titre'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
						<label for="lien_titre">' .
	_T('public|spip|ecrire:info_titre') .
	'<em class=\'aide\'>' .
	interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('lien_titre','../plugins-dist/breves/formulaires/editer_breve.html', $Pile[0]):'')) .
	'</em></label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'lien_titre')))!=='' ?
			('
						<span class=\'erreur_message\'>' . $t2 . '</span>
						') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'lien_titre\' id=\'lien_titre\' value="' .
	table_valeur(@$Pile[0], (string)'lien_titre', null) .
	'" />
				</div>
				<div class="editer editer_lien_url' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'lien_url'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
						<label for="lien_url">' .
	_T('public|spip|ecrire:info_url') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'lien_url')))!=='' ?
			('
						<span class=\'erreur_message\'>' . $t2 . '</span>
						') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'lien_url\' id=\'lien_url\' value="' .
	table_valeur(@$Pile[0], (string)'lien_url', null) .
	'" />
				</div>
			</div>
	    	</fieldset>
	    </div>
	    
	    ' .
	(($t2 = strval(interdire_scripts(invalideur_session($Cache, (((table_valeur($GLOBALS["visiteur_session"], (string)'statut', null) == '0minirezo')) ?' ' :'')))))!=='' ?
			($t2 . (	'
	    <div class="fieldset">
			<fieldset>
			<div class="editer-groupe">
			<div class="editer editer_statut obligatoire">
				<label for=\'statut\'>' .
		_T('breves:entree_breve_publiee') .
		'<em class=\'aide\'>' .
		interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('statut','../plugins-dist/breves/formulaires/editer_breve.html', $Pile[0]):'')) .
		'</em>
				</label><select name=\'statut\' id=\'statut\' size=\'1\'>
					<option value=\'prop\'' .
		((table_valeur(@$Pile[0], (string)'statut', null) == 'prop') ? ' selected="selected"':'') .
		' style=\'background-color: white\'>' .
		_T('breves:item_breve_proposee') .
		'</option>
					<option value=\'refuse\'' .
		((table_valeur(@$Pile[0], (string)'statut', null) == 'refuse') ? ' selected="selected"':'') .
		' class=\'danger\'>' .
		_T('breves:item_breve_refusee') .
		'</option>
					<option value=\'publie\'' .
		((table_valeur(@$Pile[0], (string)'statut', null) == 'publie') ? ' selected="selected"':'') .
		' style=\'background-color: #B4E8C5\'>' .
		_T('breves:item_breve_validee') .
		'</option>
				</select>
			</div>
			</div>
			</fieldset>
			</div>
			')) :
			'') .
	'
	  </div>
	  ' .
	'
	  <!--extra-->
	  <p class="boutons"><input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_881876312dcb443768d225e4cc71e9e7', $Cache, $page, '../plugins-dist/breves/formulaires/editer_breve.html');
}
?>