<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fuzzy extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Fuzzy_model');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$getdata = $this->Fuzzy_model->getData();
		$data['judul'] = 'Home';
		$data['heart'] = $getdata;
		$this->load->view('layout/header', $data);
		$this->load->view('fuzzy/index', $data);
		$this->load->view('layout/footer');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('age', 'Age', 'required');
		$this->form_validation->set_rules('cholesterol', 'Cholesterol', 'required');
		$this->form_validation->set_rules('st_dep', 'ST Depression', 'required');

		$data['judul'] = 'Prediksi Baru';
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header', $data);
			$this->load->view('fuzzy/tambah', $data);
			$this->load->view('layout/footer');
		} else {
			$this->Fuzzy_model->tambah();
			$this->session->set_flashdata('flash', 'Berhasil Ditambah');
			redirect('fuzzy');
		}
	}

	public function hapus($id_predic)
    {
        $this->Fuzzy_model->hapus($id_predic);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('fuzzy');
    }
}
