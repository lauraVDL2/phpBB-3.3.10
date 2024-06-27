<?php

namespace phpbb\db\migration\data\vJnM;

class kuchiyose_o2 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'add_columns' => array(
                $this->table_prefix.'user_kuchiyose_techniques' => array(
                    'kuchiyose_technique_offensive' => array('BOOL', 0),
                ),
            ),
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\kuchiyose_m3'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_column_exists($this->table_prefix . 'user_kuchiyose_techniques', 'kuchiyose_technique_offensive');
	}

    public function update_data() {
        return [];
    }
}