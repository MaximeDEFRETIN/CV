<?php

/*
 * Squelette : ../plugins/auto/agenda/v3.39.4/prive/style_prive_plugin_agenda.html
 * Date :      Mon, 10 Feb 2020 11:04:46 GMT
 * Compile :   Thu, 27 Feb 2020 09:06:49 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/agenda/v3.39.4/prive/style_prive_plugin_agenda.html
// Temps de compilation total: 0.576 ms
//

function html_f5c7ffcf4b3e8e07ba5c345952f38239($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>/*.pagination a.creer {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';}*/
/* vevent */
/*
li.item div.vevent h3 {margin:0;font-size:1.1em;}
li.item div.vevent p {margin:2px 0 0;}
li.item div.vevent p.date {font-size: 0.98em; }
ul.evenements li.item.court p,ul.evenements li.item.court .actions { display: none; }
li.item div.vevent p.category {font-size:0.9em;color:#999;}
*/
/* liste des evenements */
/*
.plier_deplier { float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
'; font-size: 0.9em; }
.liste-items.evenements li.item { padding-left: 130px; }
.liste-items.evenements li.court { border-width: 1px; }
.liste-items.evenements li.item .jour { width: 120px; margin-left: -130px; float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
'; display: inline; position: relative; overflow: hidden; white-space: nowrap; font-size: 98%; }

li.item .repetitions {margin-top:0.5em;font-size:0.9em;}
li.court .repetitions {display: none;}
li.item .repetitions ul,
li.item .repetitions li {display:inline;margin:0;padding:0;}
*/

.liste-items.evenements .actions {text-align:right;font-size:0.9em;margin:5px 0 0;}
.liste-objets.evenements p.date {margin-bottom: 0;}
.liste-objets.evenements .date.first-of {color:#000;}
.liste-objets.evenements .date.same-as {color:#ccc;}
.liste-objets.evenements .on td,.liste-objets.evenements .on th {background-color: ' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true),'0.75'))))!=='' ?
		('#' . $t1) :
		'') .
'}
.liste-objets.evenements tr.repetition {filter:alpha(opacity=70); -moz-opacity:0.7; opacity: 0.7;}
.liste-objets.evenements .repetition .id a {display: block;}
/* sur la fiche rubriques */
.rubrique .agenda-statut img.statut {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':5px;}
.rubrique .agenda-statut .bd {display: none;}

/* sur la fiche article */
.fiche_objet #agenda {position: relative;}
.fiche_objet #agenda .creer_evenement {position: absolute;top:-1px;right: 5px;}
.fiche_objet #agenda .onglets_simple {margin-bottom: 0}
.fiche_objet #agenda .onglets_simple+.liste-objets.evenements {margin-top: 0}
.fiche_objet #agenda .onglets_simple+.liste-objets.evenements+.creer_evenement {top:2em;}

/* sur la fiche evenement */
.evenement .fiche_objet .formulaire_dater {display: none;}
.evenement #wysiwyg .contenu_lieu .label {display: inline;font-weight: bold;}
.evenement #wysiwyg .contenu_lieu .lieu {display: inline;}
.evenement #wysiwyg .contenu_adresse .label {display: block;}
.evenement .fiche_objet .contenu_dates {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':20px;background:url(' .
interdire_scripts(chemin_image('calendrier-16.png')) .
') no-repeat center ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';}
.evenement #wysiwyg .contenu_places {margin-top: 1em;}
.evenement #wysiwyg .contenu_places .label {display: inline;font-weight: bold;}
.evenement #wysiwyg .contenu_places .places {display: inline;}
.evenement .fiche_objet .contenu_repetitions {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':20px;}
.evenement #wysiwyg .contenu_repetitions .label, .evenement #wysiwyg .contenu_repetition_de .label {display: inline;color:inherit;}
.evenement .fiche_objet .contenu_repetitions .repetitions {display: inline;color:#999;}

/* edition d\'un evenement */
.formulaire_editer_evenement .editer_parent {}
.formulaire_editer_evenement .editer_parent label {margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':0;display:block;float:left;padding:2px 0;width:130px;}

.formulaire_editer_evenement .editer_horaire {padding-top:0;margin-top:0;}
.formulaire_editer_evenement .editer_horaire label {margin:0;display:inline;width:auto;float:none;}
.formulaire_editer_evenement li.editer_date,
.formulaire_editer_evenement li.editer_date li {clear:left;}
.formulaire_editer_evenement li.editer_date_debut_fin label { /*vertical-align: top;*/ }

.formulaire_editer_evenement input.date {width:6.5em !important;padding-right:20px;-moz-box-sizing: content-box;-webkit-box-sizing: content-box;-ms-box-sizing: content-box;box-sizing: content-box;}
.formulaire_editer_evenement span.afficher_horaire label {float:none;display:inline;padding:0;margin:0;}
.formulaire_editer_evenement input.heure {width:4.5em !important;}

.formulaire_editer_evenement li.editer_date label.heure {display:none;}
.formulaire_editer_evenement li.editer_date label {display:inline;float:none;margin:0;}

.formulaire_editer_evenement .editer_inscription .choix {display:block;}
.formulaire_editer_evenement .editer_inscription .choix input.text {width:50px;margin-left:1em;/*vertical-align:top;*/}

/* le picker */

/* begin: jQuery UI Datepicker moving pixels fix */
	table.ui-datepicker-calendar {border-collapse: separate;}
	.ui-datepicker-calendar td {border: 1px solid transparent;}
/* end: jQuery UI Datepicker moving pixels fix */
/* begin: jQuery UI Datepicker emphasis on selected dates */
.ui-datepicker .ui-datepicker-calendar .ui-state-highlight a {
	background: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
'; /* a color that fits the widget theme */
	color: white; /* a color that is readeable with the color above */
}
/* end: jQuery UI Datepicker emphasis on selected dates */

#repetitions_picker {}
.editer_repetitions textarea {width:100%;height:4em;color:#999;border:1px solid #999;}

/* Calendrier */
ul.menu li .pagination a, ul.menu li .pagination strong.on { display:inline; }
');

	return analyse_resultat_skel('html_f5c7ffcf4b3e8e07ba5c345952f38239', $Cache, $page, '../plugins/auto/agenda/v3.39.4/prive/style_prive_plugin_agenda.html');
}
?>