<div class="col-7 ml-5 bg-appcard rounded">
   <form action="<?= base_url() . 'user/belanjabarang' ?>">
      <table class="table table-hover text-center">
         <thead>
            <tr>
               <td> No </td>
               <td> Nama Barang </td>
               <td> Harga </td>
               <td> Berapa </td>
               <td></td>
            </tr>
         </thead>
         <tbody>
            <?php
            $no = 1;
            foreach ($barang as $b) {
            ?>
               <tr>
                  <td><input type="hidden" name="id[]" value="<?= $b->id_barang ?>"><?= $no++; ?></td>
                  <td><input type="hidden" name="nm[]" value="<?= $b->nama_barang ?>"><?= $b->nama_barang ?></td>
                  <td><input type="hidden" name="hb[]" value="<?= $b->harga_beli ?>"><?= $b->harga_beli ?></td>
                  <td><input type="number" name="brp[]"><?= form_error('brp') ?></td>
                  <td>
                     <button type="submit" class="btn btn-outline-danger btn-sm" >Tambah</button>
                  </td>
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