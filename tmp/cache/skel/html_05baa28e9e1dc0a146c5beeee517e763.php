<?php

/*
 * Squelette : ../prive/squelettes/contenu/rubriques.html
 * Date :      Mon, 10 Feb 2020 16:50:04 GMT
 * Compile :   Thu, 27 Feb 2020 09:07:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/rubriques.html
// Temps de compilation total: 0.203 ms
//

function html_05baa28e9e1dc0a146c5beeee517e763($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('public|spip|ecrire:info_rubriques') .
'</h1>
<!--affiche_milieu-->
' .
pipeline( 'affiche_enfants' , array('args' => array('exec' => 'rubriques'), 'data' => recuperer_fond( 'prive/objets/contenu/rubrique-enfants' , array_merge($Pile[0],array('id_rubrique' => '0' )), array('compil'=>array('../prive/squelettes/contenu/rubriques.html','html_05baa28e9e1dc0a146c5beeee517e763','',0,$GLOBALS['spip_lang'])), _request('connect'))) ) .
'

' .
pipeline( 'afficher_complement_objet' , array('args' => array('type' => 'rubrique', 'id' => '0'), 'data' => '<div class="nettoyeur"></div>') ));

	return analyse_resultat_skel('html_05baa28e9e1dc0a146c5beeee517e763', $Cache, $page, '../prive/squelettes/contenu/rubriques.html');
}
?>