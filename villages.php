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

$json_response = new \phpbb\json_response;

$kiri_id = get_group_by_name('Kirigakure');
$iwa_id = get_group_by_name('Iwagakure');
$suna_id = get_group_by_name('Sunagakure');
$kumo_id = get_group_by_name('Kumogakure');
$konoha_id = get_group_by_name('Konohagakure');

if($request->is_ajax()) {
    $button_modify_advantage = $request->variable('button_modify_advantage', '');
    $button_unmodify_advantage = $request->variable('button_unmodify_advantage', '');
    $delete_advantage_button = $request->variable('delete_advantage_button', '');
    $substract_influence_button = $request->variable('substract_influence_button', '');
    if($button_modify_advantage) {
        $advantage_id = $request->variable('influence_id', 0);
        $advantage_title = utf8_normalize_nfc($request->variable('edit_title', '', true));
        $advantage_description = utf8_normalize_nfc($request->variable('edit_description', '', true));
        $sql = 'UPDATE '.GROUP_INFLUENCE_TABLE.' SET '.$db->sql_build_array('UPDATE', [
            'group_influence_title' => $advantage_title,
            'group_influence_description' => $advantage_description
        ])." WHERE group_influence_id = $advantage_id";
        $db->sql_query($sql);
        return $json_response->send([
            'action'	=> 'ADVANTAGE_UPDATED',
            ],
        );
    }
    else if($delete_advantage_button) {
        $advantage_id = $request->variable('influence_id', 0);
        $sql = 'DELETE FROM '.GROUP_INFLUENCE_TABLE." WHERE group_influence_id = $advantage_id";
        $db->sql_query($sql);
        return $json_response->send([
            'action'	=> 'ADVANTAGE_DELETED',
            ],
        );
    }
    else if($button_unmodify_advantage) {
        return $json_response->send([
            'action'	=> 'ADVANTAGE_NOT_UPDATED',
            ],
        );
    }
    else if($substract_influence_button) {
        $group_points = $request->variable('group_points', 0);
        $group_id = $request->variable('group_id', 0);
        $sql = 'UPDATE '.GROUPS_TABLE." SET group_influence_points = group_influence_points - $group_points WHERE group_id = $group_id";
        $db->sql_query($sql);
        return $json_response->send([
            'action'	=> 'POINTS_SUBSTRACTED',
            ],
        );
    }
}

if($request->is_ajax()) {
    $group_id = 0;
    $kiri_advantage_button = $request->variable('kiri_avantage_button', '');
    $suna_advantage_button = $request->variable('suna_avantage_button', '');
    $iwa_advantage_button = $request->variable('iwa_avantage_button', '');
    $kumo_advantage_button = $request->variable('kumo_avantage_button', '');
    $konoha_advantage_button = $request->variable('konoha_avantage_button', '');
    if($kiri_advantage_button) {
        $group_id = $kiri_id;
    }
    else if($suna_advantage_button) {
        $group_id = $suna_id;
    }
    else if($iwa_advantage_button) {
        $group_id = $iwa_id;
    }
    else if($kumo_advantage_button) {
        $group_id = $kumo_id;
    }
    else if($konoha_advantage_button) {
        $group_id = $konoha_id;
    }
    if($group_id) {
        $query = insert_advantage($group_id);
        if($query) {
            return $json_response->send([
                'action'	=> 'ADVANTAGE_ADDED',
                ],
            );
        }
    }
}

/**
 * Get the village influence points
 * @param int group_id
 * @return int influence_points
 */
function get_influence_village($group_id) {
    global $db;
    $req = [
        'SELECT' => 'gt.group_influence_points AS influence_points',
        'FROM' => [
            GROUPS_TABLE => 'gt'
        ],
        'WHERE' => "gt.group_id = $group_id"
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    return $db->sql_fetchrow($query)['influence_points'];
}

function insert_advantage($group_id) {
    global $db, $request;
    $influence_title = utf8_normalize_nfc($request->variable('influence_name', '', true));
    $influence_description = utf8_normalize_nfc($request->variable('influence_description', '', true));
    $sql = 'INSERT INTO '.GROUP_INFLUENCE_TABLE.' '.$db->sql_build_array('INSERT', [
        'group_influence_title' => $influence_title,
        'group_influence_description' => $influence_description,
        'group_id' => $group_id
    ]);
    return $db->sql_query($sql);
}

function get_advantages($group_id, $block_name) {
    global $db, $template;
    $req = [
        'SELECT' => 'git.group_influence_id AS influence_id, git.group_influence_title AS influence_title, git.group_influence_description AS influence_description',
        'FROM' => [
            GROUP_INFLUENCE_TABLE => 'git'
        ],
        'WHERE' => "group_id = $group_id"
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    while ($row = $db->sql_fetchrow($query)) {
        $template->assign_block_vars($block_name, [
            'INFLUENCE_ID' => $row['influence_id'],
            'INFLUENCE_TITLE' => $row['influence_title'],
            'INFLUENCE_DESCRIPTION' => $row['influence_description']
        ]);
    }
}

get_advantages($kiri_id, 'kiri_adv');
get_advantages($iwa_id, 'iwa_adv');
get_advantages($suna_id, 'suna_adv');
get_advantages($kumo_id, 'kumo_adv');
get_advantages($konoha_id, 'konoha_adv');

$template->assign_vars(array(
    'VG_IS_KIRI' => my_group($kiri_id, $user->data['user_id']),
    'VG_IS_IWA' => my_group($iwa_id, $user->data['user_id']),
    'VG_IS_SUNA' => my_group($suna_id, $user->data['user_id']),
    'VG_IS_KUMO' => my_group($kumo_id, $user->data['user_id']),
    'VG_IS_KONOHA' => my_group($konoha_id, $user->data['user_id']),
    'VG_IS_ADMIN' => my_group(ADMINISTRATOR_ID, $user->data['user_id']),
    'VG_KIRI_POINTS' => get_influence_village($kiri_id),
    'VG_IWA_POINTS' => get_influence_village($iwa_id),
    'VG_SUNA_POINTS' => get_influence_village($suna_id),
    'VG_KUMO_POINTS' => get_influence_village($kumo_id),
    'VG_KONOHA_POINTS' => get_influence_village($konoha_id),
    'VG_KIRI_ID' => $kiri_id,
    'VG_IWA_ID' => $iwa_id,
    'VG_SUNA_ID' => $suna_id,
    'VG_KUMO_ID' => $kumo_id,
    'VG_KONOHA_ID' => $konoha_id
));

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'villages.html')
);

page_footer();