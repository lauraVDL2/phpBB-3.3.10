<?php

/*namespace phpbb\db\migration\data\vJnM;

class kuchiyose_v1 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'add_tables' => array(
                $this->table_prefix.'kuchiyose_techniques' => array(
                    'COLUMNS' => array(
                        'kuchiyose_technique_id' => array('UINT', NULL, 'auto_increment'),
                        'kuchiyose_id' => array('UINT', 0),
                        'kuchiyose_name' => array('VCHAR:255', ''),
                        'kuchiyose_rank' => array('VCHAR:2', 'D'),
                        'kuchiyose_user_id' => array('UINT', 0),
                        'kuchiyose_technique_type' => array('VCHAR:255', ''),
                        'kuchiyose_technique_rank' => array('VCHAR:2', 'D'),
                        'kuchiyose_technique_subtype' => array('VCHAR:255', ''),
                        'kuchiyose_technique_subspe' => array('VCHAR:255', ''),
                        'kuchiyose_technique_name' => array('VCHAR:255', ''),
                        'kuchiyose_technique_description' => array('TEXT', ''),
                        'kuchiyose_technique_validated' => array('BOOL', 0),
                        'kuchiyose_technique_is_offensive' => array('BOOL', 1),
                    ),
                    'PRIMARY_KEY' => 'kuchiyose_technique_id'
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
        return $this->db_tools->sql_table_exists($this->table_prefix . 'kuchiyose_techniques');
	}

    public function update_data() {
        return [];
    }
}*/