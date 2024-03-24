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

$json_response = new \phpbb\json_response;

$infos = get_talent_infos();

//BUY ITEMS
if($request->is_ajax()) { 
    $sp_kuchiyose = $request->variable('sp_kuchiyose', '');
    $sp_fuin_seal = $request->variable('sp_fuin_seal', '');
    $sp_fuin_barrer = $request->variable('sp_fuin_barrer', '');
    $sp_irou_heal = $request->variable('sp_irou_heal', '');
    $sp_irou_poison = $request->variable('sp_irou_poison', '');
    $sp_chunin = $request->variable('sp_chunin', '');
    $sp_jonin = $request->variable('sp_jonin', '');
    $sp_d_technique = $request->variable('sp_d_technique', '');
    $sp_c_technique = $request->variable('sp_c_technique', '');
    $sp_b_technique = $request->variable('sp_b_technique', '');
    $sp_a_technique = $request->variable('sp_a_technique', '');
    $sp_s_technique = $request->variable('sp_s_technique', '');
    $sp_second_element = $request->variable('sp_second_element', '');
    $sp_third_element = $request->variable('sp_third_element', '');
    $sp_sound = $request->variable('sp_sound', '');
    $sp_sight = $request->variable('sp_sight', '');
    $sp_demonic = $request->variable('sp_demonic', '');
    $sp_second_weapon = $request->variable('sp_second_weapon', '');
    $sp_third_weapon = $request->variable('sp_third_weapon', '');
    $sp_hachimon = $request->variable('sp_hachimon', '');
    $sp_nintaijutsu = $request->variable('sp_nintaijutsu', '');
    $sp_chakrablade = $request->variable('sp_chakrablade', '');
    $sp_kugutsu = $request->variable('sp_kugutsu', '');
    $sp_mangekyo = $request->variable('sp_mangekyo', '');
    $sp_hashirama = $request->variable('sp_hashirama', '');
    $sp_hitokugutsu = $request->variable('sp_hitokugutsu', '');
    //KUCHIYOSE
    if($sp_kuchiyose != '') {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET is_kuchiyose = 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //FUINJUTSU : SEALS
    else if($sp_fuin_seal != '') {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET is_fuin_seal = 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //FUINJUTSU : BARRERS
    else if($sp_fuin_barrer != '') {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET is_fuin_barrer = 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //IROU JUTSU : HEALING
    else if($sp_irou_heal != '') {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET is_irou_heal = 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //IROU JUTSU : POISONS
    else if($sp_irou_poison != '') {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET is_irou_poison = 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }

    //SECOND ELEMENT
    else if($sp_second_element) {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET is_second_element = 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //THIRD ELEMENT
    else if($sp_third_element) {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET is_third_element = 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }

    //D TECHNIQUE
    else if($sp_d_technique) {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET d_techniques = d_techniques + 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //C TECHNIQUE
    else if($sp_c_technique) {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET c_techniques = c_techniques + 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //B TECHNIQUE
    else if($sp_b_technique) {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET b_techniques = b_techniques + 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //A TECHNIQUE
    else if($sp_a_technique) {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET a_techniques = a_techniques + 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //S TECHNIQUE
    else if($sp_s_technique) {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET s_techniques = s_techniques + 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }

    //BECOMING CHUNIN
    else if($sp_chunin) {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.USERS_TABLE.' SET user_rp_rank = "Chûnin", user_attributes_to_use = user_attributes_to_use + 4, user_attributes_total = user_attributes_total + 4 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET c_techniques = c_techniques + 1, b_techniques = b_techniques + 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //BECOMING JONIN
    else if($sp_jonin) {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.USERS_TABLE.' SET user_rp_rank = "Jônin", user_attributes_to_use = user_attributes_to_use + 4, user_attributes_total = user_attributes_total + 4 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET b_techniques = b_techniques + 1, a_techniques = a_techniques + 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //GENJUTSU SOUND
    else if($sp_sound) {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET is_sound = 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //GENJUTSU SIGHT
    else if($sp_sight) {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET is_sight = 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //GENJUTSU ELITE : DEMONIC
    else if($sp_demonic) {
        $sp_price = $request->variable('sp_price', 0);
        if (set_elite($sp_price, 'Illusions démoniaques')) {
            return $json_response->send([
                'is_ok'	=> true,
                ],
            );
        }
    }
    //BUKIJUTSU : SECOND WEAPON
    else if ($sp_second_weapon) {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET is_second_weapon = 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //BUKIJUTSU : THIRD WEAPON
    else if ($sp_third_weapon) {
        $sp_price = $request->variable('sp_price', 0);
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET is_third_weapon = 1 WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return $json_response->send([
            'is_ok'	=> true,
            ],
        );
    }
    //ELITE TAIJUTSU : HACHIMON
    else if ($sp_hachimon) {
        $sp_price = $request->variable('sp_price', 0);
        if (set_elite($sp_price, 'Hachimon')) {
            return $json_response->send([
                'is_ok'	=> true,
                ],
            );
        }
    }
    //ELITE TAIJUTSU : NINTAIJUTSU
    else if ($sp_nintaijutsu) {
        $sp_price = $request->variable('sp_price', 0);
        if (set_elite($sp_price, 'Nintaijutsu')) {
            return $json_response->send([
                'is_ok'	=> true,
                ],
            );
        }
    }
    //ELITE TAIJUTSU : CHAKRA BLADES
    else if ($sp_chakrablade) {
        $sp_price = $request->variable('sp_price', 0);
        if (set_elite($sp_price, 'Lames de Chakra')) {
            return $json_response->send([
                'is_ok'	=> true,
                ],
            );
        }
    }

    //HIDEN : KUGUTSU
    else if($sp_kugutsu) {
        $sp_price = $request->variable('sp_price', 0);
        if(!$infos['first_hidden']) {
            $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET '.$db->sql_build_array('UPDATE', [
                'first_hidden' => 'Kugutsu'
            ]).' WHERE user_id = '.$user->data['user_id'];
            $db->sql_query($sql);
            buying($sp_price);
            return $json_response->send([
                'is_ok'	=> true,
                ],
            );
        }
        else if(!$infos['second_hidden']) {
            $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET '.$db->sql_build_array('UPDATE', [
                'second_hidden' => 'Kugutsu'
            ]).' WHERE user_id = '.$user->data['user_id'];
            $db->sql_query($sql);
            buying($sp_price);
            return $json_response->send([
                'is_ok'	=> true,
                ],
            );
        }
    }
    //ELITE KG : MANGEKYO
    else if ($sp_mangekyo) {
        $sp_price = $request->variable('sp_price', 0);
        if (set_elite($sp_price, 'Mangekyô')) {
            return $json_response->send([
                'is_ok'	=> true,
                ],
            );
        }
    }
    //ELITE KG : HASHIRAMA
    else if ($sp_hashirama) {
        $sp_price = $request->variable('sp_price', 0);
        if (set_elite($sp_price, 'Hashirama')) {
            return $json_response->send([
                'is_ok'	=> true,
                ],
            );
        }
    }
    //ELITE KG : HITOKUHUTSU
    else if ($sp_hitokugutsu) {
        $sp_price = $request->variable('sp_price', 0);
        if (set_elite($sp_price, 'Hitokugutsu')) {
            return $json_response->send([
                'is_ok'	=> true,
                ],
            );
        }
    }
}

/**
 * Set the elite specialization
 * @param int price
 * @param string elite
 * @return bool true if applies the elite
 */
function set_elite($sp_price, $elite) {
    global $user, $infos, $db;
    if(!$infos['first_elite']) {
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET '.$db->sql_build_array('UPDATE', [
            'first_elite' => $elite
        ]).' WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return true;
    }
    else if(!$infos['second_elite']) {
        $sql = 'UPDATE '.GAINED_TECHNIQUES_TABLE.' SET '.$db->sql_build_array('UPDATE', [
            'second_elite' => $elite
        ]).' WHERE user_id = '.$user->data['user_id'];
        $db->sql_query($sql);
        buying($sp_price);
        return true;
    }
    return false;
}

function buying($sp_price) {
    global $db, $user;
    $sql = 'UPDATE '.USERS_TABLE.' SET talent_points = talent_points - '.$sp_price.' WHERE user_id = '.$user->data['user_id'];
    $db->sql_query($sql);
}

function get_talent_infos() {
    global $db, $user;
    $req = [
        'SELECT' => 'gt.first_elite AS first_elite, gt.second_elite AS second_elite, gt.is_kuchiyose AS kuchiyose, gt.is_second_element AS is_second_element, gt.is_third_element AS is_third_element, gt.is_irou_heal AS irou_heal, gt.is_fuin_seal AS fuin_seal, '
        .'ut.user_level AS level, ut.talent_points AS talent_points, ut.user_first_element AS first_element, ut.user_second_element AS second_element, ut.user_third_element AS third_element, ut.user_rp_rank AS rp_rank, '
        .'at.strength AS strength, at.sensoriality AS sensoriality, at.stealth AS stealth, at.swiftness AS swiftness, at.ninjutsu AS ninjutsu, at.taijutsu AS taijutsu, at.genjutsu AS genjutsu, '
        .'gt.is_irou_poison AS irou_poison, gt.is_fuin_barrer AS fuin_barrer, gt.is_sight AS is_sight, gt.is_sound AS is_sound, gt.first_weapon AS first_weapon, gt.is_second_weapon AS is_second_weapon, gt.is_third_weapon AS is_third_weapon, '
        .'gt.second_weapon AS second_weapon, gt.third_weapon AS third_weapon, gt.first_hidden AS first_hidden, gt.second_hidden AS second_hidden, gt.first_kekkei_genkai AS first_kekkei_genkai, gt.second_kekkei_genkai AS second_kekkei_genkai',
        'FROM' => [
            USERS_TABLE => 'ut',
        ],
        'LEFT_JOIN' => [
            [
                'FROM' => [ GAINED_TECHNIQUES_TABLE => 'gt' ],
                'ON' => 'ut.user_id = gt.user_id',
            ],
            [
                'FROM' => [ ATTRIBUTES_TABLE => 'at' ],
                'ON' => 'ut.user_id = at.user_id',
            ]
        ],
        'WHERE' => 'ut.user_id = '.$user->data['user_id'],
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    return $db->sql_fetchrow($query);
}

$can_first_elite = !$infos['first_elite'] && $infos['level'] >= 20;
$can_second_elite = !$infos['second_elite'] && $infos['rp_rank'] == 'Kage' && $infos['level'] >= 20;

$template->assign_vars(array(
    'SP_TALENT_POINTS' => $infos['talent_points'],
    'SP_FUIN_SEAL' => $infos['fuin_seal'],
    'SP_FUIN_BARRER' => $infos['fuin_barrer'],
    'SP_KUCHIYOSE' => $infos['kuchiyose'],
    'SP_NINJUTSU' => $infos['ninjutsu'],
    'SP_TAIJUTSU' => $infos['taijutsu'],
    'SP_GENJUTSU' => $infos['genjutsu'],
    'SP_SPIRIT' => $infos['sensoriality'],
    'SP_STRENGHT' => $infos['strength'],
    'SP_IROU_HEAL' => $infos['irou_heal'],
    'SP_IROU_POISON' => $infos['irou_poison'],
    'SP_FIRST_ELEMENT' => $infos['first_element'],
    'SP_SECOND_ELEMENT' => $infos['second_element'],
    'SP_THIRD_ELEMENT' => $infos['third_element'],
    'SP_IS_SECOND_ELEMENT' => $infos['is_second_element'],
    'SP_IS_THIRD_ELEMENT' => $infos['is_third_element'],
    'SP_FIRST_WEAPON' => $infos['first_weapon'],
    'SP_SECOND_WEAPON' => $infos['second_weapon'],
    'SP_THIRD_WEAPON' => $infos['third_weapon'],
    'SP_IS_SECOND_WEAPON' => $infos['is_second_weapon'],
    'SP_IS_THIRD_WEAPON' => $infos['is_third_weapon'],
    'SP_IS_SOUND' => $infos['is_sound'],
    'SP_IS_SIGHT' => $infos['is_sight'],
    'CAN_FIRST_ELITE' => $can_first_elite,
    'CAN_SECOND_ELITE' => $can_second_elite,
    'SP_FIRST_ELITE' => $infos['first_elite'],
    'SP_SECOND_ELITE' => $infos['second_elite'],
    'SP_RP_RANK' => $infos['rp_rank'],
    'SP_FIRST_HIDEN' => $infos['first_hidden'],
    'SP_SECOND_HIDEN' => $infos['second_hidden'],
    'SP_KUGUTSU' => $infos['first_hidden'] == 'Kugutsu' || $infos['second_hidden'] == 'Kugutsu',
    'SP_SHARINGAN' => $infos['first_kekkei_genkai'] == 'Sharingan' || $infos['second_kekkei_genkai'] == 'Sharingan',
    'SP_MOKUTON' => $infos['first_kekkei_genkai'] == 'Mokuton' || $infos['second_kekkei_genkai'] == 'Mokuton',
    'SP_IS_SUNA' => my_group(get_group_by_name('Sunagakure'), $user->data['user_id'])
));

$template->set_filenames(array(
	'body' => 'shop.html')
);

page_footer();