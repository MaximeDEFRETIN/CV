<?php

/*
 * Squelette : ../plugins-dist/organiseur/prive/squelettes/contenu/calendrier.html
 * Date :      Mon, 10 Feb 2020 16:50:07 GMT
 * Compile :   Thu, 27 Feb 2020 08:58:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/organiseur/prive/squelettes/contenu/calendrier.html
// Temps de compilation total: 0.766 ms
//

function html_cdddf0e7f7e743524ffe007fd1125347($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div id="calendrier-loading" style="position:absolute;top:20px;left:350px;padding:5px 30px;display:none;border:1px solid #ddd;background:#eee;z-index:100;">' .
_T('organiseur:loading') .
'</div>
<div id="calendrier"></div>
<link rel=\'stylesheet\' type=\'text/css\' href=\'' .
find_in_path('lib/fullcalendar/fullcalendar.min.css') .
'\' />
<link rel=\'stylesheet\' type=\'text/css\' href=\'' .
find_in_path('calendrier.css') .
'\' />
<script type=\'text/javascript\' src=\'' .
find_in_path('lib/moment/moment-with-locales.min.js') .
'\'></script>
<script type=\'text/javascript\' src=\'' .
find_in_path('lib/fullcalendar/fullcalendar.min.js') .
'\'></script>
<script type=\'text/javascript\' src=\'' .
find_in_path('lib/fullcalendar/locale-all.js') .
'\'></script>
<script type="text/javascript">
jQuery(function($) {

	// page is now ready, initialize the calendar...
	$(\'#calendrier\').fullCalendar({
		locale: \'' .
strtolower(spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])) .
'\',
		editable: false,
		navLinks: true,
		eventLimit: true,
		events: "' .
invalideur_session($Cache, replace(generer_action_auteur('quete_calendrier_prive','calendrier'),'&amp;','&')) .
'",
		header: {
			left: ' .
((lang_dir(@$Pile[0]['lang'], 'ltr','rtl') == 'ltr') ? '\'prevYear,prev,next,nextYear today\'':'\'listMonth,month,agendaWeek,agendaDay\'') .
',
			center: \'title\',
			right: ' .
((lang_dir(@$Pile[0]['lang'], 'ltr','rtl') == 'ltr') ? '\'agendaDay,agendaWeek,month,listMonth\'':'\'today nextYear,next,prev,prevYear\'') .
'
		},
		fixedWeekCount: false,
		allDayHtml:\'' .
texte_script(_T('organiseur:cal_jour_entier')) .
'\',
		loading: function(bool) {
			if (bool) $(\'#calendrier-loading\').show();
			else $(\'#calendrier-loading\').hide();
		}
	});
});
</script>
');

	return analyse_resultat_skel('html_cdddf0e7f7e743524ffe007fd1125347', $Cache, $page, '../plugins-dist/organiseur/prive/squelettes/contenu/calendrier.html');
}
?>