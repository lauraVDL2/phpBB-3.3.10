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

$is_user = ($ft_user_id == $user->data['user_id']);
$is_admin = my_group(ADMINISTRATOR_ID, $user->data['user_id']);

$marionnette_num_techniques = [
    'D' => 1,
    'C' => 2,
    'B' => 3,
    'A' => 4,
    'S' => 5
];

if(!$is_user && ! $is_admin) {
    echo 'Vous ne pouvez pas voir la FT d\'un autre joueur !';
    die();
}

if($request->is_ajax()) {
    $ft_md_button = $request->variable('ft_md_button', '');
    $modify_ft_button = $request->variable('modify_ft_button', '');
    $validate_ft_button = $request->variable('ft_validate_button', '');
    $create_tech_button = $request->variable('create_tech_button', '');
    $ft_delete_button = $request->variable('ft_delete_button', '');
    if($ft_md_button) {
        $kt_tech_id = $request->variable('kt_tech_id', 0);
        $sql = 'UPDATE '.MARIONNETTES_TABLE." SET marionnette_technique_v = 0 WHERE marionnette_technique_id = $kt_tech_id";
        $db->sql_query($sql);
        return $json_response->send([
            'action'	=> 'TECHNIQUE_TO_BE_VALIDATED',
            ],
        );
    }
    else if($ft_delete_button) {
        $kt_tech_id = $request->variable('kt_tech_id', 0);
        $sql = 'DELETE FROM '.MARIONNETTES_TABLE." WHERE marionnette_technique_id = $kt_tech_id";
        $db->sql_query($sql);
        return $json_response->send([
            'action'	=> 'TECHNIQUE_DELETED',
            ],
        );
    }
    else if($modify_ft_button) {
        $tech_id = $request->variable('modify_ft_id', 0);
        $tech_name = utf8_normalize_nfc($request->variable('modify_ft_name', '', true));
        $tech_descr = utf8_normalize_nfc(html_entity_decode($request->variable('modify_ft_description', '', true)));    
        $sql = 'UPDATE '.MARIONNETTES_TABLE.' SET '.$db->sql_build_array('UPDATE', [
            'marionnette_technique_name' => $tech_name,
            'marionnette_technique_descr' => $tech_descr
        ])." WHERE marionnette_technique_id = $tech_id";
        $db->sql_query($sql);
        return $json_response->send([
            'action'	=> 'TECHNIQUE_MODIFIED',
            ],
        );
    }
    else if($validate_ft_button) {
        $tech_id = $request->variable('modify_ft_id', 0);
        $sql = 'UPDATE '.MARIONNETTES_TABLE." SET marionnette_technique_v = 1 WHERE marionnette_technique_id = $tech_id";
        $db->sql_query($sql);
        return $json_response->send([
            'action'	=> 'TECHNIQUE_VALIDATED',
            ],
        );
    }
    else if($create_tech_button) {
        $type = utf8_normalize_nfc($request->variable('first_ft_select', '', true));
        $fuinjutsu = utf8_normalize_nfc($request->variable('fuinjutsu_ft_type', '', true));
        $irou_jutsu = utf8_normalize_nfc($request->variable('irou_jutsu_ft_type', '', true));
        $rank_select = utf8_normalize_nfc($request->variable('rank_select', '', true));
        $tech_name = utf8_normalize_nfc($request->variable('new_ft_name', '', true));
        $offensive = utf8_normalize_nfc($request->variable('new_ft_offensive', '', true));
        $tech_descr = utf8_normalize_nfc($request->variable('new_ft_technique', '', true));
        $spe = '';
        $is_offensive = 0;
        if($fuinjutsu) {
            $spe = $fuinjutsu;
        }
        else if($irou_jutsu) {
            $spe = $irou_jutsu;
        }
        if($offensive == 'offensive') {
            $is_offensive = 1;
        }
        else {
            $is_offensive = 0;
        }
        $marionnette_id = $request->variable('marionnette_new_tech_id', 0);
        $marionnette_name = utf8_normalize_nfc($request->variable('marionnette_new_tech_name', '', true));
        $marionnette_rank = utf8_normalize_nfc($request->variable('marionnette_new_tech_rank', '', true));
        if($marionnette_id > 0) {
            $sql = 'INSERT INTO '.MARIONNETTES_TABLE.' '.$db->sql_build_array('INSERT', [
                'marionnette_id' => $marionnette_id,
                'marionnette_name' => $marionnette_name,
                'marionnette_rank' => $marionnette_rank,
                'marionnette_user_id' => $ft_user_id,
                'marionnette_technique_type' => 'Ninjutsu',
                'marionnette_technique_rank' => $rank_select,
                'marionnette_technique_subtype' => $type,
                'marionnette_technique_subspe' => $spe,
                'marionnette_technique_name' => $tech_name,
                'marionnette_technique_descr' => $tech_descr,
                'marionnette_technique_v' => 0,
                'marionnette_technique_off' => $is_offensive
            ]);
            $db->sql_query($sql);
            return $json_response->send([
                'action'	=> 'TECHNIQUE_CREATED',
                ],
            );
        }
    }
}

function get_marionnettes_to_be_validated($technique_id) {
    global $db, $template, $ft_user_id;
    $req = [
        'SELECT' => 'kt.marionnette_technique_id, kt.marionnette_technique_off, kt.marionnette_technique_type, kt.marionnette_technique_rank, kt.marionnette_technique_subtype, kt.marionnette_technique_subspe, kt.marionnette_technique_name, kt.marionnette_technique_descr, kt.marionnette_technique_off',
        'FROM' => [
            MARIONNETTES_TABLE => 'kt'
        ],
        'WHERE' => $db->sql_build_array('SELECT', [
            'marionnette_user_id' => (int)$ft_user_id,
            'marionnette_id' => (int)$technique_id,
            'marionnette_technique_v' => 0,
        ])
    ];
    $sql = $db->sql_build_query('SELECT', $req);
    $query = $db->sql_query($sql);
    while ($row2 = $db->sql_fetchrow($query)) {
        $template->assign_block_vars('marionnettes_loop.kvtechniques_loop', [
            'KTV_TECH_ID' => $row2['marionnette_technique_id'],
            'KTV_TECH_OFFENSIVE' => $row2['marionnette_technique_off'],
            'KTV_TECH_NAME' => $row2['marionnette_technique_name'],
            'KTV_TECH_TYPE' => $row2['marionnette_technique_type'],
            'KTV_TECH_RANK' => $row2['marionnette_technique_rank'],
            'KTV_TECH_SUBTYPE' => $row2['marionnette_technique_subtype'],
            'KTV_TECH_SUBSPE' => $row2['marionnette_technique_subspe'],
            'KTV_TECH_DESCR' => $row2['marionnette_technique_descr'],
        ]);
    }
}

function get_marionnettes_validated($technique_id) {
    global $db, $template, $ft_user_id;
    $req2 = [
        'SELECT' => 'kt.marionnette_technique_id, kt.marionnette_technique_type, kt.marionnette_technique_rank, kt.marionnette_technique_subtype, kt.marionnette_technique_subspe, kt.marionnette_technique_name, kt.marionnette_technique_descr, kt.marionnette_technique_off',
        'FROM' => [
            MARIONNETTES_TABLE => 'kt'
        ],
        'WHERE' => $db->sql_build_array('SELECT', [
            'marionnette_user_id' => (int)$ft_user_id,
            'marionnette_id' => (int)$technique_id,
            'marionnette_technique_v' => 1,
        ])
    ];
    $sql2 = $db->sql_build_query('SELECT', $req2);
    $query2 = $db->sql_query($sql2);
    while ($row2 = $db->sql_fetchrow($query2)) {
        $rank = $row2['marionnette_technique_rank'];
        $offensive = $row2['marionnette_technique_off'];
        $pv = 0;
        $pc = 0;
        switch($rank) {
            case 'D':
                if($offensive) {
                    $pv = 10;
                }
                $pc = 4;
                break;
            case 'C':
                if($offensive) {
                    $pv = 13;
                }
                $pc = 7;
                break;
            case 'B':
                if($offensive) {
                    $pv = 17;
                }
                $pc = 10;
                break;
            case 'A':
                if($offensive) {
                    $pv = 23;
                }
                $pc = 13;
                break;
            case 'S':
                if($offensive) {
                    $pv = 30;
                }
                $pc = 22;
                break;
        }
        $template->assign_block_vars('marionnettes_loop.ktechniques_loop', [
            'KT_TECH_ID' => $row2['marionnette_technique_id'],
            'KT_TECH_NAME' => $row2['marionnette_technique_name'],
            'KT_TECH_TYPE' => $row2['marionnette_technique_type'],
            'KT_TECH_RANK' => $rank,
            'KT_TECH_SUBTYPE' => $row2['marionnette_technique_subtype'],
            'KT_TECH_SPE' => $row2['marionnette_technique_subspe'],
            'KT_TECH_DESCR' => $row2['marionnette_technique_descr'],
            'KT_TECH_DAMAGE' => $pv,
            'KT_TECH_CHAKRA' => $pc
        ]);
    }
}

function get_marionnettes() {
    global $ft_user_id, $db, $template, $marionnette_num_techniques;
    $req = [
        'SELECT' => 'utt.technique_id, utt.technique_rank, utt.technique_name',
        'FROM' => [
            USER_TECHNIQUES_TABLE => 'utt'
        ],
        'WHERE' => $db->sql_build_array('SELECT', [
            'user_id' => (int)$ft_user_id,
            'technique_subtype' => 'Hitokugutsu'
        ])
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    while ($row = $db->sql_fetchrow($query)) {
        $marionnette_id = $row['technique_id'];
        $marionnette_rank = $row['technique_rank'];
        $can_create = (int)$marionnette_num_techniques[$marionnette_rank] > can_create($marionnette_id);
        $types = get_marionnette_tech_type($marionnette_id);
        $pv = 0;
        $pc = 0;
        switch($marionnette_rank) {
            case 'D':
                $pv = 9;
                $pc = 9;
                break;
            case 'C':
                $pv = 18;
                $pc = 18;
                break;
            case 'B':
                $pv = 27;
                $pc = 27;
                break;
            case 'A':
                $pv = 36;
                $pc = 36;
                break;
            case 'S':
                $pv = 45;
                $pc = 45;
                break;
        }
        $template->assign_block_vars('marionnettes_loop', [
            'KT_TECHNIQUE_NAME' => $row['technique_name'],
            'KT_TECHNIQUE_RANK' => $marionnette_rank,
            'KT_TECHNIQUE_ID' => $marionnette_id,
            'KT_CAN_CREATE' => $can_create,
            'KT_TYPE' => $types['marionnette_technique_subtype'],
            'KT_SPE' => $types['marionnette_technique_subspe'],
            'KT_PV' => $pv,
            'KT_PC' => $pc
        ]);
        get_marionnettes_to_be_validated($marionnette_id);
        get_marionnettes_validated($marionnette_id);
    }
}

function can_create($marionnette_id) {
    global $db;
    $req = [
        'SELECT' => 'COUNT(*) AS num',
        'FROM' => [
            MARIONNETTES_TABLE => 'kt'
        ],
        'WHERE' => "kt.marionnette_id = $marionnette_id"
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    return (int)$db->sql_fetchrow($query)['num'];
}

function get_marionnette_tech_type($marionnette_id) {
    global $db;
    $req = [
        'SELECT' => 'kt.marionnette_technique_subtype, kt.marionnette_technique_subspe',
        'FROM' => [
            MARIONNETTES_TABLE => 'kt'
        ],
        'WHERE' => "marionnette_id = $marionnette_id"
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    return $db->sql_fetchrow($query);
}

function get_kt_username() {
    global $db, $ft_user_id;
    $req = [
        'SELECT' => 'ut.username',
        'FROM' => [
            USERS_TABLE => 'ut'
        ],
        'WHERE' => "user_id = $ft_user_id"
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    return $db->sql_fetchrow($query)['username'];
}

get_marionnettes();

$template->assign_vars(array(
    'KT_USER_ID' => $ft_user_id,
    'KT_USERNAME' => get_kt_username(),
    'KT_IS_ADMIN' => $is_admin
));

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'marionnettes.html')
);

page_footer();