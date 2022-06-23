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

   public function autobelanja()
   {
      $id_tran = $this->input->post('id_transaksi');;
      $nm = $this->input->post('nama_barang');
      $hl = $this->input->post('harga_jual');
      $qty = $this->input->post('berapa');
      $ttl = $this->input->post('total');
      $id_kat = $this->input->post('id_kat');
      $kat = $this->input->post('kat');
      //yg id transaksi baru ya
      for ($i = 0; $i < count($nm); $i++) {
         $idtran = $id_tran[$i] + 1;
         $sql = "INSERT INTO `detail_transaksi`(`id_transaksi`,`nama_barang`, `harga_jual`, `qty`,`total`) VALUES ('$idtran','$nm[$i]','$hl[$i]','$qty[$i]','$ttl')";
         $this->db->query($sql);
      }

      $sql2 = "DELETE FROM temp";
      $this->db->query($sql2);
      $id_tranbaru = $id_tran + 1;
      $this->db->query("INSERT INTO `transaksi`(`id_transaksi`) VALUES `$id_tranbaru`");
      redirect(base_url() . 'user/belanja');
   }
}
