<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
  public function get_all()
  {
    return $this->db->get('tb_user')->result_array();
  }
  public function tambah()
  {
    $data = [
      'nama' => htmlspecialchars($this->input->post('nama', true)),
      'username' => htmlspecialchars($this->input->post('username', true)),
      'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
      'status' => 'Tidak Aktif',
      'level' => htmlspecialchars($this->input->post('level', true)),
      'foto' => 'default.jpg',
      'date_created' => time()
    ];

    $this->db->insert('tb_user', $data);
  }

  public function edit($id)
  {
    $data = [
      'nama' => htmlspecialchars($this->input->post('nama', true)),
      'username' => htmlspecialchars($this->input->post('username', true)),
      // 'password' => htmlspecialchars($this->input->post('password', true)),
      // 'status' => 'Tidak Aktif',
      'level' => htmlspecialchars($this->input->post('level', true)),
      // 'foto' => 'default.jpg',
      // 'date_created' => time()
    ];
    $this->db->update('tb_user', $data, ['id_user' => $id]);
    // }
  }
}

/* End of file M_user.php */
