<?php

namespace phpbb\db\migration\data\vJnM;

class marionnettes_a7 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'add_columns' => array(
                $this->table_prefix.'user_marionnette_techniques' => array(
                    'marionnette_rank' => ['VCHAR:1', ''],
                ),
            ),
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\marionnettes_a6'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_column_exists($this->table_prefix . 'user_marionnette_techniques', 'marionnette_rank');
	}

    public function update_data() {
        return [];
    }
}