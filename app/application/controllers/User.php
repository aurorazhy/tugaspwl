<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
   public function index()
   {
      $data['title'] = 'Dashboard';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('dashboard/index', $data);
      $this->load->view('templates/footer');
   }

   public function stokbarang()
   {
      $data['title'] = 'Stok Barang';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['barang'] = $this->M_barang->get_data('barang')->result();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('dashboard/sub_barang/form_add');
      $this->load->view('dashboard/sub_barang/table', $data);
      $this->load->view('templates/footer');
   }

   public function barang_add_act()
   {
      $nama_barang = $this->input->post('nama_barang');
      $harga_beli = $this->input->post('harga_beli');
      $qty = $this->input->post('qty');
      $harga_jual = $this->input->post('harga_jual');
      $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
      $this->form_validation->set_rules('qty', 'Quantity', 'required');

      if ($this->form_validation->run() != false) {
         $data = array(
            'nama_barang' => $nama_barang,
            'harga_beli' => $harga_beli,
            'qty' => $qty,
            'harga_jual' => $harga_jual
         );
         $this->M_rental->insert_data($data, 'barang');
         redirect(base_url() . 'admin/stokbarang');
      } else {
         redirect(base_url() . 'admin/stokbarang');
      }
   }
}
