<?php

namespace phpbb\db\migration\data\vJnM;

class level_attributes_experience extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'add_columns' => array(
                $this->table_prefix . 'users' => array(
                    'user_level' => array('UINT', 1),
                    'user_experience' => array('UINT', 0),
                    'user_attributes_to_use' => array('UINT', 12),
                    'user_attributes_total' => array('UINT', 12)
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
		return $this->db_tools->sql_column_exists($this->table_prefix . 'users', 'user_level');
	}

    public function update_data() {
        return [];
    }
}