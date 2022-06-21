<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auto extends CI_Controller
{
   public function autobarang()
   {
      $id = $this->input->post('nm');
      $qty = $this->input->post('qty');
      $data = array_combine($id, $qty);
      $key = array_keys($data);
      $value = array_values($data);

      for ($i = 0; $i <= count($key); $i++) {
         $sql = "UPDATE barang SET qty = qty + '$value[$i]' WHERE nama_barang = '$key[$i]'";
         $this->db->query($sql);
      }

      $sql2 = "DELETE FROM temp";
      $this->db->query($sql2);

      redirect(base_url() . 'user/barangtable');
   }
}
