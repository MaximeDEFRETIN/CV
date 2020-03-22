<?php

/*
 * Squelette : ../plugins-dist/breves/prive/squelettes/contenu/breve_edit.html
 * Date :      Mon, 10 Feb 2020 16:50:17 GMT
 * Compile :   Sun, 08 Mar 2020 10:04:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/breves/prive/squelettes/contenu/breve_edit.html
// Temps de compilation total: 2.385 ms
//

function html_eea834454a9aa5d16fc21fa9be2aed4b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/echafaudage/contenu/objet_edit') . ', array_merge('.var_export($Pile[0],1).',array(\'objet\' => ' . argumenter_squelette('breve') . ',
	\'id_objet\' => ' . argumenter_squelette(@$Pile[0]['id_breve']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/breves/prive/squelettes/contenu/breve_edit.html\',\'html_eea834454a9aa5d16fc21fa9be2aed4b\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>';

	return analyse_resultat_skel('html_eea834454a9aa5d16fc21fa9be2aed4b', $Cache, $page, '../plugins-dist/breves/prive/squelettes/contenu/breve_edit.html');
}
?>