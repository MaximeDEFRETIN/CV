<?php

/*
 * Squelette : ../plugins-dist/forum/prive/squelettes/contenu/forum.html
 * Date :      Mon, 10 Feb 2020 16:50:08 GMT
 * Compile :   Thu, 27 Feb 2020 08:59:00 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/forum/prive/squelettes/contenu/forum.html
// Temps de compilation total: 0.598 ms
//

function html_f297e1d851ee0a3f2417f8b9e23472d7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('menu', 'foruminternesuivi')?" ":""))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'self'] = self()) .
vide($Pile['vars'][$_zzz=(string)'quoi'] = 'interne') .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('participer', 'forumadmin')?" ":"")) ?'' :' '))))!=='' ?
		($t1 . (	'
<h1 class="grostitre">' .
	_T('forum:titre_cadre_forum_interne') .
	'</h1>
')) :
		'') .
'
' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('participer', 'forumadmin')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'quoi'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'quoi', null), 'interne'),true))) .
	'<div class=\'onglets_simple clearfix\'>
		<ul>
			<li>' .
	lien_ou_expose(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'quoi',''),_T('forum:titre_cadre_forum_interne'),(table_valeur($Pile["vars"], (string)'quoi', null) == 'interne'),'ajax') .
	'</li>
			<li>' .
	lien_ou_expose(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'quoi','admin'),_T('forum:titre_cadre_forum_administrateur'),(table_valeur($Pile["vars"], (string)'quoi', null) == 'admin'),'ajax') .
	'</li>
		</ul>
	</div>
')) :
		'') .
'
' .
(((table_valeur($Pile["vars"], (string)'quoi', null) == 'interne'))  ?
		(' ' . (	'
<h1 class="none">' .
	_T('forum:titre_cadre_forum_interne') .
	'</h1>
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/discuter_forum') . ', array_merge('.var_export($Pile[0],1).',array(\'quoi\' => ' . argumenter_squelette('interne') . ',
	\'statut\' => ' . argumenter_squelette('privrac') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/forum/prive/squelettes/contenu/forum.html\',\'html_f297e1d851ee0a3f2417f8b9e23472d7\',\'\',10,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
')) :
		'') .
'
' .
((((((table_valeur($Pile["vars"], (string)'quoi', null) == 'admin')) AND (invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('participer', 'forumadmin')?" ":"")))) ?' ' :''))  ?
		(' ' . (	'
<h1 class="none">' .
	_T('forum:titre_cadre_forum_administrateur') .
	'</h1>
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/discuter_forum') . ', array_merge('.var_export($Pile[0],1).',array(\'quoi\' => ' . argumenter_squelette('interne') . ',
	\'statut\' => ' . argumenter_squelette('privadm') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/forum/prive/squelettes/contenu/forum.html\',\'html_f297e1d851ee0a3f2417f8b9e23472d7\',\'\',11,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
')) :
		''));

	return analyse_resultat_skel('html_f297e1d851ee0a3f2417f8b9e23472d7', $Cache, $page, '../plugins-dist/forum/prive/squelettes/contenu/forum.html');
}
?>