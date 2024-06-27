<?php

namespace phpbb\db\migration\data\vJnM;

class shop_ninjutsu_v2 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array('add_columns' => array(
                $this->table_prefix.'gained_techniques' => array(
                    'is_irou_poison' => array('BOOL', 0),
                    'is_fuin_barrer' => array('BOOL', 0),
                ),
                $this->table_prefix.'users' => array(
                    'user_rp_rank' => array('VCHAR:100', 'Genin')
                ),
            ),
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\shop_ninjutsu_v1'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_column_exists($this->table_prefix . 'gained_techniques', 'is_irou_poison');
	}

    public function update_data() {
        return [];
    }
}