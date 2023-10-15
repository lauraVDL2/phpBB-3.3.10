<?php

namespace phpbb\db\migration\data\vJnM;

class techniques extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'add_columns' => array(
                $this->table_prefix.'users' => array(
                    'user_first_element' => array('VCHAR:100', ''),
                    'user_second_element' => array('VCHAR:100', ''),
                    'user_third_element' => array('VCHAR:100', ''),
                ),
            ),
            'add_tables' => array(
                $this->table_prefix.'gained_techniques' => array(
                    'COLUMNS' => array(
                        'user_id' => array('UINT', 0),
                        'd_techniques' => array('UINT', 3),
                        'c_techniques' => array('UINT', 2),
                        'b_techniques' => array('UINT', 0),
                        'a_techniques' => array('UINT', 0),
                        's_techniques' => array('UINT', 0),
                    ),
                    'PRIMARY_KEY' => 'user_id'
                ),
                $this->table_prefix.'user_techniques' => array(
                    'COLUMNS' => array(
                        'user_id' => array('UINT', 0),
                        'technique_rank' => array('VCHAR:1', ''),
                        'technique_type' => array('VCHAR:100', ''),
                        'technique_subtype' => array('VCHAR:100', ''),
                        'technique_name' => array('VCHAR:255', ''),
                        'technique_description' => array('TEXT', ''),
                        'technique_validated' => array('BOOL', 0),
                    ),
                    'PRIMARY_KEY' => 'user_id'
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
        return $this->db_tools->sql_table_exists($this->table_prefix . 'user_techniques');
	}

    public function update_data() {
        return [];
    }
}