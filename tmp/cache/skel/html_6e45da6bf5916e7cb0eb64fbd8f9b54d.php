<?php

/*
 * Squelette : ../plugins/auto/metasplus/v2.3.2/prive/squelettes/inclure/metasplus_bouton_previsu.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Thu, 05 Mar 2020 11:15:30 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/metasplus/v2.3.2/prive/squelettes/inclure/metasplus_bouton_previsu.html
// Temps de compilation total: 0.505 ms
//

function html_6e45da6bf5916e7cb0eb64fbd8f9b54d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
inserer_attribut(filtre_icone_horizontale_dist(parametre_url(parametre_url(parametre_url(generer_url_ecrire('metasplus_previsu'),'page',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type-page', null),true))),'objet',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true))),'id_objet',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true))),_T('metasplus:icone_previsu'),'metasplus_previsu-24'),'title',_T('metasplus:icone_previsu_title')) .
'

<script>
function metasplus_box_init(){
	// Ouverture boîte modale
	$(\'.icone[class*=metasplus_previsu] a\').click(function(e){
		e.preventDefault();
		var href = $(this).attr(\'href\');
		href = parametre_url(href, \'var_zajax\', \'contenu\');
		$.modalboxload(href);
	});
	// Fermeture boîte modale
	$(\'.box_modalbox .retour.metasplus a\').click(function(e){
		e.preventDefault();
		$.modalboxclose();
	});
}
var metasplus_box_initialized;
if (!metasplus_box_initialized){
	if (window.jQuery){
		metasplus_box_initialized = true;
		(function($){
			if (typeof onAjaxLoad == "function") {
				onAjaxLoad(metasplus_box_init);
			}
			$(metasplus_box_init);
		})(jQuery);
	}
}
</script>');

	return analyse_resultat_skel('html_6e45da6bf5916e7cb0eb64fbd8f9b54d', $Cache, $page, '../plugins/auto/metasplus/v2.3.2/prive/squelettes/inclure/metasplus_bouton_previsu.html');
}
?>