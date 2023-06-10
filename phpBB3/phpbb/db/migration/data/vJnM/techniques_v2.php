<?php

namespace phpbb\db\migration\data\vJnM;

class techniques_v2 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'drop_tables' => array(
                $this->table_prefix.'user_techniques'
            ),
            'add_tables' => array(
                $this->table_prefix.'user_techniques' => array(
                    'COLUMNS' => array(
                        'technique_id' => array('UINT', NULL, 'auto_increment'),
                        'user_id' => array('UINT', 0),
                        'd_techniques' => array('UINT', 3),
                        'c_techniques' => array('UINT', 2),
                        'b_techniques' => array('UINT', 0),
                        'a_techniques' => array('UINT', 0),
                        's_techniques' => array('UINT', 0),
                    ),
                    'PRIMARY_KEY' => 'technique_id'
                ),
            )
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\techniques'];
    }

    public function effectively_installed()
	{
        return !$this->db_tools->sql_table_exists($this->table_prefix . 'user_techniques');
	}

    public function update_data() {
        return [];
    }
}