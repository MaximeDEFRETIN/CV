<?php

/*
 * Squelette : ../plugins-dist/statistiques/prive/squelettes/contenu/stats_repartition.html
 * Date :      Mon, 10 Feb 2020 16:50:18 GMT
 * Compile :   Fri, 28 Feb 2020 14:12:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/statistiques/prive/squelettes/contenu/stats_repartition.html
// Temps de compilation total: 2.413 ms
//

function html_d2c05cd0a7ce6fa31496a8ddc85cfbf3($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('voirstats')?" ":""))) .
'
<h1 class="grostitre">' .
_T('statistiques:titre_page_statistiques') .
'</h1>

<div class="onglets_simple clearfix">
	<ul>
		<li>' .
lien_ou_expose(generer_url_ecrire('stats_repartition'),_T('statistiques:icone_repartition_actuelle'),interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'critere', null), ''),true) == 'debut')) ?'' :' ')),'ajax') .
'</li>
		<li>' .
lien_ou_expose(generer_url_ecrire('stats_repartition','critere=debut'),_T('statistiques:onglet_repartition_debut'),interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'critere', null), ''),true) == 'debut')) ?' ' :'')),'ajax') .
'</li>
	</ul>
</div>

' .
boite_ouvrir(interdire_scripts(filtre_balise_img_dist(chemin_image('repartition-24.png'),'','cadre-icone')), 'simple') .
'

	' .
enfants_aff(intval(''),'400','400',interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'critere', null),true) == 'debut') ? 'visites':'popularite'))) .
'

	<p>' .
_T('statistiques:texte_signification') .
'</p>

' .
boite_fermer() .
'
');

	return analyse_resultat_skel('html_d2c05cd0a7ce6fa31496a8ddc85cfbf3', $Cache, $page, '../plugins-dist/statistiques/prive/squelettes/contenu/stats_repartition.html');
}
?>