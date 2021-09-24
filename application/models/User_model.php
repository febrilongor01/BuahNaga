<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function ingjl($id)
    {
        $this->db->insert('tb_pemeriksaan', $id);
    }
    function diagnosa($id)
    {
        return $this->db->query("SELECT * FROM tb_pemeriksaan INNER JOIN tb_user ON tb_pemeriksaan.id_user = tb_user.id WHERE id_user=$id")->result_array();
    }
    function getpenyakit($id)
    {
        return $this->db->query("SELECT * FROM tb_pemeriksaan WHERE id_pemeriksaan=$id")->result_array();
        // return $this->db->query("SELECT * FROM tb_detail_penyakit b LEFT JOIN tb_penyakit a ON a.kode_penyakit=b.kode_penyakit WHERE id=")->result_array();
        // where('id', $idx)
        // ->join('tb_detail_penyakit b', 'a.kode_penyakit=b.kode_penyakit', 'left')
        // ->select('nama_penyakit, penjelasan, pencegahan')
        // ->get('tb_penyakit a');
    }

    function getdetail($data)
    {
        return $this->db->query("SELECT * FROM tb_detail_penyakit WHERE kode_penyakit='$data'")->result_array();
    }

    function getpemeriksaan()
    {
        return $this->db->query("SELECT * FROM tb_pemeriksaan order by id_pemeriksaan desc limit 1");
    }

    function getgjl($b)
    {
        $builder = $this->db->select('tb_gejala.nama_gejala')->where('tb_gejala.kode_gejala', $b)->get("tb_gejala")->row('nama_gejala');
        // var_dump($builder);
        return $builder;
    }
}
