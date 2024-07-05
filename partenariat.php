<?php 
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('viewforum');

$page_title = ($config['board_index_text'] !== '') ? $config['board_index_text'] : $user->lang['INDEX'];

$vars = array('page_title');
extract($phpbb_dispatcher->trigger_event('core.index_modify_page_title', compact($vars)));

// Output page
page_header($page_title, true);

$iwa = total_groups($db, get_group_by_name('Iwagakure')) - 1;
$kiri = total_groups($db, get_group_by_name('Kirigakure')) - 1;
$suna = total_groups($db, get_group_by_name('Sunagakure')) - 1;
$nukenin = total_groups($db, get_group_by_name('Nukenin')) - 1;
$kumo = total_groups($db, get_group_by_name('Kumogakure')) - 1;
$konoha = total_groups($db, get_group_by_name('Konohagakure')) - 1;

$total = $iwa + $kiri + $suna + $nukenin + $kumo + $kunoha;

function get_posts() {
    global $db;
    $req = [
        'SELECT' => 'COUNT(*) AS number',
        'FROM' => [
            POSTS_TABLE => 'pt'
        ]
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    return $db->sql_fetchrow($query)['number'];
}

$template->assign_vars(array(
    'P_TOTAL_USERS' => $total,
    'P_TOTAL_POSTS' => get_posts()
));

$template->set_filenames(array(
	'body' => 'partenariat.html')
);

page_footer();