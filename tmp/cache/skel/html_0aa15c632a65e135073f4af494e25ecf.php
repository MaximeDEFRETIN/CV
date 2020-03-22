<?php

/*
 * Squelette : ../plugins/auto/escal_V4/formulaires/configurer_escal_rubrique_lateral.html
 * Date :      Fri, 20 Dec 2019 11:26:32 GMT
 * Compile :   Thu, 27 Feb 2020 09:12:55 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/escal_V4/formulaires/configurer_escal_rubrique_lateral.html
// Temps de compilation total: 7.370 ms
//

function html_0aa15c632a65e135073f4af494e25ecf($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- Noisettes  et layout -->
    <div class="formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'">

    <h3 class="titrem">' .
interdire_scripts(filtre_balise_img_dist(chemin_image('configrubrique.png'),'','cadre-icone')) .
'La page rubrique</h3>
    ' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
    ' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
    <form method="post" action="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'">
    <div>
    ' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div><ul>

<legend><strong>' .
_T('escal:choix_blocs_lateraux') .
'</strong></legend>

	<div class="explication">
		<strong>' .
_T('escal:doc_acces_direct') .
'</strong>' .
_T('escal:doc_acces_direct2') .
'<br />
		<strong>' .
_T('escal:doc_actus') .
'</strong>' .
_T('escal:doc_actus2') .
'<br />
		<strong>' .
_T('escal:doc_a_decouvrir') .
'</strong>' .
_T('escal:doc_a_decouvrir2') .
'<br />
		<strong>' .
_T('escal:doc_article_libre') .
'</strong>' .
_T('escal:doc_article_libre2') .
'<br />
		<strong>' .
_T('escal:doc_telecharger_art_rub') .
'</strong>' .
_T('escal:doc_telecharger_rub2') .
'<br />
		<strong>' .
_T('escal:doc_personnalise') .
'</strong>' .
_T('escal:doc_personnalise2') .
'<br />
		<strong>' .
_T('escal:doc_derniers_articles') .
'</strong>' .
_T('escal:doc_derniers_articles2') .
'<br />
		<strong>' .
_T('escal:doc_evenements_a_venir') .
'</strong>' .
_T('escal:doc_evenements_a_venir2') .
'<br />
		<strong>' .
_T('escal:doc_mini_calendrier') .
'</strong>' .
_T('escal:doc_mini_calendrier2') .
'<br />
		<strong>' .
_T('escal:doc_navigation_mots_cles') .
'</strong>' .
_T('escal:doc_navigation_mots_cles2') .
'<br />
		<strong>' .
_T('escal:doc_sites_favoris') .
'</strong>' .
_T('escal:doc_sites_favoris2') .
'<br />
		<strong>' .
_T('escal:doc_sur_web') .
'</strong>' .
_T('escal:doc_sur_web2') .
'<br />
	</div>

            <li class="editer ' .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
                    <label><strong>' .
_T('escal:colonne_nav') .
'</strong></label>
                    <br />
            <div class="explication">
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
             ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'blocnavrub1') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bloc_un') .
'
                    <span class="choix droite">
                            <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
                              <option value="rien" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'rien') ? 'selected="selected"':'')) .
' ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '') ? 'selected="selected"':'')) .
' >' .
_T('escal:aucun') .
'</option>
                              <option value="acces_direct" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'acces_direct') ? 'selected="selected"':'')) .
' >' .
_T('escal:acces_direct') .
'</option>
                              <option value="actus" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'actus') ? 'selected="selected"':'')) .
' >' .
_T('escal:actus') .
'</option>
                              <option value="decouvrir_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'decouvrir_articles') ? 'selected="selected"':'')) .
' >A découvrir</option>
                              <option value="article_libre1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre1') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre1') .
'</option>
                              <option value="article_libre2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre2') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre2') .
'</option>
                              <option value="article_libre3" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre3') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre3') .
'</option>
                              <option value="article_libre4" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre4') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre4') .
'</option>
                              <option value="article_libre5" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre5') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre5') .
'</option>
                              <option value="documents_rubrique" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'documents_rubrique') ? 'selected="selected"':'')) .
' >' .
_T('escal:a_telecharger') .
'</option>
                              <option value="perso" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'perso') ? 'selected="selected"':'')) .
' >' .
_T('escal:noisette_perso') .
'</option>
                              <option value="derniers_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'derniers_articles') ? 'selected="selected"':'')) .
' >' .
_T('escal:derniers_articles') .
'</option>
                              <option value="evenements" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'evenements') ? 'selected="selected"':'')) .
' >' .
_T('escal:evenements_venir') .
'</option>
                              <option value="choixmenuV1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'choixmenuV1') ? 'selected="selected"':'')) .
' >' .
_T('escal:menu_vertical_depliant') .
'</option>
                              <option value="choixmenuV2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'choixmenuV2') ? 'selected="selected"':'')) .
' >' .
_T('escal:menu_vertical_deroulant') .
'</option>
                              <option value="calendrier" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'calendrier') ? 'selected="selected"':'')) .
' >' .
_T('escal:mini_calendrier') .
'</option>
                              <option value="nav_mots2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'nav_mots2') ? 'selected="selected"':'')) .
' >' .
_T('escal:nav_mot_cle') .
'</option>
                              <option value="sites_favoris_rub" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites_favoris_rub') ? 'selected="selected"':'')) .
' >' .
_T('escal:sites_favoris') .
'</option>
                              <option value="sites" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites') ? 'selected="selected"':'')) .
' >' .
_T('escal:sur_web') .
'</option>       
                            </select>
                    </span>
             <div class="nettoyeur"></div>
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
             ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'blocnavrub2') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bloc_deux') .
'
                    <span class="choix droite">
                            <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
                              <option value="rien" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'rien') ? 'selected="selected"':'')) .
' ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '') ? 'selected="selected"':'')) .
' >' .
_T('escal:aucun') .
'</option>
                              <option value="acces_direct" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'acces_direct') ? 'selected="selected"':'')) .
' >' .
_T('escal:acces_direct') .
'</option>
                              <option value="actus" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'actus') ? 'selected="selected"':'')) .
' >' .
_T('escal:actus') .
'</option>
                              <option value="decouvrir_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'decouvrir_articles') ? 'selected="selected"':'')) .
' >A découvrir</option>
                              <option value="article_libre1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre1') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre1') .
'</option>
                              <option value="article_libre2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre2') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre2') .
'</option>
                              <option value="article_libre3" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre3') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre3') .
'</option>
                              <option value="article_libre4" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre4') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre4') .
'</option>
                              <option value="article_libre5" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre5') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre5') .
'</option>
                              <option value="documents_rubrique" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'documents_rubrique') ? 'selected="selected"':'')) .
' >' .
_T('escal:a_telecharger') .
'</option>
                              <option value="perso" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'perso') ? 'selected="selected"':'')) .
' >' .
_T('escal:noisette_perso') .
'</option>
                              <option value="derniers_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'derniers_articles') ? 'selected="selected"':'')) .
' >' .
_T('escal:derniers_articles') .
'</option>
                              <option value="evenements" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'evenements') ? 'selected="selected"':'')) .
' >' .
_T('escal:evenements_venir') .
'</option>
                              <option value="choixmenuV1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'choixmenuV1') ? 'selected="selected"':'')) .
' >' .
_T('escal:menu_vertical_depliant') .
'</option>
                              <option value="choixmenuV2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'choixmenuV2') ? 'selected="selected"':'')) .
' >' .
_T('escal:menu_vertical_deroulant') .
'</option>
                              <option value="calendrier" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'calendrier') ? 'selected="selected"':'')) .
' >' .
_T('escal:mini_calendrier') .
'</option>
                              <option value="nav_mots2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'nav_mots2') ? 'selected="selected"':'')) .
' >' .
_T('escal:nav_mot_cle') .
'</option>
                              <option value="sites_favoris_rub" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites_favoris_rub') ? 'selected="selected"':'')) .
' >' .
_T('escal:sites_favoris') .
'</option>
                              <option value="sites" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites') ? 'selected="selected"':'')) .
' >' .
_T('escal:sur_web') .
'</option> 
                            </select>
                    </span>
             <div class="nettoyeur"></div>
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
             ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'blocnavrub3') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bloc_trois') .
'
                    <span class="choix droite">
                            <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
                              <option value="rien" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'rien') ? 'selected="selected"':'')) .
' >' .
_T('escal:aucun') .
'</option>
                              <option value="acces_direct" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'acces_direct') ? 'selected="selected"':'')) .
' ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '') ? 'selected="selected"':'')) .
' >' .
_T('escal:acces_direct') .
'</option>
                              <option value="actus" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'actus') ? 'selected="selected"':'')) .
' >' .
_T('escal:actus') .
'</option>
                              <option value="decouvrir_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'decouvrir_articles') ? 'selected="selected"':'')) .
' >A découvrir</option>
                              <option value="article_libre1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre1') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre1') .
'</option>
                              <option value="article_libre2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre2') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre2') .
'</option>
                              <option value="article_libre3" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre3') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre3') .
'</option>
                              <option value="article_libre4" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre4') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre4') .
'</option>
                              <option value="article_libre5" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre5') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre5') .
'</option>
                              <option value="documents_rubrique" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'documents_rubrique') ? 'selected="selected"':'')) .
' >' .
_T('escal:a_telecharger') .
'</option>
                              <option value="perso" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'perso') ? 'selected="selected"':'')) .
' >' .
_T('escal:noisette_perso') .
'</option>
                              <option value="derniers_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'derniers_articles') ? 'selected="selected"':'')) .
' >' .
_T('escal:derniers_articles') .
'</option>
                              <option value="evenements" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'evenements') ? 'selected="selected"':'')) .
' >' .
_T('escal:evenements_venir') .
'</option>
                              <option value="choixmenuV1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'choixmenuV1') ? 'selected="selected"':'')) .
' >' .
_T('escal:menu_vertical_depliant') .
'</option>
                              <option value="choixmenuV2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'choixmenuV2') ? 'selected="selected"':'')) .
' >' .
_T('escal:menu_vertical_deroulant') .
'</option>
                              <option value="calendrier" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'calendrier') ? 'selected="selected"':'')) .
' >' .
_T('escal:mini_calendrier') .
'</option>
                              <option value="nav_mots2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'nav_mots2') ? 'selected="selected"':'')) .
' >' .
_T('escal:nav_mot_cle') .
'</option>
                              <option value="sites_favoris_rub" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites_favoris_rub') ? 'selected="selected"':'')) .
' >' .
_T('escal:sites_favoris') .
'</option>
                              <option value="sites" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites') ? 'selected="selected"':'')) .
' >' .
_T('escal:sur_web') .
'</option>
                            </select>
                    </span>
             <div class="nettoyeur"></div>
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
             ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'blocnavrub4') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bloc_quatre') .
'
                    <span class="choix droite">
                            <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
                              <option value="rien" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'rien') ? 'selected="selected"':'')) .
' ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '') ? 'selected="selected"':'')) .
' >' .
_T('escal:aucun') .
'</option>
                              <option value="acces_direct" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'acces_direct') ? 'selected="selected"':'')) .
' >' .
_T('escal:acces_direct') .
'</option>
                              <option value="actus" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'actus') ? 'selected="selected"':'')) .
' >' .
_T('escal:actus') .
'</option>
                              <option value="decouvrir_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'decouvrir_articles') ? 'selected="selected"':'')) .
' >A découvrir</option>
                              <option value="article_libre1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre1') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre1') .
'</option>
                              <option value="article_libre2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre2') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre2') .
'</option>
                              <option value="article_libre3" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre3') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre3') .
'</option>
                              <option value="article_libre4" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre4') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre4') .
'</option>
                              <option value="article_libre5" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre5') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre5') .
'</option>
                              <option value="documents_rubrique" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'documents_rubrique') ? 'selected="selected"':'')) .
' >' .
_T('escal:a_telecharger') .
'</option>
                              <option value="perso" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'perso') ? 'selected="selected"':'')) .
' >' .
_T('escal:noisette_perso') .
'</option>
                              <option value="derniers_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'derniers_articles') ? 'selected="selected"':'')) .
' >' .
_T('escal:derniers_articles') .
'</option>
                              <option value="evenements" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'evenements') ? 'selected="selected"':'')) .
' >' .
_T('escal:evenements_venir') .
'</option>
                              <option value="choixmenuV1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'choixmenuV1') ? 'selected="selected"':'')) .
' >' .
_T('escal:menu_vertical_depliant') .
'</option>
                              <option value="choixmenuV2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'choixmenuV2') ? 'selected="selected"':'')) .
' >' .
_T('escal:menu_vertical_deroulant') .
'</option>
                              <option value="calendrier" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'calendrier') ? 'selected="selected"':'')) .
' >' .
_T('escal:mini_calendrier') .
'</option>
                              <option value="nav_mots2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'nav_mots2') ? 'selected="selected"':'')) .
' >' .
_T('escal:nav_mot_cle') .
'</option>
                              <option value="sites_favoris_rub" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites_favoris_rub') ? 'selected="selected"':'')) .
' >' .
_T('escal:sites_favoris') .
'</option>
                              <option value="sites" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites') ? 'selected="selected"':'')) .
' >' .
_T('escal:sur_web') .
'</option> 
                            </select>
                    </span>
             <div class="nettoyeur"></div>
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
             ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'blocnavrub5') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bloc_cinq') .
'
                    <span class="choix droite">
                            <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
                              <option value="rien" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'rien') ? 'selected="selected"':'')) .
' ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '') ? 'selected="selected"':'')) .
' >' .
_T('escal:aucun') .
'</option>
                              <option value="acces_direct" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'acces_direct') ? 'selected="selected"':'')) .
' >' .
_T('escal:acces_direct') .
'</option>
                              <option value="actus" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'actus') ? 'selected="selected"':'')) .
' >' .
_T('escal:actus') .
'</option>
                              <option value="decouvrir_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'decouvrir_articles') ? 'selected="selected"':'')) .
' >A découvrir</option>
                              <option value="article_libre1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre1') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre1') .
'</option>
                              <option value="article_libre2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre2') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre2') .
'</option>
                              <option value="article_libre3" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre3') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre3') .
'</option>
                              <option value="article_libre4" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre4') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre4') .
'</option>
                              <option value="article_libre5" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre5') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre5') .
'</option>
                              <option value="documents_rubrique" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'documents_rubrique') ? 'selected="selected"':'')) .
' >' .
_T('escal:a_telecharger') .
'</option>
                              <option value="perso" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'perso') ? 'selected="selected"':'')) .
' >' .
_T('escal:noisette_perso') .
'</option>
                              <option value="derniers_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'derniers_articles') ? 'selected="selected"':'')) .
' >' .
_T('escal:derniers_articles') .
'</option>
                              <option value="evenements" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'evenements') ? 'selected="selected"':'')) .
' >' .
_T('escal:evenements_venir') .
'</option>
                              <option value="choixmenuV1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'choixmenuV1') ? 'selected="selected"':'')) .
' >' .
_T('escal:menu_vertical_depliant') .
'</option>
                              <option value="choixmenuV2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'choixmenuV2') ? 'selected="selected"':'')) .
' >' .
_T('escal:menu_vertical_deroulant') .
'</option>
                              <option value="calendrier" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'calendrier') ? 'selected="selected"':'')) .
' >' .
_T('escal:mini_calendrier') .
'</option>
                              <option value="nav_mots2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'nav_mots2') ? 'selected="selected"':'')) .
' >' .
_T('escal:nav_mot_cle') .
'</option>
                              <option value="sites_favoris_rub" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites_favoris_rub') ? 'selected="selected"':'')) .
' >' .
_T('escal:sites_favoris') .
'</option>
                              <option value="sites" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites') ? 'selected="selected"':'')) .
' >' .
_T('escal:sur_web') .
'</option> 
                            </select>
                    </span>
             <div class="nettoyeur"></div>
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
             ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'blocnavrub6') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bloc_six') .
'
                    <span class="choix droite">
                            <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
                              <option value="rien" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'rien') ? 'selected="selected"':'')) .
' ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '') ? 'selected="selected"':'')) .
' >' .
_T('escal:aucun') .
'</option>
                              <option value="acces_direct" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'acces_direct') ? 'selected="selected"':'')) .
' >' .
_T('escal:acces_direct') .
'</option>
                              <option value="actus" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'actus') ? 'selected="selected"':'')) .
' >' .
_T('escal:actus') .
'</option>
                              <option value="decouvrir_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'decouvrir_articles') ? 'selected="selected"':'')) .
' >A découvrir</option>
                              <option value="article_libre1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre1') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre1') .
'</option>
                              <option value="article_libre2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre2') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre2') .
'</option>
                              <option value="article_libre3" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre3') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre3') .
'</option>
                              <option value="article_libre4" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre4') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre4') .
'</option>
                              <option value="article_libre5" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre5') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre5') .
'</option>
                              <option value="documents_rubrique" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'documents_rubrique') ? 'selected="selected"':'')) .
' >' .
_T('escal:a_telecharger') .
'</option>
                              <option value="perso" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'perso') ? 'selected="selected"':'')) .
' >' .
_T('escal:noisette_perso') .
'</option>
                              <option value="derniers_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'derniers_articles') ? 'selected="selected"':'')) .
' >' .
_T('escal:derniers_articles') .
'</option>
                              <option value="evenements" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'evenements') ? 'selected="selected"':'')) .
' >' .
_T('escal:evenements_venir') .
'</option>
                              <option value="choixmenuV1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'choixmenuV1') ? 'selected="selected"':'')) .
' >' .
_T('escal:menu_vertical_depliant') .
'</option>
                              <option value="choixmenuV2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'choixmenuV2') ? 'selected="selected"':'')) .
' >' .
_T('escal:menu_vertical_deroulant') .
'</option>
                              <option value="calendrier" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'calendrier') ? 'selected="selected"':'')) .
' >' .
_T('escal:mini_calendrier') .
'</option>
                              <option value="nav_mots2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'nav_mots2') ? 'selected="selected"':'')) .
' >' .
_T('escal:nav_mot_cle') .
'</option>
                              <option value="sites_favoris_rub" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites_favoris_rub') ? 'selected="selected"':'')) .
' >' .
_T('escal:sites_favoris') .
'</option>
                              <option value="sites" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites') ? 'selected="selected"':'')) .
' >' .
_T('escal:sur_web') .
'</option>
                            </select>
                    </span>
            <div class="nettoyeur"></div>
            </div>
            </li>



            <li class="editer ' .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
                    <label><strong>' .
_T('escal:colonne_extra') .
'</strong></label>
                    <br />
            <div class="explication">
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
             ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'blocextrarub1') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bloc_un') .
'
                    <span class="choix droite">
                            <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
                              <option value="rien" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'rien') ? 'selected="selected"':'')) .
' >' .
_T('escal:aucun') .
'</option>
                              <option value="acces_direct" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'acces_direct') ? 'selected="selected"':'')) .
' >' .
_T('escal:acces_direct') .
'</option>
                              <option value="actus" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'actus') ? 'selected="selected"':'')) .
' >' .
_T('escal:actus') .
'</option>
                              <option value="decouvrir_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'decouvrir_articles') ? 'selected="selected"':'')) .
' >A découvrir</option>
                              <option value="article_libre1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre1') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre1') .
'</option>
                              <option value="article_libre2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre2') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre2') .
'</option>
                              <option value="article_libre3" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre3') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre3') .
'</option>
                              <option value="article_libre4" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre4') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre4') .
'</option>
                              <option value="article_libre5" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre5') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre5') .
'</option>
                              <option value="documents_rubrique" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'documents_rubrique') ? 'selected="selected"':'')) .
' >' .
_T('escal:a_telecharger') .
'</option>
                              <option value="perso" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'perso') ? 'selected="selected"':'')) .
' >' .
_T('escal:noisette_perso') .
'</option>
                              <option value="derniers_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'derniers_articles') ? 'selected="selected"':'')) .
' ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '') ? 'selected="selected"':'')) .
' >' .
_T('escal:derniers_articles') .
'</option>
                              <option value="evenements" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'evenements') ? 'selected="selected"':'')) .
' >' .
_T('escal:evenements_venir') .
'</option>
                              <option value="calendrier" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'calendrier') ? 'selected="selected"':'')) .
' >' .
_T('escal:mini_calendrier') .
'</option>
                              <option value="nav_mots2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'nav_mots2') ? 'selected="selected"':'')) .
' >' .
_T('escal:nav_mot_cle') .
'</option>
                              <option value="sites_favoris_rub" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites_favoris_rub') ? 'selected="selected"':'')) .
' >' .
_T('escal:sites_favoris') .
'</option>
                              <option value="sites" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites') ? 'selected="selected"':'')) .
' >' .
_T('escal:sur_web') .
'</option>                            
                            </select>
                    </span>
             <div class="nettoyeur"></div>
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
             ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'blocextrarub2') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bloc_deux') .
'
                    <span class="choix droite">
                            <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
                              <option value="rien" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'rien') ? 'selected="selected"':'')) .
' ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '') ? 'selected="selected"':'')) .
' >' .
_T('escal:aucun') .
'</option>
                              <option value="acces_direct" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'acces_direct') ? 'selected="selected"':'')) .
' >' .
_T('escal:acces_direct') .
'</option>
                              <option value="actus" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'actus') ? 'selected="selected"':'')) .
' >' .
_T('escal:actus') .
'</option>
                              <option value="decouvrir_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'decouvrir_articles') ? 'selected="selected"':'')) .
' >A découvrir</option>
                              <option value="article_libre1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre1') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre1') .
'</option>
                              <option value="article_libre2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre2') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre2') .
'</option>
                              <option value="article_libre3" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre3') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre3') .
'</option>
                              <option value="article_libre4" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre4') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre4') .
'</option>
                              <option value="article_libre5" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre5') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre5') .
'</option>
                              <option value="documents_rubrique" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'documents_rubrique') ? 'selected="selected"':'')) .
' >' .
_T('escal:a_telecharger') .
'</option>
                              <option value="perso" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'perso') ? 'selected="selected"':'')) .
' >' .
_T('escal:noisette_perso') .
'</option>
                              <option value="derniers_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'derniers_articles') ? 'selected="selected"':'')) .
' >' .
_T('escal:derniers_articles') .
'</option>
                              <option value="evenements" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'evenements') ? 'selected="selected"':'')) .
' >' .
_T('escal:evenements_venir') .
'</option>
                              <option value="calendrier" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'calendrier') ? 'selected="selected"':'')) .
' >' .
_T('escal:mini_calendrier') .
'</option>
                              <option value="nav_mots2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'nav_mots2') ? 'selected="selected"':'')) .
' >' .
_T('escal:nav_mot_cle') .
'</option>
                              <option value="sites_favoris_rub" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites_favoris_rub') ? 'selected="selected"':'')) .
' >' .
_T('escal:sites_favoris') .
'</option>
                              <option value="sites" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites') ? 'selected="selected"':'')) .
' >' .
_T('escal:sur_web') .
'</option>                             
                            </select>
                    </span>
             <div class="nettoyeur"></div>
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
             ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'blocextrarub3') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bloc_trois') .
'
                    <span class="choix droite">
                            <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
                              <option value="rien" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'rien') ? 'selected="selected"':'')) .
' ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '') ? 'selected="selected"':'')) .
' >' .
_T('escal:aucun') .
'</option>
                              <option value="acces_direct" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'acces_direct') ? 'selected="selected"':'')) .
' >' .
_T('escal:acces_direct') .
'</option>
                              <option value="actus" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'actus') ? 'selected="selected"':'')) .
' >' .
_T('escal:actus') .
'</option>
                              <option value="decouvrir_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'decouvrir_articles') ? 'selected="selected"':'')) .
' >A découvrir</option>
                              <option value="article_libre1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre1') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre1') .
'</option>
                              <option value="article_libre2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre2') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre2') .
'</option>
                              <option value="article_libre3" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre3') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre3') .
'</option>
                              <option value="article_libre4" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre4') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre4') .
'</option>
                              <option value="article_libre5" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre5') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre5') .
'</option>
                              <option value="documents_rubrique" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'documents_rubrique') ? 'selected="selected"':'')) .
' >' .
_T('escal:a_telecharger') .
'</option>
                              <option value="perso" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'perso') ? 'selected="selected"':'')) .
' >' .
_T('escal:noisette_perso') .
'</option>
                              <option value="derniers_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'derniers_articles') ? 'selected="selected"':'')) .
' >' .
_T('escal:derniers_articles') .
'</option>
                              <option value="evenements" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'evenements') ? 'selected="selected"':'')) .
' >' .
_T('escal:evenements_venir') .
'</option>
                              <option value="calendrier" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'calendrier') ? 'selected="selected"':'')) .
' >' .
_T('escal:mini_calendrier') .
'</option>
                              <option value="nav_mots2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'nav_mots2') ? 'selected="selected"':'')) .
' >' .
_T('escal:nav_mot_cle') .
'</option>
                              <option value="sites_favoris_rub" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites_favoris_rub') ? 'selected="selected"':'')) .
' >' .
_T('escal:sites_favoris') .
'</option>
                              <option value="sites" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites') ? 'selected="selected"':'')) .
' >' .
_T('escal:sur_web') .
'</option>                           
                            </select>
                    </span>
             <div class="nettoyeur"></div>
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
             ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'blocextrarub4') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bloc_quatre') .
'
                    <span class="choix droite">
                            <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
                              <option value="rien" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'rien') ? 'selected="selected"':'')) .
' ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '') ? 'selected="selected"':'')) .
' >' .
_T('escal:aucun') .
'</option>
                              <option value="acces_direct" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'acces_direct') ? 'selected="selected"':'')) .
' >' .
_T('escal:acces_direct') .
'</option>
                              <option value="actus" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'actus') ? 'selected="selected"':'')) .
' >' .
_T('escal:actus') .
'</option>
                              <option value="decouvrir_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'decouvrir_articles') ? 'selected="selected"':'')) .
' >A découvrir</option>
                              <option value="article_libre1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre1') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre1') .
'</option>
                              <option value="article_libre2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre2') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre2') .
'</option>
                              <option value="article_libre3" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre3') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre3') .
'</option>
                              <option value="article_libre4" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre4') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre4') .
'</option>
                              <option value="article_libre5" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre5') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre5') .
'</option>
                              <option value="documents_rubrique" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'documents_rubrique') ? 'selected="selected"':'')) .
' >' .
_T('escal:a_telecharger') .
'</option>
                              <option value="perso" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'perso') ? 'selected="selected"':'')) .
' >' .
_T('escal:noisette_perso') .
'</option>
                              <option value="derniers_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'derniers_articles') ? 'selected="selected"':'')) .
' >' .
_T('escal:derniers_articles') .
'</option>
                              <option value="evenements" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'evenements') ? 'selected="selected"':'')) .
' >' .
_T('escal:evenements_venir') .
'</option>
                              <option value="calendrier" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'calendrier') ? 'selected="selected"':'')) .
' >' .
_T('escal:mini_calendrier') .
'</option>
                              <option value="nav_mots2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'nav_mots2') ? 'selected="selected"':'')) .
' >' .
_T('escal:nav_mot_cle') .
'</option>
                              <option value="sites_favoris_rub" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites_favoris_rub') ? 'selected="selected"':'')) .
' >' .
_T('escal:sites_favoris') .
'</option>
                              <option value="sites" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites') ? 'selected="selected"':'')) .
' >' .
_T('escal:sur_web') .
'</option>                            
                            </select>
                    </span>                    
             <div class="nettoyeur"></div>
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
             ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'blocextrarub5') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bloc_cinq') .
'
                    <span class="choix droite">
                            <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
                              <option value="rien" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'rien') ? 'selected="selected"':'')) .
' ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '') ? 'selected="selected"':'')) .
' >' .
_T('escal:aucun') .
'</option>
                              <option value="acces_direct" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'acces_direct') ? 'selected="selected"':'')) .
' >' .
_T('escal:acces_direct') .
'</option>
                              <option value="actus" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'actus') ? 'selected="selected"':'')) .
' >' .
_T('escal:actus') .
'</option>
                              <option value="decouvrir_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'decouvrir_articles') ? 'selected="selected"':'')) .
' >A découvrir</option>
                              <option value="article_libre1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre1') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre1') .
'</option>
                              <option value="article_libre2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre2') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre2') .
'</option>
                              <option value="article_libre3" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre3') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre3') .
'</option>
                              <option value="article_libre4" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre4') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre4') .
'</option>
                              <option value="article_libre5" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre5') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre5') .
'</option>
                              <option value="documents_rubrique" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'documents_rubrique') ? 'selected="selected"':'')) .
' >' .
_T('escal:a_telecharger') .
'</option>
                              <option value="perso" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'perso') ? 'selected="selected"':'')) .
' >' .
_T('escal:noisette_perso') .
'</option>
                              <option value="derniers_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'derniers_articles') ? 'selected="selected"':'')) .
' >' .
_T('escal:derniers_articles') .
'</option>
                              <option value="evenements" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'evenements') ? 'selected="selected"':'')) .
' >' .
_T('escal:evenements_venir') .
'</option>
                              <option value="calendrier" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'calendrier') ? 'selected="selected"':'')) .
' >' .
_T('escal:mini_calendrier') .
'</option>
                              <option value="nav_mots2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'nav_mots2') ? 'selected="selected"':'')) .
' >' .
_T('escal:nav_mot_cle') .
'</option>
                              <option value="sites_favoris_rub" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites_favoris_rub') ? 'selected="selected"':'')) .
' >' .
_T('escal:sites_favoris') .
'</option>
                              <option value="sites" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites') ? 'selected="selected"':'')) .
' >' .
_T('escal:sur_web') .
'</option>                            
                            </select>
                    </span>                    
             <div class="nettoyeur"></div>
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
             ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'blocextrarub6') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:bloc_six') .
'
                    <span class="choix droite">
                            <select name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
                              <option value="rien" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'rien') ? 'selected="selected"':'')) .
' ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '') ? 'selected="selected"':'')) .
' >' .
_T('escal:aucun') .
'</option>
                              <option value="acces_direct" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'acces_direct') ? 'selected="selected"':'')) .
' >' .
_T('escal:acces_direct') .
'</option>
                              <option value="actus" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'actus') ? 'selected="selected"':'')) .
' >' .
_T('escal:actus') .
'</option>
                              <option value="decouvrir_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'decouvrir_articles') ? 'selected="selected"':'')) .
' >A découvrir</option>
                              <option value="article_libre1" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre1') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre1') .
'</option>
                              <option value="article_libre2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre2') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre2') .
'</option>
                              <option value="article_libre3" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre3') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre3') .
'</option>
                              <option value="article_libre4" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre4') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre4') .
'</option>
                              <option value="article_libre5" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'article_libre5') ? 'selected="selected"':'')) .
' >' .
_T('escal:article_libre5') .
'</option>
                              <option value="documents_rubrique" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'documents_rubrique') ? 'selected="selected"':'')) .
' >' .
_T('escal:a_telecharger') .
'</option>
                              <option value="perso" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'perso') ? 'selected="selected"':'')) .
' >' .
_T('escal:noisette_perso') .
'</option>
                              <option value="derniers_articles" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'derniers_articles') ? 'selected="selected"':'')) .
' >' .
_T('escal:derniers_articles') .
'</option>
                              <option value="evenements" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'evenements') ? 'selected="selected"':'')) .
' >' .
_T('escal:evenements_venir') .
'</option>
                              <option value="calendrier" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'calendrier') ? 'selected="selected"':'')) .
' >' .
_T('escal:mini_calendrier') .
'</option>
                              <option value="nav_mots2" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'nav_mots2') ? 'selected="selected"':'')) .
' >' .
_T('escal:nav_mot_cle') .
'</option>
                              <option value="sites_favoris_rub" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites_favoris_rub') ? 'selected="selected"':'')) .
' >' .
_T('escal:sites_favoris') .
'</option>
                              <option value="sites" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'sites') ? 'selected="selected"':'')) .
' >' .
_T('escal:sur_web') .
'</option>                            
                            </select>
                    </span>                    
            <div class="nettoyeur"></div>
            </div>
            </li>
     </ul>


<!-------------------------------------------------------------------------------->
<!-- Stockage des donnees  ------------------------------------------------------->
<!-------------------------------------------------------------------------------->

    <input type="hidden" name="_meta_casier" value="escal/config" />
    <br /><br />
	<p class="boutons"><span class=\'image_loading\'>&nbsp;</span>
  <input type="submit" name="enregistrer" class="submit" value="' .
_T('public|spip|ecrire:bouton_valider') .
'" />
	</p>
  </div>
    </form>
    </div>
');

	return analyse_resultat_skel('html_0aa15c632a65e135073f4af494e25ecf', $Cache, $page, '../plugins/auto/escal_V4/formulaires/configurer_escal_rubrique_lateral.html');
}
?>