<?php
// phpBB 3.3.x auto-generated configuration file
// Do not change anything in this file!
$dbms = 'phpbb\\db\\driver\\mysqli';
//$dbhost = 'localhost';
$dbhost = '193.203.168.87';
$dbport = '3306';
//$dbname = 'jnm_phpbb';
//$dbuser = 'root';
//$dbpasswd = 'Griffon123';
//LOCAL
$dbname = 'u604880352_jnm_phpbb';
$dbuser = 'u604880352_root';
$dbpasswd = 'MonGriffon123*';
$table_prefix = 'phpbb_';
$phpbb_adm_relative_path = 'adm/';
$acm_type = 'phpbb\\cache\\driver\\file';

//@define('PHPBB_ROOT_PATH', dirname(__FILE__).'/');
@define('PHPBB_INSTALLED', true);
@define('PHPBB_ENVIRONMENT', 'production');
// @define('DEBUG_CONTAINER', true);
@define('ATTRIBUTES_TABLE', $table_prefix.'attributes');
@define('GAINED_TECHNIQUES_TABLE', $table_prefix.'gained_techniques');
@define('USER_TECHNIQUES_TABLE', $table_prefix.'user_techniques');
@define('MISSIONS_TABLE', $table_prefix.'missions');
@define('MISSION_USERS_TABLE', $table_prefix.'mission_users');
@define('MISSION_GROUPS_TABLE', $table_prefix.'mission_groups');
@define('RELATIONSHIPS_TABLE', $table_prefix.'relationships');
@define('TALENTS_TABLE', $table_prefix.'talents');
@define('USER_TALENTS_TABLE', $table_prefix.'user_talents');
@define('GROUP_INFLUENCE_TABLE', $table_prefix.'group_influences');
@define('KUCHIYOSES_TABLE', $table_prefix.'user_kuchiyose_techniques');
@define('MARIONNETTES_TABLE', $table_prefix.'user_marionnette_techniques');