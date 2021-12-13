<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    login();
  }
  public function index()
  {

    $this->form_validation->set_rules('username', 'email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'password', 'required');

    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title' => 'Login',
        'isi' => 'admin/v_auth'
      ];
      $this->load->view('Admin/v_auth', $data);
    } else {
      $email = $this->input->post('username');
      $db = $this->db->get_where('tb_user', ['username' => $email])->row_array();
      $password = $this->input->post('password');

      if ($db) {
        if (password_verify($password, $db['password'])) {
          if ($db['status'] == 'Aktif') {
            $data = [
              'username' => $db['username'],
              'level' => $db['level']
            ];
            $this->session->set_userdata($data);
            if ($db['level'] == "Admin") {
              redirect('admin');
            } else {
              echo "ok";
            }
          } else {
            $this->session->set_flashdata('error', 'please activated your account!');
            redirect('auth');
          }
          // var_dump($db);
        } else {
          $this->session->set_flashdata('error', 'wrong password!');
          redirect('auth');
        }
      }
    }
  }
}
