<?php

/*
 * Squelette : ../plugins-dist/organiseur/formulaires/editer_message.html
 * Date :      Mon, 10 Feb 2020 16:50:07 GMT
 * Compile :   Thu, 27 Feb 2020 09:02:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/organiseur/formulaires/editer_message.html
// Temps de compilation total: 2.667 ms
//

function html_a79fb234f98473c74208056b82ad2bb1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="ajax formulaire_spip formulaire_editer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">
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
	'</div>
		' .
	vide($Pile['vars'][$_zzz=(string)'fl'] = 'organiseur') .
	'<div class="editer-groupe">
			' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_destiner', null),true)) ?' ' :''))))!=='' ?
			($t2 . (	'
			' .
		vide($Pile['vars'][$_zzz=(string)'name'] = 'destinataires') .
		vide($Pile['vars'][$_zzz=(string)'obli'] = 'obligatoire') .
		vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
		'<div class="editer editer_' .
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
		_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null))) .
		'</label>' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		'
				' .
		recuperer_fond( 'formulaires/inc-destinataires-message' , array_merge($Pile[0],array('name' => table_valeur($Pile["vars"], (string)'name', null) )), array('compil'=>array('../plugins-dist/organiseur/formulaires/editer_message.html','html_a79fb234f98473c74208056b82ad2bb1','',14,$GLOBALS['spip_lang'])), _request('connect')) .
		'</div>
			')) :
			'') .
	'
			' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'titre') .
	vide($Pile['vars'][$_zzz=(string)'obli'] = 'obligatoire') .
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
	_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null))) .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<input type="text" class="text" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" value="' .
	interdire_scripts(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null)) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" ' .
	(((' ') AND (table_valeur($Pile["vars"], (string)'obli', null)))  ?
			(' ' . 'required=\'required\'') :
			'') .
	'/>
			</div>
			<div class="editer editer_rv' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'rv'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<div class="choix">
					<input type=\'checkbox\' name=\'rv\' id=\'rv\' value=\'oui\' ' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'rv', null),true) == 'oui')) ?' ' :''))))!=='' ?
			($t2 . 'checked=\'checked\'') :
			'') .
	'
						onclick="if (this.checked==true) { $(\'.editer_date_debut_fin\').show(\'fast\');} else {$(\'.editer_date_debut_fin\').hide(\'fast\');}" />
					<label for="rv">' .
	_T('public|spip|ecrire:item_afficher_calendrier') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'rv')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'
				</div>
			</div>
			<div class="editer editer_date_debut editer_date_debut_fin' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'date_debut'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'rv', null),true) == 'oui')) ?'' :' '))))!=='' ?
			($t2 . 'none') :
			'') .
	'">
				<label for="date_debut">' .
	_T('organiseur:info_message_date_debut') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'date_debut')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<input type=\'text\' class=\'text date\' name=\'date_debut\' id=\'date_debut\' size=\'10\' maxlength=\'10\' value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'date_debut', null),true)) .
	'" />
				<input type=\'text\' class=\'text heure\' name=\'heure_debut\' id=\'heure_debut\' size=\'4\' maxlength=\'5\' value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'heure_debut', null),true)) .
	'"
				/>
			</div>
			<div class="editer editer_date_fin editer_date_debut_fin' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'date_fin'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'rv', null),true) == 'oui')) ?'' :' '))))!=='' ?
			($t2 . 'none') :
			'') .
	'">
				<label for="date_fin" class=\'date_fin\'>' .
	_T('organiseur:info_message_date_fin') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'date_fin')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<input type=\'text\' class=\'text date\' name=\'date_fin\' id=\'date_fin\' size=\'10\' maxlength=\'10\' value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'date_fin', null),true)) .
	'" />
				<input type=\'text\' class=\'text heure\' name=\'heure_fin\' id=\'heure_fin\' size=\'4\' maxlength=\'5\' value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'heure_fin', null),true)) .
	'" />
			</div>
			' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'texte') .
	vide($Pile['vars'][$_zzz=(string)'obli'] = 'obligatoire') .
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
	_T(concat(table_valeur($Pile["vars"], (string)'fl', null),':label_',table_valeur($Pile["vars"], (string)'name', null))) .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<textarea class="textarea" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" rows="10">
' .
	interdire_scripts(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null)) .
	'</textarea>
			</div>
			
			' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'antispam') .
	vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<div class="editer none editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<label for="nobotnobot-' .
	interdire_scripts(@$Pile[0]['id']) .
	'">' .
	_T('public|spip|ecrire:antispam_champ_vide') .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<input type="text" class="text" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" value="' .
	interdire_scripts(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null)) .
	'" id="nobotnobot-' .
	interdire_scripts(@$Pile[0]['id']) .
	'" />
			</div>
		</div>
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span>
			' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'statut', null),true) == 'publie')) ?'' :' '))))!=='' ?
			($t2 . (	'
			<input type=\'submit\' class=\'submit\' name="draft" value=\'' .
		_T('organiseur:bouton_enregistrer_brouillon') .
		'\' />
			')) :
			'') .
	'
			<input type=\'submit\' class=\'submit\' name="send" value=\'' .
	_T('organiseur:bouton_envoyer_message') .
	'\' />
		</p>
	</div></form>
	' .
	recuperer_fond( 'formulaires/dateur/inc-dateur' , array(), array('compil'=>array('../plugins-dist/organiseur/formulaires/editer_message.html','html_a79fb234f98473c74208056b82ad2bb1','',48,$GLOBALS['spip_lang'])), _request('connect')))) :
		'') .
'
</div>
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_destiner', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
<script type="text/javascript">
	if (typeof formulaire_editer_message_init=="undefined"){
		var formulaire_editer_message_init=\'\'; // eviter double dl si plusieurs forms dans la page
		var url_trouver_destinataire = \'' .
	invalideur_session($Cache, replace(generer_action_auteur('quete_autocomplete',interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))),'&amp;','&')) .
	'\';
		jQuery.getScript(\'' .
	timestamp(find_in_path('prive/javascript/ui/widget.js')) .
	'\',function(){
		jQuery.getScript(\'' .
	timestamp(find_in_path('prive/javascript/ui/position.js')) .
	'\',function(){
		jQuery.getScript(\'' .
	timestamp(find_in_path('prive/javascript/ui/menu.js')) .
	'\',function(){
			jQuery.getScript(\'' .
	timestamp(find_in_path('prive/javascript/ui/autocomplete.js')) .
	'\',function(){
				jQuery.getScript(\'' .
	timestamp(find_in_path('formulaires/editer_message.js')) .
	'\');
			});
		});});});
	}
</script>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_a79fb234f98473c74208056b82ad2bb1', $Cache, $page, '../plugins-dist/organiseur/formulaires/editer_message.html');
}
?>