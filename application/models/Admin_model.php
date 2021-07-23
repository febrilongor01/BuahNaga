<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    function penyakit()
    {
        return $this->db->query('SELECT * FROM tb_penyakit ')->result_array();
    }
    function epeny($kode, $nama, $id)
    {
        $this->db->query("UPDATE tb_penyakit SET id_penyakit='$kode', nama_penyakit='$nama' WHERE id=$id");
    }
    function edt_nama_pnykt($nama, $kode)
    {
        $this->db->query("UPDATE tb_penyakit SET nama_penyakit='$nama' WHERE id_penyakit=$kode");
    }
    function edt_kode_pnykt($kode, $id)
    {
        $this->db->query("UPDATE tb_penyakit SET id_penyakit='$kode' WHERE id=$id");
    }
    function hpeny($id)
    {
        $this->db->query("DELETE FROM tb_penyakit WHERE id=$id");
    }
    function tpeny($kode, $nama)
    {
        $this->db->query("INSERT INTO tb_penyakit (id_penyakit, nama_penyakit) VALUES ('$kode', '$nama')");
    }
    function gjl()
    {
        return $this->db->query('SELECT * FROM tb_gejala ')->result_array();
    }
    function tgjl($kode, $nama)
    {
        $this->db->query("INSERT INTO tb_gejala (kode_gejala, nama_gejala) VALUES ('$kode', '$nama')");
    }
    function hgjl($id)
    {
        $this->db->query("DELETE FROM tb_gejala WHERE id=$id");
    }
    function egjl($kode, $nama, $id)
    {
        $this->db->query("UPDATE tb_gejala SET id_gejala='$kode', nama_gejala='$nama' WHERE id=$id");
    }
    function edt_nama_gjl($nama, $id)
    {
        $this->db->query("UPDATE tb_gejala SET nama_gejala='$nama' WHERE id=$id");
    }
    function edt_kode_gjl($kode, $id)
    {
        $this->db->query("UPDATE tb_gejala SET id_gejala='$kode' WHERE id=$id");
    }
    function diagnosa()
    {
        return $this->db->query("SELECT * FROM tb_pemeriksaan INNER JOIN tb_user ON tb_pemeriksaan.id_user = tb_user.id ")->result_array();
    }
    function diagnosa1($id)
    {
        return $this->db->query("SELECT * FROM tb_pemeriksaan WHERE id_pemeriksaan=$id ")->result_array();
    }
    function ingjl($b)
    {
        $builder = $this->db->select('tb_gejala.nama_gejala')->where('tb_gejala.kode_gejala', $b)->get("tb_gejala")->row('nama_gejala');
        // var_dump($builder);
        return $builder;
    }
    function gigjl($b)
    {
        $builder = $this->db->select('tb_pemeriksaan.input_gejala')->where('tb_gejala.kode_gejala', $b)->get("tb_gejala")->row('nama_gejala');
        // var_dump($builder);
        return $builder;
    }
    function getpenyakit($data)
    {
        return $this->db->query("SELECT * FROM tb_penyakit WHERE kode_penyakit='$data'")->result_array();
    }
}
