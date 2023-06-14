<?php
class RegController extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	$this->load->model('RegModel'); ///load model
	}

	public function index()
	{

		if($this->input->post('register'))
		{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');

		$this->RegModel->insert_data($name,$email,$phone,$password);

	}else{
	$this->load->view('RegView');
	}
	}
}
?>