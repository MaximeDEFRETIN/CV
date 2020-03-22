<?php

/*
 * Squelette : squelettes/formulaires/oubli.html
 * Date :      Mon, 02 Mar 2020 13:57:23 GMT
 * Compile :   Mon, 02 Mar 2020 18:49:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/formulaires/oubli.html
// Temps de compilation total: 0.359 ms
//

function html_2be67023a1e5a34a606375b6d4d8476a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_oubli">
' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts((table_valeur(@$Pile[0], (string)'editable', null) ? ' ':''))))!=='' ?
		($t1 . (	'
<form id="oubli_form" action="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'" method="post">
    
    ' .
		'<div>' .
	form_hidden(@$Pile[0]['action']) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>
    <fieldset>
        <legend>' .
	_T('public|spip|ecrire:pass_nouveau_pass') .
	'</legend>
        <p>' .
	_T('public|spip|ecrire:pass_procedure_changer') .
	'</p>
        <div class="editer-groupe">
            <div class="editer saisie_oubli obligatoire' .
	(($t2 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'oubli')) ?' ' :''))))!=='' ?
			(' ' . $t2 . 'erreur') :
			'') .
	'">
                <label for="oubli">' .
	_T('public|spip|ecrire:entree_adresse_email') .
	'</label>
                ' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'oubli')))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
                <input' .
	(($t2 = strval((' ' ? 'type="email" class="text email" autofocus="autofocus" required="required"':'type="text" class="text"')))!=='' ?
			(' ' . $t2) :
			'') .
	' name=\'oubli\' id=\'oubli\' value="' .
	table_valeur(@$Pile[0], (string)'oubli', null) .
	'" autocapitalize="off" autocorrect="off" />
            </div>
        </div>
    </fieldset>
    
    <p style="display: none;">
        <label for="nobot">' .
	_T('public|spip|ecrire:antispam_champ_vide') .
	'</label>
        <input type="text" class="text" name="nobot" id="nobot" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nobot', null),true)) .
	'" size="10" />
    </p>
    <p class="boutons"><input type="submit" class="submit" value="' .
	_T('public|spip|ecrire:pass_ok') .
	'" /></p>
</form>
')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_2be67023a1e5a34a606375b6d4d8476a', $Cache, $page, 'squelettes/formulaires/oubli.html');
}
?>