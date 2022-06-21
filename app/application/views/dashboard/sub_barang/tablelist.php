<div class="col-7 ml-5 bg-appcard rounded">

      <div class="card-body text-white bg-appregis">
         <p class="card-title text-right text-appgrey"> List Nama Barang </p>
         <a href="<?= base_url() . 'user/stokbarang'; ?>" class="">Tambah Barang</a>
      </div>
      <table class="table table-hover text-center">
         <thead>
            <tr>
               <td> No </td>
               <td> Nama Barang </td>
               <td> Harga Beli </td>
               <td> Qty </td>
               <td> harga Jual </td>
               <td> Nama Kategori </td>
            </tr>
         </thead>
         <tbody>
            <?php
            $no = 1;
            foreach ($barang as $b) {
            ?>
               <tr>
                  <td>
                     <?= $no++; ?>
                     <input type="hidden" name="id[]" value="<?= $b->id_barang  ?>">
                  </td>
                  <td width="200px"><?= $b->nama_barang ?></td>
                  <td><?= $b->harga_beli ?></td>
                  <td><?= $b->qty ?></td>
                  <td><?= $b->harga_jual ?></td>
                  <td> <?= $b->nama_kategori ?></td>
               </tr>
            <?php } ?>
         </tbody>
      </table>
   </form>
</div>

</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->