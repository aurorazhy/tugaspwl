<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function index()
   {
      $this->load->view('auth/login');
   }

   public function register()
   {
      $this->form_validation->set_rules('name', 'Name', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
      $this->form_validation->set_rules('pass1', 'Password', 'required|trim|matches[pass2]|min_length[8]', ['matches' => 'Password tidak sesuai', 'min_length' => 'Password kurang dari 8 karakter']);
      $this->form_validation->set_rules('pass2', 'Password', 'required|trim|matches[pass2]|min_length[8]', ['matches' => 'Password tidak sesuai', 'min_length' => 'Password kurang dari 8 karakter']);
      if ($this->form_validation->run() == false) {
         $this->load->view('login/');
      } else {
         $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'image' => 'default.jgp',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1,
            'date_created' => time()
         ];

         $this->db->insert('user', $data);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akun berhasil dibuat </div>');
         redirect('login/');
      }
   }
}
