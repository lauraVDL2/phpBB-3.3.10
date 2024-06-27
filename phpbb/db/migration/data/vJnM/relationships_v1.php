<?php

namespace phpbb\db\migration\data\vJnM;

class relationships_v1 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'add_tables' => array(
                $this->table_prefix.'relationships' => array(
                    'COLUMNS' => array(
                        'relationship_id' => array('UINT', NULL, 'auto_increment'),
                        'relationship_user_id' => array('UINT', 0),
                        'relation_id' => array('UINT', 0),
                        'relation_group_id' => array('UINT', 0),
                        'relation_title' => array('TEXT', ''),
                        'relation_description' => array('TEXT', ''),
                        'relation_avatar' => array('VCHAR:255', '')
                    ),
                    'PRIMARY_KEY' => 'relationship_id'
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
        return $this->db_tools->sql_table_exists($this->table_prefix . 'relationships');
	}

    public function update_data() {
        return [];
    }
}