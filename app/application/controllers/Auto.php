<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auto extends CI_Controller
{
   public function autobarang()
   {

      $id = $this->input->post('id');
      $qty = $this->input->post('qty');
      $data = array_combine($id, $qty);
      $key = array_keys($data);
      $value = array_values($data);

      for ($i = 0; $i <= count($key); $i++) {
         $sql = "UPDATE barang SET qty = qty + '$value[$i]' WHERE id_barang = '$key[$i]'";
         $this->db->query($sql);
      }
      redirect(base_url() . 'user/stokbarang');
   }
}
