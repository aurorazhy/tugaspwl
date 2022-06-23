<div class="col-7 ml-5 bg-white rounded">
   <form action="<?= base_url() . 'user/belanjabarangtemp' ?>" method="post">
      <table class="table table-hover text-center">
         <thead>
            <tr>
               <td> No </td>
               <td> Nama Barang </td>
               <td> Harga </td>
               <td> Jumlah </td>
               <td> Total </td>
               <?php foreach ($temp as $t) { ?>
                  <td> ID - 0<?= $t->id_transaksi ?> </td>
               <?php } ?>
            </tr>
         </thead>
         <tbody>
            <?php
            $no = 1;
            ?>
            <tr class="bg-appside">
               <td></td>
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
   <form action="<?= base_url() . 'auto/belanjabarangtemp' ?>">
      <?php foreach ($temp as $t) { ?>
         <tr>
            <td><input type="hidden" name="id_transaksi" value="<?= $t->id_transaksi ?>"><?= $no++; ?></td>
            <td><?= $t->nama_barang ?></td>
            <td><?= $t->harga_jual ?></td>
            <td><?= $t->berapa ?></td>
            <td><?= $t->total ?></td>
            <td>

            </td>
         </tr>
      <?php } ?>
      <tr>
         <td></td>
         <td></td>
         <td></td>
         <td>Total Semua</td>
         <td><?= '4387u1048013'; ?></td>
         <td><button type="submit" class="btn btn-outline-info btn-sm" href="<?= base_url() . 'user/stokbarang/' ?>"><span class="glyphicon glyphicon-plus"></span>Bayar</button></td>
      </tr>
      </tbody>
      </table>

   </form>
</div>
</div>
</div>
</div>
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->