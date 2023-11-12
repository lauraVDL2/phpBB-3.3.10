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

if($request->is_ajax()) {
    $new_mission = $request->variable('create_mission_button', '');
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
                'mission_validated' => 0,
                'mission_finished' => 0

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
}

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