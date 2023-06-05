<?php

namespace phpbb\db\migration\data\vJnM;

class forums_experience extends \phpbb\db\migration\migration {
    
    public function update_schema() {
        return array(
            'add_columns' => array(
                $this->table_prefix . 'forums' => array(
                    'forum_post_exp' => array('UINT', 0),
                    'forum_reply_exp' => array('UINT', 0)
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
		return $this->db_tools->sql_column_exists($this->table_prefix . 'forums', 'forum_post_exp');
	}

    public function update_data() {
        return [];
    }
}