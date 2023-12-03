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

const MISSION_CREATED = 'CREATED';
const MISSION_VALIDATED = 'VALIDATED';
const MISSION_ONGOING = 'ONGOING';
const MISSION_FINISHED = 'FINISHED';

if($request->is_ajax()) {
    $new_mission = $request->variable('create_mission_button', '');
    $modify_mission = $request->variable('modify_mission_button', '');
    $validate_mission = $request->variable('validate_mission_button', '');
    $delete_mission = $request->variable('delete_mission_button', '');
    $subscribe_mission = $request->variable('subscribe_mission_button', '');
    $unsubscribe_mission = $request->variable('unsubscribe_mission_button', '');
    if($new_mission) {
        $kiri_mission = $request->variable('mission_kiri', '');
        $iwa_mission = $request->variable('mission_iwa', '');
        $kumo_mission = $request->variable('mission_kumo', '');
        $suna_mission = $request->variable('mission_suna', '');
        $konoha_mission = $request->variable('mission_konoha', '');
        $nuke_mission = $request->variable('mission_nuke', '');
        if(!$kiri_mission && !$iwa_mission && !$kumo_mission && !$suna_mission && !$kumo_mission && !$konoha_mission && !$nuke_mission) {
            return $json_response->send([
                'action'	=> 'NO_GROUP_SELECTED',
                ],
            );
        }
        else {
            $mission_title = utf8_normalize_nfc($request->variable('mission_title', '', true));
            $mission_description = utf8_normalize_nfc($request->variable('mission_description', '', true));
            $mission_conditions = utf8_normalize_nfc($request->variable('mission_conditions', '', true));
            $mission_earnings = utf8_normalize_nfc($request->variable('mission_earnings', '', true));
            $mission_infos = utf8_normalize_nfc($request->variable('mission_infos', '', true));
            $mission_rank = $request->variable('mission_rank', 'D');
            $mission_max_users = $request->variable('mission_max_users', 1);
            $sql = 'INSERT INTO '.MISSIONS_TABLE.' '.$db->sql_build_array('INSERT', [
                'mission_rank' => $mission_rank,
                'mission_title' => $mission_title,
                'mission_description' => $mission_description,
                'mission_condition' => $mission_conditions,
                'mission_earning' => $mission_earnings,
                'mission_infos' => $mission_infos,
                'mission_max_users' => $mission_max_users,
                'mission_status' => MISSION_CREATED

            ]);
            $db->sql_query($sql);
            $last_id = $db->sql_nextid();
            if($kiri_mission) {
                $sql = 'INSERT INTO '.MISSION_GROUPS_TABLE.' '.$db->sql_build_array('INSERT', [
                    'mission_id' => $last_id,
                    'group_id' => KIRIGAKURE_ID,
                    'group_name' => 'Kirigakure'
                ]);
                $db->sql_query($sql);
            }
            if($iwa_mission) {
                $sql = 'INSERT INTO '.MISSION_GROUPS_TABLE.' '.$db->sql_build_array('INSERT', [
                    'mission_id' => $last_id,
                    'group_id' => IWAGAKURE_ID,
                    'group_name' => 'Iwagakure'
                ]);
                $db->sql_query($sql);
            }
            if($suna_mission) {
                $sql = 'INSERT INTO '.MISSION_GROUPS_TABLE.' '.$db->sql_build_array('INSERT', [
                    'mission_id' => $last_id,
                    'group_id' => SUNAGAKURE_ID,
                    'group_name' => 'Sunagakure'
                ]);
                $db->sql_query($sql);
            }
            if($kumo_mission) {
                $sql = 'INSERT INTO '.MISSION_GROUPS_TABLE.' '.$db->sql_build_array('INSERT', [
                    'mission_id' => $last_id,
                    'group_id' => KUMOGAKURE_ID,
                    'group_name' => 'Kumogakure'
                ]);
                $db->sql_query($sql);
            }
            if($konoha_mission) {
                $sql = 'INSERT INTO '.MISSION_GROUPS_TABLE.' '.$db->sql_build_array('INSERT', [
                    'mission_id' => $last_id,
                    'group_id' => KONOHAGAKURE_ID,
                    'group_name' => 'Konohagakure'
                ]);
                $db->sql_query($sql);
            }
            if($nukenin_mission) {
                $sql = 'INSERT INTO '.MISSION_GROUPS_TABLE.' '.$db->sql_build_array('INSERT', [
                    'mission_id' => $last_id,
                    'group_id' => NUKENIN_ID,
                    'group_name' => 'Nukenin'
                ]);
                $db->sql_query($sql);
            }
            return $json_response->send([
                'action'	=> 'MISSION_INSERTED',
                ],
            );
        }
    }
    else if($modify_mission) {
        $mission_id = $request->variable('mission_id', '');
        $mission_title = utf8_normalize_nfc($request->variable('mission_title', '', true));
        $mission_description = utf8_normalize_nfc($request->variable('mission_description', '', true));
        $mission_conditions = utf8_normalize_nfc($request->variable('mission_conditions', '', true));
        $mission_earnings = utf8_normalize_nfc($request->variable('mission_earnings', '', true));
        $mission_infos = utf8_normalize_nfc($request->variable('mission_infos', '', true));
        $mission_rank = $request->variable('mission_rank', 'D');
        $mission_max_users = $request->variable('mission_max_users', 1);
        $sql = 'UPDATE '.MISSIONS_TABLE.' SET '.$db->sql_build_array('UPDATE', [
            'mission_title' => $mission_title,
            'mission_description' => $mission_description,
            'mission_condition' => $mission_conditions,
            'mission_earning' => $mission_earnings,
            'mission_infos' => $mission_infos,
            'mission_rank' => $mission_rank,
            'mission_max_users' => $mission_max_users
        ])
        ." WHERE mission_id = $mission_id";
        $db->sql_query($sql);
        return $json_response->send([
            'action' => 'MISSION_MODIFIED'
        ]);
    }
    else if($validate_mission) {
        $mission_id = $request->variable('mission_id', '');
        $sql = 'UPDATE '.MISSIONS_TABLE.' SET '.$db->sql_build_array('UPDATE', [
            'mission_id' => $mission_id,
            'mission_status' => MISSION_VALIDATED
        ]);
        $db->sql_query($sql);
        return $json_response->send([
            'action' => 'MISSION_VALIDATED',
            'title' => utf8_normalize_nfc($request->variable('mission_title', '', true))
        ]);
    }
    else if($delete_mission) {
        $mission_id = $request->variable('mission_id', '');
        $sql = 'DELETE FROM '.MISSIONS_TABLE.' WHERE mission_id = '.$mission_id;
        $db->sql_query($sql);
        return $json_response->send([
            'action' => 'MISSION_DELETED',
            'title' => utf8_normalize_nfc($request->variable('mission_title', '', true))
        ]);
    }
    else if($subscribe_mission) {
        $mission_id = $request->variable('mission_id', '');
        $user_rank = get_rank($user->data['user_id']);
        if(!basic_can_subscribe($mission_id)) {
            return $json_response->send([
                'action' => 'MISSION_SUB_FAIL'
            ]);
        }
        $sql = 'INSERT INTO '.MISSION_USERS_TABLE.' '.$db->sql_build_array('INSERT', [
            'mission_id' => $mission_id,
            'user_id' => $user->data['user_id'],
            'user_rp_rank' => $user_rank,
            'username' => $user->data['username']
        ]);
        $db->sql_query($sql);
        return $json_response->send([
            'action' => 'MISSION_SUBSCRIBED'
        ]);
    }
    else if($unsubscribe_mission) {
        $mission_id = $request->variable('mission_id', 0);
        $sql = 'DELETE FROM '.MISSION_USERS_TABLE.' WHERE mission_id = '.$mission_id.' AND user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        return $json_response->send([
            'action' => 'MISSION_UNSUBSCRIBED'
        ]);
    }
}

function get_missions_to_subscribe() {
    global $db, $template;
    $req = [
        'SELECT' => 'mt.mission_id AS mission_id, mt.mission_rank AS mission_rank, mt.mission_title AS mission_title, mt.mission_description AS mission_description, mt.mission_condition AS mission_condition, mt.mission_earning AS mission_earning, mt.mission_infos AS mission_infos, mt.mission_max_users AS mission_max_users',
        'FROM' => [
            MISSIONS_TABLE => 'mt'
        ],
        'WHERE' => 'mt.mission_status = "'.MISSION_VALIDATED.'"'
    ];
    $sql = $db->sql_build_query('SELECT', $req);
    $query = $db->sql_query($sql);
    while ($row = $db->sql_fetchrow($query)) {
        $mission_id = $row['mission_id'];
        $max_users = $row['mission_max_users'];
        $groups = get_groups_to_validate($mission_id);
        if(check_group($mission_id)) {
            $template->assign_block_vars('missions_to_subscribe', [
                'MS_ID' => $mission_id,
                'MS_GROUPS' => $groups,
                'MS_RANK' => $row['mission_rank'],
                'MS_TITLE' => $row['mission_title'],
                'MS_DESCRIPTION' => $row['mission_description'],
                'MS_CONDITION' => $row['mission_condition'],
                'MS_EARNING' => $row['mission_earning'],
                'MS_INFOS' => $row['mission_infos'],
                'MS_MAX_USERS' => $max_users,
                'MS_PLAYERS' => get_player_names($mission_id),
                'MS_CAN_SUBSCRIBE' => basic_can_subscribe($mission_id) && check_number_of_players($mission_id, $max_users),
                'MS_CAN_UNSUBSCRIBE' => !basic_can_subscribe($mission_id)
            ]);
        }
    }
}

function get_missions_to_validate() {
    global $db, $template, $user;
    if(my_group(ADMINISTRATOR_ID, $user->data['user_id'])) {
        $req = [
            'SELECT' => 'mt.mission_id AS mission_id, mt.mission_rank AS mission_rank, mt.mission_title AS mission_title, mt.mission_description AS mission_description, mt.mission_condition AS mission_condition, mt.mission_earning AS mission_earning, mt.mission_infos AS mission_infos, mt.mission_max_users AS mission_max_users',
            'FROM' => [
                MISSIONS_TABLE => 'mt'
            ],
            'WHERE' => 'mt.mission_status = "'.MISSION_CREATED.'"'
        ];
        $sql = $db->sql_build_query('SELECT', $req);
        $query = $db->sql_query($sql);
        while ($row = $db->sql_fetchrow($query)) {
            $mission_id = $row['mission_id'];
            $groups = get_groups_to_validate($mission_id);
            $template->assign_block_vars('missions_to_validate', [
                'MV_ID' => $mission_id,
                'MV_GROUPS' => $groups,
                'MV_RANK' => $row['mission_rank'],
                'MV_TITLE' => $row['mission_title'],
                'MV_DESCRIPTION' => $row['mission_description'],
                'MV_CONDITION' => $row['mission_condition'],
                'MV_EARNING' => $row['mission_earning'],
                'MV_INFOS' => $row['mission_infos'],
                'MV_MAX_USERS' => $row['mission_max_users']
            ]);
        }
    }
}

/**
 * Get the groups of the mission to be validated
 * @param int mission_id
 * @return string groups
 */
function get_groups_to_validate($mission_id) {
    global $db;
    $req = [
        'SELECT' => 'mgt.group_name AS group_name',
        'FROM' => [
            MISSION_GROUPS_TABLE => 'mgt'
        ],
        'WHERE' => 'mgt.mission_id = '.$mission_id
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    $groups = array();
    while ($row = $db->sql_fetchrow($query)) {
        array_push($groups, $row['group_name']);
    }
    return implode(', ', $groups);
}

/**
 * Get the players who are subscribed to the mission
 * @param int mission_id
 * @return string players
 */
function get_player_names($mission_id) {
    global $db;
    $req = [
        'SELECT' => 'mut.username AS username',
        'FROM' => [
            MISSION_USERS_TABLE => 'mut'
        ],
        'WHERE' => 'mut.mission_id = '.$mission_id
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    $players = array();
    while($row = $db->sql_fetchrow($query)) {
        array_push($players, $row['username']);
    }
    return implode(', ', $players);
}

/**
 * Check if the player isn't already subscribed in the mission
 * @param int mission_id
 * @return bool
 */
function basic_can_subscribe($mission_id) {
    global $db, $user;
    $req = [
        'SELECT' => 'mut.user_id AS user_id',
        'FROM' => [
            MISSION_USERS_TABLE => 'mut'
        ],
        'WHERE' => 'mut.mission_id = '.$mission_id
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    $result = array();
    while($row = $db->sql_fetchrow($query)) {
        array_push($result, $row['user_id']);
    }
    return !(in_array($user->data['user_id'], $result));
}

/**
 * Check if the maximum number of player isn't reach
 * @param int mission_id
 * @param int max
 * @return bool
 */
function check_number_of_players($mission_id, $max) {
    global $db;
    $req = [
        'SELECT' => 'COUNT(*) AS number',
        'FROM' => [
            MISSION_USERS_TABLE => 'mut'
        ],
        'WHERE' => 'mut.mission_id = '.$mission_id
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    $number = $db->sql_fetchrow($query)['number'];
    return $number < $max;
}

/**
 * See if you have the permissions to see the mission
 * @param int mission_id
 * @return bool
 */
function check_group($mission_id) {
    global $db, $user;
    $req = [
        'SELECT' => 'mgt.group_id AS group_id',
        'FROM' => [
            MISSION_GROUPS_TABLE => 'mgt'
        ],
        'WHERE' => 'mgt.mission_id = '.$mission_id
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    if(my_group(ADMINISTRATOR_ID, $user->data['user_id'])) {
        return true;
    }
    else if(my_group(KIRIGAKURE_ID, $user->data['user_id'])) {
        return in_array(KIRIGAKURE_ID, $db->sql_fetchrowset($query));
    }
    else if(my_group(IWAGAKURE_ID, $user->data['user_id'])) {
        return in_array(IWAGAKURE_ID, $db->sql_fetchrowset($query));
    }
    else if(my_group(SUNAGAKURE_ID, $user->data['user_id'])) {
        return in_array(SUNAGAKURE_ID, $db->sql_fetchrowset($query));
    }
    else if(my_group(KUMOGAKURE_ID, $user->data['user_id'])) {
        return in_array(KUMOGAKURE_ID, $db->sql_fetchrowset($query));
    }
    else if(my_group(KONOHAGAKURE_ID, $user->data['user_id'])) {
        return in_array(KONOHAGAKURE_ID, $db->sql_fetchrowset($query));
    }
    else if(my_group(NUKENIN_ID, $user->data['user_id'])) {
        return in_array(NUKENIN_ID, $db->sql_fetchrowset($query));
    }
    return false;
}

get_missions_to_validate();
get_missions_to_subscribe();

$template->assign_vars(array(
    'MISSION_IS_KIRI' => my_group(KIRIGAKURE_ID, $user->data['user_id']),
    'MISSION_IS_IWA' => my_group(IWAGAKURE_ID, $user->data['user_id']),
    'MISSION_IS_SUNA' => my_group(SUNAGAKURE_ID, $user->data['user_id']),
    'MISSION_IS_KUMO' => my_group(KUMOGAKURE_ID, $user->data['user_id']),
    'MISSION_IS_KONOHA' => my_group(KONOHAGAKURE_ID, $user->data['user_id']),
    'MISSION_IS_NUKE' => my_group(NUKENIN_ID, $user->data['user_id']),
    'MISSION_IS_ADMIN' => my_group(ADMINISTRATOR_ID, $user->data['user_id'])
));

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'missions_board.html')
);

page_footer();