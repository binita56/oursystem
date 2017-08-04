<?php

class Home extends CI_Controller
{

public function index()
{
	$this->load->library('session');
	$data = array(
		"name" => $this->session->userdata("name"),
		"address" => $this->session->userdata("address"),
		"email"=>$this->session->userdata("email")
		);



	if($data['name']!=null)
	{
		
		$data['title']="Homepage";
		$this->load->view('header',$data);
		$this->load->view('content',$data);
		$this->load->view('footer');

	}
	else
	{
		echo "You don't have any right to access this file. got it ";
	}
}

}				
?>