<?php

namespace phpbb\db\migration\data\vJnM;

class kuchiyose_m3 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array('add_columns' => array(
                $this->table_prefix.'user_kuchiyose_techniques' => array(
                    'kuchiyose_technique_type' => array('VCHAR:255', ''),
                    'kuchiyose_technique_rank' => array('VCHAR:1', ''),
                    'kuchiyose_technique_subtype' => array('VCHAR:255', ''),
                    'kuchiyose_technique_subspe' => array('VCHAR:255', ''),
                    'kuchiyose_technique_name' => array('VCHAR:255', ''),
                    /*'kuchiyose_technique_description' => array('TEXT', ''),
                    'kuchiyose_technique_validated' => array('BOOL', 0),
                    'kuchiyose_technique_is_offensive' => array('BOOL', 0),*/
                ),
            ),
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\kuchiyose_m1'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_column_exists($this->table_prefix . 'user_kuchiyose_techniques', 'kuchiyose_technique_type');
	}

    public function update_data() {
        return [];
    }
}