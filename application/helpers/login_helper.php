<?php

function cek_login()
{
  $ci = get_instance();
  // $level = $ci->session->userdata('level');
  if (!$ci->session->userdata('username')) {
    redirect('auth');
  }
}

function login()
{
  $ci = get_instance();
  // $level = $ci->session->userdata('level');
  if ($ci->session->userdata('username')) {
    redirect('admin');
  }
}
