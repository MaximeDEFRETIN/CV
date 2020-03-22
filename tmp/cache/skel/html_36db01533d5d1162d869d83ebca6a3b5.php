<?php

/*
 * Squelette : ../plugins/auto/escal_V4/formulaires/configurer_escal_articlepdf.html
 * Date :      Fri, 20 Dec 2019 11:26:32 GMT
 * Compile :   Thu, 27 Feb 2020 09:12:31 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/escal_V4/formulaires/configurer_escal_articlepdf.html
// Temps de compilation total: 0.553 ms
//

function html_36db01533d5d1162d869d83ebca6a3b5($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- Article PDF -->
    <div class="formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'">

    <h3 class="titrem">' .
interdire_scripts(filtre_balise_img_dist(chemin_image('configpdf.png'),'','cadre-icone')) .
_T('escal:articlepdf_plugin') .
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
	'</div><a class="spip_out" href="http://escal.ac-lyon.fr/spip/spip.php?article187&lang=fr" title="' .
_T('escal:documentation_voir') .
'"><strong>' .
_T('escal:documentation') .
'</strong></a>    
    
            <div class="explication">
           ' .
_T('escal:articlepdf_explication') .
'
            </div>
            <br />

    <ul>
            <li class="editer ' .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
            <div class="explication">
            ' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'rubpdf') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
_T('escal:articlepdf_afficher') .
'
                    ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>
                    ') :
		'') .
'<span class="choix droite">
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui" value="oui"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_oui">' .
_T('public|spip|ecrire:item_oui') .
'</label>
                            <input type="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non" value="non"
                            ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' /><label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_non">' .
_T('public|spip|ecrire:item_non') .
'</label>
                    </span>
            <div class="nettoyeur"></div>
            </div>
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

	return analyse_resultat_skel('html_36db01533d5d1162d869d83ebca6a3b5', $Cache, $page, '../plugins/auto/escal_V4/formulaires/configurer_escal_articlepdf.html');
}
?>