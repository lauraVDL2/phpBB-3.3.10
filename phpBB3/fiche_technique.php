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
}

if($request->is_ajax()) {
    $md_technique_id = $request->variable('modify_ft_id', 0);
    $md_ft_name = utf8_normalize_nfc($request->variable('modify_ft_name', '', true));
    $md_ft_desc = utf8_normalize_nfc(html_entity_decode($request->variable('modify_ft_description', '', true)));
    $md_button = $request->variable('modify_ft_button', '');
    $validate_button = $request->variable('ft_validate_button', '');
    if($md_button != '' && $md_technique_id != 0) {
        $sql = 'UPDATE '.USER_TECHNIQUES_TABLE.' SET technique_name = "'.$md_ft_name.'", technique_description = "'.$md_ft_desc.'" WHERE user_id = '.$ft_user_id.' AND technique_id = '.$md_technique_id;
        $db->sql_query($sql);
        return $json_response->send([
            'my_action'	=> 'MODIFY',
            ],
        );
    }
    else if($validate_button != '' && $md_technique_id != 0) {
        $sql = 'UPDATE '.USER_TECHNIQUES_TABLE.' SET technique_validated = 1 WHERE user_id = '.$ft_user_id.' AND technique_id = '.$md_technique_id;
        $db->sql_query($sql);
        return $json_response->send([
            'my_action'	=> 'VALIDATE',
            ],
        );
    }
}

if($request->is_ajax()) {
    $ft_validated_id = $request->variable('validated_ft_id', 0);
    $ft_validated_rank = $request->variable('validated_ft_rank', '');
    $ft_delete_button = $request->variable('ft_delete_button', '');
    if($ft_delete_button != '' && $ft_validated_id != 0) {
        $sql = 'DELETE FROM '.USER_TECHNIQUES_TABLE.' WHERE user_id = '.$ft_user_id.' AND technique_id = '.$ft_validated_id;
        $db->sql_query($sql);
        if($ft_validated_rank == 'D') {
            $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET d_techniques = d_techniques + 1 WHERE user_id = '.$ft_user_id;
            $db->sql_query($sql);
        }
        else if($ft_validated_rank == 'C') {
            $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET c_techniques = c_techniques + 1 WHERE user_id = '.$ft_user_id;
            $db->sql_query($sql);
        }
        else if($ft_validated_rank == 'B') {
            $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET b_techniques = b_techniques + 1 WHERE user_id = '.$ft_user_id;
            $db->sql_query($sql);
        }
        else if($ft_validated_rank == 'A') {
            $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET a_techniques = a_techniques + 1 WHERE user_id = '.$ft_user_id;
            $db->sql_query($sql);
        }
        else if($ft_validated_rank == 'S') {
            $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET s_techniques = s_techniques + 1 WHERE user_id = '.$ft_user_id;
            $db->sql_query($sql);
        }
        return $json_response->send([
            'my_action'	=> 'DELETE_TECHNIQUE',
            ],
        );
    }
}

function create_techniques($art_technique, $type_technique, $rank_technique) {
    global $db, $ft_user_id, $new_ft_technique, $new_ft_name, $json_response;
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
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
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

function get_techniques($type) {
    global $ft_user_id, $db, $template;
    $req = [
        'SELECT' => 'utt.technique_id AS technique_id, utt.technique_subtype AS technique_type, utt.technique_rank AS technique_rank, utt.technique_name AS technique_name, utt.technique_description AS technique_description',
        'FROM' => [
            USER_TECHNIQUES_TABLE => 'utt',
        ],
        'WHERE' => 'user_id = '.$ft_user_id.' AND technique_validated = 1 AND technique_type = "'.$type.'"'
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    while ($row = $db->sql_fetchrow($query)) {
        $template->assign_block_vars($type.'_loop', [
            'FT_TECHNIQUE_ID' => $row['technique_id'],
            'FT_TECHNIQUE_SUBTYPE' => $row['technique_type'],
            'FT_TECHNIQUE_RANK' => $row['technique_rank'],
            'FT_TECHNIQUE_NAME' => $row['technique_name'],
            'FT_TECHNIQUE_DESCRIPTION' => $row['technique_description']
        ]);
    }
}

function get_not_validated() {
    global $ft_user_id, $db, $template;
    $req = [
        'SELECT' => 'utt.technique_id AS technique_id, utt.technique_subtype AS technique_type, utt.technique_rank AS technique_rank, utt.technique_name AS technique_name, utt.technique_description AS technique_description',
        'FROM' => [
            USER_TECHNIQUES_TABLE => 'utt',
        ],
        'WHERE' => 'user_id = '.$ft_user_id.' AND technique_validated = 0'
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    while ($row = $db->sql_fetchrow($query)) {
        $template->assign_block_vars('to_validate_loop', [
            'FT_TECHNIQUE_ID' => $row['technique_id'],
            'FT_TECHNIQUE_SUBTYPE' => $row['technique_type'],
            'FT_TECHNIQUE_RANK' => $row['technique_rank'],
            'FT_TECHNIQUE_NAME' => $row['technique_name'],
            'FT_TECHNIQUE_DESCRIPTION' => $row['technique_description']
        ]);
    }
}

$ft_user_infos = get_ft_user_infos();
get_techniques('Ninjutsu');
get_techniques('Taijutsu');
get_techniques('Genjutsu');
get_not_validated();

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
    'FT_THIRD_ELEMENT' => $ft_user_infos['third_element'],
    'FT_IS_KIRI' => my_group(KIRIGAKURE_ID),
    'FT_IS_IWA' => my_group(IWAGAKURE_ID),
    'FT_IS_SUNA' => my_group(SUNAGAKURE_ID),
    'FT_IS_ADMIN' => my_group(ADMINISTRATOR_ID),
));

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'fiche_technique.html')
);

page_footer();