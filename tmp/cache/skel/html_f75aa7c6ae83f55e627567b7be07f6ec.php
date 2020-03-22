<?php

/*
 * Squelette : ../prive/squelettes/navigation/admin_tech.html
 * Date :      Mon, 10 Feb 2020 16:50:03 GMT
 * Compile :   Thu, 27 Feb 2020 09:08:37 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/admin_tech.html
// Temps de compilation total: 0.087 ms
//

function html_f75aa7c6ae83f55e627567b7be07f6ec($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir('', 'info') .
'<p>
' .
_T('public|spip|ecrire:info_gauche_admin_tech') .
'
</p>
' .
boite_fermer());

	return analyse_resultat_skel('html_f75aa7c6ae83f55e627567b7be07f6ec', $Cache, $page, '../prive/squelettes/navigation/admin_tech.html');
}
?>