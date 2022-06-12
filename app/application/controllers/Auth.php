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
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if ($this->form_validation->run() == false) {
         $this->load->view('hf/header');
         $this->load->view('auth/login');
         $this->load->view('hf/footer');
      } else {
         //validasi berhasil
         $this->_login();
      }
   }

   private function _login()
   {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $user = $this->db->get_where('user', ['emailuser' => $email])->row_array();
      if ($user) {
         //usernya ada
         if (password_verify($password, $user['passuser'])) {
            $data = [
               'email' => $user['emailuser']
            ];
            $this->session->set_userdata($data);
            redirect('user');
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password salah </div>');
            redirect('auth/');
         }
      } else {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email tidak terdaftar </div>');
         redirect('auth/');
      }
   }

   public function register()
   {
      $this->form_validation->set_rules('name', 'Name', 'required|trim', ['required' => 'Password tidak boleh kosong']);
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Password tidak boleh kosong',]);
      $this->form_validation->set_rules('pass1', 'Password', 'required|trim|min_length[8]|matches[pass2]', ['required' => 'Password tidak boleh kosong', 'matches' => 'Password tidak sesuai', 'min_length' => 'Password kurang dari 8 karakter']);
      $this->form_validation->set_rules('pass2', 'Password', 'required|trim|min_length[8]|matches[pass2]', ['required' => 'Password tidak boleh kosong', 'matches' => 'Password tidak sesuai', 'min_length' => 'Password kurang dari 8 karakter']);
      if ($this->form_validation->run() == false) {
         $this->load->view('hf/header');
         $this->load->view('auth/register');
         $this->load->view('hf/footer');
      } else {
         $data = [
            'namauser' => htmlspecialchars($this->input->post('name', true)),
            'emailuser' => htmlspecialchars($this->input->post('email', true)),
            'image' => 'default.jgp',
            'passuser' => password_hash($this->input->post('pass1'), PASSWORD_DEFAULT)
         ];

         $this->db->insert('user', $data);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akun berhasil dibuat </div>');
         redirect('auth/');
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
