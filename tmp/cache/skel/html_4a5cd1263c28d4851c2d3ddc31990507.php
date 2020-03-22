<?php

/*
 * Squelette : ../plugins/auto/corbeille/v3.1.2/formulaires/editer_corbeille.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Sun, 08 Mar 2020 10:15:28 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/corbeille/v3.1.2/formulaires/editer_corbeille.html
// Temps de compilation total: 0.411 ms
//

function html_4a5cd1263c28d4851c2d3ddc31990507($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_editer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'">
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
	' .
(($t1 = strval(recuperer_fond( (	'prive/listes/corbeille_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'table', null),true))) , array_merge($Pile[0],array('statut' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_statut', null),true)) )), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('../plugins/auto/corbeille/v3.1.2/formulaires/editer_corbeille.html','html_4a5cd1263c28d4851c2d3ddc31990507','',0,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
		((	'<form method=\'post\' action=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'\' enctype=\'multipart/form-data\'><div>
		
		' .
		'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>') . $t1 . (	'
	  ' .
	'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'submit\' value=\'' .
	_T('corbeille:effacer') .
	'\' name=\'effacer\'/>
	  &nbsp;&nbsp;<input type=\'submit\' class=\'submit\' value=\'' .
	_T('corbeille:effacer_tout') .
	'\' name=\'effacer_tout\' /></p> 
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_4a5cd1263c28d4851c2d3ddc31990507', $Cache, $page, '../plugins/auto/corbeille/v3.1.2/formulaires/editer_corbeille.html');
}
?>