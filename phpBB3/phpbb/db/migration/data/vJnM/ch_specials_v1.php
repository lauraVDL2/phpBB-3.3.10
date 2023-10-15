<?php

namespace phpbb\db\migration\data\vJnM;

class ch_specials_v1 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'add_columns' => array(
                $this->table_prefix.'gained_techniques' => array(
                    'first_kekkei_genkai' => array('VCHAR:100', ''),
                    'second_kekkei_genkai' => array('VCHAR:100', ''),
                    'first_hidden' => array('VCHAR:100', ''),
                    'second_hidden' => array('VCHAR:100', ''),
                    'surspecialization' => array('BOOL', 0),
                    'jinchuriki' => array('VCHAR:100', '')
                )
            )
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\influence_points'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_column_exists($this->table_prefix . 'gained_techniques', 'second_hidden');
	}

    public function update_data() {
        return [];
    }
}