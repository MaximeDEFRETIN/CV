<?php

/*
 * Squelette : ../plugins-dist/sites/prive/squelettes/contenu/site_edit.html
 * Date :      Sun, 01 Dec 2019 12:09:38 GMT
 * Compile :   Thu, 06 Feb 2020 16:28:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/sites/prive/squelettes/contenu/site_edit.html
// Temps de compilation total: 0.604 ms
//

function html_d5aef509fbb938e74a5a49b3944f52c1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/echafaudage/contenu/objet_edit') . ', array_merge('.var_export($Pile[0],1).',array(\'objet\' => ' . argumenter_squelette('site') . ',
	\'id_objet\' => ' . argumenter_squelette(@$Pile[0]['id_syndic']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/sites/prive/squelettes/contenu/site_edit.html\',\'html_d5aef509fbb938e74a5a49b3944f52c1\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>';

	return analyse_resultat_skel('html_d5aef509fbb938e74a5a49b3944f52c1', $Cache, $page, '../plugins-dist/sites/prive/squelettes/contenu/site_edit.html');
}
?>