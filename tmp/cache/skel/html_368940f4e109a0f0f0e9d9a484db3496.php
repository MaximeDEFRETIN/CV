<?php

/*
 * Squelette : ../plugins-dist/statistiques/prive/squelettes/contenu/stats_visites.html
 * Date :      Mon, 10 Feb 2020 16:50:18 GMT
 * Compile :   Fri, 28 Feb 2020 14:11:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/statistiques/prive/squelettes/contenu/stats_visites.html
// Temps de compilation total: 0.184 ms
//

function html_368940f4e109a0f0f0e9d9a484db3496($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('voirstats')?" ":""))) .
'

' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/stats-visites-data') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/statistiques/prive/squelettes/contenu/stats_visites.html\',\'html_368940f4e109a0f0f0e9d9a484db3496\',\'\',3,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/stats-visites-populaires') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins-dist/statistiques/prive/squelettes/contenu/stats_visites.html\',\'html_368940f4e109a0f0f0e9d9a484db3496\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/stats/visites') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins-dist/statistiques/prive/squelettes/contenu/stats_visites.html\',\'html_368940f4e109a0f0f0e9d9a484db3496\',\'\',6,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');

	return analyse_resultat_skel('html_368940f4e109a0f0f0e9d9a484db3496', $Cache, $page, '../plugins-dist/statistiques/prive/squelettes/contenu/stats_visites.html');
}
?>