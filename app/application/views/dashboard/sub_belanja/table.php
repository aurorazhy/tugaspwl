<div class="col-7 ml-5 p-0 bg-appcard rounded">
   <form action="<?= base_url() . 'user/belanjabarangtemp' ?>" method="post">
      <table class="table table-hover text-center pb-0">
         <thead>
            <tr>
               <td> No </td>
               <td> Nama Barang </td>
               <td> Harga </td>
               <td> Jumlah </td>
               <td> Total </td>
            </tr>
         </thead>
         <tbody>
            <?php
            $no = 1;
            ?>
            <tr class="bg-appregis">
               <td>
                  <input type="hidden" value="
                     <?php foreach ($transaksi as $tr) { ?>
                        <?= $tr->id_transaksi ?>
                     <?php } ?>" name="id_transaksi">
               </td>
               <td><input type="text" name="nm" class="form-control"></td>
               <td><input type="number" name="hj" class="form-control"></td>
               <td><input type="number" name="brp" class="form-control">
                  <?= form_error('brp'); ?></td>
               <td></td>
               <td>
                  <button type="submit" class="btn btn-outline-info btn-sm"><span class="glyphicon glyphicon-plus"></span>Tambah List</button>
               </td>
            </tr>
   </form>
   <!-- ============================================================================================================== -->
   <form action="<?= base_url() . 'auto/autobelanja' ?>" method="POST">
      <?php foreach ($temp as $t) { ?>
         <tr>
            <td><input type="hidden" name="id_transaksi[]" value="<?= $t->id_transaksi ?>"><?= $no++; ?></td>
            <td><input type="hidden" name="id_barang[]" value="<?= $t->id_barang ?>"><?= $t->nama_barang ?></td>
            <td><input type="hidden" name="harga_jual[]" value="<?= $t->harga_jual ?>"><?= $t->harga_jual ?></td>
            <td><input type="hidden" name="berapa[]" value="<?= $t->berapa ?>"><?= $t->berapa ?></td>
            <td><input type="hidden" name="total[]" value="<?= $t->total ?>"><?= $t->total ?></td>
            <td><a class="btn btn-outline-danger btn-sm" href="<?= base_url() . 'user/deletetemp/' . $t->id_barang ?>"><i class="fas fa-trash"></i></a></td>
         </tr>
      <?php } ?>
      <tr>
         <td></td>
         <td></td>
         <td></td>
         <td>Total Semua</td>
         <td><input type="hidden" value="<?php foreach ($total as $tot) {
                                             echo $tot->total_harga;
                                          } ?>" name="total_harga"><?= $tot->total_harga; ?></td>
         <td><button type="submit" class="btn btn-outline-info btn-sm" href="<?= base_url() . 'user/stokbarang/' ?>"><span class="glyphicon glyphicon-plus"></span>Bayar</button></td>
      </tr>
      </tbody>
      </table>

   </form>
</div>
</div>
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->