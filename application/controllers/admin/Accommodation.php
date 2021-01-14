<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accommodation extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('M_home');
		$this->load->model('admin/M_accommodation');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index(){

		$data['acc'] = $this->M_home->display_accommodation_all();

		$this->load->view('admin/V_header');
		$this->load->view('admin/V_accommodation', $data);
		$this->load->view('admin/V_footer');
	}
	public function go_edit(){
		$id = $this->input->get('id');
		$this->data['keys'] = $this->M_accommodation->display_acc($id);
		if(!isset($this->data['keys'][0]) || $this->data['keys'][0] == ""){
			redirect('admin/accommdation');
		} 
		else{
			$data['acc'] = $this->M_accommodation->display_acc($id);
			$this->load->view('admin/V_header');
			$this->load->view('admin/V_acc_edit', $data);
			$this->load->view('admin/V_footer');
		}
	}
	public function edit(){
		$data['acc_id'] = $this->input->post('acc_id');
		$data['acc_name'] = $this->input->post('acc_name');
		$data['acc_cost'] = $this->input->post('acc_cost');
		$data['acc_photo'] = $this->input->post('acc_photo');
		$this->M_accommodation->edit($data);

		$this->session->set_flashdata('alert', 'Edit Complete!');
		redirect('admin/accommodation');
	}

	public function go_delete(){
		$id = $this->input->get('id');
		$this->M_accommodation->delete($id);	
		$this->session->set_flashdata('alert', 'Delete Complete!');	
		redirect('admin/accommodation');
	}

	public function go_add(){
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_acc_add');
		$this->load->view('admin/V_footer');
	}

	public function add(){
		$data['acc_name'] = $this->input->post('acc_name');
		$data['acc_cost'] = $this->input->post('acc_cost');
		$data['acc_photo'] = $this->input->post('acc_photo');
		$data['acc_info'] = $this->input->post('acc_info');
	
		$this->M_accommodation->add($data);		
	
		$this->session->set_flashdata('alert', 'Add Complete!');
		redirect('admin/accommodation');
	}
}
