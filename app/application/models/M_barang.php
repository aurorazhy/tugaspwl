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

   function jointemp()
   {
      $this->db->select('*');

      $this->db->from('temp');
      $this->db->join('kategori', 'kategori.id_kategorii = temp.id_kategori');

      $query = $this->db->get();
      return $query;
   }

   function jointotal()
   {
      $this->db->select('*');

      $this->db->from('transaksi');
      $this->db->join('detail_transaksi', 'detail_transaksi.id_transaksii = transaksi.id_transaksi');

      $query = $this->db->get();
      return $query;
   }

   function jointransaksiwhere($id = '')
   {
      $this->db->select('*');

      $this->db->from('detail_transaksi');
      $this->db->join('barang', 'barang.id_barang = detail_transaksi.id_barangg');

      $this->db->join('transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksii');
      $this->db->where('id_transaksii', $id);

      $query = $this->db->get();
      return $query;
   }

   function cari($nm)
   {
      $this->db->select('id_barang');
      $this->db->from('barang');
      $this->db->like('nama_barang', $nm);
      $query = $this->db->get();
      return $query;
   }


   public function getkey($keyword)
   {
      $this->db->select('*');
      $this->db->join('kategori', 'kategori.id_kategorii = barang.id_kategori');
      $this->db->from('barang');
      $this->db->like('nama_barang', $keyword);
      return $this->db->get()->result();
   }

   //new but doesnt works
   function getUsers($postData)
   {
      $response = array();
      $this->db->select('*');

      if ($postData['search']) {
         // Select record
         $this->db->where("nama_barang like '%" . $postData['search'] . "%' ");
         $records = $this->db->get('barang')->result();

         foreach ($records as $row) {
            $response[] = array(
               "value" => $row->id_barang,
               "label" => $row->nama_barang
            );
         }
      }
      return $response;
   }
}
