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

if(!$is_user && ! $is_admin) {
    echo 'Vous ne pouvez pas voir la FT d\'un autre joueur !';
    die();
}

//INVENTORY
if($request->is_ajax()) {
    $inventory_button = $request->variable('update_inventory', '');
    if($inventory_button) {
        $inventory = utf8_normalize_nfc($request->variable('inventory', '', true));
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET gt_inventory = "'.$inventory.'" WHERE user_id = '.$ft_user_id;
        $db->sql_query($sql);
            return $json_response->send([
                'action'	=> 'INVENTORY_UPDATED',
                ],
            );
    }
}

//TALENTS
if($request->is_ajax()) {
    $add_ft_talent_button = $request->variable('add_ft_talent_button', '');
    $ft_delete_talent_button = $request->variable('ft_delete_talent_button', '');
    if($add_ft_talent_button) {
        $talent_id = $request->variable('add_ft_talent', 0);
        if($talent_id) {
            $sql = 'INSERT INTO '.USER_TALENTS_TABLE.' '.$db->sql_build_array('INSERT', [
                'talent_id' => $talent_id,
                'user_id' => $ft_user_id
            ]);
            $db->sql_query($sql);
            return $json_response->send([
                'action'	=> 'TALENT_ADDED',
                ],
            );
        }
    }
    else if($ft_delete_talent_button) {
        $talent_id = $request->variable('talent_id', 0);
        $sql = 'DELETE FROM '.USER_TALENTS_TABLE." WHERE talent_id = $talent_id AND user_id = $ft_user_id";
        $db->sql_query($sql);
        return $json_response->send([
            'action'	=> 'TALENT_DELETED',
            ],
        );
    }
}

//CREATING TECHNIQUES
if($request->is_ajax()) {
    $art_technique = utf8_normalize_nfc($request->variable('first_ft_select', '', true));
    $new_ft_name = utf8_normalize_nfc(html_entity_decode($request->variable('new_ft_name', '', true)));
    $kekkei_genkai_type = utf8_normalize_nfc($request->variable('technique_kg_type', '', true));
    $hiden_type = utf8_normalize_nfc($request->variable('technique_hiden_type', '', true));
    $ninjutsu_type = utf8_normalize_nfc($request->variable('technique_nj_type', '', true));
    $taijutsu_type = utf8_normalize_nfc($request->variable('technique_tj_type', '', true));
    $genjutsu_type = utf8_normalize_nfc($request->variable('technique_gj_type', '', true));
    $ninjutsu_rank = utf8_normalize_nfc($request->variable('technique_nj_rank', '', true));
    $taijutsu_rank = utf8_normalize_nfc($request->variable('technique_tj_rank', '', true));
    $genjutsu_rank = utf8_normalize_nfc($request->variable('technique_gj_rank', '', true));
    $hiden_rank = utf8_normalize_nfc($request->variable('technique_hiden_rank', '', true));
    $cost_technique = utf8_normalize_nfc($request->variable('new_ft_cost', '', true));
    $offensive = utf8_normalize_nfc($request->variable('new_ft_offensive', '', true));

    $kekkei_genkai_rank = utf8_normalize_nfc($request->variable('technique_kg_rank', '', true));
    $new_ft_technique = utf8_normalize_nfc(html_entity_decode($request->variable('new_ft_technique', '', true)));
    //SPECIALIZATIONS
    $technique_subspe = '';
    $bukijutsu_subspe = utf8_normalize_nfc($request->variable('buki_ft_type', '', true));
    if($bukijutsu_subspe != '') $technique_subspe = $bukijutsu_subspe;
    $iroujutsu_subspe = utf8_normalize_nfc($request->variable('irou_jutsu_ft_type', '', true));
    if($iroujutsu_subspe != '') $technique_subspe = $iroujutsu_subspe;
    $fuinjutsu_subspe = utf8_normalize_nfc($request->variable('fuinjutsu_ft_type', '', true));
    if($fuinjutsu_subspe != '') $technique_subspe = $fuinjutsu_subspe;
    //INSERT INTO DATABASE
    create_techniques($art_technique, $ninjutsu_type, $ninjutsu_rank, $technique_subspe, $cost_technique, $offensive);
    create_techniques($art_technique, $taijutsu_type, $taijutsu_rank, $technique_subspe, $cost_technique, $offensive);
    create_techniques($art_technique, $genjutsu_type, $genjutsu_rank, $technique_subspe, $cost_technique, $offensive);
    create_techniques($art_technique, $kekkei_genkai_type, $kekkei_genkai_rank, $technique_subspe, $cost_technique, $offensive);
    create_techniques($art_technique, $hiden_type, $hiden_rank, $technique_subspe, $cost_technique, $offensive);
}

//MODIFY OR VALIDATE TECHNIQUES
if($request->is_ajax()) {
    $md_technique_id = $request->variable('modify_ft_id', 0);
    $md_ft_name = utf8_normalize_nfc($request->variable('modify_ft_name', '', true));
    $md_ft_desc = utf8_normalize_nfc(html_entity_decode($request->variable('modify_ft_description', '', true)));
    $md_button = $request->variable('modify_ft_button', '');
    $validate_button = $request->variable('ft_validate_button', '');
    $modify_cost = utf8_normalize_nfc($request->variable('modify_cost', '', true));
    if($md_button != '' && $md_technique_id != 0) {
        $sql = 'UPDATE '.USER_TECHNIQUES_TABLE.' SET technique_name = "'.$md_ft_name.'", technique_cost = "'.$modify_cost.'", technique_description = "'.$md_ft_desc.'" WHERE user_id = '.$ft_user_id.' AND technique_id = '.$md_technique_id;
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
    $ft_md_button = $request->variable('ft_md_button', '');
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
    else if($ft_md_button != '' && $ft_validated_id != 0) {
        $sql = 'UPDATE '.USER_TECHNIQUES_TABLE.' SET technique_validated = 0 WHERE user_id = '.$ft_user_id.' AND technique_id = '.$ft_validated_id;
        $db->sql_query($sql);
        return $json_response->send([
            'my_action'	=> 'MODIFY_TECHNIQUE',
            ],
        );
    }
}

function create_techniques($art_technique, $type_technique, $rank_technique, $technique_subspe, $cost_technique, $offensive) {
    global $db, $ft_user_id, $new_ft_technique, $new_ft_name, $json_response;
    if($offensive == 'offensive') {
        $is_offensive = 1;
    }
    else {
        $is_offensive = 0;
    }
    if($art_technique != '' && $rank_technique != '' && $type_technique != '' && $new_ft_technique != '' && $new_ft_name != '') {
        $sql = 'INSERT INTO '.USER_TECHNIQUES_TABLE.' '.$db->sql_build_array('INSERT', [
            'user_id' => $ft_user_id,
            'technique_type' => $art_technique,
            'technique_subtype' => $type_technique,
            'technique_rank' => $rank_technique,
            'technique_description' => $new_ft_technique,
            'technique_name' => $new_ft_name,
            'technique_subspe' => $technique_subspe,
            'technique_cost' => $cost_technique,
            'technique_is_offensive' => $is_offensive
        ]);
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
        .' gtt.d_techniques AS d_techniques, gtt.c_techniques AS c_techniques, gtt.b_techniques AS b_techniques, gtt.a_techniques AS a_techniques, gtt.s_techniques AS s_techniques,'
        .' at.strength AS strength, at.sensoriality AS sensoriality, at.stealth AS stealth, at.swiftness AS swiftness, at.ninjutsu AS ninjutsu, at.taijutsu AS taijutsu, at.genjutsu AS genjutsu, '
        .' gtt.first_elite AS first_elite, gtt.second_elite AS second_elite, gtt.is_kuchiyose AS kuchiyose, gtt.is_second_element AS is_second_element, gtt.is_third_element AS is_third_element, gtt.is_irou_heal AS irou_heal, gtt.is_fuin_seal AS fuin_seal, '
        .' gtt.is_irou_poison AS irou_poison, gtt.is_fuin_barrer AS fuin_barrer, gtt.first_kekkei_genkai AS first_kekkei_genkai, gtt.second_kekkei_genkai AS second_kekkei_genkai, gtt.first_hidden AS first_hidden,'
        .' gtt.second_hidden AS second_hidden, gtt.jinchuriki AS jinchuriki, gtt.is_sight AS sight, gtt.is_sound AS sound, gtt.first_weapon AS first_weapon, gtt.second_weapon AS second_weapon, gtt.third_weapon AS third_weapon ',
        'FROM' => [
            USERS_TABLE => 'ut',
        ],
        'LEFT_JOIN' => [
            [
                'FROM' => [ GAINED_TECHNIQUES_TABLE => 'gtt' ],
                'ON' => 'gtt.user_id = ut.user_id',
            ],
            [
                'FROM' => [ ATTRIBUTES_TABLE => 'at' ],
                'ON' => 'at.user_id = ut.user_id',
            ]
        ],
        'WHERE' => 'ut.user_id = '.$ft_user_id,
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
	return $db->sql_fetchrow($query);
}

function get_techniques($type, $block_name) {
    global $ft_user_id, $db, $template;
    global $d_chakra, $c_chakra, $b_chakra, $a_chakra, $s_chakra;
    global $d_life, $c_life, $b_life, $a_life, $s_life;
    $req = [
        'SELECT' => 'utt.technique_id AS technique_id, utt.technique_is_offensive AS technique_is_offensive, utt.technique_cost AS technique_cost, utt.technique_subtype AS technique_subtype, utt.technique_type AS technique_type, utt.technique_rank AS technique_rank, utt.technique_name AS technique_name, utt.technique_description AS technique_description, utt.technique_subspe AS technique_spe',
        'FROM' => [
            USER_TECHNIQUES_TABLE => 'utt',
        ],
        'WHERE' => 'user_id = '.$ft_user_id.' AND technique_validated = 1 AND technique_type = "'.$type.'"'
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    while ($row = $db->sql_fetchrow($query)) {
        $offensive = $row['technique_is_offensive'];
        $cost = $row['technique_cost'];
        $rank = $row['technique_rank'];
        $damage = 0;
        $chakra = 0;
        if($cost) {
            if($rank == 'D') {
                $chakra = $d_chakra[$cost];
                if($offensive) {
                    $damage = $d_life[$cost];
                }
            }
            else if($rank == 'C') {
                $chakra = $c_chakra[$cost];
                if($offensive) {
                    $damage = $c_life[$cost];
                }
            }
            else if($rank == 'B') {
                $chakra = $b_chakra[$cost];
                if($offensive) {
                    $damage = $b_life[$cost];
                }
            }
            else if($rank == 'A') {
                $chakra = $a_chakra[$cost];
                if($offensive) {
                    $damage = $a_life[$cost];
                }
            }
            else if($rank == 'S') {
                $chakra = $s_chakra[$cost];
                if($offensive) {
                    $damage = $s_life[$cost];
                }
            }
            //TALENTS CASE
            $query_talents = get_talents_from_user($ft_user_id);
            while($row_talents = $db->sql_fetchrow($query_talents)) {
                $talent_title = $row_talents['talent_title'];
                if($row['technique_type'] == 'Genjutsu') {
                    if($talent_title == 'Illusionniste+') {
                        $chakra -= round($chakra*0.10);
                    }
                    else if($talent_title == 'Illusionniste++') {
                        $chakra -= round($chakra*0.20);
                    }
                    else if($talent_title == 'Illusionniste+++') {
                        $chakra -= round($chakra*0.30);
                    }
                }
                if($row['technique_type'] == 'Ninjutsu') {
                    if($talent_title == 'Généraliste+') {
                        $chakra -= round($chakra*0.10);
                    }
                    else if($talent_title == 'Généraliste++') {
                        $chakra -= round($chakra*0.20);
                    }
                    else if($talent_title == 'Généraliste+++') {
                        $chakra -= round($chakra*0.30);
                    }
                }
                if($row['technique_subtype'] == 'Kuchiyose') {
                    if($talent_title == 'Maître invocateur') {
                        $chakra -= round($chakra*0.25);
                    }
                }
            }
            //SPECIFIC CASES
            if($offensive) {
                $elites = get_ft_elites($ft_user_id);
                $jinchuriki = is_jinchuriki($ft_user_id);
                if($row['technique_subtype'] == $elites['first_elite'] || $row['technique_subtype'] == $elites['second_elite'] || $row['technique_spe'] == $elites['first_elite'] 
                    || $row['technique_spe'] == $elites['second_elite']) {
                    $damage += round($damage*0.15);
                }
                else if($row['technique_subtype'] == $jinchuriki || $row['technique_spe'] == $jinchuriki) {
                    $damage += round($damage*0.08);
                }
                else if($row['technique_type'] == 'Kekkei Genkai') {
                    $damage += round($damage*0.05);
                }
                else if($row['technique_type'] == 'Hiden') {
                    $chakra -= round($chakra*0.30);
                }
            }
        }
        $template->assign_block_vars($block_name.'_loop', [
            'FT_TECHNIQUE_ID' => $row['technique_id'],
            'FT_TECHNIQUE_SUBTYPE' => $row['technique_subtype'],
            'FT_TECHNIQUE_SPE' => $row['technique_spe'],
            'FT_TECHNIQUE_RANK' => $row['technique_rank'],
            'FT_TECHNIQUE_NAME' => $row['technique_name'],
            'FT_TECHNIQUE_DESCRIPTION' => $row['technique_description'],
            'FT_TECHNIQUE_DAMAGE' => $damage,
            'FT_TECHNIQUE_CHAKRA' => $chakra,
            'FT_TECHNIQUE_COST' => $row['technique_cost']
        ]);
    }
}

function get_not_validated() {
    global $ft_user_id, $db, $template;
    $req = [
        'SELECT' => 'utt.technique_id AS technique_id, utt.technique_is_offensive AS technique_is_offensive, utt.technique_cost AS technique_cost, utt.technique_subtype AS technique_type, utt.technique_rank AS technique_rank, utt.technique_name AS technique_name, utt.technique_description AS technique_description, utt.technique_subspe AS technique_spe',
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
            'FT_TECHNIQUE_SPE' => $row['technique_spe'],
            'FT_TECHNIQUE_DESCRIPTION' => $row['technique_description'],
            'FT_TECHNIQUE_COST' => $row['technique_cost'],
            'FT_TECHNIQUE_OFFENSIVE' => $row['technique_is_offensive']
        ]);
    }
}

function get_talents_display_ft($user_id) {
    global $db, $template;
    $req = [
        'SELECT' => 'utt.talent_id AS talent_id, tt.talent_title AS talent_title, tt.talent_description AS talent_description',
        'FROM' => [
            USER_TALENTS_TABLE => 'utt'
        ],
        'LEFT_JOIN' => [
            [
                'FROM' => [ TALENTS_TABLE => 'tt' ],
                'ON' => 'tt.talent_id = utt.talent_id'
            ]
        ],
        'WHERE' => "utt.user_id = $user_id"
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    while ($row = $db->sql_fetchrow($query)) {
        $template->assign_block_vars('ft_my_talents_loop', [
            'FT_TALENT_ID' => $row['talent_id'],
            'FT_TALENT_TITLE' => $row['talent_title'],
            'FT_TALENT_DESCRIPTION' => $row['talent_description']
        ]);
    }
}

function get_ft_elites($user_id) {
    global $db;
    $req = [
        'SELECT' => 'gtt.first_elite AS first_elite, gtt.second_elite AS second_elite',
        'FROM' => [
            GAINED_TECHNIQUES_TABLE => 'gtt'
        ],
        'WHERE' => "gtt.user_id = $user_id"
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    return $db->sql_fetchrow($query);
}

/**
 * Get the talents selection which the user doesn't already have
 * @param int user_id
 */
function get_talents_ft($user_id) {
    global $db, $template;
    $req = [
        'SELECT' => 'utt.talent_id',
        'FROM' => [
            USER_TALENTS_TABLE => 'utt'
        ],
        'WHERE' => "utt.user_id = $user_id"
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    $talents = array();
    while ($row = $db->sql_fetchrow($query)) {
        array_push($talents, $row['talent_id']);
    }
    $param = implode(',', $talents);
    if($param) {
        $req = [
            'SELECT' => 'tt.talent_title AS talent_title, tt.talent_id AS talent_id',
            'FROM' => [
                TALENTS_TABLE => 'tt'
            ],
            'WHERE' => "tt.talent_id NOT IN($param)"
        ];
    }
    else {
        $req = [
            'SELECT' => 'tt.talent_title AS talent_title, tt.talent_id AS talent_id',
            'FROM' => [
                TALENTS_TABLE => 'tt'
            ],
        ];
    }
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    while ($row = $db->sql_fetchrow($query)) {
        $template->assign_block_vars('ft_talents_loop', [
            'FT_TALENT_ID' => $row['talent_id'],
            'FT_TALENT_TITLE' => $row['talent_title']
        ]);
    }
}

$ft_user_infos = get_ft_user_infos();
get_techniques('Ninjutsu', 'Ninjutsu');
get_techniques('Taijutsu', 'Taijutsu');
get_techniques('Genjutsu', 'Genjutsu');
get_techniques('Kekkei Genkai', 'KG');
get_techniques('Hiden', 'Hiden');
get_not_validated();
get_talents_ft($ft_user_id);
get_talents_display_ft($ft_user_id);

$template->assign_vars(array(
    'FT_COLOUR' => get_colour($ft_user_id),
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
    'FT_STRENGTH' => $ft_user_infos['strength'],
    'FT_SENSORIALITY' => $ft_user_infos['sensoriality'],
    'FT_STEALTH' => $ft_user_infos['stealth'],
    'FT_SWIFTNESS' => $ft_user_infos['swiftness'],
    'FT_NINJUTSU' => $ft_user_infos['ninjutsu'],
    'FT_TAIJUTSU' => $ft_user_infos['taijutsu'],
    'FT_GENJUTSU' => $ft_user_infos['genjutsu'],
    'FT_KUCHIYOSE' => $ft_user_infos['kuchiyose'],
    'FT_FUIN_SEAL' => $ft_user_infos['fuin_seal'],
    'FT_FUIN_BARRER' => $ft_user_infos['fuin_barrer'],
    'FT_IROU_HEAL' => $ft_user_infos['irou_heal'],
    'FT_IROU_POISON' => $ft_user_infos['irou_poison'],
    'FT_SOUND' => $ft_user_infos['sound'],
    'FT_SIGHT' => $ft_user_infos['sight'],
    'FT_FIRST_WEAPON' => $ft_user_infos['first_weapon'],
    'FT_SECOND_WEAPON' => $ft_user_infos['second_weapon'],
    'FT_THIRD_WEAPON' => $ft_user_infos['third_weapon'],
    'FT_FIRST_KG' => $ft_user_infos['first_kekkei_genkai'],
    'FT_SECOND_KG' => $ft_user_infos['second_kekkei_genkai'],
    'FT_FIRST_HIDEN' => $ft_user_infos['first_hidden'],
    'FT_SECOND_HIDEN' => $ft_user_infos['second_hidden'],
    'FT_FIRST_ELITE' => $ft_user_infos['first_elite'],
    'FT_SECOND_ELITE' => $ft_user_infos['second_elite'],
    'FT_IS_KIRI' => my_group(get_group_by_name('Kirigakure'), $user->data['user_id']),
    'FT_IS_IWA' => my_group(get_group_by_name('Iwagakure'), $user->data['user_id']),
    'FT_IS_SUNA' => my_group(get_group_by_name('Sunagakure'), $user->data['user_id']),
    'FT_IS_ADMIN' => my_group(ADMINISTRATOR_ID, $user->data['user_id']),
    'FT_IS_JINCHURIKI' => is_jinchuriki($ft_user_id),
    'FT_INVENTORY' => get_inventory($ft_user_id),
));

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'fiche_technique.html')
);

page_footer();