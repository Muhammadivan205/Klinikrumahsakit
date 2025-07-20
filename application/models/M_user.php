<?php // MODEL: M_user.php ?>
<?php
class M_user extends CI_Model {
    public function check_login($username, $password) {
        return $this->db->get_where('users', [
            'username' => $username,
            'password' => md5($password) // Sesuaikan jika pakai hash lain
        ])->row();
    }

    public function get_by_username($username) {
        return $this->db->get_where('users', ['username' => $username])->row();
    }

    public function insert($data) {
        return $this->db->insert('users', $data);
    }
}
