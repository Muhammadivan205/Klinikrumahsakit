<?php
class Pemeriksaan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_pemeriksaan');
        $this->load->model('M_dokter');
        $this->load->model('M_pasien');
    }

    public function index() {
        $data['pemeriksaan'] = $this->M_pemeriksaan->get_all();
        $content = $this->load->view('pemeriksaan_index', $data, true);
        $this->load->view('Template', ['content' => $content]);
    }

    public function tambah() {
        $data['dokter'] = $this->M_dokter->get_all();
        $data['pasien'] = $this->M_pasien->get_all();
        $this->load->view('pemeriksaan_tambah', $data);
    }

    public function simpan() {
        $data = [
            'id_dokter' => $this->input->post('id_dokter'),
            'id_pasien' => $this->input->post('id_pasien'),
            'keluhan' => $this->input->post('keluhan'),
            'diagnosa' => $this->input->post('diagnosa')
        ];
        $this->M_pemeriksaan->insert($data);
        redirect('pemeriksaan');
    }

    public function edit($id) {
        $data['pemeriksaan'] = $this->M_pemeriksaan->get_by_id($id);
        $data['dokter'] = $this->M_dokter->get_all();
        $data['pasien'] = $this->M_pasien->get_all();
        $this->load->view('pemeriksaan_edit', $data);
    }

    public function update() {
        $id = $this->input->post('id_pemeriksaan');
        $data = [
            'id_dokter' => $this->input->post('id_dokter'),
            'id_pasien' => $this->input->post('id_pasien'),
            'keluhan' => $this->input->post('keluhan'),
            'diagnosa' => $this->input->post('diagnosa')
        ];
        $this->M_pemeriksaan->update($id, $data);
        redirect('pemeriksaan');
    }

    public function hapus($id) {
        $this->M_pemeriksaan->delete($id);
        redirect('pemeriksaan');
    }
}
