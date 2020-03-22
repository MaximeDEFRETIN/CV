<?php

/*
 * Squelette : ../plugins-dist/sites/prive/objets/liste/sites.html
 * Date :      Mon, 10 Feb 2020 16:50:10 GMT
 * Compile :   Thu, 27 Feb 2020 08:55:17 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/sites/prive/objets/liste/sites.html
// Temps de compilation total: 0.039 ms
//

function html_18dca1c58e594c4b8a805944053c98c4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/syndic') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/sites/prive/objets/liste/sites.html\',\'html_18dca1c58e594c4b8a805944053c98c4\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>';

	return analyse_resultat_skel('html_18dca1c58e594c4b8a805944053c98c4', $Cache, $page, '../plugins-dist/sites/prive/objets/liste/sites.html');
}
?>