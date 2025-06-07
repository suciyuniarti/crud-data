<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property CI_URI $uri
 * @property CI_DB_query_builder $db
 * @property Form_model $Form_model
 */
class Form extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        // Load model dan session library (pastikan session sudah autoload di config/autoload.php)
        $this->load->model('Form_model');
        $this->load->library('session');
    }

    // Method menampilkan data
    public function index()
    {
        $data['title'] = 'Data Diri';
        $data['form'] = $this->Form_model->get_all()->result();

        $this->load->view('form/template/header', $data);
        $this->load->view('form/index', $data);
        $this->load->view('form/template/footer');
    }

    // Method menampilkan form tambah data
    public function add()
    {
        $data['title'] = 'Tambah Data Diri';

        $this->load->view('form/template/header', $data);
        $this->load->view('form/add');
        $this->load->view('form/template/footer');
    }

    // Method menambahkan data ke database
    public function insert()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'),
            'alamat' => $this->input->post('alamat')
        ];

        if ($this->Form_model->insert($data)) {
            $this->session->set_flashdata('message', 'Data berhasil ditambahkan');
        } else {
            $this->session->set_flashdata('message', 'Data gagal ditambahkan');
        }        
        redirect('form');
    }

    // Method menampilkan form edit data
    public function edit($id)
    {
        $data['title'] = 'Edit Data Diri';
        $data['data_diri'] = $this->Form_model->edit($id);

        $this->load->view('form/template/header', $data);
        $this->load->view('form/edit', $data);
        $this->load->view('form/template/footer');
    }

    // Method update data
    public function update()
    {
        $id = $this->input->post('id');
        $data = [
            'nama' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'),
            'alamat' => $this->input->post('alamat')
        ];
        
        $update_result = $this->Form_model->update($id, $data);
        
        if ($update_result) {
            $this->session->set_flashdata('message', 'Data berhasil diubah');
        } else {
            $this->session->set_flashdata('message', 'Data gagal diubah');
        }
        redirect('form');
    }


    // Method hapus data
    public function delete($id)
    {
        $this->Form_model->delete($id);
        $this->session->set_flashdata('message', 'Data berhasil dihapus');
        redirect('form');
    }
}