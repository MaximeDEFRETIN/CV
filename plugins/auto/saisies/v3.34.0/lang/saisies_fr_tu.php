<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de https://trad.spip.net/tradlang_module/saisies?lang_cible=fr_tu
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'afficher' => 'Afficher',

	// B
	'bouton_parcourir_docs_article' => 'Parcourir l’article',
	'bouton_parcourir_docs_breve' => 'Parcourir la brève',
	'bouton_parcourir_docs_rubrique' => 'Parcourir la rubrique',
	'bouton_parcourir_mediatheque' => 'Parcourir la médiathèque',

	// C
	'construire_action_annuler' => 'Annuler',
	'construire_action_configurer' => 'Configurer',
	'construire_action_deplacer' => 'Déplacer',
	'construire_action_dupliquer' => 'Dupliquer',
	'construire_action_dupliquer_copie' => '(copie)',
	'construire_action_supprimer' => 'Supprimer',
	'construire_ajouter_champ' => 'Ajouter un champ',
	'construire_ajouter_groupe' => 'Ajouter un groupe',
	'construire_attention_enregistrer' => 'N’oublie pas d’enregistrer tes modifications !',
	'construire_attention_modifie' => 'Le formulaire ci-dessous est différent du formulaire initial. Tu as la possibilité de le réinitialiser à son état avant tes modifications.',
	'construire_attention_supprime' => 'Tes modifications comportent des suppressions de champs. Confirme l’enregistrement de cette nouvelle version du formulaire.',
	'construire_aucun_champs' => 'Il n’y a pour l’instant aucun champ dans ce formulaire.',
	'construire_configurer_globales_label' => 'Configurer les options globales',
	'construire_confirmer_supprimer_champ' => 'Veux-tu vraiment supprimer ce champ ?',
	'construire_info_nb_champs_masques' => '@nb@ champ(s) masqué(s) le temps de configurer le groupe.',
	'construire_position_explication' => 'Indique devant quel autre champ sera placé celui-ci.',
	'construire_position_fin_formulaire' => 'À la fin du formulaire',
	'construire_position_fin_groupe' => 'À la fin du groupe @groupe@',
	'construire_position_label' => 'Position du champ',
	'construire_reinitialiser' => 'Réinitialiser le formulaire',
	'construire_reinitialiser_confirmer' => 'Tu vas perdre toutes tes modifications. Es-tu sûr de vouloir revenir au formulaire initial ?',
	'construire_verifications_aucune' => 'Aucune',
	'construire_verifications_label' => 'Type de vérification à effectuer',

	// D
	'data_cols_label' => 'Réponses possibles (en colonne)',
	'data_rows_label' => 'Questions (en ligne)',

	// E
	'erreur_generique' => 'Il y a des erreurs dans les champs ci-dessous, vérifie tes saisies',
	'erreur_option_nom_unique' => 'Ce nom est déjà utilisé par un autre champ et il doit être unique dans ce formulaire.',
	'erreur_syntaxe_afficher_si' => 'Syntaxe incorrecte du test',
	'erreur_valeur_inacceptable' => 'Valeur postée non acceptable.',

	// I
	'info_configurer_saisies' => 'Page de test des Saisies',

	// L
	'label_annee' => 'Année',
	'label_jour' => 'Jour',
	'label_mois' => 'Mois',

	// M
	'masquer' => 'Masquer',

	// O
	'option_aff_art_interface_explication' => 'Afficher uniquement les articles de la langue de l’utilisateur',
	'option_aff_art_interface_label' => 'Affichage multilingue',
	'option_aff_langue_explication' => 'Affiche la langue de l’article ou rubrique sélectionné devant le titre',
	'option_aff_langue_label' => 'Afficher la langue',
	'option_aff_rub_interface_explication' => 'Afficher uniquement les rubriques de la langue de l’utilisateur',
	'option_aff_rub_interface_label' => 'Affichage multilingue',
	'option_afficher_si_explication' => 'Indique les conditions pour afficher le champ en fonction de la valeur des autres champs. L’identifiant des autres champs doit être mis entre <code>@</code>. <br />Exemple <code>@selection_1@=="Toto"</code> conditionne l’affichage du champ à ce que le champ <code>selection_1</code> ait pour valeur <code>Toto</code>. <br />
Il est possible d’utiliser les opérateurs booléens <code>||</code> (ou) et  <code>&&</code> (et). <br />
Tu trouveras la <a href="https://contrib.spip.net/5080" target="_blank">documentation complète de la syntaxe sur contrib.spip</a>.',
	'option_afficher_si_label' => 'Affichage conditionnel',
	'option_afficher_si_remplissage_uniquement_explication' => 'En cochant cette case, l’affichage conditionnel s’appliquera uniquement lors du remplissage du formulaire, pas lors de l’affichage des résultats.',
	'option_afficher_si_remplissage_uniquement_label' => 'Uniquement lors du remplissage',
	'option_afficher_si_remplissage_uniquement_label_case' => 'Masquer les saisies uniquement lors du remplissage',
	'option_attention_explication' => 'Un message plus important que l’explication.',
	'option_attention_label' => 'Avertissement',
	'option_attribut_title_label' => 'Mettre un attribut title dans le label, contenant la valeur du champ. À utiliser avec modération.',
	'option_autocomplete_defaut' => 'Laisser par défaut',
	'option_autocomplete_explication' => 'Au chargement de la page, ton navigateur peut pré-remplir le champ en fonction de son historique',
	'option_autocomplete_label' => 'Pré-remplissage du champ',
	'option_autocomplete_off' => 'Désactiver',
	'option_autocomplete_on' => 'Activer',
	'option_cacher_option_intro_label' => 'Cacher le premier choix vide',
	'option_case_valeur_non_explication' => 'Valeur postée si la case n’est pas cochée. Attention, il s’agit d’une valeur technique et non d’une valeur affichée.',
	'option_case_valeur_oui_explication' => 'Valeur postée si la case est cochée. Attention, il s’agit d’une valeur technique et non d’une valeur affichée.',
	'option_choix_alternatif_label' => 'Permettre de proposer un choix alternatif',
	'option_choix_alternatif_label_defaut' => 'Autre choix',
	'option_choix_alternatif_label_label' => 'Label de ce choix alternatif',
	'option_choix_destinataires_explication' => 'Un ou plusieurs auteurs parmis lesquels l’utilisateur pourra faire son choix. Si rien n’est sélectionné, c’est l’auteur qui a installé le site qui sera choisi.',
	'option_choix_destinataires_label' => 'Destinataires possibles',
	'option_class_label' => 'Classes CSS supplémentaires',
	'option_cols_explication' => 'Largeur du bloc en nombre de caractères. Cette option n’est pas toujours appliquée car les styles CSS de ton site peuvent l’annuler.',
	'option_cols_label' => 'Largeur',
	'option_conteneur_class_label' => 'Classes CSS supplémentaires sur le conteneur',
	'option_datas_explication' => 'Tu dois indiquer un choix par ligne sous la forme "cle|Label du choix"',
	'option_datas_grille_explication' => 'Tu dois indiquer un choix par ligne sous la forme "cle|Label du choix" ou bien "cle|Label à gauche|Label à droite"',
	'option_datas_label' => 'Liste des choix possibles',
	'option_datas_sous_groupe_explication' => 'Tu dois indiquez un choix par ligne sous la forme "cle|Label" du choix. <br />Tu peux indiquer le début d’un sous-groupe sous la forme "*Titre du sous-groupe". Pour finir un sous-groupe tu peux en entamez un autre, ou bien mettre une ligne contenant unique "/*".',
	'option_defaut_label' => 'Valeur par défaut',
	'option_disable_avec_post_explication' => 'Identique à l’option précédente mais poste quand même la valeur dans un champ caché.',
	'option_disable_avec_post_label' => 'Désactiver mais poster',
	'option_disable_choix_explication' => 'Indiquer les choix séparés par une virgule, exemple : choix1,choix3',
	'option_disable_choix_label' => 'Désactiver certains choix',
	'option_disable_explication' => 'Le champ ne peut plus obtenir le focus.',
	'option_disable_label' => 'Désactiver le champ',
	'option_erreur_obligatoire_explication' => 'Tu peux personnaliser le message d’erreur affiché pour indiquer l’obligation (sinon laisser vide).',
	'option_erreur_obligatoire_label' => 'Message d’erreur pour l’obligation',
	'option_explication_explication' => 'Si besoin, une courte phrase décrivant l’objet du champ.',
	'option_explication_label' => 'Explication',
	'option_forcer_select_explication' => 'Si un groupe de mots est sélectionné, par défaut il s’agira d’une saisie radio. Tu peux forcer l’utilisation d’un select.',
	'option_forcer_select_label_case' => 'Forcer l’utilisation d’un select',
	'option_groupe_affichage' => 'Affichage',
	'option_groupe_description' => 'Description',
	'option_groupe_utilisation' => 'Utilisation',
	'option_groupe_validation' => 'Validation',
	'option_heure_pas_explication' => 'Lorsque tu utilises l’horaire, un menu s’affiche pour aider à saisir heures et minutes. Tu peux ici choisir l’intervalle de temps entre chaque choix (par défaut 30min).',
	'option_heure_pas_label' => 'Intervalle des minutes dans le menu d’aide à la saisie',
	'option_horaire_label' => 'Horaire',
	'option_horaire_label_case' => 'Permettre de saisie aussi l’horaire',
	'option_id_groupe_label' => 'Groupe de mots',
	'option_info_obligatoire_explication' => 'Tu peux modifier l’indication d’obligation par défaut : <i>[Obligatoire]</i>. Pour garder l’information par défaut, ne rien mettre. Pour ne rien afficher, mettre un texte composé uniquement d’espace.',
	'option_info_obligatoire_label' => 'Indication d’obligation',
	'option_inserer_barre_choix_edition' => 'barre d’édition complète',
	'option_inserer_barre_choix_forum' => 'barre des forums',
	'option_inserer_barre_explication' => 'Insère une barre d’outils du porte-plume si ce dernier est activé.',
	'option_inserer_barre_label' => 'Insérer une barre d’outils',
	'option_label_case_label' => 'Label placé à côté de la case',
	'option_label_explication' => 'Le titre qui sera affiché.',
	'option_label_label' => 'Label',
	'option_label_non_explication' => 'Sera visible lors de l’affichage des résultats.',
	'option_label_non_label' => 'Label si la case n’est pas cochée',
	'option_label_oui_explication' => 'Sera visible lors de l’affichage des résultats.',
	'option_label_oui_label' => 'Label si la case est cochée',
	'option_limite_branche_explication' => 'Limitera le choix à une branche spécifique du site',
	'option_limite_branche_label' => 'Limiter à une branche',
	'option_maximum_choix_explication' => 'Nombre de choix maximum ?',
	'option_maximum_choix_label' => 'Limiter le nombre de choix',
	'option_maxlength_explication' => 'L’utilisateur ne pourra pas taper plus de caractères que ce nombre.',
	'option_maxlength_label' => 'Nombre de caractères maximum',
	'option_multiple_explication' => 'L’utilisateur pourra sélectionner plusieurs valeurs',
	'option_multiple_label' => 'Sélection multiple',
	'option_nom_explication' => 'Un nom informatique qui identifiera le champ. Il ne doit contenir que des caractères alpha-numériques minuscules ou le caractère "_".',
	'option_nom_label' => 'Nom du champ',
	'option_obligatoire_label' => 'Champ obligatoire',
	'option_option_destinataire_intro_label' => 'Label du premier choix vide (lorsque sous forme de liste)',
	'option_option_intro_label' => 'Label du premier choix vide',
	'option_option_statut_label' => 'Afficher les statuts',
	'option_oui_non_valeur_non_explication' => 'Valeur postée si le non est sélectionné.',
	'option_oui_non_valeur_oui_explication' => 'Valeur postée si le oui est sélectionné.',
	'option_placeholder_label' => 'Placeholder',
	'option_pliable_label' => 'Pliable',
	'option_pliable_label_case' => 'Le groupe de champs pourra être replié.',
	'option_plie_label' => 'Déjà plié',
	'option_plie_label_case' => 'Si le groupe de champs est pliable, il sera déjà plié à l’affichage du formulaire.',
	'option_previsualisation_explication' => 'Si le porte-plume est activé, ajoute un onglet pour prévisualiser le rendu du texte saisi.',
	'option_previsualisation_label' => 'Activer la prévisualisation',
	'option_readonly_explication' => 'Le champ peut être lu, sélectionné, mais pas modifié.',
	'option_readonly_label' => 'Lecture seule',
	'option_rows_explication' => 'Hauteur du bloc en nombre de ligne. Cette option n’est pas toujours appliquée car les styles CSS de votre site peuvent l’annuler.',
	'option_rows_label' => 'Nombre de lignes',
	'option_size_explication' => 'Largeur du champ en nombre de caractères. Cette option n’est pas toujours appliquée car les styles CSS de ton site peuvent l’annuler.',
	'option_size_label' => 'Taille du champ',
	'option_statut_label' => 'Statut(s) particulier(s)',
	'option_tagfield_explication' => 'Balise pour le label du groupe. Pour des raisons d’accessibilité, il est vivement recommandé de laisser la valeur par défaut (balise legend).',
	'option_tagfield_label' => 'Balise pour le label du groupe',
	'option_type_choix_plusieurs' => 'Permettre à l’utilisateur de choisir <strong>plusieurs</strong> destinataires.',
	'option_type_choix_tous' => 'Mettre <strong>tous</strong> ces auteurs en destinataires. L’utilisateur n’aura aucun choix.',
	'option_type_choix_un' => 'Permettre à l’utilisateur de choisir <strong>un seul</strong> destinataire.Permettre à l’utilisateur de choisir <strong>un seul</strong> destinataire (sous forme de liste déroulante).',
	'option_type_choix_un_radio' => 'Permettre à l’utilisateur de choisir <strong>un seul</strong> destinataire (sous forme de liste à puce).',
	'option_type_explication' => 'En mode "masqué", le contenu du champ ne sera pas visible.',
	'option_type_label' => 'Type du champ',
	'option_type_password' => 'Texte masqué lors de la saisie (ex : mot de passe)',
	'option_type_text' => 'Normal',
	'option_valeur_non_label' => 'Valeur non',
	'option_valeur_oui_label' => 'Valeur oui',

	// P
	'plugin_yaml_inactif' => 'Le plugin YAML est inactif. Tu dois l’activer pour que cette page soit fonctionnelle.',

	// S
	'saisie_auteurs_explication' => 'Permet de sélectionner un ou plusieurs auteurs',
	'saisie_auteurs_titre' => 'Auteurs',
	'saisie_case_explication' => 'Permet d’activer ou de désactiver quelque chose.',
	'saisie_case_titre' => 'Case unique',
	'saisie_checkbox_explication' => 'Permet de choisir plusieurs options avec des cases.',
	'saisie_checkbox_titre' => 'Cases à cocher',
	'saisie_choix_grille_explication' => 'Permet de poser une série de questions à choix multiple d’une manière uniformisé et sous forme de grille',
	'saisie_choix_grille_titre' => 'Grille de questions',
	'saisie_date_explication' => 'Permet de saisir une date ? l’aide d’un calendrier',
	'saisie_date_titre' => 'Date',
	'saisie_destinataires_explication' => 'Permet de choisir un ou plusieurs destinataires parmis des auteurs pré-sélectionné.',
	'saisie_destinataires_titre' => 'Destinataires',
	'saisie_email_explication' => 'Permet d’avoir un champ de type email en HTML5.',
	'saisie_email_titre' => 'Adresse email',
	'saisie_explication_explication' => 'Un texte explicatif général.',
	'saisie_explication_masquer_label' => 'Ajouter un bouton afficher/masquer l’explication',
	'saisie_explication_texte_label' => 'Texte de l’explication',
	'saisie_explication_titre' => 'Explication',
	'saisie_explication_titre_label' => 'Titre de l’explication',
	'saisie_fieldset_explication' => 'Un cadre qui pourra englober plusieurs champs.',
	'saisie_fieldset_titre' => 'Groupe de champs',
	'saisie_file_explication' => 'Envoi d’un fichier',
	'saisie_file_titre' => 'Fichier',
	'saisie_hidden_explication' => 'Un champ pré-rempli que l’utilisateur ne pourra pas voir.',
	'saisie_hidden_titre' => 'Champ caché',
	'saisie_input_explication' => 'Une simple ligne de texte, pouvant être visible ou masquée (mot de passe).',
	'saisie_input_titre' => 'Ligne de texte',
	'saisie_mot_explication' => 'Un ou plusieurs mots-clés d’un groupe de mot',
	'saisie_mot_titre' => 'Mot-clé',
	'saisie_oui_non_explication' => 'Oui ou non, c’est clair ? :)',
	'saisie_oui_non_titre' => 'Oui ou non',
	'saisie_radio_defaut_choix1' => 'Un',
	'saisie_radio_defaut_choix2' => 'Deux',
	'saisie_radio_defaut_choix3' => 'Trois',
	'saisie_radio_explication' => 'Permet de choisir une option parmis plusieurs disponibles.',
	'saisie_radio_titre' => 'Boutons radios',
	'saisie_selecteur_article' => 'Affiche un navigateur de sélection d’article',
	'saisie_selecteur_article_titre' => 'Sélecteur d’article',
	'saisie_selecteur_document' => 'Affiche un sélecteur de document',
	'saisie_selecteur_document_titre' => 'Sélecteur de document',
	'saisie_selecteur_rubrique' => 'Affiche un navigateur de sélection de rubrique',
	'saisie_selecteur_rubrique_article' => 'Affiche un navigateur de sélection d’article ou de rubrique',
	'saisie_selecteur_rubrique_article_titre' => 'Sélecteur d’article ou rubrique',
	'saisie_selecteur_rubrique_titre' => 'Sélecteur de rubrique',
	'saisie_selection_explication' => 'Choisir une option dans une liste déroulante.',
	'saisie_selection_multiple_explication' => 'Permet de choisir plusieurs options avec une liste.',
	'saisie_selection_multiple_titre' => 'Sélection multiple',
	'saisie_selection_titre' => 'Liste déroulante',
	'saisie_textarea_explication' => 'Un champ de texte sur plusieurs lignes.',
	'saisie_textarea_titre' => 'Bloc de texte',

	// T
	'titre_page_saisies_doc' => 'Documentation des saisies',
	'tous_visiteurs' => 'Tous les visiteurs (même non enregistrés)',
	'tout_selectionner' => 'Tout (dé)sélectionner',

	// V
	'verifier_valeurs_acceptables_explication' => 'Vérifier que la valeur postée se trouve parmis celles autorisées lors de la définition des champs. Ne pas utiliser cette options si tu remplis dynamiquement des champs dans tes squelettes ou les remplis grâce à javascript.',
	'verifier_valeurs_acceptables_label' => 'Vérifier les valeurs acceptables',
	'vue_sans_reponse' => '<i>Sans réponse</i>',

	// Z
	'z' => 'zzz'
);
