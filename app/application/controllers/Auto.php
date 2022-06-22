<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auto extends CI_Controller
{
   public function autobarang()
   {
      $nm = $this->input->post('nm');
      $hb = $this->input->post('hb');
      $qty = $this->input->post('qty');
      $hl = $this->input->post('hl');
      $id_kat = $this->input->post('id_kat');
      $kat = $this->input->post('kat');

      for ($i = 0; $i < count($nm); $i++) {
         $sql = "INSERT INTO `barang`(`nama_barang`, `harga_beli`, `qty`, `harga_jual`, `id_kategori`) VALUES ('$nm[$i]','$hb[$i]','$qty[$i]','$hl[$i]','$id_kat[$i]') ON DUPLICATE KEY UPDATE `nama_barang`= '$nm[$i]' ,`qty`= qty + '$qty[$i]'";
         $this->db->query($sql);
      }

      $sql2 = "DELETE FROM temp";
      $this->db->query($sql2);

      redirect(base_url() . 'user/barangtable');
   }
}
