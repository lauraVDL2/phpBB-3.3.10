<?php

namespace phpbb\db\migration\data\vJnM;

class marionnettes_v1 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'add_tables' => array(
                $this->table_prefix.'user_marionnette_techniques' => array(
                    'COLUMNS' => array(
                        'marionnette_technique_id' => array('UINT', NULL, 'auto_increment'),
                        'marionnette_id' => array('UINT', 0),
                        'marionnette_name' => array('VCHAR:255', ''),
                        'marionnette_user_id' => array('UINT', 0),
                        'marionnette_technique_type' => array('VCHAR:255', ''),
                        'marionnette_technique_rank' => array('VCHAR:1', ''),
                    ),
                    'PRIMARY_KEY' => 'marionnette_technique_id'
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
        return $this->db_tools->sql_table_exists($this->table_prefix . 'user_marionnette_techniques');
	}

    public function update_data() {
        return [];
    }
}