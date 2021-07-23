<?php
defined('BASEPATH') or exit('dilarang masuk');

class Admin_con extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['gjl'] = $this->Admin_model->gjl();
        $data['penyakit'] = $this->Admin_model->penyakit();
        $this->load->view('admin/dashboard', $data);
    }
    public function pnykt()
    {
        $data['title'] = 'Data Penyakit';
        $data['penyakit'] = $this->Admin_model->penyakit();
        $this->load->view('admin/penyakit', $data);
    }
    public function epeny()
    {
        $data['penyakit'] = $this->Admin_model->penyakit();
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $id = $this->input->post('id');
        foreach ($data['penyakit'] as $d) {
            if ($kode == $d['id_penyakit']) {
                $this->session->set_flashdata('gagal', "Gagal, Kode Penyakit $kode Telah Digunakan");
                redirect(base_url('pnykt'), 'refresh');
            }
        }
        if ($kode == false) {
            $this->Admin_model->edt_nama_pnykt($nama, $id);
        } elseif ($nama == FALSE) {
            $this->Admin_model->edt_kode_pnykt($kode, $id);
        } else {
            $this->Admin_model->epeny($kode, $nama, $id);
        }
        $this->session->set_flashdata('gagal', 'Berhasil Mengedit');
        redirect(base_url('pnykt'), 'refresh');
    }
    public function hpeny()
    {
        $id = $this->input->post('id');
        $this->Admin_model->hpeny($id);
        $this->session->set_flashdata('gagal', 'Berhasil Menghapus');
        redirect(base_url('pnykt'), 'refresh');
    }
    public function tpeny()
    {
        $data['penyakit'] = $this->Admin_model->penyakit();
        $kode = $this->input->post('kode');
        foreach ($data['penyakit'] as $d) {
            if ($kode == $d['id_penyakit']) {
                $this->session->set_flashdata('gagal', "Gagal Kode Penyakit $kode Telah Digunakan");
                redirect(base_url('pnykt'), 'refresh');
            }
        }
        $nama = $this->input->post('nama');
        $this->Admin_model->tpeny($kode, $nama);
        $this->session->set_flashdata('gagal', 'Berhasil Menambahkan');
        redirect(base_url('pnykt'), 'refresh');
    }
    public function gjl()
    {
        $data['title'] = 'Data Gejala';
        $data['gjl'] = $this->Admin_model->gjl();
        $this->load->view('admin/gejala', $data);
    }
    public function tgjl()
    {
        $data['gjl'] = $this->Admin_model->gjl();
        $kode = $this->input->post('kode');
        foreach ($data['gjl'] as $d) {
            if ($kode == $d['kode_gejala']) {
                $this->session->set_flashdata('gagal', "Gagal, Kode Gejala $kode Telah Digunakan");
                redirect(base_url('gjl'), 'refresh');
            }
        }
        $nama = $this->input->post('nama');
        $this->Admin_model->tgjl($kode, $nama);
        $this->session->set_flashdata('gagal', 'Berhasil Menambahkan');
        redirect(base_url('gjl'), 'refresh');
    }
    public function hgjl()
    {
        $id = $this->input->post('id');
        $this->Admin_model->hgjl($id);
        $this->session->set_flashdata('gagal', 'Berhasil Menghapus');
        redirect(base_url('gjl'), 'refresh');
    }
    public function egjl()
    {
        $data['gjl'] = $this->Admin_model->gjl();
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $id = $this->input->post('id');
        foreach ($data['gjl'] as $d) {
            if ($kode == $d['kode_gejala']) {
                $this->session->set_flashdata('gagal', "Gagal, Kode Gejala $kode Telah Digunakan");
                redirect(base_url('gjl'), 'refresh');
            }
        }
        if ($kode == false) {
            $this->Admin_model->edt_nama_gjl($nama, $id);
        } elseif ($nama == FALSE) {
            $this->Admin_model->edt_kode_gjl($kode, $id);
        } else {
            $this->Admin_model->egjl($kode, $nama, $id);
        }
        $this->session->set_flashdata('gagal', 'Berhasil Mengedit');
        redirect(base_url('gjl'), 'refresh');
    }
    public function diagnosa()
    {
        $data['title'] = 'Data Diagnosa';
        $data['diagnosa'] = $this->Admin_model->diagnosa();
        // $data['gejala'] = $this->Admin_model->ingjl('G01');
        // foreach ($data['diagnosa'] as $d) {
        // $a = $d['input_gejala'];
        // $data['ex'] = explode(",", $a);
        // var_dump($data['ex']);
        // die;
        // $data['gejala'] = $this->Admin_model->ingjl($b);
        // $data['gejala']=$this->Admin_model->getgjl();
        // }
        $this->load->view('admin/diagnosa', $data);
    }
    public function laporanal()
    {
        $data['title'] = 'Data Diagnosa';
        $data['diagnosa'] = $this->Admin_model->diagnosa();
        $data = $this->load->view('admin/laporanal', $data);
        // $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
        // $data = $this->load->view('admin/laporanal', $data, TRUE);
        // $mpdf->setTitle("Laporan - " . rand(10, 10000));
        // $mpdf->WriteHTML($data);
        // $mpdf->Output("Laporan - " . rand(10, 10000) . ".pdf", "I");
    }
    public function print($idd)
    {
        $where = $idd;
        $data['title'] = 'Data Diagnosa';
        $data['diagnosa'] = $this->Admin_model->diagnosa1($where);

        $this->load->view('admin/laporan_u', $data,);
        // $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
        // $data = $this->load->view('admin/laporan_u', $data, TRUE);
        // $mpdf->setTitle("Laporan id " . $idd . " - " . rand(10, 10000));
        // $mpdf->WriteHTML($data);
        // $mpdf->Output("Laporan id " . $idd . " - " . rand(10, 10000) . ".pdf", "I");
    }
}
