<?php 
    class FirstController extends CI_Controller{
        public function firstCont(){
            $this ->load ->model('FirstModel');
            $users = $this ->FirstModel -> first();
            
            echo '<pre>';
        print_r($users);
        echo '</pre>';

       
            echo $str;
            $this -> load -> view('FirstView');
        }
    }
?>