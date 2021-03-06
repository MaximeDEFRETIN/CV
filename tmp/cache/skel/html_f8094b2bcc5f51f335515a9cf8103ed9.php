<?php

/*
 * Squelette : ../plugins-dist/statistiques/prive/stats/visites.html
 * Date :      Mon, 10 Feb 2020 16:50:18 GMT
 * Compile :   Fri, 28 Feb 2020 14:11:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/statistiques/prive/stats/visites.html
// Temps de compilation total: 0.286 ms
//

function html_f8094b2bcc5f51f335515a9cf8103ed9($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!--[if IE]>' .
(($t1 = strval(find_in_path('javascript/excanvas.js')))!=='' ?
		('<script type="text/javascript" src="' . $t1 . '"></script>') :
		'') .
'<![endif]-->
' .
(($t1 = strval(find_in_path('javascript/jquery.flot.js')))!=='' ?
		('<script type="text/javascript" src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(find_in_path('javascript/jquery.flot.selection.js')))!=='' ?
		('<script type="text/javascript" src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(find_in_path('javascript/jquery.flot.time.js')))!=='' ?
		('<script type="text/javascript" src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(find_in_path('javascript/jquery.tflot.js')))!=='' ?
		('<script type="text/javascript" src="' . $t1 . '"></script>') :
		'') .
'

<script type="text/javascript">
	
function trace_stats_table(table, classes, options) {
	$table = $(table);
	if ($table.is(\':hidden\')) {
		return true; // pas a faire ou deja fait.
	}

	// copier le titre des tableaux
	titre = $table.find("caption").text();
	$table.siblings(\'.pagination\').before("<h3 class=\'caption\'>" + titre + "</h3>");
	$table

		.wrap("<div class=\'" + classes + "\'></div>");

	// mettre les visites avec un fond colore pour le graphique
	$table.find("thead th:eq(1)").data({fill: true, serie: \'bar\', color: \'#FFD845\',lineWidth:0});
	$table.find("thead th:eq(2)").data({serie: \'line\', color: \'#7FC4FF\'});
	$table.find("thead th:eq(3)").data({fill: true, serie: \'bar\', color: \'#A9DD3A\',lineWidth:0});
	
	// mettre les previsions en premier
	// (pour que les autres graph passent par dessus)
	$table.find(\'thead tr th:first-child\').after(function(){
		return $(this).parent().find(\'th:eq(3)\').detach();
	});
	$table.find(\'tbody tr th:first-child\').after(function(){
		return $(this).parent().find(\'td:last-child\').detach();
	});

	params = {
		legendeExterne:true,
		legendeActions:true,
		width:($(\'.large #page\').length)?\'755px\':\'560px\', // 795px, 600px (sans le tableau de resume) ...
		height:\'250px\',
		modeDate:true,
		zoom:true,
		parse:{
			axeOnTitle:true,
			defaultSerie:{
				bars:{show:true},
				lines:{show:true},
				points:{show:false}
			}
		},
		flot:{
			grid:{
				axismargin:10
			},
			xaxis:{
				labelWidth:45,
				monthNames: [
					\'' .
nom_mois('2000-01-01') .
'\',
					\'' .
nom_mois('2000-02-01') .
'\',
					\'' .
nom_mois('2000-03-01') .
'\',
					\'' .
nom_mois('2000-04-01') .
'\',
					\'' .
nom_mois('2000-05-01') .
'\',
					\'' .
nom_mois('2000-06-01') .
'\',
					\'' .
nom_mois('2000-07-01') .
'\',
					\'' .
nom_mois('2000-08-01') .
'\',
					\'' .
nom_mois('2000-09-01') .
'\',
					\'' .
nom_mois('2000-10-01') .
'\',
					\'' .
nom_mois('2000-11-01') .
'\',
					\'' .
nom_mois('2000-12-01') .
'\'
				]
			},
			yaxis:{
				position: "right",
				tickDecimals: 1,
				tickFormatter: function nbFormatter(val, axis) {
					if (val >= 1000000){
						var fval = (val / 1000000).toFixed(axis.tickDecimals) ;
						return fval.replace(/\\.0$/,"") + " M";
					}
					else{
						if (val >= 100000)
							return (val / 1000).toFixed(axis.tickDecimals).replace(/\\.0$/,"") + " k";
						else{
							var fval = val.toFixed(axis.tickDecimals).replace(/\\.0$/,"") ;
							return fval.replace(/(\\d{3})$/," $1") ;
						}
					}
				}
			}
		},
		infobulle:{show:true}
	}

	$table.tFlot($.extend(true, {}, params, options));	
}

function trace_stats(){
	trace_stats_table(
		"#visites_quotidiennes",
		"statistiques_visites_quotidiennes statistiques_visites",
		{
			grille:{weekend:true},
			flot:{
				xaxis:{
					timeformat:"%d %b",
					minTickSize: [1, "day"]
				},
				bars:{barWidth:24 * 60 * 60 * 1000}
			}
		});
		
	trace_stats_table(
		"#visites_mensuelles",
		"statistiques_visites_mensuelles statistiques_visites", {
			grille:{years:true},
			flot:{
				xaxis:{
					timeformat:"%b %y",
					minTickSize: [1, "month"]
				},
				bars:{barWidth:30.4 * 24 * 60 * 60 * 1000 /* nb de jours... approximatif */}
			}
	});
	
}
jQuery(function($) {
	trace_stats();
	onAjaxLoad(trace_stats);
});
</script>
');

	return analyse_resultat_skel('html_f8094b2bcc5f51f335515a9cf8103ed9', $Cache, $page, '../plugins-dist/statistiques/prive/stats/visites.html');
}
?>