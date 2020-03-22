<?php

/*
 * Squelette : ../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-envoi.html
 * Date :      Mon, 10 Feb 2020 16:50:07 GMT
 * Compile :   Thu, 27 Feb 2020 08:59:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-envoi.html
// Temps de compilation total: 1.263 ms
//

function html_7590717166291f457e6a35a2fd2816f2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
executer_balise_dynamique('FORMULAIRE_RECHERCHE_ECRIRE',
	array(self(),'ajax'),
	array('../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-envoi.html','html_7590717166291f457e6a35a2fd2816f2','',1,$GLOBALS['spip_lang'])) .
'<div class=\'nettoyeur\'></div>

' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/messages-envoyes') . ', array_merge('.var_export($Pile[0],1).',array(\'id_auteur\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true))) . ',
	\'statut\' => ' . argumenter_squelette('prepa') . ',
	\'titre\' => ' . argumenter_squelette(_T('public|spip|ecrire:info_message_en_redaction')) . ',
	\'type\' => ' . argumenter_squelette(interdire_scripts(replace(entites_html(sinon(table_valeur(@$Pile[0], (string)'typem', null), 'tout'),true),'tout',''))) . ',
	\'nb\' => ' . argumenter_squelette('10') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-envoi.html\',\'html_7590717166291f457e6a35a2fd2816f2\',\'\',4,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>

<p class="tri">
	' .
lien_ou_expose(parametre_url(self(),'typem','tout'),_T('public|spip|ecrire:info_tout_afficher'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'typem', null), 'tout'),true) == 'tout')),'ajax') .
'
	| ' .
lien_ou_expose(parametre_url(self(),'typem','affich'),_T('organiseur:info_selection_annonces'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'typem', null), 'tout'),true) == 'affich')),'ajax') .
'
	| ' .
lien_ou_expose(parametre_url(self(),'typem','pb'),_T('organiseur:info_selection_pensebetes'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'typem', null), 'tout'),true) == 'pb')),'ajax') .
'
	| ' .
lien_ou_expose(parametre_url(self(),'typem','normal'),_T('organiseur:info_selection_messages'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'typem', null), 'tout'),true) == 'normal')),'ajax') .
'
</p>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/messages-envoyes') . ', array_merge('.var_export($Pile[0],1).',array(\'id_auteur\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true))) . ',
	\'statut\' => ' . argumenter_squelette('publie') . ',
	\'sinon\' => ' . argumenter_squelette(_T('public|spip|ecrire:info_aucun_message')) . ',
	\'type\' => ' . argumenter_squelette(interdire_scripts(replace(entites_html(sinon(table_valeur(@$Pile[0], (string)'typem', null), 'tout'),true),'tout',''))) . ',
	\'nb\' => ' . argumenter_squelette('50') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-envoi.html\',\'html_7590717166291f457e6a35a2fd2816f2\',\'\',12,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>');

	return analyse_resultat_skel('html_7590717166291f457e6a35a2fd2816f2', $Cache, $page, '../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-envoi.html');
}
?>