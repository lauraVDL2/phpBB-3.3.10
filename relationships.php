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

$rs_user_id = $request->variable('uid', '');

if(!$rs_user_id) {
    echo 'Veuillez saisir une adresse correcte';
    die();
}

if($request->is_ajax()) {
    $create_kiri_rs_button = $request->variable('create_kiri_rs_button', '');
    $create_suna_rs_button = $request->variable('create_suna_rs_button', '');
    $create_iwa_rs_button = $request->variable('create_iwa_rs_button', '');
    $create_kumo_rs_button = $request->variable('create_kumo_rs_button', '');
    $create_konoha_rs_button = $request->variable('create_konoha_rs_button', '');
    $create_nuke_rs_button = $request->variable('create_nuke_rs_button', '');
    $modify_relation = $request->variable('modify_relation', '');
    $rollback_relation = $request->variable('rollback_relation', '');
    $delete_relation = $request->variable('delete_relation', '');
    $group_id = null;
    if($create_kiri_rs_button) $group_id = get_group_by_name('Kirigakure');
    else if($create_suna_rs_button) $group_id = get_group_by_name('Sunagakure');
    else if($create_iwa_rs_button) $group_id = get_group_by_name('Iwagakure');
    else if($create_kumo_rs_button) $group_id = get_group_by_name('Kumogakure');
    else if($create_konoha_rs_button) $group_id = get_group_by_name('Konohagakure');
    else if($create_nuke_rs_button) $group_id = get_group_by_name('Nukenin');
    if($group_id) {
        insert_relation($group_id);
        return $json_response->send([
            'action'	=> 'RELATION_VALIDATED',
            ],
        );
    }
    else if ($modify_relation) {
        $edit_title = utf8_normalize_nfc($request->variable('edit_title', '', true));
        $edit_description = utf8_normalize_nfc($request->variable('edit_description', '', true));
        $relationship_id = $request->variable('relationship_id', 0);
        $sql = 'UPDATE '.RELATIONSHIPS_TABLE.' SET '.$db->sql_build_array('UPDATE', [
            'relation_title' => $edit_title,
            'relation_description' => $edit_description
        ])." WHERE relationship_id = $relationship_id";
        $db->sql_query($sql);
        return $json_response->send([
            'action'	=> 'RELATION_UPDATED',
            ],
        );
    }
    else if ($rollback_relation) {
        return $json_response->send([
            'action'	=> 'RELATION_ROLLBACK',
            ],
        );
    }
    else if ($delete_relation) {
        $relationship_id = $request->variable('relationship_id', 0);
        $sql = 'DELETE FROM '.RELATIONSHIPS_TABLE." WHERE relationship_id = $relationship_id";
        $db->sql_query($sql);
        return $json_response->send([
            'action'	=> 'RELATION_DELETED',
            ],
        );
    }
}

/**
 * Insert the relationship
 * @param int group_id
 */
function insert_relation($group_id) {
    global $db, $request, $rs_user_id;
    $relation_id = $request->variable('new_relations', 0);
    $relation_name = utf8_normalize_nfc($request->variable('name_relation', '', true));
    $relation_description = utf8_normalize_nfc($request->variable('description_relation', '', true));
    $row = get_rs_infos($relation_id);
    $relation_avatar = $row['avatar'];
    $sql = 'INSERT INTO '.RELATIONSHIPS_TABLE.' '.$db->sql_build_array('INSERT', [
        'relationship_user_id' => $rs_user_id,
        'relation_id' => $relation_id,
        'relation_group_id' => $group_id,
        'relation_title' => $relation_name,
        'relation_description' => $relation_description,
        'relation_avatar' => $relation_avatar
    ]);
    $db->sql_query($sql);
}

/**
 * Get the possibles relationships
 * @param string block_name
 * @param int group_id
 */
function get_players($block_name, $user_id, $group_id) {
    global $db, $template;
    $ids = get_relation_ids($user_id, $group_id);
    $req = [
        'SELECT' => 'ut.username AS username, ut.user_id AS user_id',
        'FROM' => [
            USERS_TABLE => 'ut'
        ],
        'LEFT_JOIN' => [
            [
                'FROM' => [ USER_GROUP_TABLE => 'ugt' ],
                'ON' => 'ugt.user_id = ut.user_id'
            ],
        ],
        'WHERE' => "ugt.group_id = $group_id AND ut.user_id NOT IN($ids) AND ut.user_id != $user_id"
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    while ($row = $db->sql_fetchrow($query)) {
        $template->assign_block_vars($block_name, [
            'RS_ID' => $row['user_id'],
            'RS_USERNAME' => $row['username']
        ]);
    }
}

/**
 * Get the username
 * @param int user_id
 * @return string username
 */
function get_rs_infos($user_id) {
    global $db;
    $req = [
        'SELECT' => 'ut.username AS username, ut.user_avatar AS avatar',
        'FROM' => [
            USERS_TABLE => 'ut'
        ],
        'WHERE' => "ut.user_id = $user_id"
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    return $db->sql_fetchrow($query);
}

/**
 * Get the relation ids already in the list of relationships
 * @param int user_id
 * @param int group_id
 * @return string
 */
function get_relation_ids($user_id, $group_id) {
    global $db;
    $req = [
        'SELECT' => 'rt.relation_id AS relation_id',
        'FROM' => [
            RELATIONSHIPS_TABLE => 'rt'
        ],
        'WHERE' => "relationship_user_id = $user_id AND relation_group_id = $group_id"
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    $ids = array();
    while($row = $db->sql_fetchrow($query)) {
        array_push($ids, $row['relation_id']);
    }
    if(!empty($ids)) {
        return implode(',', $ids);
    }
    return '0';
}

/**
 * Get the registered relations to display
 * @param string block_name
 * @param int user_id
 * @param int group_id
 */
function get_relations($block_name, $user_id, $group_id) {
    global $db, $template;
    $req = [
        'SELECT' => 'rt.relationship_id AS relationship_id, rt.relation_id AS relation_id, rt.relation_title AS relation_title, rt.relation_description AS relation_description, rt.relation_avatar AS relation_avatar',
        'FROM' => [
            RELATIONSHIPS_TABLE  => 'rt'
        ],
        'WHERE' => "rt.relationship_user_id = $user_id AND rt.relation_group_id = $group_id"
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    while ($row = $db->sql_fetchrow($query)) {
        $username = get_rs_infos($row['relation_id'])['username'];
        if(str_contains($row['relation_avatar'], 'http://') || str_contains($row['relation_avatar'], 'https://')) {
            $img = $row['relation_avatar'];
        }
        else {
            $img = './download/file.php?avatar='.$row['relation_avatar'];
        }
        $template->assign_block_vars($block_name, [
            'RELATIONSHIP_ID' => $row['relationship_id'],
            'RELATION_USERNAME' => $username,
            'RELATION_TITLE' => $row['relation_title'],
            'RELATION_DESCRIPTION' => $row['relation_description'],
            'RELATION_AVATAR' => $img
        ]);
    }
}

get_players('kiri_new_relations', $rs_user_id, get_group_by_name('Kirigakure'));
get_players('iwa_new_relations', $rs_user_id, get_group_by_name('Iwagakure'));
get_players('suna_new_relations', $rs_user_id, get_group_by_name('Sunagakure'));
get_players('kumo_new_relations', $rs_user_id, get_group_by_name('Kumogakure'));
get_players('konoha_new_relations', $rs_user_id, get_group_by_name('Konohagakure'));
get_players('nuke_new_relations', $rs_user_id, get_group_by_name('Nukenin'));

get_relations('kiri_relations', $rs_user_id, get_group_by_name('Kirigakure'));
get_relations('iwa_relations', $rs_user_id, get_group_by_name('Iwagakure'));
get_relations('suna_relations', $rs_user_id, get_group_by_name('Sunagakure'));
get_relations('kumo_relations', $rs_user_id, get_group_by_name('Kumogakure'));
get_relations('konoha_relations', $rs_user_id, get_group_by_name('Konohagakure'));
get_relations('nuke_relations', $rs_user_id, get_group_by_name('Nukenin'));

$template->assign_vars(array(
    'RS_USERNAME' => get_rs_infos($rs_user_id)['username'],
    'RS_RIGHTS' => $user->data['user_id'] == $rs_user_id,
));


// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'relationships.html')
);

page_footer();