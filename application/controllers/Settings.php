<?php


class Settings extends CI_Controller
{
	public function index()
	{
		$data['title']= "Settings";
		$this->load->view('header',$data);
		$this->load->view('settingscontent');
		$this->load->view('footer');
	}
}

?>