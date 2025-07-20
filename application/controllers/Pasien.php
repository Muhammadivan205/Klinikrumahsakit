<?php
class Pasien extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_pasien');
        $this->load->library('session');
    }

    public function index() {
        $user = $this->session->userdata('user');
        $role = $user ? $user->role : null;
        $id_pasien = $user ? $user->id_pasien : null;

        // Debug log (optional, remove in production)
        log_message('debug', "User role: $role, id_pasien: $id_pasien");

        if ($role == 'pasien') {
            if ($id_pasien) {
                $pasien_data = $this->M_pasien->get_by_id($id_pasien);
                if ($pasien_data) {
                    $data['pasien'] = [$pasien_data];
                } else {
                    $data['pasien'] = [];
                }
            } else {
                // id_pasien not set in session, fallback to empty data
                log_message('error', 'id_pasien not set in session for pasien user');
                $data['pasien'] = [];
            }
        } else if ($role == 'admin') {
            $data['pasien'] = $this->M_pasien->get_all();
        } else {
            // Default empty data for other roles or no session
            $data['pasien'] = [];
        }

        $content = $this->load->view('pasien/index', $data, true);
        $this->load->view('Template', ['content' => $content]);
    }

    public function tambah() {
        // Only admin can add
        $user = $this->session->userdata('user');
        $role = $user ? $user->role : null;
        if ($role == 'admin') {
            $this->load->view('pasien/tambah');
        } else {
            show_404();
        }
    }

    public function simpan() {
        $user = $this->session->userdata('user');
        $role = $user ? $user->role : null;
        if ($role == 'admin') {
            $data = [
                'nama_pasien' => $this->input->post('nama_pasien'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp')
            ];
            $this->M_pasien->insert($data);
            redirect('pasien');
        } else {
            show_404();
        }
    }

    public function edit($id) {
        // Pasien can only edit themselves
        $user = $this->session->userdata('user');
        $role = $user ? $user->role : null;
        $id_pasien = $user ? $user->id_pasien : null;
        if ($role == 'pasien') {
            if ($id != $id_pasien) show_404(); // cannot access other pasien
        }

        $data['pasien'] = $this->M_pasien->get_by_id($id);
        $this->load->view('pasien/edit', $data);
    }

    public function update() {
        $id = $this->input->post('id_pasien');

        $user = $this->session->userdata('user');
        $role = $user ? $user->role : null;
        $id_pasien = $user ? $user->id_pasien : null;
        if ($role == 'pasien') {
            if ($id != $id_pasien) show_404(); // pasien can only update themselves
        }

        $data = [
            'nama_pasien' => $this->input->post('nama_pasien'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp')
        ];
        $this->M_pasien->update($id, $data);
        redirect('pasien');
    }

    public function hapus($id) {
        // Only admin can delete
        $user = $this->session->userdata('user');
        $role = $user ? $user->role : null;
        if ($role == 'admin') {
            $this->M_pasien->delete($id);
            redirect('pasien');
        } else {
            show_404();
        }
    }
}
