<?php // CONTROLLER: Dashboard.php ?>
<?php
class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('user')) {
            redirect('auth/login');
        }
        $this->load->model('M_dokter');
        $this->load->model('M_pasien');
        $this->load->model('M_pemeriksaan');
    }

    public function index() {
        $data['count_dokter'] = $this->M_dokter->count_all();
        $data['count_pasien'] = $this->M_pasien->count_all();
        $data['count_pemeriksaan'] = $this->M_pemeriksaan->count_all();
        $content = $this->load->view('dashboard', $data, true);
        $this->load->view('Template', ['content' => $content]);
    }
}
