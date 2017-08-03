<?php

class Home extends CI_Controller
{

public function index()
{
	$data['title']="Homepage";
	$this->load->view('header',$data);
	$this->load->view('content');
	$this->load->view('footer');
}

}				
?>