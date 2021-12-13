<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    cek_login();
  }
  public function index()
  {
    $data = [
      'title' => 'Admin',
      'isi' => 'admin/v_admin'
    ];
    $data['nama'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $this->load->view('layouts/backend/v_wrapper', $data);
  }
  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');
    $this->session->set_flashdata('success', 'berhasil logout');
    redirect('auth');
  }
}
