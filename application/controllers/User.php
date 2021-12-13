<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    cek_login();
    $this->load->model('m_user');
  }

  public function index()
  {
    $data = [
      'user' => $this->m_user->get_all(),
      'title' => 'Admin',
      'isi' => 'admin/v_user'
    ];
    $data['nama'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $this->load->view('layouts/backend/v_wrapper', $data);
  }


  public function add()
  {
    $data = [
      'user' => $this->m_user->get_all(),
      'title' => 'Admin',
      'isi' => 'admin/v_user'
    ];

    $this->form_validation->set_rules('nama', 'nama', 'required');
    $this->form_validation->set_rules('username', 'username', 'required|is_unique[tb_user.username]|valid_email', [
      'is_unique' => 'Email harus menggunakan email valid',
    ]);
    $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[6]', [
      'min_length' => 'password setidaknya 6 karakter',
    ]);

    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error', 'gagal');
      $this->load->view('layouts/backend/v_wrapper', $data);
    } else {
      $this->m_user->tambah();
      $this->session->set_flashdata('success', 'Akun berhasil ditambah, silahkan aktifkan akun melalui email');
      redirect('user');
    }
  }

  public function edit($id)
  {
    $data = [
      'title' => 'Admin',
      'isi' => 'admin/v_user'
    ];

    $this->form_validation->set_rules('nama', 'nama', 'required');
    $this->form_validation->set_rules('username', 'username', 'required|valid_email');
    // $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[6]', [
    // 'min_length' => 'password setidaknya 6 karakter',
    // ]);

    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error', 'gagal');
      $this->load->view('layouts/backend/v_wrapper', $data);
    } else {
      $this->m_user->edit($id);
      $this->session->set_flashdata('success', 'User Berhasil di Update');
      redirect('user');
    }
  }

  public function delete($id)
  {
    $this->db->delete('tb_user', ['id_user' => $id]);
    $this->session->set_flashdata('success', 'User Berhasil Dihapus');
    redirect('user');
  }
}
