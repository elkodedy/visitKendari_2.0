<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('admin/M_home');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index(){
		$data['count_des'] = $this->M_home->count_des();
		$data['count_acc'] = $this->M_home->count_acc();
		$data['count_gui'] = $this->M_home->count_gui();
		
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_home', $data);
		$this->load->view('admin/V_footer');
	}
}
