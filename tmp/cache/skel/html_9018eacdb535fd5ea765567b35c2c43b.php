<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_proprietaire.html
 * Date :      Wed, 05 Feb 2020 17:19:36 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_proprietaire.html
// Temps de compilation total: 108.213 ms
//

function html_9018eacdb535fd5ea765567b35c2c43b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
interdire_scripts(invalideur_session($Cache, sinon_interdire_acces((table_valeur($GLOBALS["visiteur_session"], (string)'statut', null) == '0minirezo')))) .
'
<h1 class="grostitre">' .
_T('spipproprio:infos_proprietaire') .
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
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_INFOS_NECESSAIRES',
	array('proprietaire'),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_proprietaire.html','html_9018eacdb535fd5ea765567b35c2c43b','',11,$GLOBALS['spip_lang'])) .
'</div>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_ADRESSE',
	array('proprietaire'),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_proprietaire.html','html_9018eacdb535fd5ea765567b35c2c43b','',14,$GLOBALS['spip_lang'])) .
'</div>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_INFOS_LEGALES',
	array('proprietaire'),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_proprietaire.html','html_9018eacdb535fd5ea765567b35c2c43b','',17,$GLOBALS['spip_lang'])) .
'</div>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_INFOS_CNIL',
	array(),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_proprietaire.html','html_9018eacdb535fd5ea765567b35c2c43b','',20,$GLOBALS['spip_lang'])) .
'
	</div>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_COPYRIGHT',
	array(),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_proprietaire.html','html_9018eacdb535fd5ea765567b35c2c43b','',24,$GLOBALS['spip_lang'])) .
'
	</div>

</div>
');

	return analyse_resultat_skel('html_9018eacdb535fd5ea765567b35c2c43b', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_proprietaire.html');
}
?>