<?php

/*
 * Squelette : ../prive/squelettes/navigation/configurer_preferences.html
 * Date :      Sun, 01 Dec 2019 12:09:33 GMT
 * Compile :   Thu, 06 Feb 2020 16:17:49 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/configurer_preferences.html
// Temps de compilation total: 0.139 ms
//

function html_394753dfbc012210e7aa433b57a79b7c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/navigation/infos_perso') . ', array_merge('.var_export($Pile[0],1).',array(\'exec\' => ' . argumenter_squelette('infos_perso') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/navigation/configurer_preferences.html\',\'html_394753dfbc012210e7aa433b57a79b7c\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>';

	return analyse_resultat_skel('html_394753dfbc012210e7aa433b57a79b7c', $Cache, $page, '../prive/squelettes/navigation/configurer_preferences.html');
}
?>