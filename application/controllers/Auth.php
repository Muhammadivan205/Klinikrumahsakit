<?php
class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_user');
    }

    public function login() {
        $this->load->view('auth/login');
    }

    public function register() {
        $this->load->view('auth/register');
    }

    public function proses_register() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');

        if ($password !== $password_confirm) {
            $this->session->set_flashdata('error', 'Password dan konfirmasi password tidak cocok.');
            redirect('auth/register');
            return;
        }

        // Check if username already exists
        $existing_user = $this->M_user->get_by_username($username);
        if ($existing_user) {
            $this->session->set_flashdata('error', 'Username sudah digunakan.');
            redirect('auth/register');
            return;
        }

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Save user
        $data = [
            'username' => $username,
            'password' => $hashed_password,
            'role' => 'pasien' // default role
        ];
        $this->M_user->insert($data);

        $this->session->set_flashdata('success', 'Registrasi berhasil. Silakan login.');
        redirect('auth/login');
    }

    public function proses_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->M_user->check_login($username, $password);
        if ($user) {
            $this->session->set_userdata('user', $user);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Login gagal!');
            redirect('auth/login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user');
        redirect('auth/login');
    }
}
