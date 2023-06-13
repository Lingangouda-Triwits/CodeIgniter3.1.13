<?php
    class FirstModel extends CI_Model{
        public function first(){
            $users = $this -> db -> query ('SELECT * FROM ci_things')-> result_array();
            $str = "hello this is codeIgniter";
            return $data;
        }
    }

?>