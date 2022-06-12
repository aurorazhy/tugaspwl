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
      $this->load->view('auth/register');
   }

   public function register()
   {
      $this->form_validation->set_rules('name', 'Name', 'required|trim', ['required' => 'Password tidak boleh kosong']);
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Password tidak boleh kosong',]);
      $this->form_validation->set_rules('pass1', 'Password', 'required|trim|min_length[8]|matches[pass2]', ['required' => 'Password tidak boleh kosong', 'matches' => 'Password tidak sesuai', 'min_length' => 'Password kurang dari 8 karakter']);
      $this->form_validation->set_rules('pass2', 'Password', 'required|trim|min_length[8]|matches[pass2]', ['required' => 'Password tidak boleh kosong', 'matches' => 'Password tidak sesuai', 'min_length' => 'Password kurang dari 8 karakter']);
      if ($this->form_validation->run() == false) {
         $this->load->view('auth/register');
      } else {
         $data = [
            'namauser' => htmlspecialchars($this->input->post('name', true)),
            'emailuser' => htmlspecialchars($this->input->post('email', true)),
            'image' => 'default.jgp',
            'passuser' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
         ];

         $this->db->insert('user', $data);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akun berhasil dibuat </div>');
         redirect('auth/login');
      }
   }

   public function kelogin()
   {
      $this->load->view('auth/login');
   }

   public function keregister()
   {
      $this->load->view('auth/register');
   }
}
