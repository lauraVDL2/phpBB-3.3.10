<?php

namespace phpbb\db\migration\data\vJnM;

class missionboard_v2 extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array('add_columns' => array(
                $this->table_prefix.'missions' => array(
                    'mission_ongoing' => array('BOOL', 0),
                ),
            ),
        );
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\vJnM\missionboard_v1'];
    }

    public function effectively_installed()
	{
        return $this->db_tools->sql_column_exists($this->table_prefix . 'missions', 'mission_ongoing');
	}

    public function update_data() {
        return [];
    }
}