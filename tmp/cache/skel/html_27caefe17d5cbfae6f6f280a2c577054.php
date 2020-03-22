<?php

/*
 * Squelette : ../plugins/auto/info_spip/v0.11.1/formulaires/configurer_info_spip.html
 * Date :      Wed, 05 Feb 2020 17:19:10 GMT
 * Compile :   Mon, 16 Mar 2020 15:17:04 GMT
 * Boucles :   _module_info
 */ 

function BOUCLE_module_infohtml_27caefe17d5cbfae6f6f280a2c577054(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(lister_noisettes_info_spip('html'));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_module_info';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins/auto/info_spip/v0.11.1/formulaires/configurer_info_spip.html','html_27caefe17d5cbfae6f6f280a2c577054','_module_info',24,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
vide($Pile['vars'][$_zzz=(string)'nom'] = interdire_scripts(nommer_noisettes_info_spip(safehtml($Pile[$SP]['valeur'])))) .
'
					' .
vide($Pile['vars'][$_zzz=(string)'modules'] = array_merge(table_valeur($Pile["vars"], (string)'modules', null),array(interdire_scripts(safehtml($Pile[$SP]['valeur'])) => table_valeur($Pile["vars"], (string)'nom', null)))) .
'
				');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_module_info @ ../plugins/auto/info_spip/v0.11.1/formulaires/configurer_info_spip.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/info_spip/v0.11.1/formulaires/configurer_info_spip.html
// Temps de compilation total: 3.145 ms
//

function html_27caefe17d5cbfae6f6f280a2c577054($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'">

	<h3 class="titrem">' .
_T('info_spip:cfg_titre_parametrages') .
'</h3>

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
	'</div><fieldset>
			<h3 class="legend">
				' .
_T('info_spip:fiche_site_label') .
'
			</h3>
			<ul class="editer-groupe">
				' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'selection' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'type_site', null)) ,
	'nom' => 'type_site' ,
	'label' => _T('info_spip:type_site_label') ,
	'datas' => array('01local' => _T('info_spip:type_site_01local'), '02dev' => _T('info_spip:type_site_02dev'), '03inte' => _T('info_spip:type_site_03inte'), '04test' => _T('info_spip:type_site_04test'), '05rec' => _T('info_spip:type_site_05rec'), '06prep' => _T('info_spip:type_site_06prep'), '07prod' => _T('info_spip:type_site_07prod')) ,
	'defaut' => '07prod' ,
	'explication' => _T('info_spip:type_site_explication') ), array('compil'=>array('../plugins/auto/info_spip/v0.11.1/formulaires/configurer_info_spip.html','html_27caefe17d5cbfae6f6f280a2c577054','',17,$GLOBALS['spip_lang'])), _request('connect')) .
'

				' .
vide($Pile['vars'][$_zzz=(string)'modules'] = array()) .
'
				' .
BOUCLE_module_infohtml_27caefe17d5cbfae6f6f280a2c577054($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'checkbox' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'modules', null)) ,
	'nom' => 'modules' ,
	'label' => _T('info_spip:liste_modules_label') ,
	'explication' => _T('info_spip:liste_modules_explication') ,
	'datas' => table_valeur($Pile["vars"], (string)'modules', null) ), array('compil'=>array('../plugins/auto/info_spip/v0.11.1/formulaires/configurer_info_spip.html','html_27caefe17d5cbfae6f6f280a2c577054','',27,$GLOBALS['spip_lang'])), _request('connect')) .
'

				' .
vide($Pile['vars'][$_zzz=(string)'bo_url'] = interdire_scripts(table_valeur(filtre_explode_dist(eval('return '.'$_SERVER[\'HTTP_REFERER\']'.';'),'?'),'0'))) .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'bo_url', null)) ,
	'nom' => 'bo_url' ,
	'label' => _T('info_spip:bo_url_label') ,
	'size' => '255' ,
	'maxlength' => '255' ,
	'defaut' => table_valeur($Pile["vars"], (string)'bo_url', null) ), array('compil'=>array('../plugins/auto/info_spip/v0.11.1/formulaires/configurer_info_spip.html','html_27caefe17d5cbfae6f6f280a2c577054','',29,$GLOBALS['spip_lang'])), _request('connect')) .
'

			</ul>
		</fieldset>

		<fieldset>
			<h3 class="legend">
				' .
_T('info_spip:webservice_fieldset_label') .
'
			</h3>
			<ul class="editer-groupe">
				' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'actif', null)) ,
	'nom' => 'actif' ,
	'label' => _T('info_spip:actif_label') ,
	'datas' => array('oui' => _T('info_spip:oui'), 'non' => _T('info_spip:non')) ,
	'explication' => _T('info_spip:actif_explication') ), array('compil'=>array('../plugins/auto/info_spip/v0.11.1/formulaires/configurer_info_spip.html','html_27caefe17d5cbfae6f6f280a2c577054','',36,$GLOBALS['spip_lang'])), _request('connect')) .
'

				' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'cle', null)) ,
	'nom' => 'cle' ,
	'label' => _T('info_spip:cle_label') ,
	'explication' => _T('info_spip:cle_explication') ), array('compil'=>array('../plugins/auto/info_spip/v0.11.1/formulaires/configurer_info_spip.html','html_27caefe17d5cbfae6f6f280a2c577054','',28,$GLOBALS['spip_lang'])), _request('connect')) .
'

				' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => _T('info_spip:uuid_generer_label') ,
	'nom' => 'uuid' ,
	'label' => '' ,
	'type' => 'button' ), array('compil'=>array('../plugins/auto/info_spip/v0.11.1/formulaires/configurer_info_spip.html','html_27caefe17d5cbfae6f6f280a2c577054','',28,$GLOBALS['spip_lang'])), _request('connect')) .
'

			</ul>
		</fieldset>
		<input type="hidden" name="_meta_casier" value="info_spip" />
		<p class="boutons"><span class="image_loading">&nbsp;</span><input type="submit" class="submit" value="' .
_T('public|spip|ecrire:bouton_enregistrer') .
'" /></p>
	</div>
	</form>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		function generateUUID() {
			var d = new Date().getTime();
			var uuid = \'xxxxxxxx-xxxx-yxxx-yxxx-xxxxxxxxxxxx\'.replace(/[xy]/g, function(c) {
				var r = (d + Math.random()*16)%16 | 0;
				d = Math.floor(d/16);
				return (c==\'x\' ? r : (r&0x7|0x8)).toString(16);
			});
			return uuid;
		};

		$("#champ_uuid").click(function(event) {
			event.preventDefault();
			$(\'#champ_cle\').val(generateUUID());
		});
	});
</script>');

	return analyse_resultat_skel('html_27caefe17d5cbfae6f6f280a2c577054', $Cache, $page, '../plugins/auto/info_spip/v0.11.1/formulaires/configurer_info_spip.html');
}
?>