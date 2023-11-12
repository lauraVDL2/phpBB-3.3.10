<?php

namespace phpbb\db\migration\data\vJnM;

class missionboard_v1 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'add_tables' => array(
                $this->table_prefix.'missions' => array(
                    'COLUMNS' => array(
                        'mission_id' => array('UINT', NULL, 'auto_increment'),
                        'mission_rank' => array('VCHAR:1', ''),
                        'mission_title' => array('VCHAR:255', ''),
                        'mission_description' => array('TEXT', ''),
                        'mission_condition' => array('TEXT', ''),
                        'mission_earning' => array('TEXT', ''),
                        'mission_infos' => array('TEXT', ''),
                        'mission_max_users' => array('UINT', 0),
                        'mission_validated' => array('BOOL', 0),
                        'mission_finished' => array('BOOL', 0)
                    ),
                    'PRIMARY_KEY' => 'mission_id'
                ),
                $this->table_prefix.'mission_users' => array(
                    'COLUMNS' => array(
                        'mission_user_id' => array('UINT', NULL, 'auto_increment'),
                        'mission_id' => array('UINT', 0),
                        'user_id' => array('UINT', 0),
                        'user_rp_rank' => array('VCHAR:100', ''),
                        'username' => array('VCHAR:255', '')
                    ),
                    'PRIMARY_KEY' => 'mission_user_id'
                ),
                $this->table_prefix.'mission_groups' => array(
                    'COLUMNS' => array(
                        'mission_group_id' => array('UINT', NULL, 'auto_increment'),
                        'mission_id' => array('UINT', 0),
                        'group_id' => array('UINT', 0),
                        'group_name' => array('VCHAR:255', '')
                    ),
                    'PRIMARY_KEY' => 'mission_group_id'
                ),
            )
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\v31x\v314'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_table_exists($this->table_prefix . 'missions');
	}

    public function update_data() {
        return [];
    }
}