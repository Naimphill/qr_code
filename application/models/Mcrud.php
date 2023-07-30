<?php
/**
 * 
 */
class Mcrud extends CI_Model
{

    public function cek_login($u, $p)
    {
        $q = $this->db->get_where('tbl_user_takmir', array('username' => $u, 'password' => $p, ));
        return $q;
    }

    public function get_all_data($tabel)
    {
        $q = $this->db->get($tabel);
        return $q;
    }

    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function get_by_id($tabel, $id)
    {
        return $this->db->get_where($tabel, $id);
    }

    public function update($tabel, $data, $pk, $id)
    {
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }

    public function hapus_data($where, $tabel)
    {
        $this->db->where($where);
        $this->db->delete($tabel);
    }
    public function join_tbl($tabel, $tbl_join, $join)
    {
        $this->db->join($tbl_join, $join);
        return $this->db->get($tabel);
    }
    public function get_all_new_data($tabel, $id)
    {
        $this->db->order_by($id, 'DESC');
        $this->db->limit(10);
        return $this->db->get($tabel);
    }
    public function get_id_kategori_by_id_master_from_tbl_master_barang($id_master)
    {
        // Assuming you have a table named 'tbl_master_barang' with columns 'id_master' and 'id_kategori'
        $this->db->select('id_kategori');
        $this->db->from('tbl_master_barang');
        $this->db->where('id_master', $id_master);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->id_kategori;
        } else {
            // Handle the case when data is not found or return null
            return null;
        }
    }
    // BarangModel.php

    public function update_qr_code_path($id_barang, $qrCodePath)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->update('tbl_barang', ['qr_code' => $qrCodePath]);
    }

    // ... fungsi-fungsi lain dalam model ...
    public function get_barang_by_id($id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $query = $this->db->get('tbl_barang');

        // Jika data ditemukan, kembalikan hasilnya sebagai array asosiatif
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null; // Jika data tidak ditemukan, kembalikan null
        }
    }



}
?>