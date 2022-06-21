<?php
class M_barang extends CI_Model
{

   function edit_data($where, $table)
   {
      return $this->db->get_where($table, $where);
   }

   function get_data($table)
   {
      return $this->db->get($table);
   }

   function insert_data($data, $table)
   {
      $this->db->insert($table, $data);
   }

   function update_data($where, $data, $table)
   {
      $this->db->where($where);
      $this->db->update($table, $data);
   }

   function delete_data($where, $table)
   {
      $this->db->where($where);
      $this->db->delete($table);
   }


   //baru
   function joinbarang()
   {
      $this->db->select('*');

      $this->db->from('barang');
      $this->db->join('kategori', 'kategori.id_kategorii = barang.id_kategori');

      $query = $this->db->get();
      return $query;
   }


}
