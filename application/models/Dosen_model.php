<?php 

class Dosen_model extends CI_Model
{
    public function __construct()
    {
        # code...
        parent::__construct();
        $this->table = "dosen";
    }

    public function alldata()   
    {
        # code...
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('nama');
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            # code...
            return false;

        } else {
            $row = $query->result_array();
            return $row;
        }
    }

    public function getData($nik)
    {
        # code...
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('nik', $nik);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            # code...
            return false;

        }else {

            $row = $query->result_array();
            return $row[0];

        }
    }

    public function simpan($data)
    {
        # code...
        $this->db->insert($this->table, $data);
    }

    public function hapus($nik)
    {
        # code...
        $this->db->where('nik', $nik);
        $this->db->delete($this->table);
    }

    public function ubah($data, $nik)
    {
        # code...
        $this->db->where('nik', $nik);
        $this->db->update($this->table, $data);
    }
}


























?>