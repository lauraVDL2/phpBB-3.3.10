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

$ft_user_id = $request->variable('uid', '');

if($request->is_ajax()) {
    $art_technique = utf8_normalize_nfc($request->variable('first_ft_select', '', true));
    $new_ft_name = utf8_normalize_nfc(html_entity_decode($request->variable('new_ft_name', '', true)));
    $ninjutsu_type = utf8_normalize_nfc($request->variable('technique_nj_type', '', true));
    $taijutsu_type = utf8_normalize_nfc($request->variable('technique_tj_type', '', true));
    $genjutsu_type = utf8_normalize_nfc($request->variable('technique_gj_type', '', true));
    $ninjutsu_rank = utf8_normalize_nfc($request->variable('technique_nj_rank', '', true));
    $taijutsu_rank = utf8_normalize_nfc($request->variable('technique_tj_rank', '', true));
    $genjutsu_rank = utf8_normalize_nfc($request->variable('technique_gj_rank', '', true));
    $new_ft_technique = utf8_normalize_nfc(html_entity_decode($request->variable('new_ft_technique', '', true)));
    create_techniques($art_technique, $ninjutsu_type, $ninjutsu_rank);
    create_techniques($art_technique, $taijutsu_type, $taijutsu_rank);
    create_techniques($art_technique, $genjutsu_type, $genjutsu_rank);
    return $json_response->send([
        'is_ok'	=> true,
        ],
    );
}

function create_techniques($art_technique, $type_technique, $rank_technique) {
    global $db, $ft_user_id, $new_ft_technique, $new_ft_name;
    if($art_technique != '' && $rank_technique != '' && $type_technique != '' && $new_ft_technique != '' && $new_ft_name != '') {
        $sql = 'INSERT INTO '.USER_TECHNIQUES_TABLE.' SET user_id = '.$ft_user_id.', technique_type = "'.$art_technique.'", technique_subtype = "'.$type_technique.'", technique_rank = "'.$rank_technique.'", technique_description = "'.$new_ft_technique.'", technique_name = "'.$new_ft_name.'"';
        $db->sql_query($sql);
        if($rank_technique == 'S') {
            $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET s_techniques = s_techniques - 1 WHERE user_id = '.$ft_user_id;
            $db->sql_query($sql);
        }
        else if($rank_technique == 'A') {
            $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET a_techniques = a_techniques - 1 WHERE user_id = '.$ft_user_id;
            $db->sql_query($sql);
        }
        else if($rank_technique == 'B') {
            $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET b_techniques = b_techniques - 1 WHERE user_id = '.$ft_user_id;
            $db->sql_query($sql);
        }
        else if($rank_technique == 'C') {
            $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET c_techniques = c_techniques - 1 WHERE user_id = '.$ft_user_id;
            $db->sql_query($sql);
        }
        else if($rank_technique == 'D') {
            $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET d_techniques = d_techniques - 1 WHERE user_id = '.$ft_user_id;
            $db->sql_query($sql);
        }
    }
}

function get_ft_user_infos() {
    global $ft_user_id, $db;
    $req = [
        'SELECT' => 'ut.username AS username, ut.user_first_element AS first_element, ut.user_second_element AS second_element, ut.user_third_element AS third_element,'
        .' gtt.d_techniques AS d_techniques, gtt.c_techniques AS c_techniques, gtt.b_techniques AS b_techniques, gtt.a_techniques AS a_techniques, gtt.s_techniques AS s_techniques',
        'FROM' => [
            USERS_TABLE => 'ut',
        ],
        'LEFT_JOIN' => [
            [
                'FROM' => [ GAINED_TECHNIQUES_TABLE => 'gtt' ],
                'ON' => 'gtt.user_id = ut.user_id',
            ]
        ],
        'WHERE' => 'ut.user_id = '.$ft_user_id,
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
	return $db->sql_fetchrow($query);
}

$ft_user_infos = get_ft_user_infos();

$template->assign_vars(array(
    'FT_USER_ID' => $ft_user_id,
    'FT_USERNAME' => $ft_user_infos['username'],
    'FT_D_TECHNIQUES' => $ft_user_infos['d_techniques'],
    'FT_C_TECHNIQUES' => $ft_user_infos['c_techniques'],
    'FT_B_TECHNIQUES' => $ft_user_infos['b_techniques'],
    'FT_A_TECHNIQUES' => $ft_user_infos['a_techniques'],
    'FT_S_TECHNIQUES' => $ft_user_infos['s_techniques'],
    'FT_TECHNIQUES_TO_USE' => $ft_user_infos['d_techniques'] + $ft_user_infos['c_techniques'] + $ft_user_infos['b_techniques'] + $ft_user_infos['a_techniques'] + $ft_user_infos['s_techniques'],
    'FT_FIRST_ELEMENT' => $ft_user_infos['first_element'],
    'FT_SECOND_ELEMENT' => $ft_user_infos['second_element'],
    'FT_THIRD_ELEMENT' => $ft_user_infos['third_element']
));

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'fiche_technique.html')
);

page_footer();