<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');

		$this->data['dataUser'] = $this->session->userdata('data_ldap');

		$this->data['user_id'] = $this->tank_auth->get_user_id();
		if(isset($this->data['user_id'])){
			$this->data['session'] = $this->tank_auth->get_user_profile($this->data['user_id']);
		}else{
			$this->data['session'] = [];
		}
	}

	public function index()
	{
		$this->load->view('landing/views', $this->data);
	}
}
