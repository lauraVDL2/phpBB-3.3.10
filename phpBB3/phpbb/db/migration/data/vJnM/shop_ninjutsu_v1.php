<?php

namespace phpbb\db\migration\data\vJnM;

class shop_ninjutsu_v1 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array('add_columns' => array(
                $this->table_prefix.'gained_techniques' => array(
                    'first_elite' => array('VCHAR:100', ''),
                    'second_elite' => array('VCHAR:100', ''),
                    'is_kuchiyose' => array('BOOL', 0),
                    'is_second_element' => array('BOOL', 0),
                    'is_third_element' => array('BOOL', 0),
                    'is_irou_heal' => array('BOOL', 0),
                    'is_fuin_seal' => array('BOOL', 0),
                ),
                $this->table_prefix.'users' => array(
                    'talent_points' => array('UINT', 0)
                ),
            ),
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\specific_case_ft'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_column_exists($this->table_prefix . 'gained_techniques', 'first_elite');
	}

    public function update_data() {
        return [];
    }
}