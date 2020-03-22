<?php

/*
 * Squelette : ../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-rv.html
 * Date :      Mon, 10 Feb 2020 16:50:07 GMT
 * Compile :   Thu, 27 Feb 2020 08:59:17 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-rv.html
// Temps de compilation total: 0.804 ms
//

function html_ae5a634e1f4790ebf2ac174846470702($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div id="loading" style="position:absolute;top:20px;left:350px;padding:5px 30px;display:none;border:1px solid #ddd;background:#eee;z-index:100;">' .
_T('organiseur:loading') .
'</div>
<div id="calendrier"></div>
<link rel=\'stylesheet\' type=\'text/css\' href=\'' .
find_in_path('lib/fullcalendar/fullcalendar.css') .
'\' />
<link rel=\'stylesheet\' type=\'text/css\' href=\'' .
find_in_path('calendrier.css') .
'\' />
<script type=\'text/javascript\' src=\'' .
find_in_path('lib/fullcalendar/fullcalendar.js') .
'\'></script>
<script type="text/javascript">
jQuery(function($) {

	// page is now ready, initialize the calendar...

	$(\'#calendrier\').fullCalendar({
			editable: false,
			events: "' .
invalideur_session($Cache, parametre_url(generer_action_auteur('quete_calendrier_prive','calendrier'),'quoi','rv','&')) .
'",
			header: {
				left: \'prev,next today\',
				center: \'title\',
				right: \'month,agendaWeek,agendaDay\'
			},
			firstDay: 1,
			monthNames:[\'' .
texte_script(_T('public|spip|ecrire:date_mois_1')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_2')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_3')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_4')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_5')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_6')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_7')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_8')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_9')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_10')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_11')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_12')) .
'\'],
			monthNamesShort:[\'' .
texte_script(_T('public|spip|ecrire:date_mois_1_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_2_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_3_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_4_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_5_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_6_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_7_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_8_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_9_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_10_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_11_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_12_abbr')) .
'\'],
			dayNames:[\'' .
texte_script(_T('public|spip|ecrire:date_jour_1')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_2')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_3')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_4')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_5')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_6')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_7')) .
'\'],
			dayNamesShort:[\'' .
texte_script(_T('public|spip|ecrire:date_jour_1_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_2_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_3_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_4_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_5_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_6_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_7_abbr')) .
'\'],
			buttonText: {
					today: \'' .
texte_script(_T('public|spip|ecrire:date_aujourdhui')) .
'\',
					month: \'' .
texte_script(_T('organiseur:cal_par_mois')) .
'\',
					day: \'' .
texte_script(_T('organiseur:cal_par_jour')) .
'\',
					week: \'' .
texte_script(_T('organiseur:cal_par_semaine')) .
'\'
			},
			weekMode : \'liquid\',
			loading: function(bool) {
				if (bool) $(\'#loading\').show();
				else $(\'#loading\').hide();
			},
			timeFormat: {
				// for agendaWeek and agendaDay
				agenda: "H\'h\'mm{ - H\'h\'mm}", // 5h00 - 6h30
				// for all other views
				\'\': "H\'h\'(mm)" // 19h
			},
			axisFormat: "H\'h\'(mm)",
			allDayText:\'' .
texte_script(_T('organiseur:cal_jour_entier')) .
'\',
			columnFormat: {
				month: \'ddd\',    // Mon
				week: \'ddd d/M\', // Mon 9/7
				day: \'dddd d/M\'  // Monday 9/7
			},
			titleFormat: {
				month: \'MMMM yyyy\',                             // September 2009
				week: "d [ MMM] [ yyyy]{ \'&#8212;\' d MMM yyyy}", // Sep 7 - 13 2009
				day: \'dddd d MMM yyyy\'                  // Tuesday, Sep 8, 2009
			},
			dayClick: function(date, allDay, jsEvent, view) {
				if(view.name==\'month\'){
					$(\'.fc-button-agendaWeek\').click();
					$(\'#calendrier\').fullCalendar( \'gotoDate\', date );
				}
				else
					if(view.name==\'agendaWeek\'){
						$(\'.fc-button-agendaDay\').click();
						$(\'#calendrier\').fullCalendar( \'gotoDate\', date );
					}
			},
			isRTL : ' .
((lang_dir(@$Pile[0]['lang'], 'ltr','rtl') == 'rtl') ? 'true':'false') .
'
	})

});
</script>
');

	return analyse_resultat_skel('html_ae5a634e1f4790ebf2ac174846470702', $Cache, $page, '../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-rv.html');
}
?>