<?php

/*
 * Squelette : ../plugins/auto/escal_V4/formulaires/configurer_escal_layout.html
 * Date :      Fri, 03 Jan 2020 18:04:18 GMT
 * Compile :   Thu, 27 Feb 2020 09:12:21 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/escal_V4/formulaires/configurer_escal_layout.html
// Temps de compilation total: 1.771 ms
//

function html_aaa762fdd2f81258dda2ed24c83e47c4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- Noisettes  et layout -->
    <div class="formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'">

    <h3 class="titrem">' .
interdire_scripts(filtre_balise_img_dist(chemin_image('configlayout.gif'),'','cadre-icone')) .
_T('escal:layout') .
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
	'</div><!-------------------------------------------------------------------------------->
<!-- Choisir la taille de police des caracteres  --------------------------------->
<!--------------------------------------------------------------------------------> 
            <div class="explication">
            ' .
_T('escal:taille_police_explication') .
'
            </div>

    <ul>
            ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'layout') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer ' .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
                    <div class="explication">
                    ' .
_T('escal:taille_police') .
'<br />
                    ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'taillepolice') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                            ') :
		'') .
'<span class="choix">
                                     <input type="texte" style="width:40px" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)):'75')) .
'"  />%
                            </span> 
            </li>                              
	  </ul>
<!-------------------------------------------------------------------------------->
<!-- Choisir le layout ----------------------------------------------------------->
<!-------------------------------------------------------------------------------->
            <div class="explication">
            ' .
_T('escal:layout_explication') .
'
            </div>

    <ul>
            ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'layout') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer ' .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
                    <div class="explication">
                    ' .
_T('escal:layout_fixe') .
'<br />
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                    ') :
		'') .
'<span class="choix">
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PMP" value="PMP"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'PMP')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' ' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label  for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PMP"><img src="' .
find_in_path('images/layoutPMP.gif') .
'" alt="" /></label>

                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_MPP" value="MPP"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'MPP')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_MPP"><img src="' .
find_in_path('images/layoutMPP.gif') .
'" alt="" /></label>

                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PPM" value="PPM"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'PPM')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PPM"><img src="' .
find_in_path('images/layoutPPM.gif') .
'" alt="" /></label>
                            <br />
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_MP" value="MP"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'MP')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_MP"><img src="' .
find_in_path('images/layoutMP.gif') .
'" alt="" /></label>

                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PM" value="PM"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'PM')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PM"><img src="' .
find_in_path('images/layoutPM.gif') .
'" alt="" /></label>
                    <br /><br />
                    ' .
_T('escal:layout_fluide') .
'<br />
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PMPfluide" value="PMPfluide"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'PMPfluide')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label  for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PMPfluide"><img src="' .
find_in_path('images/layoutPMP.gif') .
'" alt="" /></label>

                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_MPPfluide" value="MPPfluide"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'MPPfluide')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label  for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_MPPfluide"><img src="' .
find_in_path('images/layoutMPP.gif') .
'" alt="" /></label>

                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PPMfluide" value="PPMfluide"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'PPMfluide')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label  for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PPMfluide"><img src="' .
find_in_path('images/layoutPPM.gif') .
'" alt="" /></label>
                            <br />
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_MPfluide" value="MPfluide"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'MPfluide')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_MPfluide"><img src="' .
find_in_path('images/layoutMP.gif') .
'" alt="" /></label>

                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PMfluide" value="PMfluide"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'PMfluide')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PMfluide"><img src="' .
find_in_path('images/layoutPM.gif') .
'" alt="" /></label>
                    <br /><br />
                   ' .
_T('escal:layout_mixte') .
'<br />
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PMPmixte" value="PMPmixte"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'PMPmixte')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label  for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PMPmixte"><img src="' .
find_in_path('images/layoutPMP.gif') .
'" alt="" /></label>

                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_MPPmixte" value="MPPmixte"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'MPPmixte')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label  for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_MPPmixte"><img src="' .
find_in_path('images/layoutMPP.gif') .
'" alt="" /></label>

                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PPMmixte" value="PPMmixte"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'PPMmixte')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label  for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_PPMmixte"><img src="' .
find_in_path('images/layoutPPM.gif') .
'" alt="" /></label>
                      <hr />
                      ' .
_T('escal:layout_fixe_si') .
'<br />
                      ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'largeurlayoutbase') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:layout_fixe_largeur') .
'
                            ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                            ') :
		'') .
'<span class="choix">
                                     <input type="texte" style="width:50px" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)):'950')) .
'"  />px
                            </span>
                      <br />                       
                      ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'colonnelayoutbase') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:layout_largeur_colonnes') .
'
                            ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                            ') :
		'') .
'<span class="choix">
                                     <input type="texte" style="width:50px" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)):'200')) .
'"  />px
                            </span>
                      <br /><br />
                      ' .
_T('escal:layout_fluide_si') .
' <br />                          
                      ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'largeurmaxlayoutfluide') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:layout_fluide_largeur') .
'
                            ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                            ') :
		'') .
'<span class="choix">
                                     <input type="texte" style="width:50px" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)):'2000')) .
'"  />px
                            </span>                            
                      <br /><br />
                      ' .
_T('escal:layout_mixte_si') .
' <br />                          
                      ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'colonnelayoutmixte') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:layout_largeur_colonnes') .
'
                            ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                            ') :
		'') .
'<span class="choix">
                                     <input type="texte" style="width:50px" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)):'200')) .
'"  />px
                            </span>
             
                    </span></div>
             </li>

    </ul>


<!-------------------------------------------------------------------------------->
<!-- Stockage des donnees  ------------------------------------------------------->
<!-------------------------------------------------------------------------------->

    <input type="hidden" name="_meta_casier" value="escal/config" />
    <br /><br />
	<p class="boutons"><span class=\'image_loading\'>&nbsp;</span>
  <input type="submit" name="enregistrer" class="submit" value="' .
_T('public|spip|ecrire:bouton_valider') .
'" />
	</p>
  </div>
    </form>
    </div>
');

	return analyse_resultat_skel('html_aaa762fdd2f81258dda2ed24c83e47c4', $Cache, $page, '../plugins/auto/escal_V4/formulaires/configurer_escal_layout.html');
}
?>