<?php

/*
 * Squelette : ../plugins-dist/organiseur/prive/squelettes/contenu/message_edit.html
 * Date :      Mon, 10 Feb 2020 16:50:07 GMT
 * Compile :   Thu, 27 Feb 2020 09:02:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/organiseur/prive/squelettes/contenu/message_edit.html
// Temps de compilation total: 11.127 ms
//

function html_af98f0eba06e0912139ac919c030349b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(((intval(entites_html(table_valeur(@$Pile[0], (string)'id_message', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'message', interdire_scripts(invalideur_session($Cache, intval(entites_html(table_valeur(@$Pile[0], (string)'id_message', null),true)))))?" ":""))) .
	'
')) :
		'') .
(($t1 = strval(interdire_scripts(((intval(entites_html(table_valeur(@$Pile[0], (string)'id_message', null),true))) ?'' :' '))))!=='' ?
		($t1 . (	'
	' .
	invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('envoyermessage', interdire_scripts(invalideur_session($Cache, entites_html(sinon(table_valeur(@$Pile[0], (string)'typemes', null), 'normal'),true))))?" ":""))) .
	'
')) :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'redirect'] = interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'redirect', null),true)) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts((intval(entites_html(table_valeur(@$Pile[0], (string)'id_message', null),true)) ? interdire_scripts(generer_url_entite(intval(entites_html(table_valeur(@$Pile[0], (string)'id_message', null),true)),'message')):generer_url_ecrire('messages')))))) .
'<div class=\'cadre-formulaire-editer\'>
<div class="entete-formulaire">
	' .
filtre_icone_verticale_dist(table_valeur($Pile["vars"], (string)'redirect', null),_T('public|spip|ecrire:icone_retour'),interdire_scripts(organiseur_icone_message((entites_html(table_valeur(@$Pile[0], (string)'id_message', null),true) ? interdire_scripts(generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_message', null),true)), 'message', 'type')):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'typemes', null), 'normal'),true))))),'',(	'left retour' .
	(($t2 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
			($t2 . 'ajax preload') :
			''))) .
'
	' .
interdire_scripts(organiseur_texte_nouveau_message(entites_html(sinon(table_valeur(@$Pile[0], (string)'typemes', null), 'normal'),true))) .
'
</div>

' .
vide($Pile['vars'][$_zzz=(string)'redirect'] = interdire_scripts(generer_url_entite(entites_html(table_valeur(@$Pile[0], (string)'id_message', null),true),'message'))) .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'redirect'] = 'javascript:if (window.jQuery) jQuery(".entete-formulaire .retour a").followLink();') .
	'<div class="ajax">
')) :
		'') .
'
		' .
executer_balise_dynamique('FORMULAIRE_EDITER_MESSAGE',
	array(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_message', null), 'new'),true)),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'typemes', null), 'normal'),true)),table_valeur($Pile["vars"], (string)'redirect', null),'oui',interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'to', null), ''),true)),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'subject', null), ''),true)),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'texte', null), ''),true))),
	array('../plugins-dist/organiseur/prive/squelettes/contenu/message_edit.html','html_af98f0eba06e0912139ac919c030349b','',12,$GLOBALS['spip_lang'])) .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	</div>
	<script type="text/javascript">/*<![CDATA[*/reloadExecPage(\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true)) .
	'\',\'#navigation,#chemin\');/*]]>*/</script>
')) :
		'') .
'
</div>');

	return analyse_resultat_skel('html_af98f0eba06e0912139ac919c030349b', $Cache, $page, '../plugins-dist/organiseur/prive/squelettes/contenu/message_edit.html');
}
?>