<?php

namespace phpbb\db\migration\data\vJnM;

class specific_case_ft extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array('add_columns' => array(
                $this->table_prefix.'user_techniques' => array(
                    'technique_subspe' => array('VCHAR:100', '')
                ),
            )
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\techniques_v3'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_column_exists($this->table_prefix . 'user_techniques', 'technique_subspe');
	}

    public function update_data() {
        return [];
    }
}