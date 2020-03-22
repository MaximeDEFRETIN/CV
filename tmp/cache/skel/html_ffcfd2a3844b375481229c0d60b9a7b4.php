<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_createur.html
 * Date :      Wed, 05 Feb 2020 17:19:36 GMT
 * Compile :   Mon, 16 Mar 2020 15:19:00 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_createur.html
// Temps de compilation total: 8.248 ms
//

function html_ffcfd2a3844b375481229c0d60b9a7b4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
interdire_scripts(invalideur_session($Cache, sinon_interdire_acces((table_valeur($GLOBALS["visiteur_session"], (string)'statut', null) == '0minirezo')))) .
'
<h1 class="grostitre">' .
_T('spipproprio:infos_createur') .
'</h1>

' .
boite_ouvrir(wrap(_T('avis_attention'),'<h4>'), 'info') .
'
<p>' .
_T('public|spip|ecrire:texte_inc_config') .
'</p>
' .
boite_fermer() .
'

<div class=\'cadre-formulaire-editer\'>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_INFOS_IDEM',
	array('createur'),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_createur.html','html_ffcfd2a3844b375481229c0d60b9a7b4','',11,$GLOBALS['spip_lang'])) .
'</div>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_INFOS_NECESSAIRES',
	array('createur'),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_createur.html','html_ffcfd2a3844b375481229c0d60b9a7b4','',14,$GLOBALS['spip_lang'])) .
'</div>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_ADRESSE',
	array('createur'),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_createur.html','html_ffcfd2a3844b375481229c0d60b9a7b4','',17,$GLOBALS['spip_lang'])) .
'</div>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_INFOS_LEGALES',
	array('createur'),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_createur.html','html_ffcfd2a3844b375481229c0d60b9a7b4','',20,$GLOBALS['spip_lang'])) .
'</div>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_INFOS_CREATEUR',
	array(),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_createur.html','html_ffcfd2a3844b375481229c0d60b9a7b4','',23,$GLOBALS['spip_lang'])) .
'
	</div>

</div>
');

	return analyse_resultat_skel('html_ffcfd2a3844b375481229c0d60b9a7b4', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_createur.html');
}
?>