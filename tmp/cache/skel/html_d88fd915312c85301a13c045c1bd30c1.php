<?php

/*
 * Squelette : ../prive/echafaudage/navigation/objet_edit.html
 * Date :      Mon, 10 Feb 2020 16:50:01 GMT
 * Compile :   Thu, 27 Feb 2020 09:02:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/echafaudage/navigation/objet_edit.html
// Temps de compilation total: 0.027 ms
//

function html_d88fd915312c85301a13c045c1bd30c1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '';

	return analyse_resultat_skel('html_d88fd915312c85301a13c045c1bd30c1', $Cache, $page, '../prive/echafaudage/navigation/objet_edit.html');
}
?>