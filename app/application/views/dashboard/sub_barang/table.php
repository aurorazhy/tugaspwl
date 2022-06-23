<div class="col-9 ml-3 bg-appcard rounded">

   <form action="<?= base_url() . 'auto/autobarang' ?>" method="post" class="col-md-12">
      <table class="table table-hover text-center">
         <thead>
            <tr>
               <td> No </td>
               <td> Nama Barang </td>
               <td> Harga Beli </td>
               <td> Qty </td>
               <td> harga Jual </td>
               <td> Nama Kategori </td>
               <td></td>
            </tr>
         </thead>
         <tbody>
            <?php
            $no = 1;
            foreach ($temp as $b) {
            ?>
               <tr>
                  <td>
                     <?= $no++; ?>
                     <input type="hidden" name="id[]" value="<?= $b->id_barang  ?>">
                  </td>
                  <td width="200px"><input type="hidden" name="nm[]" value="<?= $b->nama_barang ?>"><?= $b->nama_barang ?></td>
                  <td><input type="hidden" name="hb[]" value="<?= $b->harga_beli ?>"><?= $b->harga_beli ?></td>
                  <td><input type="hidden" name="qty[]" value="<?= $b->qty ?>"><?= $b->qty ?></td>
                  <td><input type="hidden" name="hl[]" value="<?= $b->harga_jual ?>"><?= $b->harga_jual ?></td>
                  <td>
                     <input type="hidden" name="id_kat[]" value="<?= $b->id_kategori ?>">
                     <input type="hidden" name="kat[]" value="<?= $b->nama_kategori ?>"><?= $b->nama_kategori ?>
                  </td>
                  <td width="160px">
                     <a class="btn btn-outline-danger btn-sm" href="<?= base_url() . 'user/stokbarang/' . $b->id_barang ?>"><span class="glyphicon glyphicon-plus"></span>Edit</a>
                     <a class="btn btn-outline-warning btn-sm" href="<?= base_url() . 'user/barang_del_act/' . $b->id_barang ?>"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
                  </td>
               </tr>
            <?php } ?>
         </tbody>
      </table>
      <input type="submit" value="Simpan" name="simpan" class="btn btn-appregis text-light float-right">
   </form>
   <a href="<?= base_url() . 'user/kategori/' ?>" class="btn btn-appregis text-light">Tambah Kategori</a>
</div>

</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->