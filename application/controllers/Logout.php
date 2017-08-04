<?php
class Logout extends CI_Controller
{


	public function index()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		
		echo "Successfully logout ";
		echo "<a href='/oursystem'><br><br><br><br>Go to home</a>";
	}
}