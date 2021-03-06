<?php

/*
 * Squelette : ../prive/formulaires/editer_auteur.html
 * Date :      Sun, 01 Dec 2019 12:09:33 GMT
 * Compile :   Wed, 05 Feb 2020 15:31:33 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/editer_auteur.html
// Temps de compilation total: 7.617 ms
//

function html_144a0ed254c8fdedd3fd2b256df40f3d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_editer formulaire_editer_auteur formulaire_editer_auteur-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_auteur', null), 'nouveau'),true)) .
'">
	' .
(($t1 = strval(table_valeur(@$Pile[0], (string)'message_ok', null)))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . (	' ' .
	_T('public|spip|ecrire:info_recommencer') .
	'</p>')) :
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
		<input type=\'hidden\' name=\'id_auteur\' value=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true)) .
	'\' />
		' .
	(($t2 = strval(table_valeur(@$Pile[0], (string)'redirect', null)))!=='' ?
			('<input type=\'hidden\' name=\'redirect\' value=\'' . $t2 . '\' />') :
			'') .
	'
		<div class="editer-groupe">
			<div class="editer editer_nom obligatoire' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<label for="nom">' .
	_T('public|spip|ecrire:titre_cadre_signature_obligatoire') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true) == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) ? _T('public|spip|ecrire:entree_nom_pseudo'):_T('public|spip|ecrire:entree_nom_pseudo_2')))))!=='' ?
			('<p class=\'explication\'>' . $t2 . '</p>') :
			'') .
	'
				<input type=\'text\' class=\'text\' name=\'nom\' id=\'nom\' placeholder="' .
	attribut_html(_T('ecrire:item_nouvel_auteur')) .
	'" value="' .
	table_valeur(@$Pile[0], (string)'nom', null) .
	'" />
			</div>
			
			<div class="editer editer_email' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'email'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true) == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) ? _T('public|spip|ecrire:entree_adresse_email'):_T('public|spip|ecrire:entree_adresse_email_2')))))!=='' ?
			('<label for="email">' . $t2 . '</label>') :
			'') .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'email')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'email\' id=\'email\' value="' .
	table_valeur(@$Pile[0], (string)'email', null) .
	'" />
			</div>
			<div class="editer editer_bio' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'bio'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true) == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) ? _T('public|spip|ecrire:entree_infos_perso'):_T('public|spip|ecrire:entree_infos_perso_2')))))!=='' ?
			('<label for="bio">' . $t2 . '</label>') :
			'') .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'bio')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<p class="explication">' .
	_T('public|spip|ecrire:entree_biographie') .
	'</p>
				<textarea name=\'bio\' id=\'bio\' rows=\'4\' cols=\'40\'>' .
	table_valeur(@$Pile[0], (string)'bio', null) .
	'</textarea>
			</div>
			
			<div class="editer editer_pgp' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'pgp'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true) == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) ? _T('public|spip|ecrire:entree_cle_pgp'):_T('public|spip|ecrire:entree_cle_pgp_2')))))!=='' ?
			('<label for="pgp">' . $t2 . '</label>') :
			'') .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'pgp')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<textarea name=\'pgp\' id=\'pgp\' rows=\'4\' cols=\'40\'>' .
	table_valeur(@$Pile[0], (string)'pgp', null) .
	'</textarea>
			</div>
			
			' .
	(($t2 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'auteur', invalideur_session($Cache, @$Pile[0]['id_auteur']), '', invalideur_session($Cache, array('statut' => '?')))?" ":"")) ?' ' :''))))!=='' ?
			($t2 . (	'
			<div class=\'editer editer_statut\'>
				' .
		recuperer_fond( 'formulaires/inc-instituer_auteur' , array('statut' => sinon(table_valeur(@$Pile[0], (string)'statut', null), (defined('_STATUT_AUTEUR_CREATION')?constant('_STATUT_AUTEUR_CREATION'):'')) ,
	'id_auteur' => @$Pile[0]['id_auteur'] ,
	'webmestre' => @$Pile[0]['webmestre'] ), array('compil'=>array('../prive/formulaires/editer_auteur.html','html_144a0ed254c8fdedd3fd2b256df40f3d','',31,$GLOBALS['spip_lang'])), _request('connect')) .
		'</div>')) :
			'') .
	'
			' .
	'
			<div class=\'editer_liens_sites fieldset\'>
				<fieldset>
					<legend>' .
	_T('public|spip|ecrire:info_site_web') .
	'</legend>
					<div class="editer-groupe">
						<div class="editer editer_nom_site' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom_site_auteur'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
							' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true) == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) ? _T('public|spip|ecrire:entree_nom_site'):_T('public|spip|ecrire:entree_nom_site_2')))))!=='' ?
			('<label for="nom_site">' . $t2 . '</label>') :
			'') .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom_site_auteur')))!=='' ?
			('
							<span class=\'erreur_message\'>' . $t2 . '</span>
							') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'nom_site\' id=\'nom_site\' value="' .
	table_valeur(@$Pile[0], (string)'nom_site', null) .
	'" />
						</div>
						<div class="editer editer_url_site' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'url_site'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
							' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true) == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) ? _T('public|spip|ecrire:entree_url'):_T('public|spip|ecrire:entree_url_2')))))!=='' ?
			('<label for="url_site">' . $t2 . '</label>') :
			'') .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'url_site')))!=='' ?
			('
							<span class=\'erreur_message\'>' . $t2 . '</span>
							') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'url_site\' id=\'url_site\' value="' .
	table_valeur(@$Pile[0], (string)'url_site', null) .
	'" />
						</div>
					</div>
				</fieldset>
			</div>
			' .
	'
			<div class=\'editer_identification fieldset\'>
				<fieldset>
					' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true) == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) ? _T('public|spip|ecrire:entree_identifiants_connexion'):_T('public|spip|ecrire:entree_identifiants_connexion_2')))))!=='' ?
			('<legend>' . $t2 . '</legend>') :
			'') .
	'
					
					' .
	(($t2 = strval(interdire_scripts(((((((((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'config', null),true),'edit_login')) OR (interdire_scripts(table_valeur(entites_html(table_valeur(@$Pile[0], (string)'config', null),true),'edit_pass')))) ?' ' :'')) AND (interdire_scripts(invalideur_session($Cache, (table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null) == interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true)))))))) ?' ' :'')) ?' ' :''))))!=='' ?
			($t2 . (	'
						<div class=\'notice\'>' .
		_T('public|spip|ecrire:texte_login_precaution') .
		'</div>
					')) :
			'') .
	'
					<div class="editer-groupe">
						' .
	'
						<div class=\'editer editer_new_login' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'login'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'\'>
							' .
	(($t2 = strval(interdire_scripts(((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'config', null),true),'edit_login')) ?' ' :''))))!=='' ?
			($t2 . (	'
								<label for=\'new_login\'>' .
		_T('public|spip|ecrire:item_login') .
		'</label>' .
		(($t3 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'login')))!=='' ?
				('
								<span class=\'erreur_message\'>' . $t3 . '</span>
								') :
				'') .
		'<p class=\'explication\'>(' .
		_T('public|spip|ecrire:info_login_trop_court_car_pluriel', array('nb' => (defined('_LOGIN_TROP_COURT')?constant('_LOGIN_TROP_COURT'):''))) .
		')</p>
								<input autocomplete="off" type=\'text\' class=\'text\' name=\'new_login\' id=\'new_login\' value="' .
		table_valeur(@$Pile[0], (string)'new_login', null) .
		'" />
							')) :
			'') .
	'
							' .
	(($t2 = strval(interdire_scripts(((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'config', null),true),'edit_login')) ?'' :' '))))!=='' ?
			($t2 . (	'
								<label for=\'login\'>' .
		_T('public|spip|ecrire:item_login') .
		'
								</label><p class=\'explication\'>(' .
		_T('public|spip|ecrire:info_non_modifiable') .
		')</p>
								<input type=\'text\' class=\'text\' disabled=\'disabled\' name=\'login\' id=\'login\' value="' .
		table_valeur(@$Pile[0], (string)'login', null) .
		'" />
							')) :
			'') .
	'
						</div>
						' .
	(($t2 = strval(interdire_scripts(((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'config', null),true),'edit_pass')) ?' ' :''))))!=='' ?
			($t2 . (	'
						<div class=\'editer editer_new_pass' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'new_pass'))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'\'>
							<label for=\'new_pass\'>' .
		_T('public|spip|ecrire:entree_nouveau_passe') .
		'</label>' .
		(($t3 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'new_pass')))!=='' ?
				('
							<span class=\'erreur_message\'>' . $t3 . '</span>
							') :
				'') .
		'<p class=\'explication\'>(' .
		_T('public|spip|ecrire:info_passe_trop_court_car_pluriel', array('nb' => (defined('_PASS_LONGUEUR_MINI')?constant('_PASS_LONGUEUR_MINI'):''))) .
		')</p>
							<input type=\'password\' autocomplete="off" class=\'password\' name=\'new_pass\' id=\'new_pass\' value="" />
						</div>
						<div class=\'editer editer_new_pass2\'>
							<label for=\'new_pass2\'>' .
		_T('public|spip|ecrire:info_confirmer_passe') .
		'</label>' .
		(($t3 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'new_pass2')))!=='' ?
				('
							<span class=\'erreur_message\'>' . $t3 . '</span>
							') :
				'') .
		'<input type=\'password\' autocomplete="off" class=\'password\' name=\'new_pass2\' id=\'new_pass2\' value="" />
							' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'config/edit_pass', null),true)) ?' ' :''))))!=='' ?
				($t3 . (	'
							<input type="submit" class="over offscreen" name="submit" value="submit" />
							<button class="submit reset_password" type="submit" name="reset_password" value="1">' .
			_T('public|spip|ecrire:bouton_reset_password') .
			'</button>
							')) :
				'') .
		'
						</div>')) :
			'') .
	'
					</div>
				</fieldset>
			</div>
		</div>
		' .
	'
		<!--extra-->
		<p class=\'boutons\'><input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_144a0ed254c8fdedd3fd2b256df40f3d', $Cache, $page, '../prive/formulaires/editer_auteur.html');
}
?>