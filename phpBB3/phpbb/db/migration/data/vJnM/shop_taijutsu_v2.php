<?php

namespace phpbb\db\migration\data\vJnM;

class shop_taijutsu_v2 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array('add_columns' => array(
                $this->table_prefix.'gained_techniques' => array(
                    'is_second_weapon' => array('BOOL', 0),
                    'is_third_weapon' => array('BOOL', 0)
                ),
            ),
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\shop_taijutsu_v1'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_column_exists($this->table_prefix . 'gained_techniques', 'is_second_weapon');
	}

    public function update_data() {
        return [];
    }
}