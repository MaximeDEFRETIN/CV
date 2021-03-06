<?php

/*
 * Squelette : ../plugins-dist/plan/prive/squelettes/inclure/plan.html
 * Date :      Mon, 10 Feb 2020 16:50:21 GMT
 * Compile :   Thu, 27 Feb 2020 09:07:26 GMT
 * Boucles :   _objets
 */ 

function BOUCLE_objetshtml_6f7337b9f11a828fe0b72dce77fce13f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(plan_lister_objets_rubrique(''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_objets';
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
		array('../plugins-dist/plan/prive/squelettes/inclure/plan.html','html_6f7337b9f11a828fe0b72dce77fce13f','_objets',25,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t1 = (
'
			{
				icon: "' .
interdire_scripts(objet_type(safehtml($Pile[$SP]['valeur']))) .
'",
				type: "' .
interdire_scripts(objet_type(safehtml($Pile[$SP]['valeur']))) .
'"
			}
			');
		$t0 .= ((strlen($t1) && strlen($t0)) ? ', ' : '') . $t1;
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_objets @ ../plugins-dist/plan/prive/squelettes/inclure/plan.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/plan/prive/squelettes/inclure/plan.html
// Temps de compilation total: 0.314 ms
//

function html_6f7337b9f11a828fe0b72dce77fce13f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<script type="text/javascript">
jQuery(function($){
	$(\'#racine\').spiptree({
		drag: ' .
invalideur_session($Cache, (((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer')?" ":"") ? 'true':'false')) .
',
		statut: "' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'statut', null),true)) .
'",
		textes: {
			deplacement: {
				confirmation: ' .
json_encode(_T('plan:confirmer_deplacement')) .
',
				reussi: ' .
json_encode(_T('plan:deplacement_reussi')) .
',
				reussis: ' .
json_encode(_T('plan:deplacements_reussis')) .
',
				echec: ' .
json_encode(_T('plan:deplacement_en_echec')) .
',
				echecs: ' .
json_encode(_T('plan:deplacements_en_echec')) .
',
				vide: ' .
json_encode(_T('plan:erreur_aucun_identifiant')) .
',
				suggerer_deplier: ' .
json_encode(_T('plan:suggerer_deplier')) .
'
			}
		},
		urls: {
			plan: "' .
generer_url_action('plan','','1') .
'",
			deplacer: "' .
generer_url_action('deplacer_objets','','1') .
'"
		},
		default: {
			icon: "rubrique"
		},
		objets: [
			' .
BOUCLE_objetshtml_6f7337b9f11a828fe0b72dce77fce13f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		]
	});
});
</script>

<div id="racine">
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/plan-rubriques') . ', array(\'id_parent\' => ' . argumenter_squelette('0') . ',
	\'statut\' => ' . argumenter_squelette(@$Pile[0]['statut']) . ',
	\'objet\' => ' . argumenter_squelette(@$Pile[0]['objet']) . ',
	\'lister\' => ' . argumenter_squelette(@$Pile[0]['lister']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins-dist/plan/prive/squelettes/inclure/plan.html\',\'html_6f7337b9f11a828fe0b72dce77fce13f\',\'\',37,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div>
');

	return analyse_resultat_skel('html_6f7337b9f11a828fe0b72dce77fce13f', $Cache, $page, '../plugins-dist/plan/prive/squelettes/inclure/plan.html');
}
?>