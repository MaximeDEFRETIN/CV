<?php

/*
 * Squelette : ../plugins-dist/organiseur/prive/squelettes/navigation/messages.html
 * Date :      Mon, 10 Feb 2020 16:50:07 GMT
 * Compile :   Thu, 27 Feb 2020 08:59:03 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/organiseur/prive/squelettes/navigation/messages.html
// Temps de compilation total: 1.446 ms
//

function html_a7ac3246d72976b94d3cd067267180c2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir('', 'info') .
_T('public|spip|ecrire:info_gauche_messagerie') .
'
' .
boite_fermer() .
'

' .
vide($Pile['vars'][$_zzz=(string)'ouvreboite'] = ' ') .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('envoyermessage', 'affich')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	((table_valeur($Pile["vars"], (string)'ouvreboite', null))  ?
			(' ' . (	'
		' .
		boite_ouvrir('', 'raccourcis') .
		vide($Pile['vars'][$_zzz=(string)'ouvreboite'] = ''))) :
			'') .
	'
	' .
	filtre_icone_horizontale_dist(generer_url_ecrire('message_edit','new=oui&typemes=affich'),_T('organiseur:icone_ecrire_nouvelle_annonce'),'annonce-24.png','new') .
	'
')) :
		'') .
'
' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('envoyermessage', 'pb')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	((table_valeur($Pile["vars"], (string)'ouvreboite', null))  ?
			(' ' . (	'
		' .
		boite_ouvrir('', 'raccourcis') .
		vide($Pile['vars'][$_zzz=(string)'ouvreboite'] = ''))) :
			'') .
	'
	' .
	filtre_icone_horizontale_dist(generer_url_ecrire('message_edit','new=oui&typemes=pb'),_T('organiseur:icone_ecrire_nouveau_pensebete'),'pensebete-24.png','new') .
	'
')) :
		'') .
'
' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('envoyermessage', 'normal')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	((table_valeur($Pile["vars"], (string)'ouvreboite', null))  ?
			(' ' . (	'
		' .
		boite_ouvrir('', 'raccourcis') .
		vide($Pile['vars'][$_zzz=(string)'ouvreboite'] = ''))) :
			'') .
	'
	' .
	filtre_icone_horizontale_dist(generer_url_ecrire('message_edit','new=oui'),_T('organiseur:icone_ecrire_nouveau_message'),'message-24.png','new') .
	'
')) :
		'') .
'
' .
((($a = table_valeur($Pile["vars"], (string)'ouvreboite', null)) OR (is_string($a) AND strlen($a))) ? $a : boite_fermer()) .
'


' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/organiseur-rappels') . ', array(\'id_auteur\' => ' . argumenter_squelette(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) . ',
	\'last\' => ' . argumenter_squelette(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'quand', null)))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins-dist/organiseur/prive/squelettes/navigation/messages.html\',\'html_a7ac3246d72976b94d3cd067267180c2\',\'\',13,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');

	return analyse_resultat_skel('html_a7ac3246d72976b94d3cd067267180c2', $Cache, $page, '../plugins-dist/organiseur/prive/squelettes/navigation/messages.html');
}
?>