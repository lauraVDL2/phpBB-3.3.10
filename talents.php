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

$is_admin = my_group(ADMINISTRATOR_ID, $user->data['user_id']);

$json_response = new \phpbb\json_response;

if(!$is_admin) {
    echo 'Vous ne pouvez pas accéder à cette page !';
    die();
}

if($request->is_ajax()) {
    $create_talent = $request->variable('create_talent', '');
    $modify_talent = $request->variable('modify_talent', '');
    $unmodify_talent = $request->variable('unmodify_talent', '');
    $delete_talent = $request->variable('delete_talent', '');
    if($create_talent) {
        $talent_title = utf8_normalize_nfc($request->variable('talent_title', '', true));
        $talent_description = utf8_normalize_nfc($request->variable('talent_description', '', true));
        $sql = 'INSERT INTO '.TALENTS_TABLE.' '.$db->sql_build_array('INSERT', [
            'talent_title' => $talent_title,
            'talent_description' => $talent_description
        ]);
        $db->sql_query($sql);
        return $json_response->send([
            'action'	=> 'TALENT_VALIDATED',
            ],
        );
    }
    else if($modify_talent) {
        $edit_title = utf8_normalize_nfc($request->variable('edit_title', '', true));
        $edit_description = utf8_normalize_nfc($request->variable('edit_description', '', true));
        $talent_id = $request->variable('talent_id', 0);
        $sql = 'UPDATE '.TALENTS_TABLE.' SET '.$db->sql_build_array('UPDATE', [
            'talent_title' => $edit_title,
            'talent_description' => $edit_description
        ])." WHERE talent_id = $talent_id";
        $db->sql_query($sql);
        return $json_response->send([
            'action'	=> 'TALENT_MODIFIED',
            ],
        );
    }
    else if($unmodify_talent) {
        return $json_response->send([
            'action'	=> 'TALENT_UNMODIFIED',
            ],
        );
    }
    else if($delete_talent) {
        $talent_id = $request->variable('talent_id', 0);
        $sql = 'DELETE FROM '.TALENTS_TABLE." WHERE talent_id = $talent_id";
        $db->sql_query($sql);
        $sql = 'DELETE FROM '.USER_TALENTS_TABLE." WHERE talent_id = $talent_id";
        $db->sql_query($sql);
        return $json_response->send([
            'action'	=> 'TALENT_DELETED',
            ],
        );
    }
}

function get_talents() {
    global $db, $template;
    $req = [
        'SELECT' => 'tt.talent_title AS talent_title, tt.talent_description AS talent_description, tt.talent_id AS talent_id',
        'FROM' => [
            TALENTS_TABLE => 'tt'
        ],
        'ORDER_BY' => 'tt.talent_title ASC'
    ];
    $sql = $db->sql_build_query('SELECT', $req);
	$query = $db->sql_query($sql);
    while ($row = $db->sql_fetchrow($query)) {
        $template->assign_block_vars('talents', [
            'TALENT_ID' => $row['talent_id'],
            'TALENT_TITLE' => $row['talent_title'],
            'TALENT_DESCRIPTION' => $row['talent_description']
        ]);
    }
}

get_talents();

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'talents.html')
);

page_footer();