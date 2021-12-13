<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $data = [
      'title' => 'Home',
      'isi' => 'v_home'
    ];
    $this->load->view('layouts/frontend/v_wrapper', $data);
  }
}
