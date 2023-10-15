<?php

namespace phpbb\db\migration\data\vJnM;

class techniques_v3 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'add_tables' => array(
                $this->table_prefix.'user_techniques' => array(
                    'COLUMNS' => array(
                        'technique_id' => array('UINT', NULL, 'auto_increment'),
                        'user_id' => array('UINT', 0),
                        'technique_rank' => array('VCHAR:1', ''),
                        'technique_type' => array('VCHAR:100', ''),
                        'technique_subtype' => array('VCHAR:100', ''),
                        'technique_name' => array('VCHAR:255', ''),
                        'technique_description' => array('TEXT', ''),
                        'technique_validated' => array('BOOL', 0),
                    ),
                    'PRIMARY_KEY' => 'technique_id'
                ),
            )
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\techniques_v2'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_table_exists($this->table_prefix . 'user_techniques');
	}

    public function update_data() {
        return [];
    }
}