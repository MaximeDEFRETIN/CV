<?php

/*
 * Squelette : ../plugins-dist/urls_etendues/formulaires/configurer_urls.html
 * Date :      Mon, 10 Feb 2020 16:50:09 GMT
 * Compile :   Sun, 08 Mar 2020 10:09:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/urls_etendues/formulaires/configurer_urls.html
// Temps de compilation total: 0.793 ms
//

function html_a29c66c614b1205e8083f926a7fc8ddf($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
<h3 class=\'titrem\'>' .
interdire_scripts(filtre_balise_img_dist(chemin_image('url-24.png'),'','cadre-icone')) .
_T('urls:titre_type_urls') .
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
	' .
	vide($Pile['vars'][$_zzz=(string)'fl'] = 'urls') .
	'<form method=\'post\' action=\'' .
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
		<fieldset>
			<legend>' .
	_T('urls:titre_type_urls') .
	'</legend>
			<div class="editer-groupe">
				' .
	vide($Pile['vars'][$_zzz=(string)'htaccess'] = '<tt>.htaccess</tt>') .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'type_urls') .
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
					<label>' .
	_T('urls:texte_type_urls') .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
					<span class=\'erreur_message\'>' . $t2 . '</span>
					') :
			'') .
	'<p class="explication">' .
	_T('urls:texte_type_urls_attention', array('htaccess' => table_valeur($Pile["vars"], (string)'htaccess', null))) .
	'</p>

					' .
	interdire_scripts(type_url_choisir(table_valeur(@$Pile[0], (string)'_urls_dispos', null),table_valeur($Pile["vars"], (string)'name', null),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)))) .
	'

				</div>
			</div>
		</fieldset>
		<fieldset>
			<legend>' .
	_T('urls:titre_gestion_des_urls') .
	'</legend>
			<p>' .
	_T('urls:explication_editer') .
	'</p>
			<div class="editer-groupe">
				<!--EX10-->
				' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'urls_activer_controle') .
	vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
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
					' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
					<span class=\'erreur_message\'>' . $t2 . '</span>
					') :
			'') .
	'
					' .
	vide($Pile['vars'][$_zzz=(string)'val'] = 'oui') .
	'<div class="choix">
						<input type="checkbox" class="checkbox" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_' .
	table_valeur($Pile["vars"], (string)'val', null) .
	'" value="' .
	table_valeur($Pile["vars"], (string)'val', null) .
	'"' .
	(((table_valeur($Pile["vars"], (string)'val', null) == interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true))))  ?
			(' ' . 'checked="checked"') :
			'') .
	' />
						<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_' .
	table_valeur($Pile["vars"], (string)'val', null) .
	'">' .
	_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null),'_',table_valeur($Pile["vars"], (string)'val', null))) .
	'</label>
					</div>
				</div>
			</div>
		</fieldset>
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
</div>
');

	return analyse_resultat_skel('html_a29c66c614b1205e8083f926a7fc8ddf', $Cache, $page, '../plugins-dist/urls_etendues/formulaires/configurer_urls.html');
}
?>