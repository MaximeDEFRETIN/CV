<?php

/*
 * Squelette : ../plugins/auto/article_accueil/v1.2.2/prive/style_prive_plugin_article_accueil.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Sun, 08 Mar 2020 10:13:15 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/article_accueil/v1.2.2/prive/style_prive_plugin_article_accueil.html
// Temps de compilation total: 0.424 ms
//

function html_3bda5e2eff80ddd36f116acd78a2590c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>' .
vide($Pile['vars'][$_zzz=(string)'claire'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_claire', null), 'edf3fe'),true)))) .
vide($Pile['vars'][$_zzz=(string)'foncee'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_foncee', null), '3874b0'),true)))) .
vide($Pile['vars'][$_zzz=(string)'left'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','left','right'))) .
vide($Pile['vars'][$_zzz=(string)'right'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','right','left'))) .
'.formulaire_editer_article_accueil .article_accueil-entete {
	padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
': 30px;
	background: url(' .
interdire_scripts(chemin_image('article_accueil-24.png')) .
') no-repeat ' .
table_valeur($Pile["vars"], (string)'left', null) .
';
	min-height: 24px;
	padding-top: 4px;
	margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
': -8px;
	margin-' .
table_valeur($Pile["vars"], (string)'right', null) .
': 60px;
}
.formulaire_editer_article_accueil .article_accueil-titre {
	padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
': 30px;
	margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
': -8px;
}
.formulaire_editer_article_accueil .article_accueil-titre div.liste-objets.article-accueil {
	margin-top: 0;
    margin-bottom: 10px;
    border-top: 0;
}
.formulaire_editer_article_accueil .article_accueil-form {
	padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
': 30px;
	margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
': -8px;
	margin-bottom: 10px;
}
');

	return analyse_resultat_skel('html_3bda5e2eff80ddd36f116acd78a2590c', $Cache, $page, '../plugins/auto/article_accueil/v1.2.2/prive/style_prive_plugin_article_accueil.html');
}
?>