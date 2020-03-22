<?php

/*
 * Squelette : ../plugins/auto/article_accueil/v1.2.2/formulaires/editer_article_accueil.html
 * Date :      Fri, 20 Dec 2019 11:26:22 GMT
 * Compile :   Sun, 08 Mar 2020 10:18:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/article_accueil/v1.2.2/formulaires/editer_article_accueil.html
// Temps de compilation total: 0.601 ms
//

function html_2d675fa87288b32903652f980ef14c49($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_editer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true)) .
'" id="formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true)) .
'">

	<div class="article_accueil-entete">
		' .
interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'_titre', null), _T('article_accueil:rubrique_article_en_accueil'))) .
'
		' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
		<span class="toggle_box_link" style="display:none;">
			&#91;
			<a href="#"
				onclick="var f=jQuery(this).parents(\'.formulaire_spip\').eq(0);
					f.find(\'form\').show(\'fast\');
					f.find(\'p\').show(\'fast\');
					f.find(\'.toggle_box_link\').hide(\'fast\');
					return false;"
				>
				' .
	_T('public|spip|ecrire:bouton_changer') .
	'
			</a>
			&#93;
		</span>
		')) :
		'') .
'
	</div>
	' .
recuperer_fond( 'inclure/inc-article_accueil' , array('id_article_accueil' => @$Pile[0]['id_article_accueil'] ,
	'_statuts' => @$Pile[0]['_statuts'] ,
	'where' => table_valeur(@$Pile[0], (string)'_where', null) ), array('compil'=>array('../plugins/auto/article_accueil/v1.2.2/formulaires/editer_article_accueil.html','html_2d675fa87288b32903652f980ef14c49','',7,$GLOBALS['spip_lang'])), _request('connect')) .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
		' .
	(($t2 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
			('<p class="reponse_formulaire reponse_formulaire_ok">' . $t2 . '</p>') :
			'') .
	'
		' .
	(($t2 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
			('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t2 . '</p>') :
			'') .
	'
		<form method="post" action="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'" enctype="multipart/form-data"><div>
			
			' .
		'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div><ul class="editer-groupe article_accueil-form">
				' .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'id_article_accueil')) .
	'<li class="editer editer_id_article_accueil' .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
					<label for="id_article_accueil">' .
	_T('article_accueil:label_id_article_accueil') .
	'</label>
					' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('<span class="erreur_message">' . $t2 . '</span>') :
			'') .
	'
					' .
	vide($Pile['vars'][$_zzz=(string)'selecteur'] = 'inc-selecteur_accueil') .
	(($t2 = strval(interdire_scripts(((filtre_info_plugin_dist("polyhier", "est_actif")) ?' ' :''))))!=='' ?
			($t2 . (	' ' .
		vide($Pile['vars'][$_zzz=(string)'selecteur'] = concat(table_valeur($Pile["vars"], (string)'selecteur', null),'_poly')))) :
			'') .
	'
					' .
	recuperer_fond( (	'inclure/' .
		table_valeur($Pile["vars"], (string)'selecteur', null)) , array('id_rubrique' => @$Pile[0]['id_rubrique'] ,
	'id_article_accueil' => @$Pile[0]['id_article_accueil'] ,
	'_statuts' => @$Pile[0]['_statuts'] ,
	'where' => table_valeur(@$Pile[0], (string)'_where', null) ), array('compil'=>array('../plugins/auto/article_accueil/v1.2.2/formulaires/editer_article_accueil.html','html_2d675fa87288b32903652f980ef14c49','',26,$GLOBALS['spip_lang'])), _request('connect')) .
	'</li>
			</ul>
			
			<!--extra-->
			<p class="boutons">
				<span class="image_loading"></span>
				<input type="submit" class="btn submit" name="annuler" value="' .
	_T('public|spip|ecrire:bouton_annuler') .
	'" />
				<input type="submit" class="btn submit" value="' .
	_T('public|spip|ecrire:bouton_changer') .
	'" />
			</p>
		</div></form>
')) :
		'') .
'
</div>
<script type="text/javascript">// <![CDATA[
	$(document).ready(function(){
		$(".formulaire_editer_article_accueil .toggle_box_link").show(0);
		$(".formulaire_editer_article_accueil form").hide(0);
	});
 //]]></script>
');

	return analyse_resultat_skel('html_2d675fa87288b32903652f980ef14c49', $Cache, $page, '../plugins/auto/article_accueil/v1.2.2/formulaires/editer_article_accueil.html');
}
?>