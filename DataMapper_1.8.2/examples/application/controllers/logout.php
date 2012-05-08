<?php

class Logout extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('login_manager', array('autologin' => FALSE));
	}
	
	function index()
	{
		$this->login_manager->logout();
		redirect('login');
	}
}

/* End of file login_view.php */
/* Location: ./system/application/controllers/login_view.php */