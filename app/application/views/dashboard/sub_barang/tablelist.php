<div class="col-10 ml-5 p-0 bg-appcard rounded">

   <div class="card-body text-white bg-appregis">
      <div class="row justify-content-between">
         <div class="col-6">
            <h5 class="card-title text-appgrey"> List Nama Barang </h5>
         </div>
         <div class="col-6 text-right">
            <a href="<?= base_url() . 'user/stokbarang'; ?>" class="btn btn-appcard">+</a>
         </div>
      </div>
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
            <td></td>
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
               <td><a href="<?= base_url() . 'user/delbarang/' . $b->id_barang ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a></td>
            </tr>
         <?php } ?>
      </tbody>
   </table>
   </form>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->