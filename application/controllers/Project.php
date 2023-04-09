<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        // $this->load->model('Pegawai_model');
        // $this->load->model('Magang_model');
    }

    public function index()
    {
        $data['title']     = 'User Dashboard';
        $data['view']      = 'Konten/project_index';
        $data['user']      = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['add']       = $this->db->get_where('user_add', ['username'   => $this->session->userdata('username')])->row_array();
        $data['ins']       = $this->db->get_where('instansi', ['id' == 1])->row_array();

        // $data['cuti']      = $this->db->get('cuti')->result_array();
        $data['date']      = date('Y-m-d');
        $this->load->view('Index/adminheader', $data);
        $this->load->view('index', $data);
    }
}