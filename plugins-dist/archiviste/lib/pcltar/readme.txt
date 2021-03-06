// --------------------------------------------------------------------------------
// PclTar 1.3.1 - readme.txt
// --------------------------------------------------------------------------------
// License GNU/GPL - Vincent Blavet - January 2003
// http://www.phpconcept.net
// --------------------------------------------------------------------------------

                                                  (Voir version Française à la fin)

0 - Sommaire
============
    1 - Introduction
    2 - Install
    3 - What's new
    4 - Using PclTar
    5 - Manual
    6 - Language
    7 - Known bugs
    8 - License
    9 - Warning
   10 - Author

1 - Introduction
================

  PclTar is a library that allow you to create a GNU TAR archive,
  to add files or directories, to extract all the archive or a part of it.
  So far tests show that the files generated by PclTar are readable by
  gzip tools and WinZip application.

  PclTar is made of the following files, placed in the same 'lib' directory :
    - pcltar.lib.php3
    - pcltrace.lib.php3
    - pclerror.lib.php3

  Today the libraries PclTrace and PclError are mandatory to run PclTar.

  The extension of the files can be modified to .php (or other) without any
  internal modification.

  The files can be put into any directory as far as the calling script/application
  has a valid path to it (see section using PclTar).


2 - Install
===========

  PclTar 1.3 is released in three format :

    - Zip traditionnal format (pcltar-1-3.zip),
    - Compressed GNU TAR format (pcltar-1-3.tgz),
    - PhpZip auto-extract PhpZip (pcltar-1-3.piz).

  The Zip and compressed GNU TAR file also include the auto-extract PhpZip file, which
  might be usefull for a remote auto-install.

  a. Zip archive
     Unzip the Zip file in a folder.
     The files are in the 'lib' directory, but may be moved in any other directory.

  b. Compressed GNU TAR archive
     Extract the Compressed GNU TAR file in a folder.
     The files are in the 'lib' directory, but may be moved in any other directory.

  c. Auto-extract PhpZip archive
     Download *** IN BINARY MODE *** the auto-extract PhpZip archive on your web site
     in the destination directory 'myfolder'.
     Launch the extract by calling http://mydomain.com/myfolder/pcltar-1-3.piz.php3.
     The files are automatically placed in the 'lib' directory of the 'myfolder'
     directory.

3 - What's new
==============

  In version 1.3.1 :

  - Remove deprecated call to functions with references

  In version 1.3 :

  - Add the function PclTarExtractIndex()
  - Correction of a bug with folders. When folder are archived, the size is sometime not
    null. PclTar now force the size to be zero when the archived file is a folder. When
    un-archiving the size is also forced to 0 when the item is a folder.
  - Modify function PclTarDelete() : When you give the name of a directory to be deleted, the
    directory entry and the files of the directory are deleted.
  - Correct bug in the path add/remove options in functions. When a path is removed,
    sometime the 'home' path was not.
  - Correct a bug in directory extraction : The directory is created but the status in
    the resulting file list is set to write_error.
  - Correct a bug : missing update of file cache (clearstatcache())

  In version 1.2 :

  - Add a new function PclTarMerge(), which allow to merge two archives.
  - Add the add_path/remove_path ability to the PclTarCreate() function
  - The add list/dir function now support empty directory. Before version 1.2, directories
    where not identified as separate entries, there where in the archive, only if there is at
    least one file.
  - Optimization of PclTarHandleAddList()

  In version 1.1 :

  - Adding check of header checksum while extracting a file from the archive,
  - Enhancement in POSIX header creation. In the first version PclTar use a temporary
    file for checksum calculation. It is now directly computed.
  - Adding field "status" in file description, remove fields "link", "magic", "version",
    "uname", "gname", "devmajor" and "devminor", because they do not carry interesting info.
  - While extracting, a check is done if the file exists or not. If an error occurs in the
    file extraction, the file is skipped, and the function tries to extract the next one.
    In previous release, the extraction was stopped.
  - While extracting a file, the mtime is now updated with the value stored in the archive.
    Note that the mode (R/W) is not set today (default RW).

  - New function PclTarDelete($tarname, $filelist), which deletes the files specified in
    $filelist.
  - New function PclTarUpdate(), which replace old files with new ones (depending of last
    modification date). If the file does not exist, it is added at the end of the archive.
  - Values for the file properties array :
    filename (with path),
    size,
    mode (decimal value of the octal value),
    uid,
    gid,
    mtime (last modification date like time() function result),
    typeflag ("0" or "" = file, "5" = directory, "1" = link),
    status (ok, added, updated, not_updated, already_a_directory,
            write_protected, newer_exist, path_creation_fail, write_error)
  - Add a "remove path" property in the extract functions. This allow to extract file
    in an other directory than the expected directory.
  - Add new function PclTarAddList()
  - Add parameter $p_mode in PclTarList()

4 - Using PclTar
========================

  In order to use PclTar 1.3, an application (or a script) must include
  the PclTar file pcltar.lib.php3.
  Because PclTar 1.3 include two other libraries (PclTrace and PclError), a
  way to include these libraries must be done. Several solutions are available :

  - Include each library in the application/script (in this order) :
    <?
    include ("my_lib_dir/pclerror.lib.php3");
    include ("my_lib_dir/pcltrace.lib.php3");
    include ("my_lib_dir/pcltar.lib.php3");
    [...]
    ?>

  - Give the library path knownledge to PclTar :
    <?
    $g_pcltar_lib_dir = "my_lib_dir";
    include ("my_lib_dir/pcltar.lib.php3");
    [...]
    ?>

  - Modify the $g_pcltar_lib_dir value in pcltar.lib.php3

  - Use the global include directory configured in php.ini, and modify the
    $g_pcltar_lib_dir value in pcltar.lib.php3 and set it to ''

  Note that PclTar file (pcltar.lib.php3) may be included several time without any
  problem. However this is not recomended for performance reason.

  After the include(s), the functions defined by PclTar can be directly used
  (see manual section).


5 - Manual
==========

  PclTar introduce functions to create, add, list, delete and extract files in a GNU
  TAR archive. The GNU TAR archive can be compressed or not.

  A more complete documentation of the PclTar function is available at
  http://www.phpconcept.net

  Each public function is documented in an appropriate header directly in the source
  code.



6 - Langage
===========

  PclTar was developped in PHP3 but is compatible with PHP4. The files
  extension can be modified without any action needed inside the files.

  PclTar code is fully documented (nearly step by step) in english.


7 - Known bugs
==============

  Here is a list of known bugs in PclTar 1.0 (not exhaustive list) :

  - Only GNU TAR archive with POSIX header are supported
  - While extracting a file, the header checksum is not checked.
  - While extracting a file, the last modified date is not checked with the one
    of the file that will be replaced.
  - While extracting a file, the file mode (access right by user, ...) is not
    reproduced.
  - While archiving a full directory, the directory it self is not archived.
  - While extracting a directory name the directory is created only if there is
    a file inside. Should be created even if no file is inside.

  Known bugs will be updated in http://www.phpconcept.net


8 - License
===========

  PclTar 1.3 Library is released under GNU/GPL license.
  This library is free, so you can use it at no cost.

  HOWEVER, if you release a script, an application, a library or any kind of
  code including PclTar library (or a part of it), YOU MUST :
  - Release your work under GNU/GPL license (free software),
  - You must indicate in the documentation (or a readme file), that your work
    include PclTar Library, and make a reference to the author and the web site
    http://www.phpconcept.net

  I will also appreciate that you send me a mail (vincent@blavet.net), just to
  be aware that someone is using PclTar (but this is not mandatory ;-) ).

  For more information : http://www.gnu.org

9 - Warning
=================

  This library and the associated files are non commercial, non professional work.
  It should not have unexpected results. However if any damage is caused by this software
  the author can not be responsible.
  The use of this software is at the risk of the user.

10 - Author
==========

  This software was written by Vincent Blavet (vincent@blavet.net) on its leasure time.



********************************************************************************
*                            VERSION FRANCAISE                                 *
********************************************************************************


0 - Sommaire
============
    1 - Introduction
    2 - Installation
    3 - Nouveautés
    4 - Démarrer avec PclTar
    5 - Manuel
    6 - Langage
    7 - Problèmes connus
    8 - License
    9 - Avertissement
   10 - Auteur


1 - Introduction
================

  PclTar est une librairie qui vous permet de créer des archives au format GNU TAR ou GNU
  TAR compressé, d'ajouter des fichiers ou des dossiers entiers et d'extraire le contenu
  total ou partiel des archives.
  A présent les tests ont montré que les archives créées par PclTar sont lisibles par les
  outils tar et gzip, ainsi que l'application WinZip.

  PclTar est constituée des fichiers suivants, ils sont placés dans le dossier 'lib' :
    - pcltar.lib.php3
    - pcltrace.lib.php3
    - pclerror.lib.php3

  Aujourd'hui les librairies PclTrace et PclError sont obligatoires pour faire fonctionner
  PclTar.

  Les extensions de fichiers (.php3) peuvent être modifiés (en .php par exemple) sans
  nécessité d'intervenir à l'intérieur du fichier.

  Les fichiers peuvent être placés dans n'importe quel dossier pour peu que l'application
  ou le script appelant utilise un chemin d'appel valide.


2 - Installation
================

  PclTar 1.3 est distribué sous trois formats :

    - Format Zip traditionnel (pcltar-1-3.zip),
    - Format GNU TAR compressé (pcltar-1-3.tgz),
    - Format PhpZip auto-extract (pcltar-1-3.piz).

  Les fichiers Zip and GNU TAR compressés contiennent aussi le format PhpZip
  auto-extract.

  a. Archive Zip
     Décompressez l'archive Zip dans un dossier.
     Les fichiers sont dans le dossier 'lib' et peuvent être déplacés ailleurs.

  b. Archive GNU TAR compressée
     Décompressez l'archive GNU TAR dans un dossier.
     Les fichiers sont dans le dossier 'lib' et peuvent être déplacés ailleurs.

  c. Auto-extract PhpZip archive
     Téléchargez *** EN MODE BINAIRE *** l'archive PhpZip sur votre site Web dans
     le dossier souhaité 'mondossier'.
     Lancer l'extraction en appelant http://mondomaine.com/mondossier/pcltar-1-3.piz.php3
     Les fichiers sont dans le dossier 'lib' du dossier 'mondossier'.


3 - Nouveautés
==============

  En version 1.3.1 :

  - Suppression des appels de fonctions par références

  En version 1.3 :

  - Ajout de la fonction PclTarExtractIndex()
  - Correction d'un bug avec l'archivage des dossiers. Parfois la taille des
    dossiers archivés était non nul ce qui entrainait une erreur lors de l'extraction.
    PclTar force désormais la taille à zéro lorsqu'il s'agit d'un dossier. De même lors
    de l'extraction il ignore la taille éventuellement incorrecte.
  - Modification de la fonction PclTarDelete() : Lorsque l'on donne le nom d'un dossier
    à supprimer, le dossier et les fichiers se trouvant dedans sont supprimés.
    Avant la version 1.3 seulement l'entrée concernant le dossier était supprimée.
  - Correction d'un bug dans les propriétés d'ajout/suppression de chemin. Lorsque l'on
    indiquait un chemin à supprimer, cela se passait bien pour les fichiers et
    sous-dossiers, mais le dossier en lui-même n'était pas ignoré.
  - Correction d'un bug dans l'extraction d'un dossier : Le dossier est normalement créé,
    mais le status de l'opération pour ce dossier était en 'write_erreor'.
  - Correction d'un bug sur la validité des dates de dernière modification des
    fichiers. Utilisation  plus systèmatique de clearstatcache().

  En version 1.2 :

  - Ajout d'une nouvelle fonction PclTarMerge(), qui permet d'ajouter à une archive le
    contenu d'une autre.
  - Ajout des propriétés "ajout de path/suppression de path" pour la fonction PclTarCreate().
  - Les archives générées par PclTar supportent maintenant les dossiers vide. Avant la
    version 1.2, un dossier n'était ajouté que lorsqu'il y avait au moins un fichier dedans.
  - Optimisation du code de PclTarHandleAddList()

  En version 1.1 :

  - Ajout de la vérification du checksum lors de l'extraction d'un fichier.
  - Amélioration de la création des entêtes POSIX. En version 1.0 PclTar utilisait un fichier
    temporaire pour calculer le checksum. Ce n'est plus le cas à partir de la version 1.2.
  - Ajout d'un champ "status" dans le tableau de description des propriétés d'un fichier.
    Les champs "link", "magic", "version", "uname", "gname", "devmajor" and "devminor" sont
    eux supprimés car ils ne contiennent aucune information interessante.
  - Lors de l'extraction une vérification est faite pour savoir si le fichier existe déjà ou non.
    Si une erreur arrive lors de l'extraction le fichier est sauté et la fonction cherche à
    extraire le fichier suivant. Dans la version précédente l'extraction était arrêtée.
  - Lors de l'extraction d'un fichier la date de dernière modification est mise à jour avec
    celle mémorisée dans l'archive.
    Notez que ce n'est pas le cas pour le mode (R/W) qui reste celui par défaut.
  - Nouvelle fonction PclTarDelete($tarname, $filelist), qui supprime de l'archive les fichiers
    spécifiés dans $filelist.
  - Nouvelle fonction PclTarUpdate(), qui remplace les anciens fichiers par les nouveaux
    (en fonction de la date de dernière modification). Si le fichier n'existe pas il est
    ajouté en fin d'archive.
  - Le tableau contenant les propriétés d'un fichier a les champs suivants :
    filename (with path),
    size,
    mode (decimal value of the octal value),
    uid,
    gid,
    mtime (last modification date like time() function result),
    typeflag ("0" or "" = file, "5" = directory, "1" = link),
    status (ok, added, updated, not_updated, already_a_directory,
            write_protected, newer_exist, path_creation_fail, write_error)
  - Ajout d'une propriété "chemin à retirer" dans les fonctions d'extraction. Cela permet
    d'extraire un fichier ou un dossier dans un dossier différent de celui qui a été mémorizé.
  - Ajout de la focntion PclTarAddList()
  - Ajout du parametre $p_mode dans PclTarList()

3 - Démarrer avec PclTar
========================

  Pour utiliser PclTar, une application ou un script doivent inclure le fichier
  pcltar.lib.php3.
  PclTar utilisant deux librairies annexes (PclTrace et PclError), une configuration
  est nécessaire pour que PclTar retrouve le chemin d'inclusion des deux librairies.
  Plusieurs solutions, au choix, sont possibles :

  - Inclure chaque librarie dans l'application/script :
    <?
    include ("my_lib_dir/pclerror.lib.php3");
    include ("my_lib_dir/pcltrace.lib.php3");
    include ("my_lib_dir/pcltar.lib.php3");
    [...]
    ?>

  - Donner à PclTar la connaissance du chemin d'inclusion :
    <?
    $g_pcltar_lib_dir = "my_lib_dir";
    include ("my_lib_dir/pcltar.lib.php3");
    [...]
    ?>

  - Modifier la variable $g_pcltar_lib_dir dans pcltar.lib.php3

  - Utiliser le chemin d'include par défaut (configuré dans php.ini), sans oublier de
    modifier la variable $g_pcltar_lib_dir pour la mettre à ''.

  Il est à noter que le fichier pcltar.lib.php3 peut être inclu plusieurs fois sans
  impact autre qu'une légère perte de performance.


4 - Manuel
==========

  PclTar définit des fonctions pour créer, ajouter, lister, détruire et extraire des
  fichiers depuis une archive GNU TAR. Cette archive peut être compressée ou non.

  Une description plus complète de PclTar est disponible sur
  http://www.phpconcept.net

  Chaque fonction est aussi documentée dans un entête associé, directement dans
  le code source.


5 - Langage
===========

  PclTar a été développé en PHP3 mais est compatible avec PHP4. Les
  extensions de fichiers (.php3) peuvent être modifié sans toucher à l'intérieur
  des fichiers.

  Le code de PclTar est entièrement documenté en anglais.


6 - Problèmes connus
====================

  Liste des problèmes connus dans PclTar 1.0 (liste non exhaustive) :

  - Seuls les archives GNU TAR au format "header POSIX" sont supportées
  - Lors de l'extraction d'un fichier le checksupm de l'entête n'est pas vérifié
  - Lors de l'extraction d'un fichier la date de dernière modification d'un
    fichier n'est pas comparé avec celle du fichier existant.
  - Lors de l'extraction d'un fichier les droits d'accès d'un fichier ne sont pas
    reconduits
  - Lors de l'archivage d'un dossier entier, le nom du dossier lui même n'est pas
    archivé comme une entrée indépendante
  - Lors de l'extraction de l'entrée décrivant un dossier, le dossier n'est créé que si
    au moins un fichier est archivé pour ce dossier.

  Les bugs connus et les contournements possibles ou les versions de correction
  seront mis à jour sur le site http://www.phpconcept.net

  Merci d'y documenter les bugs que vous rencontrez afin qu'ils soient pris en compte
  dans les versions futures !

7 - License
===========

  La librairie PclTar 1.3 est distribuées sous license GNU/GPL.
  Vous pouvez donc l'utiliser gratuitement.

  CEPENDANT, si vous publiez un script, une application, une librairie ou tout
  code incluant PclTar (entier ou partiel), VOUS DEVEZ :
  - Publier votre travail sous license GNU/GPL (c'est à dire gratuitement),
  - Indiquer quelque part dans la documentation (le fichier readme par exemple) que
    vous utilisez PclTar, faire référence à l'auteur et au site Web
    http://www.phpconcept.net

  J'apprécierai aussi que vous m'envoyez un mail (vincent@blavet.net) afin que
  je sache que PclTar est utilisé quelque part (mais ce n'est pas obligatoire ;-) ).

  Pour plus d'information voir http://www.gnu.org


8 - Avertissement
=================

   Cette application a été créée de façon non professionnelle.
   Son usage est au risque et péril de celui qui l'utilise, en aucun cas l'auteur
   de ce code ne pourra être tenu pour responsable des éventuels dégats qu'il pourrait
   engendrer.
   Il est entendu cependant que l'auteur a réalisé ce code par plaisir et n'y a
   caché aucun virus ni malveillance.


9 - Auteur
==========

Ce code a été écrit par Vincent Blavet (vincent@blavet.net) sur ses temps de loisir.

