<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('M_home');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index(){
		$data['des'] = $this->M_home->display_destination();
		$data['acc'] = $this->M_home->display_accommodation();
		$data['gui'] = $this->M_home->display_guide();

		$this->load->view('templates/V_header');
		$this->load->view('V_home', $data);
		$this->load->view('templates/V_footer');
	}

	public function destination(){
		$data['des'] = $this->M_home->display_destination_all();
		$data['des_1'] = $this->M_home->display_destination_1();

		$this->load->view('templates/V_header');
		$this->load->view('V_destination', $data);
		$this->load->view('templates/V_footer');
	}

	public function accommodation(){	
		$data['acc'] = $this->M_home->display_accommodation_all();
		$data['acc_1'] = $this->M_home->display_accommodation_1();

		$this->load->view('templates/V_header');
		$this->load->view('V_accommodation', $data);
		$this->load->view('templates/V_footer');
	}

	public function guide(){	
		$data['gui'] = $this->M_home->display_guide_all();
		$data['gui_1'] = $this->M_home->display_guide_1();

		$this->load->view('templates/V_header');
		$this->load->view('V_guide', $data);
		$this->load->view('templates/V_footer');
	}
	
	public function login(){
		$this->load->view('templates/v_header');
		$this->load->view('v_login');
		$this->load->view('templates/v_footer');
	}
}
