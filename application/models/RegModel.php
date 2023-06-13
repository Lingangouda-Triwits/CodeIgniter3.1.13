<?php
class RegModel extends CI_Model
{
	function insert_data($name,$email,$phone,$password)
	{
	// $query = $this -> db -> query("select * from user where (email='".$email."' or phone='".$phone."')");
    // $query = $this -> db -> select('slno,name,email,phone, password') -> where ('email',$email || 'phone',$phone) ->get('user') -> result_array();

    $query = $this->db->select('*')
    ->from('user')
    ->where("(email='$email' || phone='$phone')")
    ->get();

        $result = $query->result(); 
		$row = $query->num_rows();
		// if($row){
		// $data['message']="<h3 style='color:red'>This user already registered</h3>";
		// }
		// else
		// {
		// $query=$this->db->query("insert into user set name='$name',email='$email',phone='$phone',password='$password'");

		// $data['message']="<h3 style='color:blue'>You are registered successfully</h3>";
		// }
		// $this->load->view('RegView',@$data);


if ($row) {
    echo "<script>alert('This user already registered');</script>";
} else {
    $query = $this->db->query("insert into user set name='$name',email='$email',phone='$phone',password='$password'");
    echo "<script>alert('You are registered successfully');</script>";
}
$this->load->view('RegView', @$data);


}
}