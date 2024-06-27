<?php

namespace phpbb\db\migration\data\vJnM;

class talents_v1 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'add_tables' => array(
                $this->table_prefix.'talents' => array(
                    'COLUMNS' => array(
                        'talent_id' => array('UINT', NULL, 'auto_increment'),
                        'talent_title' => array('VCHAR:255', ''),
                        'talent_description' => array('TEXT', ''),
                    ),
                    'PRIMARY_KEY' => 'talent_id'
                ),
                $this->table_prefix.'user_talents' => array(
                    'COLUMNS' => array(
                        'user_talent_id' => array('UINT', NULL, 'auto_increment'),
                        'talent_id' => array('UINT', 0),
                        'user_id' => array('UINT', 0),
                    ),
                    'PRIMARY_KEY' => 'user_talent_id'
                ),
            ),
            'add_columns' => array(
                $this->table_prefix.'user_techniques' => array(
                    'technique_cost' => array('VCHAR:255', ''),
                    'technique_is_offensive' => array('BOOL', 1)
                ),
            )
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\techniques_v3'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_table_exists($this->table_prefix . 'talents');
	}

    public function update_data() {
        return [];
    }
}