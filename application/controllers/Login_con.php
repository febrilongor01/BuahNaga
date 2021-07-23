<?php
defined('BASEPATH') or exit('dilarang masuk');

class Login_con extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Email', 'required', array('required' => 'E-mail harus diisi'));
        $this->form_validation->set_rules('pass', 'password', 'required', array('required' => 'Password harus diisi'));

        if ($this->form_validation->run()) {
            $username = $this->input->post('nama');
            $password = $this->input->post('pass');
            $this->login_lib->login($username, $password);
        } else {
            $this->load->view('login');
        }
    }
    public function daftar()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => 'Nama harus diisi'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => 'Alamat harus diisi'));
        $this->form_validation->set_rules('pass', 'password', 'required', array('required' => 'Password harus diisi'));

        if ($this->form_validation->run()) {
            $username = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $password = $this->input->post('pass');
            $this->login_lib->daftar($username, $alamat, $password);
        } else {
            $this->load->view('login');
        }
    }
    function logout()
    {
        $this->login_lib->logout();
    }
}
