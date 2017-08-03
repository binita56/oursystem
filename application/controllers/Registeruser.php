<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registeruser extends CI_Controller
{
	public function checkRegister()
	{
	
		$this->load->model('registration');
		$flag = $this->registration->insertInput($_POST['name'],$_POST['email'],$_POST['address'],$_POST['userName'],$_POST['password']);
		
		if($flag) echo "Successfully Registred";
		else echo "Failure while registrating user";

		
	}

	public function register()
	{
		$data['title']="Register New User";
		$this->load->view('header',$data);
		$this->load->view('register');
		$this->load->view('footer');
	}
}
?>