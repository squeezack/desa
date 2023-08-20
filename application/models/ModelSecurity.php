<?php

class ModelSecurity extends CI_Model {

	public function getSecurity()
	{
		$email = $this->session->userdata('email');
		if(empty($email)){
			$this->session->sess_destroy();
			redirect('login');
		} else if ($email !== 'admin@gmail.com'){
			redirect('/');
		}
	}
}