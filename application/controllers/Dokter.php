<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {    

    public function __construct() {
        parent::__construct();
        $this->load->model('M_dokter');
    }

    public function index() {
        $data['dokter'] = $this->M_dokter->get_all();
        $content = $this->load->view('dokter/index.php', $data, true);
        $this->load->view('Template', ['content' => $content]);
    }

    public function tambah() {
        $data['dokter'] = (object) [
            'id_dokter' => '',
            'nama_dokter' => '',
            'spesialis' => ''
        ];
        $content = $this->load->view('dokter/tambah.php', $data, true);
        $this->load->view('Template', ['content' => $content]);
    }

    public function simpan() {
        $data = [
            'nama_dokter' => $this->input->post('nama_dokter'),
            'spesialis' => $this->input->post('spesialis'),
        ];
        $this->M_dokter->insert($data);
        redirect('dokter');
    }

    public function edit($id) {
        $data['dokter'] = $this->M_dokter->get_by_id($id);
        $content = $this->load->view('dokter/edit.php', $data, true);
        $this->load->view('Template', ['content' => $content]);
    }

    public function update() {
        $id = $this->input->post('id_dokter');
        $data = [
            'nama_dokter' => $this->input->post('nama_dokter'),
            'spesialis' => $this->input->post('spesialis'),
        ];
        $this->M_dokter->update($id, $data);
        redirect('dokter');
    }

    public function hapus($id) {
        $this->M_dokter->delete($id);
        redirect('dokter');
    }
}
