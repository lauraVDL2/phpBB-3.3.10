<?php

namespace phpbb\db\migration\data\vJnM;

class inventory extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array('add_columns' => array(
                $this->table_prefix.'gained_techniques' => array(
                    'gt_inventory' => array('TEXT', ''),
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
        return $this->db_tools->sql_column_exists($this->table_prefix . 'gained_techniques', 'gt_inventory');
	}

    public function update_data() {
        return [];
    }
}