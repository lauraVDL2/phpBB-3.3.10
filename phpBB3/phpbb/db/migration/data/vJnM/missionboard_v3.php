<?php

namespace phpbb\db\migration\data\vJnM;

class missionboard_v3 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'drop_columns'        => array(
                $this->table_prefix . 'missions'        => array(
                    'mission_validated',
                    'mission_finished',
                    'mission_ongoing'
                ),
            ),
            'add_columns' => array(
                $this->table_prefix.'missions' => array(
                    'mission_status' => array('VCHAR:255', 'CREATED'),
                )
            )
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\missionboard_v2'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_column_exists($this->table_prefix . 'missions', 'mission_status');
	}

    public function update_data() {
        return [];
    }
}