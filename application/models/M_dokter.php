<?php
class M_dokter extends CI_Model {
    public function get_all() {
        return $this->db->get('tb_dokter')->result();
    }

    public function count_all() {
        return $this->db->count_all('tb_dokter');
    }

    public function insert($data) {
        $this->db->insert('tb_dokter', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('tb_dokter', ['id_dokter' => $id])->row();
    }

    public function update($id, $data) {
        $this->db->where('id_dokter', $id);
        $this->db->update('tb_dokter', $data);
    }

    public function delete($id) {
        $this->db->delete('tb_dokter', ['id_dokter' => $id]);
    }
}
