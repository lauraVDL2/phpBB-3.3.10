<?php

namespace phpbb\db\migration\data\vJnM;

class marionnettes_b2 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return [
            'add_columns' => [
                $this->table_prefix.'user_marionnette_techniques' => [
                    'marionnette_technique_subtype' => ['VCHAR:255', ''],
                    'marionnette_technique_subspe' => ['VCHAR:255', ''],
                    'marionnette_technique_descr' => ['TEXT', ''],
                    'marionnette_technique_v' => ['BOOL', 0],
                    'marionnette_technique_off' => ['BOOL', 1],
                ],
            ],
        ];
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\marionnettes_v1'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_column_exists($this->table_prefix . 'user_marionnette_techniques', 'marionnette_technique_subtype');
	}

    public function update_data() {
        return [];
    }

    public function revert_data() {
        return [];
    }
}