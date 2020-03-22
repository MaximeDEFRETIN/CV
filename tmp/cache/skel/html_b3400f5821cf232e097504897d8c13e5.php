<?php

/*
 * Squelette : plugins/auto/spip_proprio/v1.70.5/modeles/noisette_proprietaire.html
 * Date :      Fri, 20 Dec 2019 11:26:30 GMT
 * Compile :   Wed, 05 Feb 2020 17:17:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/spip_proprio/v1.70.5/modeles/noisette_proprietaire.html
// Temps de compilation total: 3.911 ms
//

function html_b3400f5821cf232e097504897d8c13e5($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'proprietaire'] = interdire_scripts((include_spip('inc/config')?lire_config('spip_proprietaire',null,false):''))) .
'

' .
vide($Pile['vars'][$_zzz=(string)'proprietaire_email'] = (($t2 = strval(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_mail')))!=='' ?
			((	'<a href=\'mailto:' .
		table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_mail') .
		'\' title="' .
		_T('spipproprio:coordonnees_mailto_ttl') .
		'" class="spip_mail email">') . $t2 . (	'</a>' .
		interdire_scripts(table_valeur(@$Pile[0], (string)'separator', null)))) :
			'')) .
'

<div>
	<b class="vcard">
	' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'logo', null),true) == 'oui')) ?' ' :''))))!=='' ?
		($t1 . filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'200','100'))) :
		'') .
'
	' .
(($t1 = strval(typo(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_nom'))))!=='' ?
		('<p><strong class="fn org">' . $t1 . '</strong></p>') :
		'') .
'
	<a href=\'' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'\' class="url">' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'</a>' .
interdire_scripts(table_valeur(@$Pile[0], (string)'separator', null)) .
'
	' .
(($t1 = strval(spip_proprio_formater_telephone(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_adresse_telephone'))))!=='' ?
		((	'<span class="tel"><abbr class="type" title="voice">' .
	_T('spipproprio:coordonnees_tel') .
	'</abbr>&nbsp;<span class="value">') . $t1 . (	'</span>' .
	interdire_scripts(table_valeur(@$Pile[0], (string)'separator', null)) .
	'</span>')) :
		'') .
'
	' .
(($t1 = strval(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_adresse_telecopie')))!=='' ?
		((	'<span class="tel"><abbr class="type" title="fax">' .
	_T('spipproprio:coordonnees_fax') .
	'</abbr>&nbsp;<span class="value">') . $t1 . (	'</span>' .
	interdire_scripts(table_valeur(@$Pile[0], (string)'separator', null)) .
	'</span>')) :
		'') .
'
	' .
propre(table_valeur($Pile["vars"], (string)'proprietaire_email', null)) .
'
	<span class="adr">
	' .
(($t1 = strval(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_adresse_rue')))!=='' ?
		('<span class="street-address">' . $t1 . (	'</span>' .
	interdire_scripts(table_valeur(@$Pile[0], (string)'separator', null)))) :
		'') .
'
	' .
(($t1 = strval(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_adresse_code_postal')))!=='' ?
		('<span class="postal-code">' . $t1 . '</span>') :
		'') .
'
	' .
(($t1 = strval(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_adresse_ville')))!=='' ?
		('<span class="locality">' . $t1 . (	'</span>' .
	interdire_scripts(table_valeur(@$Pile[0], (string)'separator', null)))) :
		'') .
'
	' .
(($t1 = strval(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_adresse_pays')))!=='' ?
		('<span class="country-name">' . $t1 . (	'</span>' .
	interdire_scripts(table_valeur(@$Pile[0], (string)'separator', null)))) :
		'') .
'
	</span>
	</b>
	<br /><i>
	' .
(($t1 = strval(typo(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_libelle'))))!=='' ?
		((($t2 = strval(typo(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_nom'))))!=='' ?
			($t2 . ', ') :
			'') . $t1 . interdire_scripts(table_valeur(@$Pile[0], (string)'separator', null))) :
		'') .
'
' .
(($t1 = strval(typo(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_legal_forme'))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(typo(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_capital_social'))))!=='' ?
			(_T('spipproprio:au_capital_de') . $t2) :
			'') .
	'
	' .
	(($t2 = strval(typo(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_enregistrement_organisme'))))!=='' ?
			((	'
		' .
		((table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_legal_genre') == 'fem') ? _T('spipproprio:enregistree_pres'):_T('spipproprio:enregistre_pres')) .
		'
		' .
		(((spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) == 'fr'))  ?
				(' ' . (	'
			' .
			((table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_enregistrement_genre') == 'fem') ? _T('spipproprio:de_la'):_T('spipproprio:du')) .
			'
		')) :
				'')) . $t2 . '
	') :
			'') .
	'
	' .
	(($t2 = strval(typo(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_enregistrement_numero'))))!=='' ?
			(_T('spipproprio:sous_le_numero') . $t2) :
			'') .
	'
	' .
	(!((table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_enregistrement_siren') == ''))  ?
			(' ' . (	_T('spipproprio:sous_le_numero') .
		(!((table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_enregistrement_siret') == ''))  ?
				('
		' . ' ' . (	'
			' .
			(($t4 = strval(typo(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_enregistrement_siret'))))!=='' ?
					((	_T('spipproprio:siret') .
				' ' .
				(($t5 = strval(typo(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_enregistrement_siren'))))!=='' ?
						('
				' . $t5 . '
			 ') :
						'')) . $t4) :
					'') .
			'
		')) :
				'') .
		(((table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_enregistrement_siret') == ''))  ?
				('
		' . ' ' . (	'
			' .
			(($t4 = strval(typo(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_enregistrement_siren'))))!=='' ?
					((	_T('spipproprio:siren') .
				' ') . $t4) :
					'') .
			'
		')) :
				'') .
		(($t3 = strval(typo(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_enregistrement_tvaintra'))))!=='' ?
				((	'<br />' .
			_T('spipproprio:numero_maj') .
			' ' .
			_T('spipproprio:tva_intracommunautaire') .
			' 
			') . $t3 . (	(($t4 = strval(typo(table_valeur(table_valeur($Pile["vars"], (string)'proprietaire', null),'proprietaire_enregistrement_siren'))))!=='' ?
					(' 
				' . $t4 . '
			') :
					'') .
			'
		')) :
				'') .
		'
	')) :
			'') .
	'
')) :
		'') .
'
	</i>
</div>
');

	return analyse_resultat_skel('html_b3400f5821cf232e097504897d8c13e5', $Cache, $page, 'plugins/auto/spip_proprio/v1.70.5/modeles/noisette_proprietaire.html');
}
?>