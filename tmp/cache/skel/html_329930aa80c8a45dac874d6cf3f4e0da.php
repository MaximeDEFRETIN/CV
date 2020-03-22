<?php

/*
 * Squelette : plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html
 * Date :      Fri, 20 Dec 2019 11:26:30 GMT
 * Compile :   Wed, 05 Feb 2020 17:17:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html
// Temps de compilation total: 1.831 ms
//

function html_329930aa80c8a45dac874d6cf3f4e0da($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'    <p class="arbo"><a href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/">' .
_T('public|spip|ecrire:accueil_site') .
'</a> &gt; <strong class="on">' .
_T('spipproprio:testing_page_titre') .
'</strong></p>

    <div class="cartouche">
			<h1 class="entry-title">' .
_T('spipproprio:testing_page_titre') .
'</h1>
		</div>
		<div class="chapo">' .
propre(_T('spipproprio:testing_page_intro', array('mentions_legales' => interdire_scripts(generer_url_public('mentions_legales', ''))))) .
'</div>

        <div class="cartouche">
        	<h2>1_ ' .
_T('spipproprio:testing_page_bloc') .
'</h2>
            <p><small>' .
_T('spipproprio:testing_page_code') .
'
            <code>
            &#035;PROPRIETAIRE
            </code>
            <br />' .
_T('spipproprio:testing_page_modele') .
'
            <code>
            \'noisette_proprietaire.html\'
            </code>
            </small></p>
        </div>
		<div class="texte entry-content">' .
executer_balise_dynamique('PROPRIETAIRE',
	array(),
	array('plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html','html_329930aa80c8a45dac874d6cf3f4e0da','',20,$GLOBALS['spip_lang'])) .
'</div>
		<br class="nettoyeur" />

        <div class="cartouche">
        	<h2>2_ ' .
_T('spipproprio:testing_page_googlemap') .
'</h2>
            <p><small>' .
_T('spipproprio:testing_page_code') .
'
            <code>
            &#035;PROPRIETAIRE{googlemap}
            </code>
            <br />' .
_T('spipproprio:testing_page_modele') .
'
            <code>
            \'noisette_googlemap.html\'
            </code>
            </small></p>
        </div>
		<div class="entry-content">' .
executer_balise_dynamique('PROPRIETAIRE',
	array('googlemap'),
	array('plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html','html_329930aa80c8a45dac874d6cf3f4e0da','',35,$GLOBALS['spip_lang'])) .
'</div>
		<br class="nettoyeur" />

        <div class="cartouche">
        	<h2>3_ ' .
_T('spipproprio:testing_page_carte_visite') .
'</h2>
            <p><small>' .
_T('spipproprio:testing_page_modele') .
'<code>
            \'carte_visite.html\'
            </code></small></p>
        </div>
        <div class="cartouche">
        	<h3>3_a ' .
_T('spipproprio:testing_page_carte_visite_normale') .
'</h3>
            <p><small>' .
_T('spipproprio:testing_page_code') .
'<code>
            &#035;PROPRIETAIRE{carte_visite}
            </code></small></p>
        </div>
		<div class="texte entry-content">' .
executer_balise_dynamique('PROPRIETAIRE',
	array('carte_visite'),
	array('plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html','html_329930aa80c8a45dac874d6cf3f4e0da','',50,$GLOBALS['spip_lang'])) .
'</div>
		<br class="nettoyeur" />
        <div class="cartouche">
        	<h3>3_b ' .
_T('spipproprio:testing_page_carte_visite_chef') .
'</h3>
            <p><small>' .
_T('spipproprio:testing_page_code') .
'<code>
            &#035;PROPRIETAIRE{carte_visite,chef}
            </code></small></p>
        </div>
		<div class="texte entry-content">' .
executer_balise_dynamique('PROPRIETAIRE',
	array('carte_visite','chef'),
	array('plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html','html_329930aa80c8a45dac874d6cf3f4e0da','',58,$GLOBALS['spip_lang'])) .
'</div>
		<br class="nettoyeur" />
        <div class="cartouche">
        	<h3>3_c ' .
_T('spipproprio:testing_page_carte_visite_webmaster') .
'</h3>
            <p><small>' .
_T('spipproprio:testing_page_code') .
'<code>
            &#035;PROPRIETAIRE{carte_visite,webmaster}
            </code></small></p>
        </div>
		<div class="texte entry-content">' .
executer_balise_dynamique('PROPRIETAIRE',
	array('carte_visite','webmaster'),
	array('plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html','html_329930aa80c8a45dac874d6cf3f4e0da','',66,$GLOBALS['spip_lang'])) .
'</div>
		<br class="nettoyeur" />
        <div class="cartouche">
        	<h3>3_d ' .
_T('spipproprio:testing_page_carte_visite_administrateur') .
'</h3>
            <p><small>' .
_T('spipproprio:testing_page_code') .
'<code>
            &#035;PROPRIETAIRE{carte_visite,admin}
            </code></small></p>
        </div>
		<div class="texte entry-content">' .
executer_balise_dynamique('PROPRIETAIRE',
	array('carte_visite','admin'),
	array('plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html','html_329930aa80c8a45dac874d6cf3f4e0da','',74,$GLOBALS['spip_lang'])) .
'</div>
		<br class="nettoyeur" />
        <div class="cartouche">
        	<h3>3_e ' .
_T('spipproprio:testing_page_carte_visite_site') .
'</h3>
            <p><small>' .
_T('spipproprio:testing_page_code') .
'<code>
            &#035;PROPRIETAIRE{carte_visite,site}
            </code></small></p>
        </div>
		<div class="texte entry-content">' .
executer_balise_dynamique('PROPRIETAIRE',
	array('carte_visite','site'),
	array('plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html','html_329930aa80c8a45dac874d6cf3f4e0da','',82,$GLOBALS['spip_lang'])) .
'</div>
		<br class="nettoyeur" />

        <div class="cartouche">
        	<h2>4_ ' .
_T('spipproprio:testing_page_business_cards') .
'</h2>
        </div>
        <div class="cartouche">
        	<h3>4_ ' .
_T('spipproprio:testing_page_vcard') .
'</h3>
            <p><small>' .
_T('spipproprio:testing_page_code') .
'
            <code>
            &#035;PROPRIETAIRE{vcard}
            </code>
            <br />' .
_T('spipproprio:testing_page_modele') .
'
            <code>
            \'?page=vcard\'
            </code>
            </small></p>
        </div>
		<div class="texte entry-content">' .
executer_balise_dynamique('PROPRIETAIRE',
	array('vcard'),
	array('plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html','html_329930aa80c8a45dac874d6cf3f4e0da','',100,$GLOBALS['spip_lang'])) .
'</div>
		<br class="nettoyeur" />
        <div class="cartouche">
        	<h3>4b_ ' .
_T('spipproprio:testing_page_liens_cartes_visite') .
'</h3>
            <p><small>' .
_T('spipproprio:testing_page_code') .
'
            <code>
            &#035;PROPRIETAIRE{cartes_visite}
            </code>
            </small></p>
        </div>
		<div class="texte entry-content">' .
executer_balise_dynamique('PROPRIETAIRE',
	array('cartes_visite'),
	array('plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html','html_329930aa80c8a45dac874d6cf3f4e0da','',110,$GLOBALS['spip_lang'])) .
'</div>
		<br class="nettoyeur" />
        <div class="cartouche">
        	<h3>4c_ ' .
_T('spipproprio:testing_page_business_cards_complet') .
'</h3>
            <p><small>' .
_T('spipproprio:testing_page_code') .
'
            <code>
            &#035;PROPRIETAIRE{business_cards}
            </code>
            </small></p>
        </div>
		<div class="texte entry-content">' .
executer_balise_dynamique('PROPRIETAIRE',
	array('business_cards'),
	array('plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html','html_329930aa80c8a45dac874d6cf3f4e0da','',120,$GLOBALS['spip_lang'])) .
'</div>
		<br class="nettoyeur" />

        <div class="cartouche">
        	<h2>5_ ' .
_T('spipproprio:testing_page_copyright') .
'</h2>
            <p><small>' .
_T('spipproprio:testing_page_code') .
'<code>
            &#035;PROPRIETAIRE{copyright}
            </code></small></p>
        </div>
		<div class="texte entry-content">' .
executer_balise_dynamique('PROPRIETAIRE',
	array('copyright'),
	array('plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html','html_329930aa80c8a45dac874d6cf3f4e0da','',129,$GLOBALS['spip_lang'])) .
'</div>
		<br class="nettoyeur" />

        <div class="cartouche">
        	<h2>6_ ' .
_T('spipproprio:testing_page_textes_proprietaire') .
'</h2>
            <p><small>' .
_T('spipproprio:testing_page_code') .
'
            <code>
            &#035;TEXTES_PROPRIETAIRE{chaine}
            </code>
            ' .
_T('spipproprio:ou') .
' 
            <code>
            &lt;:proprietaire:chaine|propre:&gt;
            </code>
            </small></p>
        </div>
		<div class="texte entry-content">' .
executer_balise_dynamique('TEXTES_PROPRIETAIRE',
	array('exemple'),
	array('plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html','html_329930aa80c8a45dac874d6cf3f4e0da','',144,$GLOBALS['spip_lang'])) .
'</div>
		<br class="nettoyeur" />
');

	return analyse_resultat_skel('html_329930aa80c8a45dac874d6cf3f4e0da', $Cache, $page, 'plugins/auto/spip_proprio/v1.70.5/public/contenu/test_proprietaire.html');
}
?>