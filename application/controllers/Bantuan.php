<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bantuan extends CI_Controller
{
    function index()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $subjek = $this->input->post('subjek');
        $message = $this->input->post('message');

        $this->db->query("INSERT INTO tbl_bantuan (nama,email,subjek,message) VALUES ('" . $nama . "','" . $email . "','" . $subjek . "','" . $message . "') ");

        $this->load->helper('url');
    }
}