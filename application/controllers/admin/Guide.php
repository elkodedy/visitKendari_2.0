<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guide extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('M_home');
		$this->load->model('admin/M_guide');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index(){

		$data['gui'] = $this->M_home->display_guide_all();

		$this->load->view('admin/V_header');
		$this->load->view('admin/V_guide', $data);
		$this->load->view('admin/V_footer');
	}
	public function go_edit(){
		$id = $this->input->get('id');
		$this->data['keys'] = $this->M_guide->display_gui($id);
		if(!isset($this->data['keys'][0]) || $this->data['keys'][0] == ""){
			redirect('admin/guide');
		} 
		else{
			$data['gui'] = $this->M_guide->display_gui($id);
			$this->load->view('admin/V_header');
			$this->load->view('admin/V_gui_edit', $data);
			$this->load->view('admin/V_footer');
		}
	}
	public function edit(){
		$data['guide_id'] = $this->input->post('gui_id');
		$data['guide_name'] = $this->input->post('gui_name');
		$data['guide_cost'] = $this->input->post('gui_cost');
		$data['guide_photo'] = $this->input->post('gui_photo');
		$this->M_guide->edit($data);

		$this->session->set_flashdata('alert', 'Edit Complete!');
		redirect('admin/guide');
	}

	public function go_delete(){
		$id = $this->input->get('id');
		$this->M_guide->delete($id);
		$this->session->set_flashdata('alert', 'Delete Complete!');		
		redirect('admin/guide');
	}

	public function go_add(){

		$this->load->view('admin/V_header');
		$this->load->view('admin/V_gui_add');
		$this->load->view('admin/V_footer');
	}

	public function add(){
		$data['guide_name'] = $this->input->post('guide_name');
		$data['guide_cost'] = $this->input->post('guide_cost');
		$data['guide_photo'] = $this->input->post('guide_photo');
		$data['guide_info'] = $this->input->post('guide_info');
	
		$this->M_guide->add($data);		
	
		$this->session->set_flashdata('alert', 'Add Complete!');
		redirect('admin/guide');
	}
}
