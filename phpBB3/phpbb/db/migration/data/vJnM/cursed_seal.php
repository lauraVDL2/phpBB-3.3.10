<?php

namespace phpbb\db\migration\data\vJnM;

class cursed_seal extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array('add_columns' => array(
                $this->table_prefix.'gained_techniques' => array(
                    'can_curse_seal' => array('BOOL', 0),
                ),
            ),
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\shop_ninjutsu_v2'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_column_exists($this->table_prefix . 'gained_techniques', 'can_curse_seal');
	}

    public function update_data() {
        return [];
    }
}