<?php

/*
 * Squelette : ../plugins/auto/article_accueil/v1.2.2/prive/editer/article_accueil.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Sun, 08 Mar 2020 10:18:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/article_accueil/v1.2.2/prive/editer/article_accueil.html
// Temps de compilation total: 2.203 ms
//

function html_45fa14f6eb9a27b2baf790e3e6f7f20a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(executer_balise_dynamique('FORMULAIRE_EDITER_ARTICLE_ACCUEIL',
	array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true))),
	array('../plugins/auto/article_accueil/v1.2.2/prive/editer/article_accueil.html','html_45fa14f6eb9a27b2baf790e3e6f7f20a','',1,$GLOBALS['spip_lang']))))!=='' ?
		('<div class="article_accueil ajax">
	' . $t1 . '
</div>') :
		'');

	return analyse_resultat_skel('html_45fa14f6eb9a27b2baf790e3e6f7f20a', $Cache, $page, '../plugins/auto/article_accueil/v1.2.2/prive/editer/article_accueil.html');
}
?>