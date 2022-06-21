<div class="col-7 ml-5 bg-appcard rounded">
   <table class="table table-hover text-center">
      <thead>
         <tr>
            <td> No </td>
            <td> Nama Barang </td>
            <td> Harga </td>
            <td> Qty </td>
            <td> Total </td>
            <td></td>
         </tr>
      </thead>
      <tbody>
         <?php
         $no = 1;
         foreach ($barang as $b) {
         ?>
            <tr>
               <td><?= $no++; ?></td>
               <td><?= $b->nama_barang ?></td>
               <td><?= $b->harga_beli ?></td>
               <td><?= $b->qty ?></td>
               <td><?= $b->harga_jual ?></td>
               <td><?= $b->nama_kategori ?></td>
               <td>
                  <a class="btn btn-outline-danger btn-sm" href="<?= base_url() . 'user/stokbarang/' . $b->id_barang ?>"><span class="glyphicon glyphicon-plus"></span>Edit</a>
                  <a class="btn btn-outline-warning btn-sm" href="<?= base_url() . 'user/barang_del_act/' . $b->id_barang ?>"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
               </td>
            </tr>
         <?php } ?>
      </tbody>
   </table>
</div>
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->