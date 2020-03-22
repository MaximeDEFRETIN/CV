<?php

/*
 * Squelette : ../plugins-dist/organiseur/prive/squelettes/contenu/messages.html
 * Date :      Mon, 10 Feb 2020 16:50:07 GMT
 * Compile :   Thu, 27 Feb 2020 08:59:03 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/organiseur/prive/squelettes/contenu/messages.html
// Temps de compilation total: 0.823 ms
//

function html_0ce22568d52c2914db3fbd2d2b1e85dc($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('public|spip|ecrire:info_messagerie_interne') .
bouton_spip_rss('messages',array('id_auteur' => interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null))))) .
'</h1>
<div class=\'onglets_simple clearfix\'>
	<ul>
		<li>' .
lien_ou_expose(generer_url_ecrire('messages','quoi=reception'),_T('organiseur:titre_boite_reception'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'quoi', null), 'reception'),true) == 'reception')),'ajax') .
'</li>
		<li>' .
lien_ou_expose(generer_url_ecrire('messages','quoi=envoi'),_T('organiseur:titre_boite_envoi'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'quoi', null), 'reception'),true) == 'envoi')),'ajax') .
'</li>
		<li>' .
lien_ou_expose(generer_url_ecrire('messages','quoi=rv'),_T('organiseur:titre_agenda_rv'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'quoi', null), 'reception'),true) == 'rv')),'ajax') .
'</li>
	</ul>
</div>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'prive/squelettes/inclure/organiseur-' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'quoi', null), 'reception'),true)))) . ', array_merge('.var_export($Pile[0],1).',array(\'id_auteur\' => ' . argumenter_squelette(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/organiseur/prive/squelettes/contenu/messages.html\',\'html_0ce22568d52c2914db3fbd2d2b1e85dc\',\'\',9,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>

' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('envoyermessage', 'normal')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	filtre_icone_verticale_dist(generer_url_ecrire('message_edit','new=oui'),_T('organiseur:icone_ecrire_nouveau_message'),'message-24.png','new','right') .
	'
')) :
		'') .
'
' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('envoyermessage', 'pb')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	filtre_icone_verticale_dist(generer_url_ecrire('message_edit','new=oui&typemes=pb'),_T('organiseur:icone_ecrire_nouveau_pensebete'),'pensebete-24.png','new','right') .
	'
')) :
		'') .
'
' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('envoyermessage', 'affich')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	filtre_icone_verticale_dist(generer_url_ecrire('message_edit','new=oui&typemes=affich'),_T('organiseur:icone_ecrire_nouvelle_annonce'),'annonce-24.png','new','right') .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_0ce22568d52c2914db3fbd2d2b1e85dc', $Cache, $page, '../plugins-dist/organiseur/prive/squelettes/contenu/messages.html');
}
?>