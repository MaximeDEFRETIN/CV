<?php

/*
 * Squelette : ../plugins/auto/info_spip/v0.11.1/prive/squelettes/inclure/info_spip.html
 * Date :      Wed, 05 Feb 2020 17:19:37 GMT
 * Compile :   Thu, 27 Feb 2020 08:55:17 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/info_spip/v0.11.1/prive/squelettes/inclure/info_spip.html
// Temps de compilation total: 0.156 ms
//

function html_3e49939308cf5c2b64445c22594aa0c2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="box simple info type_site' .
(($t1 = strval(interdire_scripts((include_spip('inc/config')?lire_config('info_spip/type_site',null,false):''))))!=='' ?
		(' type_site_' . $t1) :
		'') .
'">
	<div class="inner">
		<div class="hd ">
			<h3>' .
inserer_attribut(filtrer('image_graver', filtrer('image_reduire',filtre_balise_img_dist(find_in_path(concat('prive/themes/spip/images/type_site_',(include_spip('inc/config')?lire_config('info_spip/type_site',null,false):''),'-24.png'))),'20','20')),'class','cadre-icone') .
'
			' .
interdire_scripts(((include_spip('inc/config')?lire_config('info_spip/type_site',null,false):'') ? _T(concat('info_spip:type_site_',interdire_scripts((include_spip('inc/config')?lire_config('info_spip/type_site',null,false):'')),'_envir')):_T('info_spip:environnement_non_configure'))) .
'</h3>
			<div class="nettoyeur"></div>
		<!--/hd-->
		</div>
	</div>
</div>');

	return analyse_resultat_skel('html_3e49939308cf5c2b64445c22594aa0c2', $Cache, $page, '../plugins/auto/info_spip/v0.11.1/prive/squelettes/inclure/info_spip.html');
}
?>