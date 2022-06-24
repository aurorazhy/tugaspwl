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

   //dari sini

   public function stokbarangtemp($id = "")
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

   // yg asli yg bawah, ini nyoba 
   public function barangtable()
   {
      $data['title'] = 'List Barang';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['barang'] = $this->M_barang->joinbarang()->result();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('dashboard/sub_barang/tablelist', $data);
      $this->load->view('templates/footer');
   }

   public function stokbarang($id = "")
   {
      $data['title'] = 'Stok Barang';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['barang'] = $this->M_barang->joinbarang()->result();
      $data['kategori'] = $this->M_barang->get_data('kategori')->result();
      $data['temp'] = $this->M_barang->jointemp()->result();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      if ($id == '') {
         $this->load->view('dashboard/sub_barang/form_add');
      } else {
         $data['barang'] = $this->db->query("SELECT * FROM temp, kategori WHERE id_kategori = id_kategorii AND id_barang ='$id'")->result();
         $this->load->view('dashboard/sub_barang/form_edit', $data);
      }
      $this->load->view('dashboard/sub_barang/table', $data);
      $this->load->view('templates/footer');
   }
   //sampe sini nyobanya

   public function barang_add_act()
   {

      $this->form_validation->set_rules('nm', 'Nama Barang', 'required');
      $this->form_validation->set_rules('qty', 'Quantity', 'required');

      if ($this->form_validation->run() != false) {
         $nama_barang = $this->input->post('nm');
         $harga_beli = $this->input->post('hb');
         $qty = $this->input->post('qty');
         $harga_jual = $this->input->post('hj');
         //baru
         $kategori = $this->input->post('kat');

         $data = array(
            'nama_barang' => $nama_barang,
            'harga_beli' => $harga_beli,
            'qty' => $qty,
            'harga_jual' => $harga_jual,
            'id_kategori' => $kategori
         );
         $this->M_barang->insert_data($data, 'temp');
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
         //baru
         $kategori = $this->input->post('kat');

         $where = array(
            'id_barang' => $id
         );

         $data = array(
            'nama_barang' => $nama_barang,
            'harga_beli' => $harga_beli,
            'qty' => $qty,
            'harga_jual' => $harga_jual,
            'id_kategori' => $kategori
         );
         $this->M_barang->update_data($where, $data, 'temp');
         redirect(base_url() . 'user/stokbarang');
      } else {
         redirect(base_url() . 'user/stokbarang');
      }
   }

   public function barang_del_act($id)
   {
      $where = array(
         'id_barang' => $id
      );
      $this->M_barang->delete_data($where,  'barang');
      redirect(base_url() . 'user/stokbarang');
   }

   //kategori
   public function kategori($id = "")
   {
      $data['title'] = 'Kategori';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['kategori'] = $this->M_barang->get_data('kategori')->result();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      if ($id == '') {
         $this->load->view('dashboard/sub_kategori/form_add');
      } else {
         $where = array(
            'id_kategorii' => $id
         );
         $data['kategori'] = $this->M_barang->edit_data($where, 'kategori')->result();
         $this->load->view('dashboard/sub_kategori/form_edit', $data);
      }
      $this->load->view('dashboard/sub_kategori/table', $data);
      $this->load->view('templates/footer');
   }

   public function kategori_add_act()
   {
      $this->form_validation->set_rules('kat', 'Nama Kategori', 'required');
      if ($this->form_validation->run() != false) {
         $kate = $this->input->post('kat');

         $data = array(
            'nama_kategori' => $kate
         );

         $this->M_barang->insert_data($data, 'kategori');
         redirect(base_url() . 'user/kategori');
      } else {
         redirect(base_url() . 'user/kategori');
      }
   }

   public function kategori_edit_act()
   {
      $id = $this->input->post('id');
      $this->form_validation->set_rules('kat', 'Nama Kategori', 'required');

      if ($this->form_validation->run() != false) {
         $kate = $this->input->post('kat');

         $where = array(
            'id_kategorii' => $id
         );

         $data = array(
            'nama_kategori' => $kate
         );

         $this->M_barang->update_data($where, $data, 'kategori');
         redirect(base_url() . 'user/kategori');
      } else {
         redirect(base_url() . 'user/kategori');
      }
   }

   public function kategori_del_act($id)
   {
      $where = array(
         'id_kategorii' => $id
      );
      $this->M_barang->delete_data($where,  'kategori');
      redirect(base_url() . 'user/kategori');
   }

   //end kategori


   //belanja
   public function belanja()
   {
      $data['title'] = 'Belanja';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['kategori'] = $this->M_barang->get_data('kategori')->result();
      $data['temp'] = $this->M_barang->get_data('temp')->result();
      $data['transaksi'] = $this->db->query('SELECT MAX(id_transaksi)+1 AS id_transaksi FROM transaksi')->result();
      $data['total'] = $this->db->query('SELECT SUM(total) AS total_harga FROM temp')->result();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('dashboard/sub_belanja/kategori', $data);
      $this->load->view('dashboard/sub_belanja/table', $data);
      $this->load->view('templates/footer');
   }

   public function kategorilist($id)
   {
      $data['title'] = 'Stok Barang';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['barang'] = $this->db->query("SELECT * FROM barang, kategori WHERE id_kategorii = id_kategori AND id_kategorii ='$id'")->result();
      $data['temp'] = $this->M_barang->get_data('temp')->result();
      $data['transaksi'] = $this->db->query('SELECT MAX(id_transaksi)+1 AS id_transaksi FROM transaksi')->result();
      $data['total'] = $this->db->query('SELECT SUM(total) AS total_harga FROM temp')->result();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('dashboard/sub_belanja/detailkategori', $data);
      $this->load->view('dashboard/sub_belanja/table', $data);
      $this->load->view('templates/footer');
   }

   public function belanjabarangtemp()
   {
      $nm = $this->input->post('nm');
      $hj = $this->input->post('hj');
      $brp = $this->input->post('brp');
      $id_transaksi = $this->input->post('id_transaksi');
      $this->form_validation->set_rules('brp', 'Berapa', 'required');
      $id_barang = $this->M_barang->cari($nm)->result();
      $idbar = $id_barang[0]->id_barang;

      if ($this->form_validation->run() != false) {
         $total = $hj * $brp;
         $data = array(
            'id_barang' => $idbar,
            'nama_barang' => $nm,
            'harga_jual' => $hj,
            'berapa' => $brp,
            'total' => $total,
            'id_transaksi' => $id_transaksi
         );

         $this->M_barang->insert_data($data, 'temp');
         redirect(base_url() . 'user/belanja');
      } else {
         redirect(base_url() . 'user/kategori');
      }
   }
}
