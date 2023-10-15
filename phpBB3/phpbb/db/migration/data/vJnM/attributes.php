<?php

namespace phpbb\db\migration\data\vJnM;

class attributes extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'add_tables' => array(
                $this->table_prefix.'attributes' => array(
                    'COLUMNS' => array(
                        'user_id' => array('UINT', 0),
                        'strength' => array('UINT', 0),
                        'sensoriality' => array('UINT', 0),
                        'stealth' => array('UINT', 0),
                        'swiftness' => array('UINT', 0),
                        'ninjutsu' => array('UINT', 0),
                        'taijutsu' => array('UINT', 0),
                        'genjutsu' => array('UINT', 0)
                    ),
                    'PRIMARY_KEY' => 'user_id'
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
        return $this->db_tools->sql_table_exists($this->table_prefix . 'attributes');
	}

    public function update_data() {
        return [];
    }
}