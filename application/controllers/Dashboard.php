<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('mahasiswa_m');
		$this->load->library('form_validation');
	}
	


	public function index()
	{
		$data['row'] = $this->mahasiswa_m->get()->result();
		$this->load->view('dashboard' , $data);
	}

	public function add()
	{
		$this->load->view('mahasiswa/tambah_data_mahasiswa');
	}

	public function upload()
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'trim|required');
		$this->form_validation->set_rules('umur', 'umur', 'trim|required');
		
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('mahasiswa/tambah_data_mahasiswa');
		} else {
			$post = $this->input->post(null , TRUE);
			$this->mahasiswa_m->add($post);
			$this->session->set_flashdata('success', 'Data Berhasil di simpan !!!');
		}
		redirect('dashboard');
	}

	public function edit($id = null)
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'trim|required');
		$this->form_validation->set_rules('umur', 'umur', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->mahasiswa_m->get_data($id);
			if($query->num_rows() > 0 ){
				$data['row']= $query->row();
				$this->load->view('mahasiswa/form_edit_data', $data);
			}else{
				$this->session->set_flashdata('success', 'Data tidak di temukan !!!');
				redirect('dashboard');	
			}
		} else {
		   $post = $this->input->post(null , TRUE);
		   $this->mahasiswa_m->update_data($post);
		   if($this->db->affected_rows() > 0){
			   $this->session->set_flashdata('success' ,'Data berhasil dirbuah !!');
		   }
		   redirect('dashboard');
		}
	}

	public function delete($id)
	{
		$this->mahasiswa_m->del($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', 'Data Berhasil di Hapus !!!');
		}
		redirect('dashboard');
	}
}
