<?php

/*
 * Squelette : ../plugins/auto/info_spip/v0.11.1/infos_spip/html/liste_plugins.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Wed, 05 Feb 2020 16:19:23 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/info_spip/v0.11.1/infos_spip/html/liste_plugins.html
// Temps de compilation total: 0.574 ms
//

function html_17af2e1d67cb13e965481ba1dd53ced6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<!-- ' .
_T('info_spip:liste_plugins_nom') .
' -->
<div class="fieldset plugins_fieldset" id="' .
replace(array_pop(filtre_explode_dist('../plugins/auto/info_spip/v0.11.1/infos_spip/html/liste_plugins.html','/')),'.html','') .
'">
	<h3 class="legend titrem">' .
_T('info_spip:plugins_fieldset_label') .
'</h3>
</div>

' .
(((intval(spip_version()) == '2'))  ?
		(' ' . recuperer_fond( 'prive/objets/liste/info_plugins' , array_merge($Pile[0],array()), array('compil'=>array('../plugins/auto/info_spip/v0.11.1/infos_spip/html/liste_plugins.html','html_17af2e1d67cb13e965481ba1dd53ced6','',5,$GLOBALS['spip_lang'])), _request('connect'))) :
		'') .
'
' .
(((intval(spip_version()) == '3'))  ?
		(' ' . recuperer_fond( 'prive/objets/liste/info_paquets' , array_merge($Pile[0],array()), array('compil'=>array('../plugins/auto/info_spip/v0.11.1/infos_spip/html/liste_plugins.html','html_17af2e1d67cb13e965481ba1dd53ced6','',6,$GLOBALS['spip_lang'])), _request('connect'))) :
		'') .
'
');

	return analyse_resultat_skel('html_17af2e1d67cb13e965481ba1dd53ced6', $Cache, $page, '../plugins/auto/info_spip/v0.11.1/infos_spip/html/liste_plugins.html');
}
?>