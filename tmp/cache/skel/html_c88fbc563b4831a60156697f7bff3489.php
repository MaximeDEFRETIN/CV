<?php

/*
 * Squelette : squelettes/robots.txt.html
 * Date :      Mon, 02 Mar 2020 13:57:11 GMT
 * Compile :   Mon, 02 Mar 2020 15:03:40 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/robots.txt.html
// Temps de compilation total: 7.633 ms
//

function html_c88fbc563b4831a60156697f7bff3489($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header(' . _q((	'Content-Type: text/plain; charset=' .
	interdire_scripts($GLOBALS['meta']['charset']))) . '); ?'.'># robots.txt
# @url: ' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'
# @generator: SPIP ' .
spip_version() .
'
# @template: squelettes/robots.txt.html

User-agent: *
Allow:    /local/cache-css/
Allow:    /local/cache-js/
Disallow: /local/
Disallow: /ecrire/
Disallow: /plugins-dist/
Disallow: /lib/
Disallow: /plugins/
Disallow: /prive/
Disallow: /squelettes-dist/
Disallow: /squelettes/
Crawl-delay: 1

Sitemap: ' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/sitemap.xml');

	return analyse_resultat_skel('html_c88fbc563b4831a60156697f7bff3489', $Cache, $page, 'squelettes/robots.txt.html');
}
?>