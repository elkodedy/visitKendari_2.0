<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('templates/v_header');
		$this->load->view('v_login');
		$this->load->view('templates/v_footer');
	}
}
