<?php

/*
 * Squelette : ../prive/squelettes/navigation/visiteurs.html
 * Date :      Sun, 22 Mar 2020 15:56:02 GMT
 * Compile :   Sun, 22 Mar 2020 16:27:11 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/visiteurs.html
// Temps de compilation total: 0.277 ms
//

function html_f35591907d32d47e52a040fe9b5febb7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/navigation/auteurs') . ', array_merge('.var_export($Pile[0],1).',array(\'is_visiteur\' => ' . argumenter_squelette('1') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/navigation/visiteurs.html\',\'html_f35591907d32d47e52a040fe9b5febb7\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

');

	return analyse_resultat_skel('html_f35591907d32d47e52a040fe9b5febb7', $Cache, $page, '../prive/squelettes/navigation/visiteurs.html');
}
?>