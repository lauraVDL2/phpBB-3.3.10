<?php

namespace phpbb\db\migration\data\vJnM;

class group_influence extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'add_tables' => array(
                $this->table_prefix.'group_influences' => array(
                    'COLUMNS' => array(
                        'group_influence_id' => array('UINT', NULL, 'auto_increment'),
                        'group_influence_title' => array('TEXT', ''),
                        'group_influence_description' => array('TEXT', ''),
                        'group_id' => array('UINT', 0),
                    ),
                    'PRIMARY_KEY' => 'group_influence_id'
                )
            )
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\v31x\v314'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_table_exists($this->table_prefix . 'group_influences');
	}

    public function update_data() {
        return [];
    }
}