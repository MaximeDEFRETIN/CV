<?php

/*
 * Squelette : plugins/auto/metasplus_v2/inclure/metasplus/auteur.html
 * Date :      Fri, 20 Dec 2019 11:26:26 GMT
 * Compile :   Sun, 01 Mar 2020 05:01:54 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/metasplus_v2/inclure/metasplus/auteur.html
// Temps de compilation total: 24.486 ms
//

function html_79cc7f1a8f36fdf48d08fdaf507ba42b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/metasplus/dist') . ', array_merge('.var_export($Pile[0],1).',array(\'og-type\' => ' . argumenter_squelette('profile') . ',
	\'desc\' => ' . argumenter_squelette(interdire_scripts(generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true)), 'auteur', 'bio'))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/metasplus_v2/inclure/metasplus/auteur.html\',\'html_79cc7f1a8f36fdf48d08fdaf507ba42b\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>');

	return analyse_resultat_skel('html_79cc7f1a8f36fdf48d08fdaf507ba42b', $Cache, $page, 'plugins/auto/metasplus_v2/inclure/metasplus/auteur.html');
}
?>