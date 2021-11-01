<?php

defined('BASEPATH') or exit('dilarang masuk');

class User_con extends CI_Controller
{
    public function index()
    {
        $this->load->view('index');
    }
    public function login()
    {
        $this->load->view('login');
    }
    public function daftar()
    {
        $this->load->view('daftar');
    }
    public function dash_usr()
    {
        $id = $this->session->userdata('id');
        $data['gjl'] = $this->Admin_model->gjl();
        $data['diagnosa'] = $this->User_model->diagnosa($id);
        // $data['gejala'] = $this->Admin_model->ingjl('G01');
        if ($data['diagnosa'] == true) {
            foreach ($data['diagnosa'] as $d) {
                $a = $d['input_gejala'];
                $data['ex'] = explode(",", $a);
            }
        } else {
            $data['ex'] = array('00');
            // var_dump($data['ex']);
            // die;
        }
        $this->load->view('user/dashboard', $data);
    }

    public function ingjl()
    {

        if ($_POST) {
            $petugas = $this->session->userdata('id');
            $pasien = $this->input->post('nama_psn');
            $tgl = date('Y-m-d H:i:s');
            $checkboxes = $this->input->post('check_list');
            $gjl = implode(",", $checkboxes);
            $BP1 = '';
            $nb = array();
            $nbmax = array();
            for ($j = 1; $j < 8; $j++) :
                $bobot = pembobot($j, $checkboxes);
                $nbobot = nilai_gejala($bobot);
                $nbobot2 = pow(nilai_gejala($bobot),2);
                $idala = "BP" . $j;
                $nb[$idala] .= $nbobot;
                $bobot2 = sqrt($nbobot2) * count($bobot);
                $nbobot = floatval($bobot) / sqrt(floatval($bobot2));
                $nbobot = round($nbobot,2);
                $sml[$idala] = count($bobot)-1;
                print_r($bobot2);
            endfor;

            if (empty($nbobot)){
                $alt = '';
                $alt .= '<script>';
                $alt .= 'alert("Terjadi masalah, silahkan kontek admin");';
                $alt .= 'window.location.href="' . base_url('diagnose') . '";';
                $alt .= '</script>';

                return print_r($alt);
            }

            // print_r($idala);
            if (!empty($nbobot)) {
                arsort($nb, SORT_NUMERIC);
                arsort($sml, SORT_NUMERIC);
                // echo implode(',',$nb);

                $terbesar = besar($nb);
                $dua = dua($nb);
                $np = namabp($terbesar['index']);
                $nd = namabp($dua['index']);
                // print_r($nbobot);
                // die;

                $data = array(
                    "id_user" => $petugas,
                    "nama_pasien" => $pasien,
                    "tgl_periksa" => date('Y-m-d H:i:s'),
                    "input_gejala" => $gjl,
                    "penyakit_utama" => $np[0]['nama_penyakit'],
                    // "penjelasan" => $np[0]['penjelasan'],
                    // "pencegahan" => $np[0]['pencegahan'],
                    "penyakit_lain" => json_encode($nb),
                    "similatiry" => json_encode($sml),
                    // "penyakit_lain" =>   $nd[0]['nama_penyakit'],
                );
                
                // $this->User_model->ingjl($data);
                // $iid = $this->db->insert_id();
                // print_r($this->db->last_query());
                // $alt = '';
                // $alt .= '<script>';
                // $alt .= 'window.location.href="' . base_url("User_con/hasil/" . $iid) . '";';
                // $alt .= '</script>';

                // return print_r($alt);
            }
        }
    }

    public function hasil($id)
    {
        // id = id pemeriksaan, tinggal mbok panggil terus etampilkan ndk bawah

        $data['penyakit'] = $this->User_model->getpenyakit($id);
        foreach ($data['penyakit'] as $pe) {
            $d = $pe['penyakit_lain'];
            $f = json_decode($d, true);
            // $g = explode(',', $f);
            $data['nilai']  = max($f);
            $data['index']  = array_search($data['nilai'], $f);
            // return $data;
        }
        $data['detail'] = $this->User_model->getdetail($data['index']);
        $data['gejala'] = $this->User_model->getpemeriksaan()->row()->input_gejala;
        $data['penyakit_lain'] = $this->User_model->getpemeriksaan()->row()->penyakit_lain;
        // print_r($data['gejala']);
        // die;
        $this->load->view('user/hasil', $data);
    }

    public function diagnosa()
    {
        if (!empty($this->session->userdata('name'))) {

            $data['gjl'] = $this->Admin_model->gjl();
            $data['diagnosa'] = $this->Admin_model->diagnosa();
            // $data['gejala'] = $this->Admin_model->ingjl('G01');
            foreach ($data['diagnosa'] as $d) {
                $a = $d['input_gejala'];
                $data['ex'] = explode(",", $a);
            }
            return $this->load->view('user/diagnosa', $data);
        }
        $alt = '';
        $alt .= '<script>';
        $alt .= 'alert("Silahkan login terlebih dahulu");';
        $alt .= 'window.location.href="' . base_url() . '";';
        $alt .= '</script>';

        return print_r($alt);
    }

    public function test()
    {
        $this->load->view('test');
    }
}
