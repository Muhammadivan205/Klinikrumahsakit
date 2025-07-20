<?php
class M_pemeriksaan extends CI_Model {
    public function get_all() {
        $this->db->select('tb_pemeriksaan.*, tb_dokter.nama_dokter, tb_pasien.nama_pasien');
        $this->db->from('tb_pemeriksaan');
        $this->db->join('tb_dokter', 'tb_pemeriksaan.id_dokter = tb_dokter.id_dokter');
        $this->db->join('tb_pasien', 'tb_pemeriksaan.id_pasien = tb_pasien.id_pasien');
        return $this->db->get()->result();
    }

    public function count_all() {
        return $this->db->count_all('tb_pemeriksaan');
    }

    public function get_by_id($id) {
        return $this->db->get_where('tb_pemeriksaan', ['id_pemeriksaan' => $id])->row();
    }

    public function insert($data) {
        $this->db->insert('tb_pemeriksaan', $data);
    }

    public function update($id, $data) {
        $this->db->where('id_pemeriksaan', $id);
        $this->db->update('tb_pemeriksaan', $data);
    }

    public function delete($id) {
        $this->db->delete('tb_pemeriksaan', ['id_pemeriksaan' => $id]);
    }
}
