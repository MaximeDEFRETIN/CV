<?php

/*
 * Squelette : ../plugins/auto/info_spip/v0.11.1/prive/squelettes/contenu/info_config.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Wed, 05 Feb 2020 16:19:23 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/info_spip/v0.11.1/prive/squelettes/contenu/info_config.html
// Temps de compilation total: 1.753 ms
//

function html_152ac9d12818e83996f57ce22430e018($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('voir', 'infospip')?" ":""))) .
'
<div class="cartouche">
	<h1 class="grostitre">' .
_T('info_spip:titre_page_config') .
'</h1>
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('info_spip/actif',null,false):'') == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'
	<p class="explication"><a href="' .
	interdire_scripts(parametre_url(generer_url_public('info_config', ''),'cle',interdire_scripts((include_spip('inc/config')?lire_config('info_spip/cle',null,false):'')))) .
	'">' .
	interdire_scripts(parametre_url(generer_url_public('info_config', ''),'cle',interdire_scripts((include_spip('inc/config')?lire_config('info_spip/cle',null,false):'')))) .
	'</a></p>
')) :
		'') .
'
</div>
<div class="nettoyeur"></div>

' .
boite_ouvrir('', 'simple fiche_objet') .
'
<div id="wysiwyg">
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/contenu/info_config') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/info_spip/v0.11.1/prive/squelettes/contenu/info_config.html\',\'html_152ac9d12818e83996f57ce22430e018\',\'\',10,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div>

' .
boite_fermer());

	return analyse_resultat_skel('html_152ac9d12818e83996f57ce22430e018', $Cache, $page, '../plugins/auto/info_spip/v0.11.1/prive/squelettes/contenu/info_config.html');
}
?>