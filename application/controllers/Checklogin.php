<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Checklogin extends CI_Controller
{

 public function index()
	{
		$this->load->model('registration');
		$data = $this->registration->getData();
		$username = $_POST['userName'];
		$password = $_POST['password'];

		$user="false";$pass="false";
		foreach($data as $value)
		{

			
			if($username==$value->username)
				{
					$user="true";
					if($password==$value->password)	
						{
							$pass="true";
							$this->load->library('session');
							$data = array(
								"name" => $username,
								"address" => $value->address,
								"email"=>$value->email
								);
							$this->session->set_userdata($data);
							header("location: home");

						}
				}			
		}

		if($user!="true")echo "unregistered User!";
		if($user=="true" and $pass!="true") echo "Username and password didn't match"; 
	}
}

?>