<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auto extends CI_Controller
{
   public function autobarang()
   {
      $id = $this->input->post('id');
      $qty = $this->input->post('qty');
      $sql = "UPDATE barang SET qty = qty + '$qty' WHERE id_barang = '$id'";
      $this->db->query($sql);
      redirect(base_url() . 'user/stokbarang');
   }
}
