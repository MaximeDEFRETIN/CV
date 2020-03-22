<?php

/*
 * Squelette : ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_hebergeur.html
 * Date :      Wed, 05 Feb 2020 17:19:35 GMT
 * Compile :   Mon, 16 Mar 2020 15:18:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_hebergeur.html
// Temps de compilation total: 60.384 ms
//

function html_77e5171a5877187b6886a63e6eb37ff2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
interdire_scripts(invalideur_session($Cache, sinon_interdire_acces((table_valeur($GLOBALS["visiteur_session"], (string)'statut', null) == '0minirezo')))) .
'
<h1 class="grostitre">' .
_T('spipproprio:infos_hebergeur') .
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
	array('hebergeur'),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_hebergeur.html','html_77e5171a5877187b6886a63e6eb37ff2','',11,$GLOBALS['spip_lang'])) .
'</div>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_INFOS_NECESSAIRES',
	array('hebergeur'),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_hebergeur.html','html_77e5171a5877187b6886a63e6eb37ff2','',14,$GLOBALS['spip_lang'])) .
'</div>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_ADRESSE',
	array('hebergeur'),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_hebergeur.html','html_77e5171a5877187b6886a63e6eb37ff2','',17,$GLOBALS['spip_lang'])) .
'</div>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_INFOS_LEGALES',
	array('hebergeur'),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_hebergeur.html','html_77e5171a5877187b6886a63e6eb37ff2','',20,$GLOBALS['spip_lang'])) .
'</div>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_PROPRIETAIRE_INFOS_SERVEUR',
	array(),
	array('../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_hebergeur.html','html_77e5171a5877187b6886a63e6eb37ff2','',23,$GLOBALS['spip_lang'])) .
'
	</div>

</div>
');

	return analyse_resultat_skel('html_77e5171a5877187b6886a63e6eb37ff2', $Cache, $page, '../plugins/auto/spip_proprio/v1.70.5/prive/squelettes/contenu/spip_proprio_hebergeur.html');
}
?>