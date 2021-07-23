<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

    function auth_admin($username, $password)
    {
        return $this->db->query("SELECT * FROM tb_user WHERE nama='$username' && pass='$password' LIMIT 1");
    }
    function daftar($username, $alamat, $password)
    {
        return $this->db->query("INSERT INTO tb_user (nama,pass,alamat) VALUES ('$username','$password','$alamat')");
    }
}
