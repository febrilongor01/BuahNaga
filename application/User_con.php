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
        $this->load->helper('pakar');
        if ($_POST) {
            $petugas = $this->session->userdata('id');
            $pasien = $this->input->post('nama_psn');
            $tgl = date('Y-m-d H:i:s');
            $checkboxes = $this->input->post('check_list');
            $gjl = implode(",", $checkboxes);

            // $input = array(
            //     'id_user' => $petugas,
            //     'nama_pasien' => $nama,
            //     'input_gejala' => $gjl,
            //     'tgl_periksa' => $tgl,
            // );

            // print_r($input);
            // echo '<br>';
            $nb = array();
            $nbmax = array();
            for ($j = 1; $j < 8; $j++):
                $bobot = pembobot($j, $checkboxes);
                $nbobot = nilai_gejala($bobot);

                $idala="BP".$j;
                $nb[$idala] .= $nbobot;
                // echo " yang hasilnya adalah =".$nbobot.'<br>';
                // echo "BP".$j."= ".print_r($bobot). " yang hasilnya adalah =".$nbobot;
            endfor;

            if (!empty($nbobot)) {
                arsort($nb, SORT_NUMERIC);
                // echo implode(',',$nb);
                
                $terbesar = besar($nb);
                $np = namabp($terbesar['index']);

                $data = array(
                    "id_user"=> $petugas,
                    "nama_pasien"=>$pasien,
                    "tgl_periksa"=>date('Y-m-d H:i:s'),
                    "input_gejala"=>$gjl,
                    "penyakit_utama"=> $np[0]['nama_penyakit'],
                    "penyakit_lain"=>   json_encode($nb),
                );
                // print_r($np);
                $this->User_model->ingjl($data);
                echo '<pre>';
                print_r($data);

                // echo "Penyakit anda adalah ".$np[0]['nama_penyakit']. " dengan nilai bobot sebesar ".$terbesar['nilai'];
                // echo "<br>";
                // echo "Urutan nilainya berturut-turut ";

                // for($k=1; $k<8; $k++){
                //     $namanya = namabp($k);
                //     // print_r($nms);
                //     echo "<br>".$namanya[0]['nama_penyakit'].". ".$nb[$k];
                // }
            }

        }
    }

    // private function hitungcs($no, $val)
    // {
    //     $v = implode(",", $val);
    //     echo "<br>";
    //     print_r($val);

    //     for ($i = 1; $i < 18; $i++):
    //         $name[] = "G" . sprintf('%02d', $i);
    //     endfor;

    //     for ($j = 0; $j < sizeof($val); $j++):
    //         if (in_array($val[$j], $name)) {
    //             echo $val[$j];
    //         }
    //         // cari tahu untuk perumusan tiap $no
    //     endfor;

    // }

    // public function diagnosa()
    // {
    //     $data['diagnosa'] = $this->Admin_model->diagnosa();
    //     // $data['gejala'] = $this->Admin_model->ingjl('G01');
    //     foreach ($data['diagnosa'] as $d) {
    //         $a = $d['input_gejala'];
    //         $data['ex'] = explode(",", $a);
    //     }
    //     $this->load->view('admin/diagnosa', $data);
    // }

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
        $alt .= '<script language="javascript">';
        $alt .= 'alert("Silahkan login terlebih dahulu");';
        $alt .= 'window.location.href="' . base_url() . '";';
        $alt .= '</script>';

        return print_r($alt);
    }

}
