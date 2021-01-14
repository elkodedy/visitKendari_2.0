<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('M_home');
		$this->load->model('admin/M_destination');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index(){

		$data['des'] = $this->M_home->display_destination_all();

		$this->load->view('admin/V_header');
		$this->load->view('admin/V_destination', $data);
		$this->load->view('admin/V_footer');
	}
	public function go_edit(){
		$id = $this->input->get('id');
		$this->data['keys'] = $this->M_destination->display_des($id);
		if(!isset($this->data['keys'][0]) || $this->data['keys'][0] == ""){
			redirect('admin/destination');
		} 
		else{
			$data['des'] = $this->M_destination->display_des($id);
			$this->load->view('admin/V_header');
			$this->load->view('admin/V_des_edit', $data);
			$this->load->view('admin/V_footer');
		}
	}
	public function edit(){
		$data['des_id'] = $this->input->post('des_id');
		$data['des_name'] = $this->input->post('des_name');
		$data['des_tag'] = $this->input->post('des_tag');
		$data['des_cost'] = $this->input->post('des_cost');
		$data['des_photo'] = $this->input->post('des_photo');
		$this->M_destination->edit($data);

		$this->session->set_flashdata('alert', 'Edit Complete!');
		redirect('admin/destination');
	}

	public function go_delete(){
		$id = $this->input->get('id');
		$this->M_destination->delete($id);
		$this->session->set_flashdata('alert', 'Delete Complete!');		
		redirect('admin/destination');
	}

	public function go_add(){
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_des_add');
		$this->load->view('admin/V_footer');
	}

	public function add(){
		$data['des_name'] = $this->input->post('des_name');
		$data['des_cost'] = $this->input->post('des_cost');
		$data['des_photo'] = $this->input->post('des_photo');
		$data['des_info'] = $this->input->post('des_info');
	
		$this->M_destination->add($data);		
	
		$this->session->set_flashdata('alert', 'Add Complete!');
		redirect('admin/destination');
	}
}
