<?php

/*
 * Squelette : ../plugins/auto/corbeille/v3.1.2/prive/squelettes/navigation/corbeille.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Sun, 08 Mar 2020 10:15:28 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/corbeille/v3.1.2/prive/squelettes/navigation/corbeille.html
// Temps de compilation total: 0.084 ms
//

function html_2389b62b79fd9923065d804b54275584($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir('', 'info') .
propre(_T('corbeille:readme')) .
'
' .
boite_fermer());

	return analyse_resultat_skel('html_2389b62b79fd9923065d804b54275584', $Cache, $page, '../plugins/auto/corbeille/v3.1.2/prive/squelettes/navigation/corbeille.html');
}
?>