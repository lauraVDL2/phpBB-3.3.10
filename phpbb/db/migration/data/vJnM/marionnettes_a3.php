<?php

// namespace phpbb\db\migration\data\vJnM;

// class marionnettes_a3 extends \phpbb\db\migration\migration {
    
//     public function update_schema() {
//         return array(
//             'add_columns' => array(
//                 $this->table_prefix.'user_marionnette_techniques' => array(
//                     'marionnette_technique_descr' => array('TEXT', ''),
//                     'marionnette_technique_validated' => array('BOOL', 0),
//                     'marionnette_technique_offensive' => array('BOOL', 1),
//                 ),
//             ),
//         );
//     }

//     static public function depends_on()
//     {
//         return ['\phpbb\db\migration\data\vJnM\marionnettes_b2'];
//     }

//     public function effectively_installed()
// 	{
//         return $this->db_tools->sql_column_exists($this->table_prefix . 'user_marionnette_techniques', 'marionnette_technique_descr');
// 	}

//     public function update_data() {
//         return [];
//     }
// }