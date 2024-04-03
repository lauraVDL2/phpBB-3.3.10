<?php 
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('viewforum');

$page_title = ($config['board_index_text'] !== '') ? $config['board_index_text'] : $user->lang['INDEX'];

$vars = array('page_title');
extract($phpbb_dispatcher->trigger_event('core.index_modify_page_title', compact($vars)));

$json_response = new \phpbb\json_response;

if($request->is_ajax()) {
    $introduction_validate_button = $request->variable('introduction_validate_button', '');
    if($introduction_validate_button) {
        $poll = $uid = $bitfield = $options = '';
        $firstname = utf8_normalize_nfc($request->variable('character_firstname', '', true));
        $lastname = utf8_normalize_nfc($request->variable('character_lastname', '', true));
        $gender = utf8_normalize_nfc($request->variable('character_gender', '', true));
        $age = utf8_normalize_nfc($request->variable('character_age', '', true));
        $group = utf8_normalize_nfc($request->variable('character_group', '', true));
        $description = utf8_normalize_nfc($request->variable('character_description', '', true));
        $story = utf8_normalize_nfc($request->variable('character_story', '', true));
        $player = utf8_normalize_nfc($request->variable('character_player', '', true));
        $future = utf8_normalize_nfc($request->variable('character_future', '', true));
        $message = '[p_cadre]';
        $message .= "\n";
        switch($group) {
            case 'Kiri':
                $message .= '[p_kiri]Shinobi de Kiri[/p_kiri]';
                break;
            case 'Suna':
                $message .= '[p_suna]Shinobi de Suna[/p_suna]';
                break;
            case 'Iwa':
                $message .= '[p_iwa]Shinobi d\'Iwa[/p_iwa]';
                break;
            case 'Kumo':
                $message .= '[p_kumo]Shinobi de Kumo[/p_kumo]';
                break;
            case 'Konoha':
                $message .= '[p_konoha]Shinobi de Konoha[/p_konoha]';
                break;
            default:
                $message .= '[p_nukenin]Shinobi Nukenin[/p_nukenin]';
        }
        $message .= "\n\n";
        $message .= '[b]Nom -[/b] '.$lastname;
        $message .= "\n";
        $message .= '[b]Prénom -[/b] '.$firstname;
        $message .= "\n";
        $message .= '[b]Genre -[/b] '.$gender;
        $message .= "\n";
        $message .= '[b]Âge -[/b] '.$age;
        $message .= "\n\n";
        $message .= '[b]Description physique & mentale -[/b] '.$description;
        $message .= "\n\n";
        $message .= '[b]Histoire -[/b] '.$story;
        $message .= "\n\n";
        $message .= '[b]Présentation du joueur -[/b] '.$player;
        $message .= "\n\n";
        $message .= '[b]Que ferons-nous de votre personnage en cas de départ -[/b] '.$future;
        $message .= "\n";
        $message .= '[/p_cadre]';
        $subject = "Présentation de $lastname $firstname";
        generate_text_for_storage($message, $uid, $bitfield, $options, true, true, true);
        $data = array(
            'forum_id' => 11,
            'topic_id' => 1,
            'icon_id' => false,

                    // Values from generate_text_for_storage()
            'bbcode_bitfield'    => $bitfield,    // Value created from the generate_text_for_storage() function.
            'bbcode_uid'        => $uid,        // Value created from the generate_text_for_storage() function.

            'enable_bbcode' => true,
            'enable_smilies'    => true,    // Enabe smilies in this post. (bool)
            'enable_urls'        => true,    // Enable self-parsing URL links in this post. (bool)
            'enable_sig'        => true,    // Enable the signature of the poster to be displayed in the post. (bool)
                    // Message Body
            'message'            => $message,        // Your text you wish to have submitted. It should pass through generate_text_for_storage() before this. (string)
            'message_md5'    => md5($message),// The md5 hash of your message

            // Other Options
            'post_edit_locked'    => 0,        // Disallow post editing? 1 = Yes, 0 = No
            'topic_title'        => $subject,    // Subject/Title of the topic. (string)
            
            // Email Notification Settings
            'notify_set'        => false,        // (bool)
            'notify'            => false,        // (bool)
            'post_time'         => 0,        // Set a specific time, use 0 to let submit_post() take care of getting the proper time (int)
            'forum_name'        => '',        // For identifying the name of the forum in a notification email. (string)

            // Indexing
            'enable_indexing'    => true,        // Allow indexing the post? (bool)

            // 3.0.6
            'force_approved_state'    => true, // Allow the post to be submitted without going into unapproved queue

            // 3.1-dev, overwrites force_approve_state
            'force_visibility'            => true, // Allow the post to be submitted without going into unapproved queue, or make it be deleted
        );

        $ret=submit_post('post',$subject,$user->data['username'],POST_NORMAL,$poll,$data);
        return $json_response->send([
            'url'	=> $ret,
            ],
        );
    }
}

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'introduction.html')
);

page_footer();