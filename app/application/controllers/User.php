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

   public function stokbarang($id = "")
   {
      $data['title'] = 'Stok Barang';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['barang'] = $this->M_barang->get_data('barang')->result();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      if ($id == '') {
      $this->load->view('dashboard/sub_barang/form_add');
      } else {
         $where = array(
            'id_barang' => $id
         );
         $data['barang'] = $this->M_barang->edit_data($where, 'barang')->result();
         $this->load->view('dashboard/sub_barang/form_edit', $data);
      }
      $this->load->view('dashboard/sub_barang/table', $data);
      $this->load->view('templates/footer');
   }

   public function barang_add_act()
   {

      $this->form_validation->set_rules('nm', 'Nama Barang', 'required');
      $this->form_validation->set_rules('qty', 'Quantity', 'required');

      if ($this->form_validation->run() != false) {
         $nama_barang = $this->input->post('nm');
         $harga_beli = $this->input->post('hb');
         $qty = $this->input->post('qty');
         $harga_jual = $this->input->post('hj');

         $data = array(
            'nama_barang' => $nama_barang,
            'harga_beli' => $harga_beli,
            'qty' => $qty,
            'harga_jual' => $harga_jual
         );
         $this->M_barang->insert_data($data, 'barang');
         redirect(base_url() . 'user/stokbarang');
      } else {
         redirect(base_url() . 'user/stokbarang');
      }
   }

   public function barang_edit_act()
   {
      $id = $this->input->post('id');
      $this->form_validation->set_rules('nm', 'Nama Barang', 'required');
      $this->form_validation->set_rules('qty', 'Quantity', 'required');

      if ($this->form_validation->run() != false) {
         $nama_barang = $this->input->post('nm');
         $harga_beli = $this->input->post('hb');
         $qty = $this->input->post('qty');
         $harga_jual = $this->input->post('hj');

         $where = array(
            'id_barang' => $id
         );

         $data = array(
            'nama_barang' => $nama_barang,
            'harga_beli' => $harga_beli,
            'qty' => $qty,
            'harga_jual' => $harga_jual
         );
         $this->M_barang->update_data($where, $data, 'barang');
         redirect(base_url() . 'user/stokbarang');
      } else {
         redirect(base_url() . 'user/stokbarang');
      }
   }
}
