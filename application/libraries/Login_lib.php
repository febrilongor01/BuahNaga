<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_lib
{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('Login_model');
    }

    public function login($username, $password)
    {
        $check = $this->CI->Login_model->auth_admin($username, $password);
        if ($check->num_rows() > 0) {
            $data = $check->row_array();
            if ($data['level'] == 1) {
                $this->CI->session->set_userdata('masuk', TRUE);
                $this->CI->session->set_userdata('name', $data['nama']);
                $this->CI->session->set_userdata('akses', $data['level']);
                redirect(base_url('dash_adm'), 'refresh');
            } else {
                $this->CI->session->set_userdata('masuk', TRUE);
                $this->CI->session->set_userdata('name', $data['nama']);
                $this->CI->session->set_userdata('id', $data['id']);
                $this->CI->session->set_userdata('akses', $data['level']);
                // $data1 = $this->CI->session->userdata('masuk');
                // var_dump($data1);
                // die;
                redirect(base_url('dash_usr'), 'refresh');
            }
        } else {
            $this->CI->session->set_flashdata('gagal', 'Pengguna Belum Terdaftar');
            redirect(base_url('dlog'), 'refresh');
        }
    }
    public function daftar($username, $alamat, $password)
    {
        $check = $this->CI->Login_model->daftar($username, $alamat, $password);
        if ($check == true) {
            $this->CI->session->set_flashdata('gagal', 'Berhasil Mendaftar');
            redirect(base_url('login'), 'refresh');
        } else {
            $this->CI->session->set_flashdata('gagal', 'Pengguna Belum Terdaftar');
            redirect(base_url('dlog'), 'refresh');
        }
    }
    public function cek_loginadm()
    {
        // $data1 = $this->CI->session->userdata('akses');
        // var_dump($data1);
        // die;
        if ($this->CI->session->userdata('akses') != "1") {
            $this->CI->session->set_flashdata('sukses', 'Anda Belum Login');
            redirect(base_url('dlog'), 'refresh');
        }
    }
    public function cek_loginusr()
    {
        // $data1 = $this->CI->session->userdata('akses');
        // var_dump($data1);
        // die;
        if ($this->CI->session->userdata('akses') != "0") {
            $this->CI->session->set_flashdata('sukses', 'Anda Belum Login');
            redirect(base_url('dlog'), 'refresh');
        }
    }
    public function logout()
    {
        $this->CI->session->unset_userdata('masuk');
        $this->CI->session->unset_userdata('akses');
        $this->CI->session->unset_userdata('name');
        $this->CI->session->unset_userdata('user');
        $this->CI->session->set_flashdata('gagal', 'Sukses Logout');
        redirect(base_url('dlog'), 'refresh');
    }
}

/* End of file User_login.php */
/* Location: ./application/libraries/User_login.php */
