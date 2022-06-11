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
         $data['title'] = 'Login';
         $this->load->view('auth/login');
      } else {
         $this->_login();
      }
   }

   private function _login()
   {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $user = $this->db->get_where('user', ['email' => $email])->row_array();
      //jika usernya ada
      if ($user) {
         //jika usernya aktif
         if ($user['is_active'] == 1) {
            //cek password
            if (password_verify($password, $user['password'])) {
               $data = [
                  'email' => $user['email'],
                  'role_id' => $user['role_id']
               ];
               $this->session->set_userdata($data);
               redirect('user');
            } else {
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong password! </div>');
               redirect('auth/');
            }
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> This email is not activated! </div>');
            redirect('auth/');
         }
      } else {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registered! </div>');
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
         $this->load->view('auth/register');
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
         redirect('auth/register');
      }
   }

   public function tologin()
   {
      $this->load->view('auth/login');
   }
}
