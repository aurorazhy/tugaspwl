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
               <tr>
                  <td colspan="6">
                     <div class="input-group col-11 ml-4 p-0">
                        <input type="text" id="autouser" class="form-control" placeholder="Cari...">
                     </div>
                  </td>
               </tr>
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
                  <td><input type="text" name="nm" class="form-control" id="autouser"></td>
                  <td><input type="number" name="hj" class="form-control"></td>
                  <td><input type="number" name="brp" class="form-control">
                     <?= form_error('brp'); ?></td>
                  <td></td>
                  <td>
                     <button type="submit" class="btn bg-appcard btn-sm m-1"><span class="glyphicon glyphicon-plus"></span>+</button>
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
               <td><a class="btn bg-danger btn-sm" href="<?= base_url() . 'user/deletetemp/' . $t->id_barang ?>"><i class="fas fa-backspace"></i></a></td>
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
            <td><button type="submit" class="btn bg-appregis btn-sm text-appgrey" href="<?= base_url() . 'user/stokbarang/' ?>"><span class="glyphicon glyphicon-plus"></span>Bayar</button></td>
         </tr>
         </tbody>
         </table>

      </form>
      <a href="<?= base_url() . 'user/test' ?>">test</a>
   </div>
   </div>

   <script>
      $(document).ready(function() {

         $("#autouser").autocomplete({
            source: function(request, response) {
               // Fetch data
               $.ajax({
                  url: "<?= base_url() ?>index.php/User/userList",
                  type: 'post',
                  dataType: "json",
                  data: {
                     search: request.term
                  },
                  success: function(data) {
                     response(data);
                  }
               });
            },
            select: function(event, ui) {
               // Set selection
               $('#autouser').val(ui.item.label); // display the selected text
               $('#userid').val(ui.item.value); // save selected id to input
               return false;
            },
            focus: function(event, ui) {
               $("#autouser").val(ui.item.label);
               $("#userid").val(ui.item.value);
               return false;
            },
         });

      });
   </script>
   </div>

   </div>
   <!-- /.container-fluid -->
   </div>
   <!-- End of Main Content -->