<?php

/*
 * Squelette : ../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-reception.html
 * Date :      Mon, 10 Feb 2020 16:50:07 GMT
 * Compile :   Thu, 27 Feb 2020 08:59:03 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-reception.html
// Temps de compilation total: 0.615 ms
//

function html_3f17b6b840f7aae336d8e6c86217894c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
executer_balise_dynamique('FORMULAIRE_RECHERCHE_ECRIRE',
	array(self(),'ajax'),
	array('../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-reception.html','html_3f17b6b840f7aae336d8e6c86217894c','',1,$GLOBALS['spip_lang'])) .
'<div class=\'nettoyeur\'></div>
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

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/messages-recus') . ', array_merge('.var_export($Pile[0],1).',array(\'destinataire\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true))) . ',
	\'id_auteur\' => ' . argumenter_squelette('') . ',
	\'sinon\' => ' . argumenter_squelette(_T('public|spip|ecrire:info_aucun_message')) . ',
	\'type\' => ' . argumenter_squelette(interdire_scripts(replace(entites_html(sinon(table_valeur(@$Pile[0], (string)'typem', null), 'tout'),true),'tout',''))) . ',
	\'statut\' => ' . argumenter_squelette('publie') . ',
	\'nb\' => ' . argumenter_squelette('50') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-reception.html\',\'html_3f17b6b840f7aae336d8e6c86217894c\',\'\',10,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
');

	return analyse_resultat_skel('html_3f17b6b840f7aae336d8e6c86217894c', $Cache, $page, '../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-reception.html');
}
?>