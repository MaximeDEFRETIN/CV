<?php
if (!defined("_ECRIRE_INC_VERSION")) return;
defined('_MYSQL_SET_SQL_MODE') || define('_MYSQL_SET_SQL_MODE',true);
$GLOBALS['spip_connect_version'] = 0.8;
spip_connect_db('localhost','3306','root','AsBc80@0','CV','mysql', 'spip','','utf8');