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
            $nb = array();
            $nbmax = array();
            for ($j = 1; $j < 8; $j++) :
                $bobot = pembobot($j, $checkboxes);
                unset($bobot[0]);
                $bobot = empty($bobot)?$bobot=['1'=>'0']:$bobot;
                $nbobot = array_sum($bobot);

                $gjbp2      = show_gejala($j);
                $gjinput2   = $checkboxes;
                $gj2 = array_unique( array_merge($gjbp2, $gjinput2));
                usort($gj2, function ($gjbp2, $gjinput2) {
                    return $gjbp2 <=> $gjinput2;
                });
                $bobot2 = pembobot_similarity($j, $gj2);
                unset($bobot2[0]);
                $bobot2 = empty($bobot2)?$bobot2=['1'=>'0']:$bobot2;
                $bobot22 = array();
                foreach ($bobot2 as $k) {
                    $bobot22[] .= $k * $k;
                }
                $bobot222 = array_sum($bobot22);
                $similarity = count(array_intersect($gjbp2,$gjinput2));

                $nbobot2 = floatval($bobot222) * floatval($similarity);

                $final = round($nbobot / sqrt($nbobot2),2);
                // echo "<pre> Perhitungan BP".$j."<br>";
                // print_r($bobot222 . "*". $similarity."=".$nbobot2);
                // echo "<br>" ;
                // print_r($nbobot."/&radic;".$nbobot2."=".$final);
                


                $idala = "BP" . $j;
                $nb[$idala] ='';
                $nb[$idala] .= is_nan($final)?"0":$final;
                $bbt[$idala] = $nb[$idala];
                
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
                // arsort($sml, SORT_NUMERIC);
                // echo implode(',',$nb);

                $terbesar = besar($nb);
                $dua = dua($nb);
                $np = namabp($terbesar['index']);
                $nd = namabp($dua['index']);
                echo "<pre>";   
                print_r($bbt);
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
                    // "bobot_bp" => json_encode($bbt),
                    // "penyakit_lain" =>   $nd[0]['nama_penyakit'],
                );
                
                $this->User_model->ingjl($data);
                $iid = $this->db->insert_id();
                print_r($this->db->last_query());
                $alt = '';
                $alt .= '<script>';
                $alt .= 'window.location.href="' . base_url("User_con/hasil/" . $iid) . '";';
                $alt .= '</script>';

                return print_r($alt);
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
        $data['input_gejala'] = $this->User_model->getpemeriksaan()->row()->input_gejala;
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
