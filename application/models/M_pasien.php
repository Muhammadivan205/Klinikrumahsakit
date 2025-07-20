<?php
class M_pasien extends CI_Model {
    public function get_all() {
        return $this->db->get('tb_pasien')->result();
    }

    public function count_all() {
        return $this->db->count_all('tb_pasien');
    }

    public function get_by_id($id) {
        return $this->db->get_where('tb_pasien', ['id_pasien' => $id])->row();
    }

    public function insert($data) {
        $this->db->insert('tb_pasien', $data);
    }

    public function update($id, $data) {
        $this->db->where('id_pasien', $id);
        $this->db->update('tb_pasien', $data);
    }

    public function delete($id) {
        $this->db->delete('tb_pasien', ['id_pasien' => $id]);
    }
}
