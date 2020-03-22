<?php

/*
 * Squelette : ../plugins/auto/agenda/v3.39.4/prive/objets/contenu/article-evenements.html
 * Date :      Sun, 09 Feb 2020 10:04:14 GMT
 * Compile :   Thu, 27 Feb 2020 09:07:39 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/agenda/v3.39.4/prive/objets/contenu/article-evenements.html
// Temps de compilation total: 0.634 ms
//

function html_cfbfcd33ea2e15859ba5e5e4d581cd9d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'sinon'] = '') .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creerevenementdans', 'article', invalideur_session($Cache, @$Pile[0]['id_article']))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'sinon'] = _T('agenda:info_aucun_evenement')) .
	'
')) :
		'') .
'


<div id="agenda">
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/evenements-post') . ', array_merge('.var_export($Pile[0],1).',array(\'nb\' => ' . argumenter_squelette('5') . ',
	\'sinon\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'sinon', null)) . ',
	\'statut\' => ' . argumenter_squelette(array('publie', 'prop')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/agenda/v3.39.4/prive/objets/contenu/article-evenements.html\',\'html_cfbfcd33ea2e15859ba5e5e4d581cd9d\',\'\',6,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creerevenementdans', 'article', invalideur_session($Cache, @$Pile[0]['id_article']))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	filtre_icone_horizontale_dist(parametre_url(parametre_url(generer_url_ecrire('evenement_edit','id_evenement=new'),'id_article',@$Pile[0]['id_article']),'redirect',self()),_T('agenda:creer_evenement'),'evenement-24.png','new','creer_evenement') .
	'
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_cfbfcd33ea2e15859ba5e5e4d581cd9d', $Cache, $page, '../plugins/auto/agenda/v3.39.4/prive/objets/contenu/article-evenements.html');
}
?>