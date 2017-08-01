<?php

 class Registration extends CI_Model
{
	
	function getData()
	{
	
	$result = $this->db->query("select * from register");

	return $result->result();
	}


	function insertInput($name, $email, $address, $username, $password)
	{
		$outcome = $this->db->query("insert into register (name, email, address, username) values(".$name.", ".$email.", ".$address.", ".$username.", ".$password.")");
		
	return $outcome->result();
	}

	
	
}

?>