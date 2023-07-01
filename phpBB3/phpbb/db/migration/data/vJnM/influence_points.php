<?php

namespace phpbb\db\migration\data\vJnM;

class influence_points extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
                    'add_columns' => array(
                        $this->table_prefix.'groups' => array(
                            'group_influence_points' => array('UINT', 0)
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
        return $this->db_tools->sql_column_exists($this->table_prefix . 'groups', 'group_influence_points');
	}

    public function update_data() {
        return [];
    }
}