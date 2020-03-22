<?php

/*
 * Squelette : plugins/auto/spip_proprio/v1.70.5/modeles/carte_visite.html
 * Date :      Fri, 20 Dec 2019 11:26:30 GMT
 * Compile :   Wed, 05 Feb 2020 17:17:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/spip_proprio/v1.70.5/modeles/carte_visite.html
// Temps de compilation total: 6.211 ms
//

function html_93b7a41e628ecd3158e9e1f461a2e41d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>' .
vide($Pile['vars'][$_zzz=(string)'proprietaire'] = interdire_scripts((include_spip('inc/config')?lire_config('spip_proprietaire',null,false):''))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'str_adresse'] = (	(($t2 = strval(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_adresse_rue')))!=='' ?
			($t2 . ' ') :
			'') .
	(($t2 = strval(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_adresse_code_postal')))!=='' ?
			($t2 . ' ') :
			'') .
	(($t2 = strval(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_adresse_ville')))!=='' ?
			($t2 . ' - ') :
			'') .
	table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_adresse_pays'))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'adresse_mail'] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'who', null),true) == 'admin') ? table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_mail_administratif'):interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'who', null),true) == 'webmaster') ? interdire_scripts((include_spip('inc/config')?lire_config('email_webmaster',null,false):'')):interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'who', null),true) == 'chef') ? table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_mail_responsable'):table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_mail')))))))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'alpha'] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'type', null),true) == 'image') ? '0':'10'))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'alpha_icones'] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'type', null),true) == 'image') ? '0':'50'))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'police_grasse'] = 'dustismo_bold.ttf') .
'
' .
vide($Pile['vars'][$_zzz=(string)'police_fine'] = 'dustismo.ttf') .
'
' .
vide($Pile['vars'][$_zzz=(string)'couleur_police'] = filtrer('couleur_eclaircir',filtrer('couleur_extraire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'couleur_fond'] = filtrer('couleur_foncer',filtrer('couleur_foncer',filtrer('couleur_extraire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))))) .
'

<style type="text/css">
div.carte_visite { font-size: 86%; font-family: "Luxi sans", "Lucida Grande", Lucida, "Lucida Sans Unicode", sans-serif; color: #333; background: #FFF; margin: 0; padding: 0; z-index: 100;}
div.carte_visite img, div.carte_visite table td img {margin: 0; padding: 0.1em; z-index: 105;}
div.carte_visite a, div.carte_visite a img { color: #604A7F; text-decoration: none; border: none;}
div.carte_visite a:focus, div.carte_visite a:hover, div.carte_visite a:active, div.carte_visite a:focus img, div.carte_visite a:hover img, div.carte_visite a:active img { color: #F57900; text-decoration: underline; border: none; }
</style>
<div class="carte_visite" style="position: relative; padding: 0.6em; margin: ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'type', null),true) == 'image') ? '0':'1em')) .
'; border: 1px solid #ccc; -moz-border-radius: 8px; -webkit-border-radius: 8px; width: 420px; background-color: #' .
table_valeur($Pile["vars"], (string)'couleur_fond', null) .
'; text-align: left;">
<table border="0" width="96%">
	<tr>
		<td rowspan="3" style="padding: 1em; text-align: center;">
			<a href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/" title="' .
interdire_scripts(attribut_html(textebrut(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0])))) .
'">
				' .
liens_absolus(spip_proprio_image_alpha(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'160','100')),table_valeur($Pile["vars"], (string)'alpha', null))) .
'
				<p style="margin: 0; padding: 0.2em 0; color: #' .
filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'couleur_fond', null)) .
'; font-size: 0.76em;">' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'</p>
			</a>
		</td>
		<td style="padding: 0.4em; padding-left: 1em; text-align: right; color: #' .
table_valeur($Pile["vars"], (string)'couleur_police', null) .
';">
			' .
vide($Pile['vars'][$_zzz=(string)'adresse'] = (	'<a href="mailto:' .
	table_valeur($Pile["vars"], (string)'adresse_mail', null) .
	'" target="_blank" title="' .
	_T('spipproprio:mail_to') .
	'">' .
	spip_proprio_image_alpha(liens_absolus(filtrer('image_graver', image_typo(propre(table_valeur($Pile["vars"], (string)'adresse_mail', null)),(	'police=' .
		table_valeur($Pile["vars"], (string)'police_grasse', null)),'taille=17',(	'couleur=' .
		table_valeur($Pile["vars"], (string)'couleur_police', null))))),table_valeur($Pile["vars"], (string)'alpha', null)) .
	'</a>
			' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'who', null),true) == 'chef')) ?' ' :''))))!=='' ?
			($t2 . (	'<br /><small>' .
		table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_nom_responsable') .
		(($t3 = strval(typo(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_fonction_responsable'))))!=='' ?
				(' - <i>' . $t3 . '</i>') :
				'') .
		'</small>')) :
			'') .
	'
			' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'who', null),true) == 'admin')) ?' ' :''))))!=='' ?
			($t2 . (	'<br /><small><i>' .
		_T('spipproprio:fonction_administrateur') .
		'</i></small>')) :
			'') .
	'
			' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'who', null),true) == 'webmaster')) ?' ' :''))))!=='' ?
			($t2 . (	'<br /><small><i>' .
		_T('spipproprio:fonction_webmaster') .
		'</i></small>')) :
			'') .
	'
			' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'who', null),true) == 'site')) ?' ' :''))))!=='' ?
			($t2 . (	'<br />
				&nbsp;&nbsp;<a href="' .
		spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
		'" target="_blank" title="' .
		_T('spipproprio:home_page') .
		'"><img src="' .
		liens_absolus(spip_proprio_image_alpha(find_in_path('bwpx-icns/icons/monitor.gif'),table_valeur($Pile["vars"], (string)'alpha_icones', null),'true')) .
		'" align="absmiddle" /></a>
				&nbsp;&nbsp;<a href="mailto:' .
		table_valeur($Pile["vars"], (string)'adresse_mail', null) .
		'" target="_blank" title="' .
		_T('spipproprio:mail_to') .
		'"><img src="' .
		liens_absolus(spip_proprio_image_alpha(find_in_path('bwpx-icns/icons/envelope.gif'),table_valeur($Pile["vars"], (string)'alpha_icones', null),'true')) .
		'" align="absmiddle" /></a>
				&nbsp;&nbsp;<a href="' .
		interdire_scripts(url_absolue(generer_url_public('backend', ''))) .
		'" target="_blank" title="RSS 2.0 - ' .
		_T('spipproprio:all_site') .
		'"><img src="' .
		liens_absolus(spip_proprio_image_alpha(find_in_path('bwpx-icns/icons/rss.gif'),table_valeur($Pile["vars"], (string)'alpha_icones', null),'true')) .
		'" align="absmiddle" /></a>
				' .
		(($t3 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('activer_breves',null,false):'') == 'oui')) ?' ' :''))))!=='' ?
				($t3 . (	'&nbsp;&nbsp;<a href="' .
			interdire_scripts(url_absolue(generer_url_public('backend-breves', ''))) .
			'" target="_blank" title="RSS 2.0 - ' .
			_T('spipproprio:news') .
			'"><img src="' .
			liens_absolus(spip_proprio_image_alpha(find_in_path('bwpx-icns/icons/rss_comment.gif'),table_valeur($Pile["vars"], (string)'alpha_icones', null),'true')) .
			'" align="absmiddle" /></a>')) :
				'') .
		'
			')) :
			''))) .
'
			' .
propre(table_valeur($Pile["vars"], (string)'adresse', null)) .
'
		</td>
	</tr>
	<tr>
		<td style="padding: 0; padding-left: 1em; padding-right: 0.4em; text-align: right;">
			' .
modifier_guillemets(liens_absolus(spip_proprio_image_alpha(filtrer('image_graver', image_typo(table_valeur($Pile["vars"], (string)'str_adresse', null),(	'police=' .
	table_valeur($Pile["vars"], (string)'police_fine', null)),'taille=12',(	'couleur=' .
	table_valeur($Pile["vars"], (string)'couleur_police', null)),'largeur=200','align=right')),table_valeur($Pile["vars"], (string)'alpha', null)))) .
'
		</td>
	</tr>
	<tr>
		<td style="padding: 0.4em; padding-left: 1em; text-align: right;">
			<a href="tel:' .
spip_proprio_formater_telephone(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_adresse_telephone')) .
'" target="_blank" title="Tel to">' .
modifier_guillemets(liens_absolus(spip_proprio_image_alpha(filtrer('image_graver', image_typo(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_adresse_telephone'),(	'police=' .
	table_valeur($Pile["vars"], (string)'police_fine', null)),'taille=16',(	'couleur=' .
	table_valeur($Pile["vars"], (string)'couleur_police', null)),'largeur=200','align=right')),table_valeur($Pile["vars"], (string)'alpha', null)))) .
'</a>
		</td>
	</tr>
</table>
</div>
');

	return analyse_resultat_skel('html_93b7a41e628ecd3158e9e1f461a2e41d', $Cache, $page, 'plugins/auto/spip_proprio/v1.70.5/modeles/carte_visite.html');
}
?>